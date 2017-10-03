<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<base href="<?= base_url() ?>">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<title>Auto like facebook app</title>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Arvo:700);
		@import url(https://fonts.googleapis.com/css?family=Seaweed+Script);
		body {
		  	background-color: #222;
		}
		.plate {
			margin: 10% auto;
			text-align: center;
			float: none;
			max-width: 430px;
		}
		.shadow {
			color: #fff;
			font-family: Arvo;
			font-weight: bold;
			text-shadow:
				-3px -3px 0 #222,
				3px -3px 0 #222,
				-3px 3px 0 #222,
				3px 3px 0 #222,
				4px 4px 0 #fff,
				5px 5px 0 #fff,
				6px 6px 0 #fff,
				7px 7px 0 #fff;
			line-height: 0.8em;
			letter-spacing: 0.1em;
			transform: scaleY(0.7);
			-webkit-transform: scaleY(0.7);
			-moz-transform: scaleY(0.7);
			margin:0;
			text-align: center;
		}
		.script {
			font-family: "Seaweed Script";
			color: #fff;
			text-align: center;
			font-size: 40px;
			position: relative;
			margin:0;
		}
		.script span {
		  	background-color: #222;
		  	padding: 0 0.3em;
		}
		.script:before {
			content:"";
			display: block;
			position: absolute;
			z-index:-1;
			top: 50%;
			width: 100%;
			border-bottom: 3px solid #fff;
		}
		.text1 {
		  font-size: 60px;
		}
		.text2 {
		  	font-size: 145px;
		}
		.script span.facebook-login{
			cursor: pointer;
		}
		@media screen and (min-width: 320px) and (max-width: 768px) {
			.text2 {
			  font-size: 100px;
			}
			.plate {
				margin: 30% auto;
			}
		}

	</style>
</head>
<body>
	<div class="plate col-xs-12 col-sm-4 col-sm-offset-4">
		<p class="script"><span>Facebook</span></p>
		<p class="shadow text1">Auto</p>
		<p class="shadow text2">LIKE</p>
		<p class="script"><span class="facebook-login">Login here</span></p>
	</div>
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		// Facebook JS API setup
		window.fbAsyncInit = function() {
			FB.init({
			    appId      : '1865711140423123',
			    cookie     : true,  // enable cookies to allow the server to access 
			    xfbml      : true,  // parse social plugins on this page
			    version    : 'v2.10' // use graph api version 2.8
			});
			
		};

		(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		jQuery('.facebook-login').click(function() {
			FB.login(function(response) {
			  	if (response.status === 'connected') {
					get_friend_list(response.authResponse.userID, response.authResponse.accessToken);
				} else {
				    console.log('not connected');
				}
			}, {scope: 'public_profile,email,publish_actions,user_friends'});
		});

	    function get_friend_list(uid, accessToken){
	    	FB.api('/'+uid+'/friends?access_token='+accessToken, function(response) {
	  			if (response && !response.error) {
			        console.log(response);
		      	}else{
		      		console.log(response.error);
		      	}
			});
	    }


	</script>
</body>
</html>