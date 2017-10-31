var cur_url = window.location.href,
    home_url = document.getElementsByTagName('base')[0].getAttribute('href'),
    map = null,
    infowindow = null,
    bounds = null,
    markers = [], 
    circles = [], 
    marker_icon = home_url+'assets/img/map_marker.png';

$(document).ready(function() {
    // Create a clone of the menu, right next to original.
    $('.header').addClass('original').clone().insertAfter('.header').addClass('header-fixed').removeClass('original').hide();
    $("section.header.header-fixed .brand").removeClass('hexagon-lg');
    $(".header.header-fixed .col-md-8 img").attr('src', 'assets/img/logo-black.png');
    $("section.header.header-fixed .brand").addClass('hexagon-sm');
    scrollIntervalID = setInterval(stickIt, 10);
    function stickIt() {
        var orgElementPos = $('.original').offset();
        orgElementTop = orgElementPos.top;   
        if ($(window).scrollTop() >= 350) {
            $('.header-fixed').show('400');
            $('.original').css('visibility','hidden');
        } else {
            $('.header-fixed').hide('400');
            $('.original').css('visibility','visible');
        }
  
    }

    $(".tab-nav").click(function(e){
        e.preventDefault();
        $(".tab-nav.active").removeClass('active');
        $(this).addClass('active');
        $(".tab-content.tab-active").removeClass('tab-active');
        $(".tab-content").addClass('hide');
        $(""+$(this).attr('href')).addClass('tab-active');
        set_back_dimentions();
        return false;
    });

    $("#request-form").on('click', 'button[type=reset]', function(e){
        e.preventDefault();
        $("#request-form").toggle('scale');
        $("#msform").toggle('scale');
    });

    // Turning to other result page with ajax
    $('div.pagiantion').on('click', 'ul li a', function() {
        var _this = $(this);
        $.post(
            home_url + 'search/search-room-with-filter', 
            {
                page   : _this.attr('data-page'),
                accessToken : $("input[name=accessToken]").val()
            }, 
            function(data) {
                handle_search_results(data);
            }
        );
    });

    function handle_search_results(_data){
        try {
            _data = JSON.parse(_data);
            if (_data.type == 'success') {
                $("#grid-view .content").html(_data.data.rooms_view_grid);
                $("#list-view .content").html(_data.data.rooms_view_list);
                $("div.pagiantion").html(_data.data.pagination);
                $('html,body').animate({
                    scrollTop: $('.action-bar').offset().top - 150
                }, 500);
            }
        } catch(e) {
            console.log(_data);
        }
        
    }

    // Define map view
    if ($("#map-view").length) {
        bounds = new google.maps.LatLngBounds();
        initMap();
    }


    function initMap() {
        var glocalHome = {lat: 21.067027, lng: 105.819917};
        map = new google.maps.Map(document.getElementById('map-view'), {
            zoom: 15,
            center: glocalHome
        });
        infowindow = new google.maps.InfoWindow({maxWidth: 600});
        $.get(home_url+'search/get-all-room-positions', function(data) {
            try {
                data = JSON.parse(data);
                if (data.type == 'success') {
                    deleteMarkers();
                    for (var i = 0; i < data.positions.length; i++) {
                        var marker = new google.maps.Marker({
                            position: {lat: parseFloat(data.positions[i].address.split(',')[0]), lng: parseFloat(data.positions[i].address.split(',')[1]) },
                            animation: google.maps.Animation.DROP,
                            icon: marker_icon,
                            map: map,
                            title: data.positions[i].name
                        });
                        bounds.extend(marker.position);
                        // var circle = new google.maps.Circle({
                        //     map: map,
                        //     radius: 200,    // 100 metres
                        //     fillColor: '#00bcd4',
                        //     strokeColor: '#00bcd5',
                        //     strokeWeight: 1
                        // });
                        // circle.bindTo('center', marker, 'position');
                        markers.push(marker);
                        // circles.push(circle);
                        marker.addListener('click', function(e) {
                            get_room_info_windows(this.title, map, this);
                        });
                    }
                    map.fitBounds(bounds);
                }
            } catch(e) {
                return [];
            }
        });
    }

    function get_room_info_windows(_room_no, _map, _marker){
        $.post(home_url+'search/get_room_info_window', {room_no: _room_no, accessToken: $("input[name=accessToken]").val()}, function(data) {
            data = JSON.parse(data);
            if (data.type == 'success') {
                infowindow.setContent(data.template);
                infowindow.open(_map, _marker);
            }
        });
    }



    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    // Removes the markers from the map, but keeps them in the array.
    function clearMarkers() {
        setMapOnAll(null);
    }

    // Deletes all markers in the array by removing references to them.
    function deleteMarkers() {
        clearMarkers();
        markers = [];
        removeAllcircles();
    }

    function removeAllcircles() {
        for(var i in circles) {
            circles[i].setMap(null);
        }
        circles = []; 
    }
    if (map) {
        
        google.maps.event.addListener(map, 'click', function() {
            infowindow.close();
        });
        google.maps.event.addListener(infowindow, 'domready', function() {

            // Reference to the DIV that wraps the bottom of infowindow
            var iwOuter = $('.gm-style-iw');
            var iwBackground = iwOuter.prev();
            iwBackground.css('display', 'none');
            // Moves the infowindow 115px to the right.
            iwOuter.parent().parent().css({left: '100px'});
            // Reference to the div that groups the close button elements.
            var iwCloseBtn = iwOuter.next();

            // Apply the desired effect to the close button
            iwCloseBtn.css({'display' : 'none'});

            // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
            if($('.iw-content').height() < 140){
              $('.iw-bottom-gradient').css({display: 'none'});
            }
            
        });
    }    

    function set_back_dimentions(){

        $('.card-rotate .card-image > .back').each(function() {
            var card_image_height = $(this).parent().height();
            var card_image_width = $(this).parent().width();
            $(this).css({
                'height': card_image_height + 'px',
                'width': card_image_width + 'px'
            });
            if ($(this).hasClass('back-background')) {
                var img_src = $(this).siblings('.front').find('img').attr('src');
                $(this).css('background-image', 'url("' + img_src + '")')
            }
        });

    }


    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'transform': 'scale('+scale+')'});
                next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function(){
        return false;
    });

    var $slider = $(".slider"),
      $slideBGs = $(".slide__bg"),
      diff = 0,
      curSlide = 0,
      numOfSlides = $(".slider>.slide").length-1,
      animating = false,
      animTime = 500,
      autoSlideTimeout,
      autoSlideDelay = 6000,
      $pagination = $(".slider-pagi");
  
    function createBullets() {
        for (var i = 0; i < numOfSlides+1; i++) {
            var $li = $("<li class='slider-pagi__elem'></li>");
            $li.addClass("slider-pagi__elem-"+i).data("page", i);
            if (!i) $li.addClass("active");
            $pagination.append($li);
        }
    };
  
    createBullets();
  
    function manageControls() {
        $(".slider-control").removeClass("inactive");
        if (!curSlide) $(".slider-control.left").addClass("inactive");
        if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
    };
  
    function autoSlide() {
        autoSlideTimeout = setTimeout(function() {
            curSlide++;
            if (curSlide > numOfSlides) curSlide = 0;
            changeSlides();
        }, autoSlideDelay);
    };
      
    autoSlide();
  
    function changeSlides(instant) {
        if (!instant) {
            animating = true;
            manageControls();
            $slider.addClass("animating");
            $slider.css("top");
            $(".slide").removeClass("active");
            $(".slide-"+curSlide).addClass("active");
            setTimeout(function() {
                $slider.removeClass("animating");
                animating = false;
            }, animTime);
        }
        window.clearTimeout(autoSlideTimeout);
        $(".slider-pagi__elem").removeClass("active");
        $(".slider-pagi__elem-"+curSlide).addClass("active");
        $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
        $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
        diff = 0;
        autoSlide();
    }

    function navigateLeft() {
        if (animating) return;
        if (curSlide > 0) curSlide--;
        changeSlides();
    }

    function navigateRight() {
        if (animating) return;
        if (curSlide < numOfSlides) curSlide++;
        changeSlides();
    }

    $(document).on("mousedown touchstart", ".slider", function(e) {
        if (animating) return;
        window.clearTimeout(autoSlideTimeout);
        var startX = e.pageX || e.originalEvent.touches[0].pageX,
            winW = $(window).width();
        diff = 0;
        
        $(document).on("mousemove touchmove", function(e) {
            var x = e.pageX || e.originalEvent.touches[0].pageX;
            diff = (startX - x) / winW * 70;
            if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
            $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
            $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
        });
    });
  
    $(document).on("mouseup touchend", function(e) {
        $(document).off("mousemove touchmove");
        if (animating) return;
        if (!diff) {
            changeSlides(true);
            return;
        }
        if (diff > -8 && diff < 8) {
            changeSlides();
            return;
        }
        if (diff <= -8) {
            navigateLeft();
        }
        if (diff >= 8) {
            navigateRight();
        }
    });
  
    $(document).on("click", ".slider-control", function() {
        if ($(this).hasClass("left")) {
            navigateLeft();
        } else {
            navigateRight();
        }
    });
  
    $(document).on("click", ".slider-pagi__elem", function() {
        curSlide = $(this).data("page");
        changeSlides();
    });

    if ($(window).width() > 1369) {
        $('path.slide__overlay-path').attr('d', 'M0,0 235,0 500,405 0,405');
    }
    
});
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args)
        }, wait);
        if (immediate && !timeout) func.apply(context, args)
    }
};