<nav><a href="index.php" <?php if(isset($_GET['a'])){if($_GET['a']=="index" or $_GET['a']=="")echo "class=current";}else echo "class=current"?>>Accueil</a>
         <a href="?c=index&a=presentation" <?php if(isset($_GET['a']))if($_GET['a']=="presentation")echo "class=current"?>>Pr&eacute;sentation</a>
         <a href="?c=index&a=inscription" <?php if(isset($_GET['a']))if($_GET['a']=="inscription")echo "class=current"?>>Inscription</a>
         <a href="?c=index&a=contact" <?php if(isset($_GET['a']))if($_GET['a']=="contact")echo "class=current"?>>Contactez-nous</a>
         <a href="?c=index&a=faq" <?php if(isset($_GET['a']))if($_GET['a']=="faq")echo "class=current"?>>F.A.Q</a>
    </nav>
   