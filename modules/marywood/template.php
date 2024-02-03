<marywood-wrapper>
    <ul>
    <?php 
        $json = file_get_contents('../../data-php/marywood.json');
        $cards = json_decode($json, true);

        foreach($cards as $card) { ?>
        <li>
            <a href="<?=$card['link']?>">
                <article class="<?=$card['class']?>">
                    <header>
                        <h2><?=$card['header']?></h2>
                    </header>
                    <p><?=$card['number']?></p>
                    <p><?=$card['text']?></p>
                    
                    <svg>
                        <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
                    </svg>
                </article>
            </a>

        </li>
        
        

        <?php } ?>
    </ul>

   
</marywood-wrapper