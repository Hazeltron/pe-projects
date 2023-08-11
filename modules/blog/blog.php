<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="It's been a weird day.">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Paul Hazelton">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Paul Hazelton</title>

        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@0;1&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../../css/settings.css">

        <link rel="stylesheet" href="../../css/site.css">

        <link rel="stylesheet" href="../../css/setup.css">

        <link rel="stylesheet" href="../../css/structure.css">

        <link rel="stylesheet" href="../../css/modules.css">


        <link rel="stylesheet" href="../../css/font.css">



    </head>

    <body>

<?php 
// include '../../header.php';
include '../../nav.php'; 
?>
            

<section class="landing">
    <div class="inner-column">

        <?php include("hero/template.php"); ?>
        
    </div>
</section>


<section class="blog-text">
    <div class="inner-column">

        <h2>Substack Blog</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse rem dolore laudantium inventore illo obcaecati explicabo hic nobis cum ducimus at ad doloribus illum itaque accusamus quibusdam tempore, dolor architecto labore veniam numquam quo iure. Dolore rem incidunt aspernatur, eligendi?</p>

    </div>
</section>


<section class="blog">
    <div class="inner-column">
        <?php include("blog-cards/template.php"); ?>
    </div>
</section>


<?php include '../../footer.php'; 
?>
