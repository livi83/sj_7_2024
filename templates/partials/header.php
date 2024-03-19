
<?php
  require('../_inc/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 'Moj web | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
    <?php
      add_stylesheet();
    ?>
</head>
<body>
    <header class="container main-header">
        <div>
          <a href="home.php">
            <img src="../assets/img/logo.png" height="40">
          </a>
        </div>
      <nav class="main-nav">
      <ul class="main-menu" id="main-menu">
        <?php
           $pages = array('Domov'=>'home.php',
                'Portfólio'=>'portfolio.php',
                'Q&A'=>'qna.php',
                'Kontakt'=>'kontakt.php'  
           );
           echo(generate_menu($pages));
        ?>
       
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
