<div class="gamespot-container">

    
    <?php 
        $json = file_get_contents('../../data-php/game-stop-cards.json');
        $cards = json_decode($json, true);

        foreach ($cards as $card) { ?>
            
            <article class="<?= $card['card-class'] ?>">
            <a href="#">

            <div>
                <picture>
                    <img src="assets/<?= $card['img'] ?>" alt="">
                </picture>
            </div>
                

                <div class="<?= $card['text-class'] ?>">
                    <h2 class="<?= $card['font-class'] ?>"><?= $card['title'] ?></h2>
                    <p><?= $card['text'] ?></p>
                </div>
                </a>
        </article>
            
    <?php } ?>
</div>