<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="RonnieMcgrea's website - @cacheticolorao on twitter">
    <meta name="keywords" content="web developer front end ronniemcgrea">
    <meta name="google-site-verification" content="wEugE955szuTYkxcsWUf46pxz1QrcN62vD0HXUSWLO8" />
    <meta name="google-site-verification" content="ZAK6mY5pcop1V_piTdETV5zK_fDKJYIBotUj11QZtv0" />
    <title>Ronald Gutierrez Site</title>
    <link href="https://file.myfontastic.com/4rf5VDU2YyaDC2fyPK7dB7/icons.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
     <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="img/favicon.png"/>

</head>

<body>
    <?php include 'header.php'?>
        <div class="row">
            <div class="parallax-container">
                <div class="parallax"><img src="img/web1.jpg"></div>
                <h2 class="caption center-align titulo1">Ronald Gutiérrez</h2>
                <h5 class="caption center-align light-grey-text text-ligthen-3">Software developer</h5>
            </div>
            <div class="section-white col l6 m6 s12">
                <div class="row container">
                    <h2 id="yo" class="header scrollspy">Quién soy?</h2>
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/ronald.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Mis Redes<i class="material-icons right">touch_app</i></span>
                            <p>
                                <a href="https://www.facebook.com/DJDarkalchemist">
                                    <o class="icon-facebook-official">
                                        </o>
                                </a>
                                <a href="https://twitter.com/Cacheticolorao">
                                    <o class="icon-twitter"></o>
                                </a>
                                <a href="https://www.facebook.com/DJDarkalchemist">
                                    <o class="icon-youtube"></o>
                                </a>
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Lo que manejo actualmente<i class="material-icons right">close</i></span>
                            <p>Lenguajes</p>
                                <p>
                                   <o class="icon-html5 tooltipped" data-position="bottom" data-delay="50" data-tooltip="HTML5"></o>
                                   <o class="icon-css3 tooltipped" data-position="bottom" data-delay="50" data-tooltip="CSS3"></o>
                                   <o class="icon-javascript tooltipped" data-position="bottom" data-delay="50" data-tooltip="JavaScript"></o>
                                   <o class="icon-javascript tooltipped" data-position="bottom" data-delay="50" data-tooltip="Java"></o>
                                   <o class="icon-javascript tooltipped" data-position="bottom" data-delay="50" data-tooltip="Scala"></o>
                                </p>
                            <p>Frameworks</p>
                            <ul>
                                <li>Bootstrap</li>
                                <li>Materializecss</li>
                                <li>Jquery</li>
                                <li>ReactJs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-white col l6 m6 s12">
                <div class="row container">
                    <p class="grey-text text-darken-4 lighten-3">
                    Ingeniero de sistemas dedicado al desarrollo de software con experiencia en backend con lenguajes Java y Scala, actualmente estoy explorando herramientas de front end javascript como react js y react native, para el desarrollo de proyectos web y móviles.
                        <br>
                        <br>

                    </p>
                </div>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="img/web2.jpg"></div>
        </div>
        <div class="section-white">
            <div class="row container">
                <h2 id="portafolio" class="header scrollspy">Portafolio</h2>
                <div class="row">
                    <div class="col l6 m6 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/artesunidas.jpg">
                                <span class="card-title">Artes Unidas</span>
                            </div>
                            <div class="card-content">
                                <p>Sitio web de la escuela Artes unidas</p>
                                <p>Creado con wordpress</p>
                            </div>
                            <div class="card-action">
                                <a href="http://artesunidas.co.nf">Conozca el sitio web</a>
                            </div>
                        </div>
                    </div>

                    <div class="col l6 m6 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/clientes.jpg">
                                <span class="card-title">Romeroviedo - Zona clientes</span>
                            </div>
                            <div class="card-content">
                                <p>Sitio web para los clientes de Romeroviedo</p>
                                <p>Creado con wordpress</p>
                            </div>
                            <div class="card-action">
                                <a href="http://clientes.romeroviedo.com/">Conozca el sitio web</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="parallax-container">
            <div class="parallax"><img src="img/web2.jpg"></div>
        </div>
        <div class="section-white">
            <div class="row container">
                <h2 id="contacto" class="header scrollspy">Contacto</h2>
                <div class="row">
                    <p>
                        Llena los datos del formulario para contactarte conmigo.
                    </p>
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">face</i>
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">Nombre</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="password" class="validate">
                                <label for="password">Correo electronico</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">message</i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="tectarea1">Mensaje</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <button type="submit" id="enviar" class="btn waves-effect waves-light">Enviar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <?php include 'footer.php'?>



            <script src="js/jquery.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>
</body>

</html>