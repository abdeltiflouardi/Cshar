<!DOCTYPE html>
<html lang="fr">
<head>
  <link href="css/screen.css" rel="stylesheet" media="screen" type="text/css">
    <link href="app/css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
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
    <a href="index.php"><div id="banner"></div></a>
    <div id="authentication-link">
        <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Authent.php';?>
        <?php include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Menu.php';?>


        </div>
</header>
<div id="contener">

<div class="clear"></div>

<section>
    <div id="inscription"><blockquote  style="padding: 10px 0px 10px 0px;font-size: 20px; color: white;">C'est &agrave; vous. Rejoignez nous et profiter d'un espace de partage gratuit, fiable et s&eacute;curis&eacute;</blockquote></div>
   <?php// include __DIR__ . DS . '..' . DS . 'Partial' . DS . 'Subscribe.php';?>
    
    <div id="separator"></div>
    <article>
        <h2>Inscription</h2>
        <p class="info">Tous champs sont requis</p>
    <div id="inscription2">
           <form>
    <input type="text" name="member[login]" placeholder="Pseudo" required="required"/> <br />
    <input type="password" name="member[password]" placeholder="Mot de passe" required="required"/> <br />
    <input type="email" name="member[email]" placeholder="Email" required="required"/> <br />
    <input type="submit" name="submit" value="S'inscrire"/>
               <div id="information">

        </div>
                Je lis et je valide <input type="checkbox" name="accepte" value="accepte" required="required"/>
            </form>
    </div>

    </article>

</section>
<div class="clear"></div>
    </div>
<footer><p>Tous droits r&eacute;s&eacute;rv&eacute;s &agrave; Cshar.com &copy; <?php echo date('Y');?> - <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">WebMaster</a></p></footer>
    
</body>
</html>