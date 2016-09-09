<!DOCTYPE html>
<html  lang="fr"  xmlns:og="http://opengraphprotocol.org/schema/"  xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://opengraphprotocol.org/schema/">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="description" content="APP and GO vous accompagne dans le développement de vos applications mobiles et site internet.">

    <link rel="canonical" href="http://www.app-and-go.fr">

    <meta property="og:locale"      content="fr_FR" />
    <meta property="og:type"        content="website" />
    <meta property="fb:app_id"      content="1193258404072842" />
    <meta property="fb:page_id"     content="1395648730513184" />
    <meta property="og:title"       content="App and GO - Agence digitale" />
    <meta property="og:description" content="App and GO vous accompagne dans le développement de vos applications mobiles et site internet." />
    <meta property="og:url"         content="http://www.app-and-go.fr/" />
    <meta property="og:site_name"   content="www.app-and-go.fr" />
    <meta property="og:image"       content="images/logo_appandgo/logoapp-and-go-google.png" /> 


    <meta name="twitter:card"         content="summary">
    <meta name="twitter:description"  content="APP and GO vous accompagne dans le développement de vos applications mobiles et site internet.">
    <meta name="twitter:title"        content="APP and GO - Agence digitale">

    
    <link rel="icon" href="images/logo_appandgo/V2AppGoFuse18.png" sizes="32x32">
    <link rel="icon" href="images/logo_appandgo/V2AppGoFuse18.png" sizes="192x192">

    <link rel="apple-touch-icon-precomposed" href="images/logo_appandgo/V2AppGo380.png">
    <meta name="msapplication-TileImage" href="images/logo_appandgo/V2AppGo380.png">
    
    <link rel="shortcut icon" href="images/logo_appandgo/V2AppGoFuse18.png">


    <?php include_once("analyticstracking.php") ?>

    <title>APP and GO - Application Mobile, Site internet</title>

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="css/style_appandgo.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->


   <!-- oxygen script --> 

  <link href="css/main.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">


  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<!--   <link rel="shortcut icon" href="images/rocket.png">-->

   <link href="css/lightbox.css" rel="stylesheet">
<!--   <link href="css/animate.min.css" rel="stylesheet"> --> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body>



  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1193258404072842',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/fr_FR/sdk.js";

     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>


    <!-- service oxygen -->
  <?php include_once('src/header.php');?>
    <!-- service oxygen -->
  <?php include_once('src/service2.php');?>

  <?php include_once('parteners/parteners-logo.php');?>

  <?php include_once('src/team.php');?>

  <?php //include_once('parteners.php');?>

  <!-- portfolio oxygen -->
  <?php include_once('src/about.php');?>

  <?php include_once('src/contact.php');?>

  <?php include_once('src/footer.php');?>




<!-- =========================
     SCRIPTS 
============================== -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWyX7bxymlVnabFHYuH5bZ1NKM2xidGAI"></script>    
 <!--<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>-->
 
    <script type='text/javascript'>function init_map(){var myOptions = {zoom:12,scrollwheel: false,center:new google.maps.LatLng(48.821794, 2.421743),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.821794, 2.421743)});infowindow = new google.maps.InfoWindow({content:'<strong>APP AND GO</strong><br>19 Rue Adrien Damalix, 94410 Saint-Maurice<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

</body>

</html>