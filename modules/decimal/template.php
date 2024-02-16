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

    pictures.forEach(function(picture) {
        picture.addEventListener('mousemove', function(event) {

            const picLeft = document.querySelectorAll('decimal-wrapper .left-picture');
            const picRight = document.querySelectorAll('decimal-wrapper .right-picture');

            const rect = picture.getBoundingClientRect(); 
            
            const centerX = rect.left + rect.width / 2;

            // track mouse movment for each picture element
            var mouseX = event.clientX;
            
            console.log("Mouse X: ", mouseX, "Center X: ", centerX);

            if (picLeft.centerX < picRight.centerX) {
                console.log("left");
            }


            //0-100% for entire screen 
            //make picture grow as x axis number changes for one of the gird columns
        });
    });
</script>