<h2>Experience</h2>

        <ul>

            <?php 
                include("../../data-php/blog-xp-data.php");
                foreach($facts as $fact){?>


            <li class="experience-container">

                <div class="experience-date">


                <h3><?=$fact["date"]?></h3>

            </div>


            </li>


            <li class="title">


                <h3><?=$fact["title"]?></h3>

                <p><?=$fact["location"]?></p>

                <p><?=$fact["description"]?></p>


            </li>

            <?php } ?>

        </ul>
      
    </div>
</section>






<section class="experience">
    <div class="inner-column">
        
        <section class="experience-container">

            <div class="experience-date">


            <h3>Mar 2016 - Jul 2018</h3>


            </div>


            <div class="jobs">


                <h3>MANAGER</h3>

                <p>Cheba Hut, Fort Collins, CO</p>

                <p>Worked his way from server to manager. As a manager, was entrusted to keep the business running efficiently, assist co-workers with questions and business issues. Responsible for managing the daily operations of the restaurant and staff while complying with all health and safety regulations.</p>


            </div>

        </section>