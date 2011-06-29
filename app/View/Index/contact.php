<!DOCTYPE html>
<html lang="fr">
<head>
  <link href="css/screen.css" rel="stylesheet" media="screen" type="text/css">
    <title>Cshar!Collective Sharing</title>

    <META NAME="DESCRIPTION" CONTENT="site web de partage collectif, Web Site for collective Partage">
    <META NAME="ABSTRACT" CONTENT="site web de partage collectif, Web Site for collective Partage">
    <META NAME="KEYWORDS" CONTENT="Sharing,Partage,Collectif,Fichier,Groupe,Collective sharing, partage collectif,">
    <META NAME="REVISIT-AFTER" CONTENT="20 Days">
    <META NAME="ROBOT" CONTENT="Index,Follow">
    <META NAME="RATING" CONTENT="general">
    <METa NAME="AUTHOR" CONTENT="Dahhane Ayyoub">

</head>
<body>
<header>
    <div id="head"></div>
   <a href="#"><div id="banner"></div></a>
    <div id="authentication-link">
        <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Authent.php';?>
        <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>


        </div>
</header>

<div id="contener">
<div class="clear"></div>

<section>

   <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Subscribe.php';?>

    <div id="separator"></div>
    <article>
        <h2>Contactez-Nous</h2>
      <p class="info">  Tous champs qui portent <span style="font-style: normal;"> (*)</span> sont obligatoire</p>

        <div id="contact">
            <form method="ACTION" action="">
            <input type="text" name="name" placeholder="Nom"/>
            <input type="email" name="email" placeholder="Email *" required="required"/>
            <input type="text" name="object" placeholder="Objectif *" required="required"/>
            <textarea name="message" placeholder="Votre Message *"></textarea>
            <input type="submit" value="Envoyer" name="send"/>
            </form>
        </div>


    </article>

</section>
<div class="clear"></div>
    </div>
<footer><p>Tous droits r&eacute;s&eacute;rv&eacute;s &agrave; Cshar.com &copy; <?php echo date('Y');?> - <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">WebMaster</a></p></footer>

</body>
</html>