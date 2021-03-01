
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact us - Oorja Farms</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include('./components/header/css.php');
    ?>
</head>

<body>
    <?php
    include('./components/header/header.php');
    ?>
    <!-- BREADCRUMB-->
    <section id="breadcrumb">
        <div class="container-fluid">
            <div class="breadcrumb-content bg-breadcrumb-04">
                <div class="caption">
                    <div class="title">Contact Us</div>
                    <ul>
                        <li>Home</li>
                        <li>Contact Us</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>
    <section class="contact-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-left">
                        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8ZmFybXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&h=900&q=60" alt="banner-contact" class="img-reponsive">
                    </div>  
                </div>
                <div class="col-md-7">
                    <div class="contact-infor">
                        <div class="wrap-right">
                            <div class="img-left">
                                <img src="images/icon/7.png" alt="">
                            </div>
                            <div class="content-contact">
                                <h5>ADDRESS</h5>
                                <p><span>France:</span> Contrada Isola 14, Macerata, 62100 France</p>
                                <p><span>Filand:</span> Via Cavour, 14 30026 Portogruaro Filand</p>
                                <p><span>Viet Nam:</span> 76 Le Lai Street, District 1, Ho Chi Minh City, Vietnam</p>
                            </div>
                        </div>
                        <div class="wrap-right">
                            <div class="img-left">
                                <img src="images/icon/8.png" alt="">
                            </div>
                            <div class="content-contact">
                                <h5>E-MAIL</h5>
                                <p><span>France:</span>info.fr@plant.com</p>
                                <p><span>Filand:</span> info.fr@plant.com</p>
                                <p><span>Viet Nam:</span>info.fr@plant.com</p>
                            </div>
                        </div>
                        <div class="wrap-right">
                            <div class="img-left">
                                <img src="images/icon/9.png" alt="" class="img-reponsive">
                            </div>
                            <div class="content-contact">
                                <h5>PHONE</h5>
                                <p><span>France:</span> +387 64 8459 254 68</p>
                                <p><span>Filand:</span> +387 64 8459 254 68</p>
                                <p><span>Viet Nam:</span> +387 64 8459 254 68</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="from-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="check-left ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Your Message</label>
                            <textarea name="textarea" class="form-control" rows="6" required="required" placeholder=""></textarea>
                        </div>
                        <div class="btn-web ">
                            <a href="#" title="">SEND MESSENGE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrap-map">
                        <div id="googlemap" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('./components/footer/footer.php');
    ?>

    <?php
    include('./components/footer/scripts.php');
    ?>
    <script>
    function initMap() {

        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var myLatLng = {lat: 40.752988, lng: -73.976869};
        var map = new google.maps.Map(document.getElementById('googlemap'), {
            center: { lat: 40.752988, lng: -73.976869 },
            zoom: 10,
            styles: [
                      {
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#f5f5f5"
                          }
                        ]
                      },
                      {
                        "elementType": "labels.icon",
                        "stylers": [
                          {
                            "visibility": "off"
                          }
                        ]
                      },
                      {
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#616161"
                          }
                        ]
                      },
                      {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                          {
                            "color": "#f5f5f5"
                          }
                        ]
                      },
                      {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#bdbdbd"
                          }
                        ]
                      },
                      {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#eeeeee"
                          }
                        ]
                      },
                      {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#757575"
                          }
                        ]
                      },
                      {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#e5e5e5"
                          }
                        ]
                      },
                      {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#9e9e9e"
                          }
                        ]
                      },
                      {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#ffffff"
                          }
                        ]
                      },
                      {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#757575"
                          }
                        ]
                      },
                      {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#dadada"
                          }
                        ]
                      },
                      {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#616161"
                          }
                        ]
                      },
                      {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#9e9e9e"
                          }
                        ]
                      },
                      {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#e5e5e5"
                          }
                        ]
                      },
                      {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#eeeeee"
                          }
                        ]
                      },
                      {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                          {
                            "color": "#c9c9c9"
                          }
                        ]
                      },
                      {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                          {
                            "color": "#9e9e9e"
                          }
                        ]
                      }
                    ]
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });

    }


    </script>
</body>

</html>