<decimal-wrapper>
    <ul>
        <?php 
        $json = file_get_contents('../../data-php/decimal.json');
        $cards = json_decode($json, true);

        foreach(array_slice($cards, 0, 2) as $card): ?>
        <li>
            <article>
                <a href="#">
                    <picture class="<?= $card['class'] ?>">
                        <img src="assets/<?= $card['img'] ?>" alt="">
                    </picture>
                    <h2><?= $card['title'] ?></h2>
                    <p><?= $card['text'] ?></p>
                    <p><?= $card['label'] ?></p>
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
                    <picture class="<?= $card['class'] ?>">
                        <img src="assets/<?= $card['img'] ?>" alt="">
                    </picture>
                    <h2><?= $card['title'] ?></h2>
                    <p><?= $card['text'] ?></p>
                    <p><?= $card['label'] ?></p>
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

    function resizeRect(listItemOne, listItemTwo, parent) {
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
        const widthLeft = rect.width - (distance * 3);
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
        const listItemOne = firstArticleList.querySelector("li:nth-of-type(1)");
        const listItemTwo = firstArticleList.querySelector("li:nth-of-type(2)");
        resizeRect(listItemOne, listItemTwo, firstArticleList);
    });

    secondArticleList.addEventListener("mousemove", function(event) {
        const listItemOne = secondArticleList.querySelector("li:nth-of-type(1)");
        const listItemTwo = secondArticleList.querySelector("li:nth-of-type(2)");
        resizeRect(listItemOne, listItemTwo, secondArticleList);
    });

</script>