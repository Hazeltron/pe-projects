<div class="upper-shell">
    <ul class="upper-grid">
        <?php 
        $json = file_get_contents('../../data-php/shell.json');
        $cards = json_decode($json, true);

        foreach (array_slice($cards, 0, 5) as $card) { ?>
            <li>
            <a href="#" class="card-link">hello</a>
                    <article class="upper-cards">
                            <picture>
                                <img src="assets/<?= $card['img'] ?>" alt="">
                            </picture>

                        <div class="shell-text">
                            <h2 class="lay-attention-voice"><?= $card['title'] ?></h2>
                            <p class="lay-calm-voice"><?= $card['text'] ?></p>
                            <a href="#" class="lay-calm-voice link-text"><?= $card['link-text'] ?></a>
                        </div>
                        
                    </article>
      
            </li>
        <?php } ?>
    </ul>
</div>

<div class="lower-shell">
    <h2 class="lay-loud-voice">Featured content</h2>
    <ul class="lower-grid">
        <?php 
        foreach (array_slice($cards, 5) as $card) { ?>
            <li>
            <a href="#" class="card-link"></a>
                    <article class="lower-cards">
                            <picture>
                                <img src="assets/<?= $card['img'] ?>" alt="">
                            </picture>

                        <div class="shell-text">
                            <h2 class="lay-attention-voice"><?= $card['title'] ?></h2>
                            <p class="lay-calm-voice"><?= $card['text'] ?></p>
                            
                            <a href="#" class="lay-calm-voice link-text"><?= $card['link-text'] ?></a>
                        </div>
                        
                    </article>
                
            </li>
        <?php } ?>
    </ul>
</div>