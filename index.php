<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TinySite</title>
    <meta name="viewport" content="width=device-width initial-scale=1 user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="TinySite | Un site web simple et efficace, pour permettre à tous de faire grandir ses idées grâce au web">
	<meta property="og:site_name" content="TyniSite">
	<meta property="og:url" content="http://www.cooldev.xyz/TinySite">
	<meta property="og:description" content="Nous accompagnons les petites entreprises et les indépendants dans leur présence numérique">
	<meta property="og:type" content="website">
	<meta property="og:image" content="assets/og-img.png">

  </head>
  <body >
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper cyan darken-3">
        <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#section1">C'est quoi ?</a></li>
          <li><a href="#section2">Pourquoi ?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-menu">
          <li><a href="#section1">C'est quoi ?</a></li>
          <li><a href="#section2">Pourquoi ?</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        </div>
      </nav>
    </div>
    <header>

      <div class="content">
        <div class="row">
          <div class="col s12 center-align">
				<img class="responsive-img" src="assets/logo-white.png" alt="Logo TyniSite" width="200px">
          </div>
          <div class="col s12 ">
            <h1 class="center-align white-text">Un site web simple et efficace, pour permettre à tous de faire grandir ses idées grâce au web</h1>
            <div class="separator col s4 offset-s4 divider"></div>
          </div>

          <div class="col s12 social center-align">
            <a href="https://www.facebook.com/cooldevcrew" target="_blank"><img class="responsive-img" src="assets/logo-fb.png" alt="facebook"></a>
            <a href="https://twitter.com/cooldev_crew" target="_blank"><img class="responsive-img" src="assets/logo-twitter.png" alt="twitter"></a>
          </div>
        </div>
      </div>
      <div class="overlay">
      </div>
    </header>
    <div id="section1" class="scrollspy">
      <div class="row">
        <div class="col s12 m8 offset-m2 ">
          <h2 class="center-align grey-text">Le TinySite est : </h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        <div id="cards" class="col s12 l10 offset-l1">
          <div class="col s12 m4 ">
            <div class="card">
              <div class="card-image orange lighten-2 waves-effect waves-block waves-light">
                <img class="activator" src="assets/picto-pig.png">
              </div>
              <div class="card-content">
                <h3 class="card-title activator">Abordable<i class="material-icons right">more_vert</i></h3>
              </div>
					<div class="card-reveal">
              <h4 class="card-title">A partir de 349 € ht <i class="material-icons right">close</i></h4>
              <h5>Inclus : </h5>
              <ul>
              	<li>Hébergement pendant 1 an</li>
              	<li>Nom de domaine pendant 1 an</li>
              </ul>
              <h5>Options : </h5>
					<ul>
              	<li>Modifications : 49€ ht par modification</li>
              	<li>Maintenance : 49€/an (hébergement et renouvellement du nom de domaine en .fr ou .com)</li>
              </ul>
              <p>Le TinySite que nous réalisons pour vous vous appartient. Vous pouvez à tout moment récuperer le code pour vous occuper vous-même de sa maintenance. Nous vous proposons même <a href="http://www.cooldev.xyz/formation-web.php" target="_blank"> une formation </a>pour ça !
              </div>
            </div>
          </div>
        <div class="col s12 m4 ">
          <div class="card">
            <div id="target" class="teal lighten-3 card-image waves-effect waves-block waves-light">
					<img  src="assets/picto-responsive.png" alt="">
            </div>
            <div class="card-content">
              <h3 class="card-title activator">Adaptatif<i class="material-icons right">more_vert</i></h3>
            </div>
            <div class="card-reveal">
              <h4 class="card-title">Le TinySite est responsive<i class="material-icons right">close</i></h4>
              <p>La moitié des internaute vous cherchent depuis leur mobile. Le TinySite s'adapte à tous les supports.</p>
              </div>
          </div>
        </div>
        <div class="col s12 m4 ">
          <div class="card">
            <div class="card-image  red accent-2 waves-effect waves-block waves-light">
              <img class="activator" src="assets/picto-perso.png">
            </div>
            <div class="card-content">
              <h3 class="card-title activator">Evolutif<i class="material-icons right ">more_vert</i></h3>
            </div>
            <div class="card-reveal">
              <span class="card-title">Vos besoins évoluent ?<i class="material-icons right">close</i></span>
              <p>Votre site web vous suit ! Rajouter des sections, des pages...<br>Contactez-nous, nous vous proposerons des solutions adaptées.</p>
            </div>
          </div>
      </div>
      </div>
		</div>
    </div>

    <section id="section2" class="cyan darken-2 scrollspy">
	 <div class="container">
	 	<div class="row">
      	<div class="col s12 m8 offset-m2 white-text">
        <h2 class="center-align">Pourquoi votre présence sur le web est indispensable ?</h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
       <div class="row">
			<div class="col s12 m6 l6 white-text">
									<div class="center-align">

				              <img width="80px;" src="assets/picto-shop-2.png" alt="Parlez de vous">
									</div>

				              <p>Où vous trouver, comment vous contacter, êtes-vous ouvert aujourd'hui ?<br/>
				              Autant d'informations que vos futurs clients doivent trouver rapidement, parce que c'est ça qu'ils cherchent !
				              </p>
				          </div>
				         	<div class="col s12 m6 l6 white-text">
				            <div class="center-align">
				              <img width="80px;" src="assets/picto-shop-2.png" alt="Parlez de ce que vous faites">
				            </div>
				            <div>
				              <p>Que faites vous et pourquoi le faites vous si bien ?<br/>
				                 Du contenu de qualité favorise votre présence sur les moteurs de recherche et vos clients vous trouvent plus facilement !
				                 Ca sert à cela un site vitrine :)
				              </p>
				            </div>
				         	</div>
       </div>
      </div>
      </div>
    </section>

    <section id="contact" class="container scrollspy">
          <div class="col s12">
            <h2 class="dark-green center-align">Contactez-nous !</h2>
            <div class="col s12"></div>
          </div>
        <div class="row">
          <form class="col s12" action="#contact" method="post">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="John Doe" id="name" name="nom" type="text" class="validate" required>
                <label for="name">Votre nom</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate" required>
                <label for="email">Votre adresse mail</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">subject</i>
                <input id="subject" name="objet" type="text" class="validate" required>
                <label for="subject">Sujet</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <textarea id="message" name="message" type="text" class="materialize-textarea" required></textarea>
                <label for="message">Votre message</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 center-align">
                <button class="btn waves-effect waves-light cyan darken-3" type="submit" name="submit">Envoyer
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
            <div id="feedback" hidden>
              <?php echo($feedback); ?>
            </div>
          </form>

        </div>
      </section>
       <footer class="page-footer cyan darken-2 ">
          <div class="container  ">
            <div class="row ">
              <div class=" col m4 s12 center-align">
                <h5 class="center-align white-text">Contacts</h5>
                <div class="separator col s2 offset-s5 divider"></div>
                <div class="col s12 m6 center-align">
               	 <img src="assets/lio.png" alt=""width="60px;"><p class="center-align grey-text text-lighten-4">lionel@cooldev.xyz</p>
                </div>
                <div class="col s12 m6 center-align ">
               	<img src="assets/mi.png" alt=""width="60px;"><p class="center-align grey-text text-lighten-4">mylene@cooldev.xyz</p>
                </div>
              </div>
              <div class="center-align social col m4  s12">
               <h5 class="white-text">Réseaux sociaux </h5>

               <div class="separator col s2 offset-s5 divider"></div>
                <div class="col  s12 center-align">
                 <a href="https://www.facebook.com/cooldevcrew" target="_blank" ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook"></a>
                 <a href="https://twitter.com/cooldev_crew" target="_blank" ><img src="assets/logo-twitter.png" alt="Suivez-nous sur Twitter"></a>
                </div>



              </div>
              <div class="center-align col m4 s12">
                <h5 class="white-text">Adresse</h5>
                <div class="separator col s2 offset-s5 divider"></div>
               <div class="col s12"><p class="grey-text text-lighten-4">Cosens<br>2, rue de Rome<br>13001 Marseille</p></div>
               </div>
            </div>
          </div>
          <div class="footer-copyright grey-text ">
            <div class="container ">
           <span class="cyan-text text-lighten-3">CC BY-NC-SA 4.0 - 2017 /</span> <a class="cyan-text text-lighten-3" href="http://www.cooldev.xyz" target="_blank">La Team Cooldev</a>
            <a class="modal-trigger right cyan-text text-lighten-3" href="#modal1" >Mentions légales</a>
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h3>SIRET</h3>
                  <p>Sous CAPE Cosens<br>SIRET : 419 369 798 00048 <br>N° Formateur : 93 13 113 41 13</p>
                  <h3>Responsable de la publication :</h3> <p>Cooldev</p>
                  <h3>Hébergement :</h3>
                  <p>GANDI SAS, Société par Actions Simplifiée au capital de 300.000€ ayant son siège social au 63-65 boulevard Massena à Paris (75013) FRANCE, immatriculée sous le numéro 423 093 459 RCS PARIS N° TVA FR81423093459 Téléphone : +33.(0) 1 70.37.76.61 .</p>
                  <h3>Gestion des données personnelles :</h3>
                  <p>Votre vie privée est très importante pour nous. Pour connaître le trafic sur ce site internet, Nous utilisons Piwik. Piwik est une solution d’analytics qui respecte votre vie privée conformément aux recommandations de la CNIL et ne demande aucune déclaration préalable.</p>
                 </div>
                <div class="modal-footer ">
                  <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    </script>
  </body>
</html>
