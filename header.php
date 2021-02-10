<?php

    $page_name = basename($_SERVER ['SCRIPT_NAME'], '.php');

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Sebo</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/header.css">
    </head>

    <body>
        <header>
            <div class="main">
                <a href="/"><img src="http://www.stavebnatechnikazilina.sk/wp-content/themes/ST_Zilina/images/logo.png" alt=""></a>
            </div>
            <div class="panel">
                <nav>
                    <ul class="menu navigation">
                        <?php

                            if ($page_name == 'home' ) echo '<li><strong>Domov</strong></li>';
                            else echo '<li><a href="home.php">Domov</a></li>';

                            if ($page_name == 'jobs' ) echo '<li><strong>Služby</strong></li>';
                            else echo '<li><a href="jobs.php">Služby</a></li>';
                                
                            if ($page_name == 'gallery' ) echo '<li><strong>Galéria</strong></li>';
                            else echo '<li><a href="gallery.php">Galéria</a></li>';
                                
                            if ($page_name == 'contact' ) echo '<li><strong>Kontakt</strong></li>';
                            else echo '<li><a href="contact.php">Kontakt</a></li>';
                                
                        ?>
                    </ul>
                </nav>
            </div>    
        </header>