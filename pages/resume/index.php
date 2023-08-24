
<?php 
include '../../header.php';
?>
            




<section class="educ-contact">
    <div class="inner-column">

        <ul class="educ-contact-container">

            <li class="education">

                <h2 class="attention-voice">Education</h2>

                <p>Colorado State University<br>
                Fort Collins, CO<br>
                Bachelor of Arts (B.A.) Mass Communication and Journalism (Jun 2016)</p>
                
            </li>


            <li class="contact">

                <h2 class="attention-voice">Contact</h2>

                
                <a herf="paulhazelton.work@gmail.com">paulhazelton.work@gmail.com</a>
                
                <p>(719)337-0666</p>
                <p>Colorado Springs, Co. 80903</p>
            </li>
              
        </ul>
        

    </div>
</section>



<section class="additional">
    <div class="inner-column">

        <section class="add">

            <div>

                <h2 class="attention-voice">Additional</h2>
                <p>Programming<br>(HTML/CSS/PHP/JavaScript)</p>

            </div>
            
            <div>

                <h2 class="attention-voice">Certifications</h2>
                <p>TESOL Cert. IV (10429NAT)</p>
                
            </div>
            

        </section>

    </div>
</section>



<section class="experience">
    <div class="inner-column">

       <h2 class="attention-voice">Experience</h2>

            <?php 
                include("../../data-php/resume-xp-data.php");
                
                foreach($facts as $fact){?>

            <ul class="xp-container">


            <li>
              

                <h3 class="strong-voice"><?=$fact["date"]?></h3>


            </li>


            <li>


                <h3 class="attention-voice"><?=$fact["title"]?></h3>

            </li>

            </ul>

            <p class="strong-voice"><?=$fact["location"]?></p>

            <p><?=$fact["description"]?></p>

            <?php } ?>

            

        

        
    
        
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
