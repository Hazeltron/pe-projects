
<ul class="blog-cards-container">

 <?php 

 // $json = file_get_contents(name.json);

 // $something = jason_decode($json, true);

 // var_dump($something);

 // foreach($something as $somethingElse){
    

 //    $name = $somethingElse['name'];
 //    echo $name;
 // }
    include("data-php/blog-cards-data.php");

    foreach($blogCards as $card){ ?>

    <li class="blog-card">
       
        <a href="<?=$card['link'];?>" >
        <picture>
            <img src="<?=$card['image'];?>" alt="">
        </picture>

        <h2 class="strong-voice"><?=$card['title'];?></h2>
        <p><?=$card['description'];?></p>
        </a>


    </li>

    <?php } ?>
</ul>