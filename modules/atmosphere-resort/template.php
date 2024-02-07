<section class="atmosphere-wrapper">

        <section class="title-text">
            <header>
                <h4 class="lay-calm-voice-bold">PREMIUM ALL INCLUSIVE</h4>
                <h2 class="lay-louder-voice">THE KANIFUSHI PLAN</h2>
            </header> 
        
            <text-content>
            <p>Enhancing the typical 5-star Maldivian resort experience by going that extra mile!</p>
            <p>The uniquely premium KANIFUSHI PLAN™ plan offers sumptuous buffets with delectable international cuisine, a selection of premium brands of spirits, wines from the world over, and a variety of cocktails. Coupled with an array of activities, excursions, and adventures.</p>
            <p>Assuring a fun-filled and hassle-free tropical beach holiday experience!</p>
            <a class="lay-calm-voice-bold" href="#">VIEW BROCHURE</a>
            </text-content>

        </section>


        <article>
            <picture>
                <img src="assets/atmosphere-one.jpeg" alt="">
            </picture>

            <text-content>
                <header>
                <h3 class="lay-attention-voice">ALL-INCLUSIVE LUXURY</h3>
                </header>
                
                <p>A carefree, five-star resort experience awaits you with our luxurious all-inclusive holiday plan. Offering a collection of premium wines and spirits; buffet, fine dining, and theme night dining options; and varied experiences ranging from excursions and sunset fishing to snorkelling and non-motorized water sports! All included in one price!</p>
                <p>Your Island Home An exhilarating 35-minute seaplane ride from the International Airport in Malé brings you to the pristine Kanifushi Island. Approximately 2 km in length and 90 meters wide, the island is blanketed by dense tropical vegetation and blessed with vibrant, natural coral reefs. Atmosphere Kanifushi serenades you with white, sandy beaches, swaying palm trees, and lush tropical gardens. Time stops as sunshine sparkles on the turquoise lagoon. Magical realms await to be explored beneath crystal clear waters. Choose to fill your days with exhilarating adventures. Or, while away time in blissful relaxation.</p>
            </text-content>



        </article>


        <?php 
        $json = file_get_contents('../../data-php/atmosphere.json');
        $articles = json_decode($json, true);

        foreach($articles as $article) { ?>
        <article>
       
            <picture>
                <img src="assets/<?=$article['img']?>" alt="">
            </picture>

            <text-content>
                <header>
                    <h3 class="lay-attention-voice"><?=$article['header']?></h3>
                </header>
        
            

                <ul class="lay-calm-voice">
                <div></div>
                <?php foreach ($article['list'] as $listItem) { ?>
                    <?= $listItem ?>
                <?php } ?>
                
                </ul>
            </text-content>
                
        </article>
        <?php } ?>
    
</section>