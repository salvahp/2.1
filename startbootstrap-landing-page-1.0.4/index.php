<?php 
	$title ="Aarhus Jazzklub - Forside";
	include "header.php";?>
 


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
    <section id="video-sec"  class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ZewSU6Kg1go&feature=youtu.be',containment:'self',autoPlay:true, mute:true, startAt:0, opacity:1,mute: true,showControls:false}" >
        
        

            <div class="row">
                <div class="col-lg-12">
<!--                    <div class="intro-message"> -->
                    <img class="top-padding-ekstra" src="img/ajk_logo_negativ.png" alt="">
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
<!--                    </div>-->
                </div>
            </div>
  
        	 
        </section>
      
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    
	
	<!-- pil indsats -->
		
		 
     
                <div class="col-lg-12 col-sm-6 ">
                    
                    <img class="img-responsive center-block top-padding-ekstra" height="40px" width="80px" src="img/ajk_pil.png" alt="">
                    
                    
                </div>

        
    
	<!-- pil indsats slut -->
	
	
	<div class="content-section-a">
		 
     <div class="container">
     
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">AARHUS JAZZKLUB</h2>
                    <p class="lead">Aarhus Jazzklub er en medlemsbaseret forening, som bestræber sig på at præsentere et bredt og varieret musikprogram af høj kvalitet. Vi afholder spændende musikarrangementer stortset hver lørdag på pubben "Hos Anders" som ligger på Telefontorvet ved Busgaden i aarhus C. Vores mål er at støtte og bevare den traditionelle Jazz-musik I Aarhus, med toner af - New Orleansjazz, ragtime, swing, dixieland, revivaljazz, gipsyjazz, blues, gospel og meget meget mere. </p>
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
                    <h2 class="section-heading">KALENDER & <br>EVENTS</h2>
                    <p class="lead">I vores kalender finder du en oversigt over kommende arrangementer og hvilke musikere du har mulighed for at opleve i forbindelse med dem. Under "Events" kan du se billeder af de forskellige musikere samt læse en mindre beskrivelse og datoen for deres besøg i Jazzklubben. </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    
                    <!-- kalender -->
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> 				   					</script>
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
                    <h2 class="section-heading">BLIV MEDLEM<br></h2>
                    <p class="lead"> Bliver du medlem i Aarhus jazzklub er du sikret en fast lav pris ved deltagelse i arrangementer. Du skal aldrig være bekymret for at misse et event, da vi vil holde dig opdateret med vores medlemsavis(Frivillig) Så vil du støtte det lokale Jazzmiljø i Aarhus og være medlem af et fællesskab der deler den samme passion for Jazz? Så meld dig ind i Aarhus Jazzklub her! </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/kort_ajk.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	


    <!-- Footer +banner -->


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
