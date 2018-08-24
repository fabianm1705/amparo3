<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="./images/flor_amparo.ico">
    <link rel="shortcut icon" type="image/png" href="./images/flor_amparo.ico"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Amparo Servicios Sociales
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="./css/material-kit.css?v=2.0.3" rel="stylesheet" />
    <!-- jquery library -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script>
      $(document).on('ready',function(){
        var pet = $('#main form').attr('action');
        var met = $('#main form').attr('method');
        var nom,dom,tel,ema,msj;

        $('#main form').on('submit',function(e){

          e.preventDefault();
          $.ajax({
            beforeSend: function(){
              alert("Enviando...");
              nom = document.contactform.nombre.value;
              tel = document.contactform.telefono.value;
              dom = document.contactform.domicilio.value;
              ema = document.contactform.correo.value;
              msj = document.contactform.mensaje.value;
            },
            url: pet,
            type: met,
            datatype: 'html',
            data: {nombre:nom,telefono:tel,domicilio:dom,correo:ema,mensaje:msj},
            success: function(resp){
              console.log(resp)
            },
            error: function(jqXHR,estado,error){
              console.log(estado)
              console.log(error)
            },
            complete: function(jqXHR,estado){
              console.log(estado)
            },
            timeout: 10000
          })
        })
      })
    </script>
    <script>
    /*
    var VASKIT_SERVER = "https://www.vaskit.com";
    var API = "https://www.vaskit.com/_vaskitapi";
    var API_ROOT = "/var/www/vaskit.com/public_html/_vaskitapi";
    var ROOT = "/var/www/vaskit.com/public_html";
    var ROOT_API = "/var/www/vaskit.com/public_html/_vaskitapi";
    var VASKIT = "https://www.vaskit.com";
    var VASKIT_SERVER = "https://www.vaskit.com";
    var SERVER = "https://www.vaskit.com";
    var API = "https://www.vaskit.com/_vaskitapi";
    var ROOT = "/var/www/vaskit.com/public_html";
    var ROOT_API = "/var/www/vaskit.com/public_html/_vaskitapi";
    var API_ROOT = "/var/www/vaskit.com/public_html/_vaskitapi";
    var APPS = "https://www.vaskit.com/_vaskitapi/commons/apps.php";
    var PATH_APP_TURNOS = "https://www.vaskit.com/_app/turnos";
    var PATH_API_COMMONS = "https://www.vaskit.com/_vaskitapi/commons";
    var PATH_IMAGE_UPLOADS = "https://www.vaskit.com/_vaskitapi/commons/uploads";

    var PATH_APP_TURNOS = "https://www.vaskit.com/_app/turnos";
    var PATH_APP_SCANNER = "https://www.vaskit.com/_app/scanner";
    var PATH_APP_SUPERLIST = "https://www.vaskit.com/_app/superlist";
    var PATH_APP_STREETS = "https://www.vaskit.com/_app/streets";
    var PATH_APP_DELIVERY = "https://www.vaskit.com/_app/delivery";
    var PATH_APP_PARTEI = "https://www.vaskit.com/_app/partei";

    var LANG = '';
    var CITY = '';
    var CITY_LAT_LON = '';
    var CITY_COUNTRY = '';
    var LANGCALLBACK = function() {};
    */

</script>

<!-- barcode scanner library -->
<!--<script src="https://www.vaskit.com/_vaskitapi/js/barcodescanner/quagga.min.js"></script>-->

<!-- datepickr library -->
<!--<script src="https://www.vaskit.com/_vaskitapi/js/datepickr/datepickr.js"></script>-->

<!-- my JS functions -->
<!--<script src="https://www.vaskit.com/_vaskitapi/js/ABMManager.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/code.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/empresasDelUsuario.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/FullCalendar.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getChatServer.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getEmpresaId.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getEmpresasDelUsuarioAndSelectOne.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getFullUserNameAndLastFromCookies.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getJSON.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getNombreEmpresaFirmada.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getToken.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getUserIdByEmpresaId.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getUserIdByEmpresaIdWithFieldId.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getUserInfo.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getUserInfoByEmail.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getUserInfoById.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getValueFromParams.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/isTokenValid.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/jquery.browserLanguage.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/timePicker.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/utils.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/getNextFileId.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/geolocation/geolocation.js"></script>
<script src="https://www.vaskit.com/_vaskitapi/js/isOwner.js"></script>-->

<!-- bearing -->
<!--<script defer src="https://www.vaskit.com/_vaskitapi/js/bearing/latlon-spherical.js"></script>
<script defer src="https://www.vaskit.com/_vaskitapi/js/bearing/dms.js"></script>
<script defer src="https://www.vaskit.com/_vaskitapi/js/bearing/bearing.js"></script>-->

<!-- socket.io -->
<!--<script src="https://www.vaskit.com/_vaskitapi/3rdparty/socket.io-client/dist/socket.io.js"></script>-->

<!-- fingerprint library -->
<!--<script src="https://www.vaskit.com/_vaskitapi/js/fingerprint/dist/client.min.js"></script>-->


