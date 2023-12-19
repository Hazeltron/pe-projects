<div class="upper-shell">
    <ul class="upper-grid">
        <?php 
        $json = file_get_contents('../../data-php/shell.json');
        $cards = json_decode($json, true);

        foreach (array_slice($cards, 0, 5) as $card) { ?>
            <li>
                <article class="upper-cards">
                    <a href="#">
                        <div class="shell-img">
                            <picture>
                                <img src="assets/<?= $card['img'] ?>" alt="">
                            </picture>
                        </div>

                        <div class="shell-text">
                            <h2 class="lay-attention-voice"><?= $card['title'] ?></h2>
                            <p class="lay-calm-voice"><?= $card['text'] ?></p>
                            <a href="#" class="lay-calm-voice"><?= $card['link'] ?></a>
                        </div>
                    </a>
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
                <article class="lower-cards">
                    <a href="#">
                        <div class="shell-img">
                            <picture>
                                <img src="assets/<?= $card['img'] ?>" alt="">
                            </picture>
                        </div>

                        <div class="shell-text">
                            <h2 class="lay-attention-voice"><?= $card['title'] ?></h2>
                            <p><?= $card['text'] ?></p>
                            <a href="#"><?= $card['link'] ?></a>
                        </div>
                    </a>
                </article>
            </li>
        <?php } ?>
    </ul>
</div>