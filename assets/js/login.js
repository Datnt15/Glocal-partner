// Facebook JS API setup
window.fbAsyncInit = function() {
	FB.init({
	    appId      : '1865711140423123',
	    cookie     : true,  // enable cookies to allow the server to access 
	                        // the session
	    xfbml      : true,  // parse social plugins on this page
	    version    : 'v2.8' // use graph api version 2.8
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
		FB.api('/me?fields=name,email', function(response) {
  			FB.api(
			    "/"+response.id+"/picture?height=150",
			    function (data) {
			      	if (data && !data.error) {
			        	/* handle the result */
		      			var user_data = {
		      				email 		: response.email,
		      				username 	: response.name,
		      				user_id 	: response.id,
		      				avatar 		: data.data.url
		      			};
		      			$.ajax({
		      				url: $('base').attr('href')+'/login/login_with_social',
		      				type: 'POST',
		      				dataType: 'json',
		      				data: user_data,
		      			})
		      			.done(function(data) {
		      				if (data.type == 'login_success') {
		      					window.location = $('base').attr('href')+'/profile/';
		      				}
		      			});
			      	}
			    }
			);
		});
	} else {
	    // The person is not logged into this app or we are unable to tell. 
	}
}, {scope: 'public_profile,email'});
});


jQuery(".google-login").click(function() {
// Google JS API setup
gapi.load('auth2', function() {
	auth2 = gapi.auth2.init({
	    client_id: '171509241412-bbo0uqk4phudbvigsh5bsnkrindl6cpf.apps.googleusercontent.com',
	    fetch_basic_profile: true,
	    scope: 'profile email openid'
	});

	// Sign the user in, and then retrieve their ID.
	
	auth2.signIn().then(function() {
	    if (auth2.isSignedIn.get()) {
			var profile = auth2.currentUser.get().getBasicProfile();
			var user_data = {
  				email 		: profile.getEmail(),
  				username 	: profile.getFamilyName() + " " + profile.getGivenName(),
  				password 	: profile.getId(),
  				avatar 		: profile.getImageUrl()
  			};
  			$.ajax({
  				url: $('base').attr('href')+'login/login_with_social',
  				type: 'POST',
  				dataType: 'json',
  				data: user_data,
  			})
  			.done(function(data) {
  				window.location = $('base').attr('href')+'profile';
  			});
		}
	});
});
});