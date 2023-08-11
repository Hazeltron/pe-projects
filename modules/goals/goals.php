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
            
<section>
    <div class="inner-column">
        <div class="landing-image">
        
            <section class="trans-message">


                <h1>Goals</h1>
                <p>Interested in all the things I really want? Well here you go.</p>


            </section>
        
    </div>
</section>

<section class="five-year">
    <div class="inner-column">

        <?php include("five-year/template.php") ?>

    </div>
</section>

<section class="list">
    <div class="inner-column">

        <?php include("tldr/template.php") ?>
        
    </div>
</section>


<section class="end-of-course">
    <div class="inner-column">

        <?php include("end-of-course/template.php") ?>

    </div>
</section>


<section class="end-of-month">
    <div class="inner-column">

       <?php include("end-of-month/template.php") ?> 

    </div>
</section>


<section class="end-of-week">
    <div class="inner-column">
        
        <?php include("end-of-week/template.php") ?>

    </div>
</section>


<?php include '../../footer.php'; ?>
