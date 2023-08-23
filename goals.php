

<?php 
include 'header.php';

$json = file_get_contents('data-php/goals.json');
$goalsSections = json_decode($json, true);
?>
            


<h1 class="loud-voice">Goals</h1>

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


<?php include 'footer.php'; ?>
