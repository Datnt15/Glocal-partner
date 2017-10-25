<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<base href="http://www.glocalpartner.vn/">
	<title>404 Page Not Found</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<style type="text/css">
		body{

			background: rgba(93,220,240,1);
			background: -moz-linear-gradient(left, rgba(93,220,240,1) 0%, rgba(53,240,206,1) 0%, rgba(96,216,240,1) 35%, rgba(12,245,229,1) 77%, rgba(39,230,211,1) 100%);
			background: -webkit-gradient(left top, right top, color-stop(0%, rgba(93,220,240,1)), color-stop(0%, rgba(53,240,206,1)), color-stop(35%, rgba(96,216,240,1)), color-stop(77%, rgba(12,245,229,1)), color-stop(100%, rgba(39,230,211,1)));
			background: -webkit-linear-gradient(left, rgba(93,220,240,1) 0%, rgba(53,240,206,1) 0%, rgba(96,216,240,1) 35%, rgba(12,245,229,1) 77%, rgba(39,230,211,1) 100%);
			background: -o-linear-gradient(left, rgba(93,220,240,1) 0%, rgba(53,240,206,1) 0%, rgba(96,216,240,1) 35%, rgba(12,245,229,1) 77%, rgba(39,230,211,1) 100%);
			background: -ms-linear-gradient(left, rgba(93,220,240,1) 0%, rgba(53,240,206,1) 0%, rgba(96,216,240,1) 35%, rgba(12,245,229,1) 77%, rgba(39,230,211,1) 100%);
			background: linear-gradient(to right, rgba(93,220,240,1) 0%, rgba(53,240,206,1) 0%, rgba(96,216,240,1) 35%, rgba(12,245,229,1) 77%, rgba(39,230,211,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5ddcf0', endColorstr='#27e6d3', GradientType=1 );
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
			overflow: hidden;
			color: #fff;
			font-family: 'Roboto';
		}
		#particles-js{
			position: relative;
		}
		#error{
			position: absolute;
			margin: 0 auto;
			float: none;
			display: block;
			left: 30%;
			top: 30%;
		}
		.btn{
			color: #fff;
			text-decoration: none;
			padding: 5px 10px;
			border: 1px solid #fff;
			border-radius: 50px;
		}
		@media only screen and (max-width: 400px) {
		    #error{
				left: 10%;
				top: 30%;
			}
			#error h1 {
			    font-size: 30px;
			}

		}
		@media  screen and (min-width: 401px) and (max-width: 620px) {
		    #error{
				left: 20%;
				top: 30%;
			}

		}
	</style>
</head>
<body>
	<div id="particles-js">
		<div id="error">
			<h1><?php echo $heading; ?></h1>
			<p><?php echo $message; ?></p>
			<a href="" class="btn">Come back home</a>
		</div>
	</div>
	<script src="assets/js/particles.min.js"></script>
	<script type="text/javascript">
		particlesJS('particles-js',
  			{
			    "particles": {
			      "number": {
			        "value": 130,
			        "density": {
			          "enable": true,
			          "value_area": 800
			        }
			      },
			      "color": {
			        "value": "#ffffff"
			      },
			      "shape": {
			        "type": "circle",
			        "stroke": {
			          "width": 0,
			          "color": "#ffffff"
			        },
			        "polygon": {
			          "nb_sides": 5
			        }
			      },
			      "opacity": {
			        "value": 0.5,
			        "random": false,
			        "anim": {
			          "enable": false,
			          "speed": 1,
			          "opacity_min": 0.1,
			          "sync": false
			        }
			      },
			      "size": {
			        "value": 5,
			        "random": true,
			        "anim": {
			          "enable": false,
			          "speed": 40,
			          "size_min": 0.1,
			          "sync": false
			        }
			      },
			      "line_linked": {
			        "enable": true,
			        "distance": 150,
			        "color": "#ffffff",
			        "opacity": 0.8,
			        "width": 1
			      },
			      "move": {
			        "enable": true,
			        "speed": 6,
			        "direction": "none",
			        "random": false,
			        "straight": false,
			        "out_mode": "out",
			        "attract": {
			          "enable": false,
			          "rotateX": 600,
			          "rotateY": 1200
			        }
			      }
			    },
			    "interactivity": {
			      "detect_on": "canvas",
			      "events": {
			        "onhover": {
			          "enable": true,
			          "mode": "repulse"
			        },
			        "onclick": {
			          "enable": true,
			          "mode": "push"
			        },
			        "resize": true
			      },
			      "modes": {
			        "grab": {
			          "distance": 400,
			          "line_linked": {
			            "opacity": 1
			          }
			        },
			        "bubble": {
			          "distance": 400,
			          "size": 40,
			          "duration": 2,
			          "opacity": 8,
			          "speed": 3
			        },
			        "repulse": {
			          "distance": 100
			        },
			        "push": {
			          "particles_nb": 4
			        },
			        "remove": {
			          "particles_nb": 2
			        }
			      }
			    },
			    "retina_detect": true,
			    "config_demo": {
			      	"hide_card": false,
			      	"background_color": "#ffffff",
			      	"background_image": "",
			      	"background_position": "50% 50%",
			      	"background_repeat": "no-repeat",
			      	"background_size": "cover"
			    }
  			}
		);
	</script>
</body>
</html>