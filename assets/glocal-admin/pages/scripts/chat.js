var msg_ids = [],
	home_url = document.getElementsByTagName('base')[0].getAttribute('href')
	client_ip = '';
jQuery(document).ready(function($) {
	$("#chat-submit").click(function(e) {
		e.preventDefault();
		var msg = $("#chat-input").val();
		if (msg.trim() == '') {
			return false;
		}

		if (client_ip.trim() == '') {
			toastr.options = {
		        "closeButton": true,
		        "debug": false,
		        "positionClass": "toast-top-right",
		        "onclick": null,
		        "showDuration": "1000",
		        "hideDuration": "1000",
		        "timeOut": "5000",
		        "extendedTimeOut": "1000",
		        "showEasing": "swing",
		        "hideEasing": "linear",
		        "showMethod": "fadeIn",
		        "hideMethod": "fadeOut"
		    };
    		toastr['warning']('You have not chosen a IP to talk to. Please select one.', 'Oops');
			return false;
		}

		$.post(home_url+"chat/anwser", {content: msg, IP: client_ip}, function(new_msg) {
			msg_ids.push($.trim(new_msg));
		});
		generate_message(msg, 'self');
	});

	
	function generate_message(msg, type, index) {
		
		var str = "";
		str += "<div id='cm-msg-" + index + "' class=\"chat-msg " + type + "\">";
		str += "          <span class=\"msg-avatar\">";
		if (type=='self') {
			str += "            <img src=\""+home_url+"assets/img/supporter.png\">";
		}else{
			str += "            <img src=\""+home_url+"assets/img/guest.png\">";
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

	$(".inbox-contacts>li").on('click', function() {
		var _this = $(this); 
		client_ip = _this.find('span.contact-name').text().trim();
		if(_this.find('span.badge')) _this.find('span.badge').remove();
		change_msg_state(_this.find('span.contact-name').text().trim());
		$.get(home_url+'chat/get_all_messages_of_client/'+client_ip, function(_data) {
			$(".chat-logs").html('');
			_data = JSON.parse(_data);
			_data.forEach(function(msg){
				var msg_type = (msg.IP == client_ip) ? 'user' : 'self';
				generate_message(msg.content, msg_type, msg.id);
				msg_ids.push(msg.id);
			});
		});
	});

	// Generate data for all span elements
    function get_new_message() {
    	if (client_ip.trim() == '') {
			return false;
		}
        $.get(home_url+'chat/get_new_messages_to_server_from_IP/'+client_ip, function(_data) {
			_data = JSON.parse(_data);
			_data.forEach(function(msg){
				if (msg_ids.indexOf(msg.id) < 0) {
					generate_message(msg.content, 'user', msg.id);
					msg_ids.push(msg.id);
				}
			});
		});
    }

    // Run interval function
    setInterval(get_new_message, 1500);

	function change_msg_state(_client_IP){
		$.post(home_url+'chat/update_msg_of_client', {ip: _client_IP}, function() {});
	}
});