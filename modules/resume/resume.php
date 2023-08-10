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
// include 'header.php';
include '../../nav.php'; 
include ("../../data-php/blog-xp-data.php")
?>
            

<section>
    <div class="inner-column">
        <div class="landing-image">

            <section class="trans-message">


                <h1>Resume</h1>
                <p>A list of all the things I've done in life.</p>


            </section>
        </div> 
    </div>
</section>


<section class="educ-contact">
    <div class="inner-column">

        <?php include("educ-contact-list/template.php") ?>

    </div>
</section>



<section class="additional">
    <div class="inner-column">

        <?php include("additional/template.php"); ?>

    </div>
</section>



<section class="experience">
    <div class="inner-column">

        <?php include("experience/template.php") ?>
        
    </div>
</section>



<?php include '../../footer.php'; ?>
<!--


        <header>
            <h2>References</h2>
        </header>

        <section class="ref-container">
           <div class="refs">
            <header>
                <h4>Micheal Head, Restaurant Manager, Patty Jewett Bar and Grill</h4>
            </header>
                <p>(719) 491-9092 - Former Manager</p>
            </div>
            <div class="refs">
            <header>
                <h4>Eldee Chua, Head Teacher, Apollo English</h4>
            </header>
            <a href="eldee.chua@apollo.edu.vn"></a><p>eldee.chua@apollo.edu.vn - Current Head Teacher</p></a>
            </div>

            <div class="refs">
            <header>
                <h4>Meg Rousseau, FOH Manager, Jax Fish House</h4>
            </header>
                <p>(616)644-2368 – Current FOH Manager</p>
            </div>

        </section>
    -->
