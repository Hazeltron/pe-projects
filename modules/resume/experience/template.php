<h2>Experience</h2>

        <ul>

            <?php 
                include("data-php/blog-xp-data.php");
                
                foreach($facts as $fact){?>


            <li class="experience-container">

                <div class="experience-date">


                <h3 class="strong-voice"><?=$fact["date"]?></h3>

            </div>


            </li>


            <li class="title">


                <h3 class="strong-voice"><?=$fact["title"]?></h3>

                <p><?=$fact["location"]?></p>

                <p><?=$fact["description"]?></p>


            </li>

            <?php } ?>

        </ul>
      
    </div>
</section>