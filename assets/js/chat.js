var _client_ip, msg_ids = [];
$.get(home_url+'chat/get_ip', function(IP) {
	_client_ip = $.trim(IP);
});
jQuery(document).ready(function($) {
	$("#chat-submit").click(function(e) {
		e.preventDefault();
		var msg = $("#chat-input").val();
		if (msg.trim() == '') {
			return false;
		}

		$.post(home_url+"chat", {content: msg}, function(new_msg) {
			msg_ids.push($.trim(new_msg))
			generate_message(msg, 'self', new_msg);
		});
	});

	$("#chat-input").focus(function(event) {
		change_msg_state();
	});
	function generate_message(msg, type, index) {
		
		var str = "";
		str += "<div id='cm-msg-" + index + "' class=\"chat-msg " + type + "\">";
		str += "          <span class=\"msg-avatar\">";
		if (type=='self') {
			str += "            <img src=\""+home_url+"assets/img/guest.png\">";
		}else{
			str += "            <img src=\""+home_url+"assets/img/supporter.png\">";
		}
		str += "          <\/span>";
		str += "          <div class=\"cm-msg-text\">";
		str += msg;
		str += "          <\/div>";
		str += "        <\/div>";
		$(".chat-logs").append(str);
		$("#cm-msg-" + index).hide().fadeIn(300);
		if (type == 'self') {
			$("#chat-input").val('');
		}
		$(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight }, 1000);
	}

	$.get(home_url+'chat/get_all_messages', function(_data) {
		_data = JSON.parse(_data);
		_data.forEach(function(msg){
			var msg_type = (msg.IP == _client_ip) ? 'self' : 'user';
			generate_message(msg.content, msg_type, msg.id);
			msg_ids.push(msg.id);
		});
	});

	// Generate data for all span elements
    function get_new_message() {
        $.get(home_url+'chat/get_new_messages', function(_data) {
			_data = JSON.parse(_data);
			var number_of_new_msg = 0;
			_data.forEach(function(msg, index){
				if (msg_ids.indexOf(msg.id) < 0) {
					
					generate_message(msg.content, 'user', msg.id);
					msg_ids.push(msg.id);
					// Make a sound if has new message
					if (index == _data.length-1) {
						beep();
					}
				}

				// Set number of new messages
				$("#chat-circle").find('sup').text(++number_of_new_msg);
			});
		});
    }

    // Run interval function
    setInterval(get_new_message, 1500);

	$("#chat-circle").click(function() {
		$(".chat-box").css('z-index', '+10000');
		$("#chat-circle").toggle('scale');
		$(".chat-box").toggle('scale');
		change_msg_state();
	});

	$(".chat-box-toggle").click(function() {
		$(".chat-box").css('z-index', '0');
		$("#chat-circle").toggle('scale');
		$(".chat-box").toggle('400');
	});

	function change_msg_state(){
		$.post(home_url+'chat/update_msg', {flag: true}, function() {
			$("#chat-circle").find('sup').text('');
		});
	}

	function beep() {
	    var snd = new Audio(home_url+"assets/data/ding-tone.mp3");  
	    snd.play();
	}

});