<!-- css vaskit -->
<!--<link rel="stylesheet" href="https://www.vaskit.com/_vaskitapi/js/datepickr/datepickr.css">-->

<!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.js"></script>
<!--<script src="https://www.vaskit.com/_vaskitapi/js/angular_routines.js"></script>-->

<!--
<script>
    $.browserLanguage(function(language, code, city, cityLatLon, cityCountry) {
        LANG = language;
        CITY = city;
        CITY_LAT_LON = cityLatLon;
        CITY_COUNTRY = cityCountry;
        console.log(LANG + ", " + CITY + ", " + CITY_LAT_LON + ", " + CITY_COUNTRY );
        try {
            if (LANGCALLBACK !== undefined) {
                LANGCALLBACK(language, code, city, cityLatLon, cityCountry);
            }
        } catch(ex) {
            console.log(ex);
        }
    });
</script>-->

<style>
    .card-header {
        background:#2196f3;
        color:#fff;
    }
    .card-header-inner {
        background:#ccc;
        color:#333;
    }
    .vaskit-page-content-correction {
        padding-top:80px;
    }
    .shadowBox {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .avatar-32 {
        max-width:32px;
        max-height:32px;
        overflow:hidden;
        border-radius:32px;
        border:1px solid #ccc;
    }
    .vaskitRemoveIcon {
        display:inline-block;
        width:19px;
        height:24px;
        background-image:url('https://www.vaskit.com/_vaskitapi/img/remove24.png');
        background-size:19px 24px;
        cursor:pointer;
    }
</style>

<!-- fullcalendar -->
<link href='https://www.vaskit.com/_vaskitapi/3rdparty/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='https://www.vaskit.com/_vaskitapi/3rdparty/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js'></script>
<script src='https://www.vaskit.com/_vaskitapi/3rdparty/fullcalendar/fullcalendar.min.js'></script>
</head>

<body class="landing-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://www.amparosrl.com.ar">Amparo Servicios Sociales</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#descarga" onclick="scrollToDownload()">
                            <i class="material-icons">person_add</i> Quiero Asociarme!
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="./loginZonaSocios.html">
                            <i class="material-icons">account_circle</i> Zona Socios
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('./images/37.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">La solución en servicios sociales.</h2>
                    <h4>Somos una organización de Paraná de probada responsabilidad,
                        que desde 2003 se preocupa y ocupa en brindar servicios
                        en forma accesible y eficaz.</h4>
                    <br>
                    <div class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> &nbsp;
                        <span class="youtube-link" youtubeid="rHbOIDnKHZw">Mira nuestro Video</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">control_point</i>
                                </div>
                                <h4 class="info-title">Odontología</h4>
                                <p>
                                     Cobertura odontológica integral a muy bajo costo, con turnos inmediatos y excelentes profesionales,
                                     además de la cobertura básica está incluído todo lo que es implantes, ortodoncias y prótesis.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">local_pharmacy</i>
                                </div>
                                <h4 class="info-title">Plan Salud</h4>
                                <p>
                                    Este plan incluye todo lo que es consultorios externos, prácticas médicas, farmacia, ambulancia,
                                    emergencias médicas, estudios de laboratorio, radiografías, ecografías, etc.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">local_hospital</i>
                                </div>
                                <h4 class="info-title">Plan Joven</h4>
                                <p>
                                  Se trata de un plan individual que integra la cobertura completa de Amparo, esto es los planes de
                                  Salud, Odontología y Sepelio, y está destinado a jóvenes de hasta 35 años. ​
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                      <div class="col-md-8 ml-auto mr-auto">
                          <h2 class="title">
                              Donde estamos y formas de contacto.
                          </h2>
                          <h5 class="description">
                              Estamos en Cura Alvarez 615, de lunes a viernes de <b>9:00 a 12:00 y 13:00 a 18:00hs.</b>, nuestro teléfono en la oficina es <b>4235108</b>, y el celular para consultas vía whatsapp es <b>154-057991</b>.
                          </h5>
                      </div>
                  </div>


            </div>
            <div id="descarga" class="section section-contacts" style="padding:0px;">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">Solicítenos un promotor</h2>
                        <h4 class="text-center description">
                            Recibe toda la información que necesitas sin compromiso alguno,
                            dejanos tus datos y un promotor se pondrá en contacto.
                        </h4>
                        <form name="contactform" method="post" action="form_email.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Teléfono</label>
                                    <input type="telefono" name="telefono" id="telefono" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Domicilio</label>
                                        <input type="text" name="domicilio" id="domicilio" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="correo" id="correo" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mensaje" class="bmd-label-floating">Mensaje...</label>
                                <textarea type="email" name="mensaje" id="mensaje" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <button class="btn btn-primary btn-raised" >
                                        Enviar ahora!
                                    </button>
                                </div>
                            </div>
                        </form><br><div  align="center">
                          <h5 class="description">
                              <a href="https://servicios1.afip.gov.ar/clavefiscal/qr/mobilePublicInfo.aspx?req=e1ttZXRob2Q9Z2V0UHVibGljSW5mb11bcGVyc29uYT0zMDcwODUxNzM4N11bdGlwb2RvbWljaWxpbz0wXVtzZWN1ZW5jaWE9MF1bdXJsPWh0dHA6Ly93d3cuYW1wYXJvc3JsLmNvbS5hcl19" target="_F960AFIPInfo"><img src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" width="100" height="140" border="0" class="img-responsive"></a>
                          </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-default">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="quienesSomos.html">
                            Sobre Nosotros
                        </a>
                    </li>
                    <li>
                      <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/amparosrl" target="_blank" data-original-title="Danos un Me Gusta en Facebook">
                          <i class="fa fa-facebook-square"></i> Facebook
                      </a>
                    </li>
                    <!--
                    <li>
                        <a href="">
                            Licenses
                        </a>
                    </li>
                    -->
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                    </script>, <b><a href="https://www.amparosrl.com.ar" target="_blank">Amparo</a></b> Cura Alvarez 615 - Tel.:4235108
                  </div>
        </div>


    </footer>
<!--
    <div id="divAbout"  class="main-raised"
         style="margin:2em; padding:4em; background:#fff; display:none;" align="center">
        <h2 class="title">
            Sobre Nosotros
        </h2>
        <h5 class="description">
            Amparo es una empresa de Servicios Sociales de Paraná,
            nacida en 2003 y comprometida con el desarrollo de la ciudad y su gente.
            Prestamos un servicio solidario que permite a mucha gente disponer de
            un sepelio de excelencia, tener asistencia médica a un bajo costo y servicios varios.
            Somos conscientes de la responsabilidad que implica para con nuestra gente
            y trabajamos día a día para estar a la altura de esa responsabilidad.
            Contamos en nuestro haber con la experiencia de estos años y el aval de nuestros
            afiliados por el hecho de cumplir. Somos una organización de probada responsabilidad
            y preocupada por brindar nuestros servicios en forma accesible y eficaz.
        </h5>
        <hr>
        <input type="button" value="Cerrar" class="btn btn-primary btn-raised"
               onClick="javascript:closeAbout()" />
    </div>-->
<br>
    <!--   Core JS Files   -->
    <script src="https://www.vaskit.com/_vaskitapi/3rdparty/material-kit-html-v2.0.3/examples/../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="https://www.vaskit.com/_vaskitapi/3rdparty/material-kit-html-v2.0.3/examples/../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="https://www.vaskit.com/_vaskitapi/3rdparty/material-kit-html-v2.0.3/examples/../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="https://www.vaskit.com/_vaskitapi/3rdparty/material-kit-html-v2.0.3/examples/../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="https://www.vaskit.com/_vaskitapi/3rdparty/material-kit-html-v2.0.3/examples/../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="https://www.vaskit.com/_vaskitapi/3rdparty/material-kit-html-v2.0.3/examples/../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="https://www.vaskit.com/_vaskitapi/3rdparty/material-kit-html-v2.0.3/examples/../assets/js/material-kit.js?v=2.0.3" type="text/javascript"></script>

    <!-- YOUTUBE POPUP -->
    <link rel="stylesheet" href="https://grt107.github.io/grt-youtube-popup/grt-youtube-popup.css">
    <script src="https://grt107.github.io/grt-youtube-popup/grt-youtube-popup.js"></script>
    <script>
        // YOUTUBE POPUP
        $(".youtube-link").grtyoutube();
    </script>

    <script>
        function contacto() {
            let contactNombre = $('#contactNombre').val();
            let contactEmail = $('#contactEmail').val();
            let contactMensaje = $('#contactMensaje').val();
            if ($.trim(contactNombre) != "" && $.trim(contactEmail) != "" && $.trim(contactMensaje) != "") {
                let url = 'api.php?action=contact' +
                    '&nombre=' + encodeURIComponent(contactNombre) +
                    '&email=' + encodeURIComponent(contactEmail) +
                    '&mensaje=' + encodeURIComponent(contactMensaje);
                getJSON(url, function(response) {
                    $('#contactNombre').val('');
                    $('#contactEmail').val('');
                    $('#contactMensaje').val('');
                    alert("Gracias por enviar tus datos! Te estaremos contactando a la brevedad.");
                });
            } else {
                alert("Debes completar todos los datos.");
            }
        }
        function openAbout() {
            closeClients();
            $('#divAbout').slideDown('fast', function() {
                $('html, body').animate({
                    scrollTop: $("#divAbout").offset().top
                }, 500, function() {

                });
            });

        }
        function closeAbout() {
            $('#divAbout').slideUp('fast', function() {});
        }
        function openClients() {
            closeAbout();
            $('#divClients').slideDown('fast', function() {
                $('html, body').animate({
                    scrollTop: $("#divClients").offset().top
                }, 500, function() {

                });
            });

        }
        function closeClients() {
            $('#divClients').slideUp('fast', function() {});
        }
    </script>

</body>

</html>
