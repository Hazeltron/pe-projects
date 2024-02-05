<marywood-wrapper>
    <ul>
    <?php 
        $json = file_get_contents('../../data-php/marywood.json');
        $cards = json_decode($json, true);

        foreach($cards as $card) { ?>
        <li>

            <a href="<?=$card['link']?>">

                <article class="<?=$card['class']?>">



                    <text-content>
                        <header>
                            <h2 class="lay-attention-voice"><?=$card['header']?></h2>
                        </header>

                        <p class="lay-loud-voice-bold"><?=$card['number']?></p>
                        <p class="lay-calm-voice"><?=$card['text']?></p>
                    </text-content>
                    
                    <picture>
                        <img src="assets/<?=$card['img']?>" alt="">
                    </picture>

                </article>

            </a>

        </li>
        
        

        <?php } ?>
    </ul>

   
        </marywood-wrapper>