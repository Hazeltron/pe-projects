<decimal-wrapper>
    <ul>
        <?php 
        $json = file_get_contents('../../data-php/decimal.json');
        $cards = json_decode($json, true);

        
        
        foreach($cards as $card) { ?>
        <article>
            <a href="#">
            <picture class="<?=$card['class']?>">
                <img src="assets/<?=$card['img']?>" alt="">
            </picture>
            <h2><?=$card['title']?></h2>
            <p><?=$card['text']?></p>
            <p><?=$card['label']?></p>
            </a>
        </article>

        <?php } ?>
    </ul>
</decimal-wrapper>

<script>
    console.clear();

    const pictures = document.querySelectorAll('decimal-wrapper picture');

    // const picLeft = document.querySelectorAll('decimal-wrapper .left-picture');

    // const picRight = document.querySelectorAll('decimal-wrapper .right-picture');

    pictures.forEach(function(picture) {
        picture.addEventListener('mousemove', function(event) {
            const rect = picture.getBoundingClientRect(); 
            const centerX = rect.left + rect.width / 2;
            const left = rect.left;
            const mouseX = event.clientX;
            
            console.log("Mouse X: ", mouseX, "Center X: ", centerX, left);
            
            if (mouseX < centerX) {
                console.log("Mouse is on the left");
                picture.style.minWidth = "40vw";

            } else if (mouseX > centerX) {
                console.log("Mouse is on the right");
                picture.style.minWidth = "initial";

            } else {
                console.log("Mouse is exactly on the center");
            }
        });
    });
</script>