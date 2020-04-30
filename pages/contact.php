<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>urban logistic and solution</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/fontmaster.css">
    <link rel="stylesheet" type="text/css" href="../styles/typo.css">
    <link rel="stylesheet" type="text/css" href="../styles/hover.css">
    <link rel="stylesheet" type="text/css" href="../styles/slider.css">
    <link rel="stylesheet" type="text/css" href="../styles/query.css">
    <link rel="stylesheet" type="text/css" href="../styles/hamburger.css">
  </head>

  <body class="normalbody">
    <!-- Menu Desktop -->
    <header class="normalheader">
      <div class="clogo">
        <img class="logo invisible" src="../images/logo.svg" alt="logo">
      </div>
      <a class="menu activmenu" href="../index.html">Accueil</a>
      <a class="menu" href="../pages/histoire.html">Notre Histoire</a>
      <a class="menu" href="../pages/video.html">Notre Vidéo</a>
      <a class="menu" href="../pages/presse.html">Presse</a>
      <a class="menu" href="../pages/contactt.html">Nous contacter</a>
    </header>
    <!-- Menu Mobile -->
    <nav role="navigation" class="navmobile normalnavmobile">
      <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menusmartphone">
          <a href="../pages/accueil.html" class="activmenu2"><li>Accueil</li></a><br>
          <a href="../pages/histoire.html" class="a2"><li>Notre histoire</li></a><br>
          <a href="../pages/video.html" class="a2"><li>Notre Vidéo</li></a><br>
          <a href="../pages/presse.html" class="a2"><li>Presse</li></a><br>
          <a href="../pages/contact.html" class="a2"><li>Nous contacter</li></a>
        </ul>
      </div>
    </nav>
    <!-- Content -->
  <div class="colorblock">
    <p class="bigtxt coord">
      +1 415.996.4149<br>
      360 Pine St. Fl 3<br>
      San Francisco. CA. 94104<br><br>
      hello@bornandbredbrand.com
    </p>
  </div>
  <div class="mainright">
    <p class="bigtxt">Vous voulez nous contacter ?<br>Ce formulaire est fait pour ça.</p>

    <form method="post">
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('vicmagniont@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
   </div>

<script type="text/javascript" src="../styles/slide.js">

</script>
  </body>

</html>
