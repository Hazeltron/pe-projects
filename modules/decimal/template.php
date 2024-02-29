<decimal-wrapper>
    <ul>
        <?php 
        $json = file_get_contents('../../data-php/decimal.json');
        $cards = json_decode($json, true);

        foreach(array_slice($cards, 0, 2) as $card): ?>
        <li>
            <article>
                <a href="#">
                    <picture>
                        <img src="assets/<?= $card['img'] ?>" alt="">
                    </picture>
                    <h2 class="lay-attention-voice"><?= $card['title'] ?></h2>
                    <p><?= $card['text'] ?></p>
                    <p class="lay-calm-voice-bold"><?= $card['label'] ?></p>
                </a>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
    
    <ul>
        <?php foreach(array_slice($cards, 2, 2) as $card): ?>
        <li>
            <article>
                <a href="#">
                    <picture>
                        <img src="assets/<?= $card['img'] ?>" alt="">
                    </picture>
                    <h2 class="lay-attention-voice"><?= $card['title'] ?></h2>
                    <p><?= $card['text'] ?></p>
                    <p class="lay-calm-voice-bold"><?= $card['label'] ?></p>
                </a>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</decimal-wrapper>

<script>
    console.clear();

    const firstArticleList = document.querySelector('decimal-wrapper ul:nth-of-type(1)');
    const secondArticleList = document.querySelector('decimal-wrapper ul:nth-of-type(2)');

    function resizeRect(listItemOne, listItemTwo, parent, event) {
        // Find the center 
        const rect = parent.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        console.log("center:", centerX);
        // Mouse position in x-axis
        const mousePosition = event.clientX;
        console.log("mouse position", mousePosition);
        // Distance away from center
        const distance = mousePosition - centerX; 
        console.log("distance away from center:", distance);

        // Linear equation
        // x as the position of the mouse pointer relative to the center of the section containing the two list items
        // w0 as the initial width of the list item
        // Δw as the increase/decrease in width per unit distance
        // Equation: w0 − (Δw * x)
        const widthRight = rect.width + (3 * distance);
        const widthLeft = rect.width - (3 * distance);
        console.log("new left width:", widthLeft);
        console.log("new right width:", widthRight);

        if (distance < 0) {
            listItemOne.style.width = widthLeft + "%";
            listItemTwo.style.width = rect.width + "%";
        } else {
            listItemTwo.style.width = widthRight + "%";
            listItemOne.style.width = rect.width + "%";
        }   
    }

    firstArticleList.addEventListener("mousemove", function(event) {

        const listItemOne = firstArticleList.querySelector("decimal-wrapper li:nth-of-type(1)");
        const listItemTwo = firstArticleList.querySelector("decimal-wrapper li:nth-of-type(2)");

   
        resizeRect(listItemOne, listItemTwo, firstArticleList, event);

    });

    secondArticleList.addEventListener("mousemove", function(event) {

        const listItemOne = secondArticleList.querySelector("decimal-wrapper li:nth-of-type(1)");
        const listItemTwo = secondArticleList.querySelector("decimal-wrapper li:nth-of-type(2)");

 
        resizeRect(listItemOne, listItemTwo, secondArticleList, event);
  
    });

    firstArticleList.addEventListener("mouseleave", function(event) {
    const listItemOne = firstArticleList.querySelector("decimal-wrapper li:nth-of-type(1)");
    const listItemTwo = firstArticleList.querySelector("decimal-wrapper li:nth-of-type(2)");
    const resizerWindow = document.querySelector("resizer");

    if (resizerWindow.innerWidth > 700) {
        listItemOne.style.width = "50%";
        listItemTwo.style.width = "50%";
        console.log("I'm more than 700");
    } else {
        listItemOne.style.width = "100%"; 
        listItemTwo.style.width = "100%"; 
        console.log("I'm less than 700");
    }
});

secondArticleList.addEventListener("mouseleave", function(event) {
    const listItemOne = secondArticleList.querySelector("decimal-wrapper li:nth-of-type(1)");
    const listItemTwo = secondArticleList.querySelector("decimal-wrapper li:nth-of-type(2)");
    const resizerWindow = document.querySelector("resizer");

    if (resizerWindow.innerWidth > 700) {
        listItemOne.style.width = "50%";
        listItemTwo.style.width = "50%";
    } else {
        listItemOne.style.width = "100%"; 
        listItemTwo.style.width = "100%"; 
    }
});

</script>