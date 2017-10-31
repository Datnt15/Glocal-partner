

jQuery(document).ready(function() {  
    $(".bs-select").selectpicker({iconBase:"fa",tickIcon:"fa-check"});
    var input = document.getElementById("file_input"), formdata = false;
    $("#gallery").on('click', '.delete_image', function(){
        var _this = $(this), $_data = _this.data();
        $.post(
            $('base').attr('href')+'glocal_admin/delete_image', 
            {id: $_data.id, room: $_data.room, value: $_data.value, accessToken: $("#accessToken").val()}, 
            function(data) {
                data = JSON.parse(data);
                add_alert(data.type, data.msg, data.title);
                if (data.type=='success') {
                    _this.parents(".mt-element-overlay").remove();
                }
            }
        );
    });
    $("#gallery").on('click', '.set_thumbnail', function(){
        var _this = $(this), $_data = _this.data();
        console.log($_data)
        $.post(
            $('base').attr('href')+'glocal-admin/update-room-meta-data', 
            {id: $_data.room, field: 'room_thumbnail', value: $_data.value, accessToken: $("#accessToken").val()}, 
            function(data) {
                data = JSON.parse(data);
                add_alert(data.type, data.msg, data.title);
                if (data.type=='success') {
                    $(".mt-element-ribbon").remove();
                    _this.parents('.mt-overlay-3.mt-overlay-3-icons').prepend(`
                        <div class="mt-element-ribbon">
                            <div class="ribbon ribbon-left ribbon-shadow ribbon-border-dash-hor ribbon-color-success uppercase">
                                <div class="ribbon-sub ribbon-clip ribbon-left"></div> Thumbnail
                            </div>
                        </div>`
                    );
                }
            }
        );
    });
    
    if (input.addEventListener) {
        if (document.querySelector('#preview')) {
           
            input.addEventListener("change", previewImages, false);
            return false;
        }
        if ($("#accessToken")) {
            if (window.FormData) {
                formdata = new FormData();
            }
            input.addEventListener("change", function (evt) {
                App.blockUI({
                    target: '#tab_images',
                    animate: true
                });

                var i = 0, len = this.files.length, img, reader, file;
                for ( ; i < len; i++ ) {
                    file = this.files[i];
          
                    if (!!file.type.match(/image.*/)) {
                        if (formdata) {
                            formdata.append("images[]", file);
                        }
                    } 
                }
                formdata.append('action', 'upload_image');
                formdata.append('room', input.getAttribute('data-room'));
                formdata.append('accessToken', $("#accessToken").val());
                if (formdata) {
                    $.ajax({
                        url: $('base').attr('href')+'glocal-admin/upload_room_image',
                        type: "POST",
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function (res){
                            res = JSON.parse(res);
                            $("#gallery").append(res.html);
                            App.unblockUI('#tab_images');
                            add_alert(res.type, res.msg, res.title);
                            input.value='';
                            for (var key of formData.keys()) {
                                // here you can add filtering conditions
                                formdata.delete(key)
                            }
                        }
                    });
                }
            }, false);
        }
    }
    function previewImages() {
        App.blockUI({
            target: '#tab_images',
            animate: true
        });
        var preview = document.querySelector('#preview');
          
        if (this.files) {
            [].forEach.call(this.files, readAndPreview);
            App.unblockUI('#tab_images');
        }


    }
    function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
        } 
        
        var reader = new FileReader();
        
        reader.addEventListener("load", function() {
            var image = new Image();
            image.height = 200;
            image.title  = file.name;
            image.src    = this.result;
            image.style.margin = '5px';
            preview.appendChild(image);
        }, false);
        
        reader.readAsDataURL(file);
        
    }
     function add_alert(type, message, title){
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
        toastr[type](message, title);
    }
    
});

function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 21.0277644, lng: 105.83415979999995}, 
        zoom: 14,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]

    }),
    address_input = document.getElementById("home_address"),
    geocoder = new google.maps.Geocoder();
    var markers = [],
    icon = {
        url: document.getElementsByTagName('base')[0].getAttribute('href') + "assets/img/map_marker.png",
        size: new google.maps.Size(70, 70),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
    };

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    map.addListener('click', function(e) {
        var center = {lat: e.latLng.lat(), lng: e.latLng.lng()};
        map.setCenter(center);
        window.setTimeout(function() {
            map.panTo(center);
        }, 3000);
        address_input.value = e.latLng.lat() + "," + e.latLng.lng();
        geocoder.geocode({
            'latLng': e.latLng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    // Clear out the old markers.
                    markers.forEach(function(marker) {
                        marker.setMap(null);
                    });
                    markers = [];
                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        position: e.latLng,
                        map: map,
                        icon: icon
                    }));
                    document.getElementById("pac-input").value = results[0].formatted_address;
                }
            }
        });

    });

    
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            address_input.value = place.geometry.location.lat() + ',' + place.geometry.location.lng();
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
   
}

