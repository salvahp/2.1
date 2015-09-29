<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aarhus Jazzklub</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php include "navbar.php";?>
 


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
    <section id="video-sec"  class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ZewSU6Kg1go&feature=youtu.be',containment:'self',autoPlay:true, mute:true, startAt:0, opacity:1,mute: true,showControls:false}" >
        
        
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                      <h1>Aarhus Jazzklub</h1>
                      <h3>"Vi swinger traditionelt" </h3>
                      <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                          <li> <a href="https://www.facebook.com/aarhusjazzklub" class="btn btn-default btn-lg"> <span class="network-name">Facebook</span></a> </li>
                          <li>
                                <a href="events.php" class="btn btn-default btn-lg"> <span class="network-name">Events</span></a>
                            </li>
                            <li>
                                <a href="blivmedlem.php" class="btn btn-default btn-lg"> <span class="network-name">Bliv medlem</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
	</section>
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Hvem er vi?</h2>
                    <p class="lead">Aarhus Jazzklub er en klub for dig som elsker jazz. Vi afholder spændende musikarrangementer som alle er velkomne til. Kom og hver med! </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ajk_logo_positiv.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Kalender & Events</h2>
                    <p class="lead">Her kan du få et overblik over hvilke events, priser og tidspunkter der er relevante for lige netop dig! tjek det ud! </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    
                    <!-- kalender -->
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
					<script src="js/script.js" type="text/javascript"></script>
                    
                    <script type="text/javascript">
                       jQuery(function ($) {
                           $('#eventlist').gCalReader({
                             calendarId:'b3t0ogimlgca5h3qa8f2a1jj1g@group.calendar.google.com',
                             apiKey:'AIzaSyAVhU0GdCZQidylxz7whIln82rWtZ4cIDQ',
                             sortDescending: false
                            });
                         });
                    </script>
                
                    <ul id="eventlist" class="list-group">
                        <li class="list-group-item active">De næste kommende begivenheder</li>
                    </ul>

                                    
                    <!-- ------Kalender slut------ -->
                    
                
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Bliv medlem<br>det er sjooooovt</h2>
                    <p class="lead"> Bliver du medlem i Aarhus jazzklub er du sikret en fast lav pris ved deltagelse i arrangementer. Du skal aldrig være bekymret for at misse et event, da vi vil holde dig opdateret på dette område.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Start din jazzrejse her:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://www.facebook.com/aarhusjazzklub" class="btn btn-default btn-lg">
                            <span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a href="events.php" class="btn btn-default btn-lg">
                            <span class="network-name">Events</span></a>
                        </li>
                        <li>
                            <a href="blivmedlem.php" class="btn btn-default btn-lg">
                            <span class="network-name">Bliv medlem</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->



    <!-- Footer -->


<?php include "footer.php";?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- video  -->
   <script src="js/jquery.mb.YTPlayer.js"></script>
	<script src="js/script.js"></script>
    

    
</body>

</html>
