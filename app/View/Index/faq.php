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
        <h2>Foire aux questions</h2>
      <p class="info"> Vous trouvez ici des questions fr&eacute;quantes que vous pouvez s'en rensignier </p>

        <div id="faq">
            <h2>Question 1</h2>
            <div class="response">Reponse 1 : un tr&eacute;s beau jour aujourd'hui :)</div>

            <h2>Question 2</h2>
            <div class="response">Reponse 2 : un tr&eacute;s beau jour aujourd'hui :)</div>

            <h2>Question 3</h2>
            <div class="response">Reponse 3 : un tr&eacute;s beau jour aujourd'hui :)</div>

            <h2>Question 4</h2>
            <div class="response">Reponse 4 : un tr&eacute;s beau jour aujourd'hui :)</div>
        </div>


    </article>

</section>
<div class="clear"></div>
    </div>
<footer><p>Tous droits r&eacute;s&eacute;rv&eacute;s &agrave; Cshar.com &copy; <?php echo date('Y');?> - <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">WebMaster</a></p></footer>

</body>
</html>