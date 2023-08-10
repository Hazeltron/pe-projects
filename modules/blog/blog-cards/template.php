
<ul class="blog-cards-container">

 <?php 
    include("../../data-php/blog-cards-data.php");

    foreach($blogCards as $card){ ?>

    <li class="blog-card">
       
        
        <picture>
            <img src="<?=$card['image'];?>" alt="">
        </picture>

        <h2><?=$card['title'];?></h2>
        <p><?=$card['description'];?></p>


    </li>

    <?php } ?>
</ul>