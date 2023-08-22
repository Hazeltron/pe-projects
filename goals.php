<!doctype html>

<?php 
include 'header.php';
include 'nav.php'; 

$json = file_get_contents('data-php/goals.json');
$goalsSections = json_decode($json, true);

var_dump($goalsSections);



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



<?php foreach($goalsSections as $section){ ?>
   <section>
       <div class="inner-column">
           <h2 class="attention-voice"><?=$section['heading']?></h2>


           <?php foreach($section['goals'] as $goal){?>
            
                <p><?=$goal?></p>

            <?php } ?>


       </div>
   </section>
<?php } ?>



<section class="five-year">
    <div class="inner-column">

        <h2>5 year</h2>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p> 

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p>P</p>

        <p></p>

    </div>
</section>

<section class="list">
    <div class="inner-column">

        <h2>Anyway, TL;DR :</h2>

        <ul>
            <li></li>
            <li></li>
            <li> </li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        
    </div>
</section>


<section class="end-of-course">
    <div class="inner-column">

        <h2>End of the course</h2>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

    </div>
</section>


<section class="end-of-month">
    <div class="inner-column">

       <h2>End of the Month</h2>

        <p>By the end of the month, I would like to feel confident with PHP, structuring a website, and quicker with key shortcuts. I’d also like to be caught up in the course.</p>

        <p>I want my personal webpages to stand out, be consistent and be visually appealing.</p>

    </div>
</section>


<section class="end-of-week">
    <div class="inner-column">
        
        <h2>End of the Week</h2>

        <p>By the end of the week, I would like to have all of the catchup work finished and be on track for next week. I want to understand all the concepts we’ve covered and feel confident in talking about them.</p>

    </div>
</section>


<?php include 'footer.php'; ?>
