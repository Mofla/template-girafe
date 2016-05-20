<!DOCTYPE html>
<html lang="fr">
<head>
  <link href="chrome://imtranslator/content/css/translator.css" id="SL_Style" type="text/css" rel="stylesheet"><!-- Translate GOOGLE -->
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="format-detection" content="telephone=no"/>

  <title>CLERIO.FR-CONTACTS</title>
  <!--CSS et LIENS-->

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Mon CSS : Contacts.css -->
  <link href='css/Contacts.css'rel='stylesheet'type='text/css'/>
  <!-- Google Fonts -->
  <link href="stylesheet"type="text/css"href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"></link><!--Roboto-->
</head>
  <!--========================================================
                            FIN HEAD
  =========================================================-->

<body>
   
<div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
<?php include('header.php'); ?>
  <!--========================================================
                            CONTENT
  =========================================================-->
  <main class="menu">
 <!-- CONTACT US -->
    <section class="well-12 bg-image-left bg-image-left--4">
      <div class="container container-wide text-center">
<h2 class="head-bord-3">
<span class="small">Prennez contact</span>NOUS CONTACTER</h2><!-- fin contacts gauche -->

<div class="  row center-sm text-left offset-2">
    <!-- LIGNE -->
<div class=" col-md-3"><!--COLONNE GAUCHE-->
            <address class="contact-info">
              <p>88026 EPINAL CEDEX <br>
               10, rue Claude Gelée</p>
              <dl>
                <dt>Téléphone</dt>
                <dd><a href="callto:0329338888">03 29 33 88 88</a></dd>
              </dl>

              <a href="mailto:inbox@simplon.co">inbox@simplon.co</a>
            </address>
</div><!--FIN COLONNE GAUCHE-->
<!----------- 
FORMULAIRE
---------------->

<div class=" col-md-6"><!---- COLONNE DROITE ---->              <!-- LIGNE ----------->
<form class='rd-mailform' method="post" action="traitement.php"><!---- FORMULAIRE ---->
              <!-- RD Mailform Type -->
            <input type="hidden" name="form-type" value="contact"/>
              <!-- END RD Mailform Type -->

            <div class=" form-group">
            <label class="form-label"  for="mailform-input-name"></label>
            <input placeholder="Nom"id="mailform-input-name"
                       type="text"
                       name="nom"
                       data-constraints="@NotEmpty @LettersOnly"

                       required/>

            </div><!-- form-group --> 
                
            <div class="form-group">
            <label class="form-label" for="mailform-input-prenom"></label>
            <input id=" mailform-input-prenom"
                    placeholder="Prénom"
                       type="text"
                       name="prenom"
                       data-constraints="@NotEmpty @LettersOnly"
                       required/>

            </div><!-- form-group -->
                
                

            <div class="for-mar-left form-group">
            <label class="form-label" for="mailform-input-tel"></label>
            <input id="mailform-input-tel"
                    placeholder="Téléphonne"
                       type="text"
                       name="telephonne"
                       data-constraints="@NotEmpty"
                       required/>

            </div><!-- form-group -->
    
                
            <div class="for-mar-left form-group">
            <label class="form-label" for="mailform-input-email"></label>
            <input id="mailform-input-email"
                    placeholder="E-mail"
                       type="text"
                       name="email"
                       data-constraints="@NotEmpty @Email"
                       required/>

            </div><!-- form-group -->
    
            <div class="for-mar-left form-group">
            <label class="form-label"  for="mailform-input-adresse"></label>
            <input id="mailform-input-adresse"
                    placeholder="Adresse"
                       type="text"
                       name="adresse"
                       data-constraints="@NotEmpty"
                       required/>

            </div><!-- form-group --> 
    
            <div class="for-mar-left form-group">
                <label class="form-label" for="mailform-input-ville"></label>
                <input id="mailform-input-ville"
                        placeholder="Ville"
                       type="text"
                       name="ville"
                       data-constraints="@NotEmpty @LettersOnly"
                       required/>

            </div><!-- form-group --> 
    
            <div class="for-mar-left form-group">
            <label class="form-label" for="mailform-input-cp"></label>
            <input id="mailform-input-cp"
                    placeholder="Code Postal"
                       type="text"
                       name="codepostal"
                       data-constraints="@NotEmpty "
                       required/>

            </div><!-- form-group -->


            <div class="form-group textarea">
            <label class="form-label" for="mailform-input-message"></label>
            <textarea id="mailform-input-message"
                       placeholder="Message"
                       name="message"
                       data-constraints="@NotEmpty"
                      required/></textarea>

              </div><!-- form area-->
            
                
              <div class="form-group btn-wr">
                <button class="btn btn-lg btn-primary" type="submit"value="submit" onclick="form()">ENVOYER</button>

                <div class="mfInfo"></div>
                  
              </div><!-- FORM INPUT -->
</form><!-- formulaire -->
</div><!--FIN COLONNE DROITE -->
         
</div><!-- Row -->
</div><!-- Container -->
</section>
<!-- END CONTACT US -->
</main>
    <!--END MENU -->
    
    
 <!===========================================================
                      FIN    SCRIPT JAVASCRIPT FORMULAIRE
  ===========================================================>
    
    <!===========================================================
                      FOOTER
  ===========================================================>
    <?php include('footer.php'); ?>

</div><!-- FIN PAGE -->
 
</body>
</html>
