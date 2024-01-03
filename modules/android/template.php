<section class="top-section">
    <article>

        <hero-img>
            <!-- background img here -->
        </hero-img>
        
        <hero-grid>

            <div class="title">
                <h2 class="lay-loud-voice">Android lets you do you.</h2>
                <a href="#" class="lay-calm-voice">Get in on what's new</a> 
            </div>
            
            <forground-card>
                <text-content>
                    <h3 class="lay-calm-voice-bold">Emoji Kitchen stickers</h3>
                    <a href="#"><svg class="icon-plus"><use xlink:href="#icon-plus"></use></svg></a> 
                    <h2 class="lay-attention-voice">New season, new sticker combinations.</h2>
                </text-content>

                <picture>
                    <img src="assets/android-girls-on-phone.png" alt="">
                </picture>
            </forground-card>


        </hero-grid>

    </article>

</section>


<section class="middle-section">
    <h2 class="lay-loud-voice">New Android phones dropped.</h2>

    <ul>
    <?php 
        $json = file_get_contents('../../data-php/android.json');
        $cards = json_decode($json, true);

        foreach ($cards as $card) { ?>
        <li>
            <article>
                <picture>
                    <img src="assets/<?= $card['img'] ?>" alt="">
                </picture>

                <text-content>
                    <h3 class="lay-calm-voice-bold"><?= $card['title'] ?></h3>
                    <p class="lay-calm-voice"><?= $card['price'] ?></p>
                    <radio-buttons>
                        <input 
                        name="<?= $card['radio-name'] ?>" 
                        type="radio" value="grey" 
                        data-color="<?= $card['radio-one'] ?>"
                        data-img="<?= $card['img-alt-one'] ?>">
                        

                        <input 
                        name="<?= $card['radio-name'] ?>" 
                        type="radio" value="grey" 
                        data-color="<?= $card['radio-two'] ?>"
                        data-img="<?= $card['img-alt-two'] ?>">

                        <input 
                        name="<?= $card['radio-name'] ?>" 
                        type="radio" value="grey" 
                        data-color="<?= $card['radio-three'] ?>"
                        data-img="<?= $card['img-alt-three'] ?>">

                        <input 
                        name="<?= $card['radio-name'] ?>" 
                        type="radio" value="grey" 
                        data-color="<?= $card['radio-four'] ?>"
                        data-img="<?= $card['img-alt-four'] ?>">

                    </radio-buttons>
                    
                    <a href="#" class="lay-calm-voice"><?= $card['button-text'] ?> <svg class="icon-plus"><use xlink:href="#icon-plus"></use></svg></a>
                    <!-- or button -->
                </text-content>
                
            </article>

        </li>
    <?php } ?>
    </ul>

    <button-control>
        <button onclick="scrollCards('one')"></button>
        <button onclick="scrollCards('two')"></button>
        <button onclick="scrollCards('three')"></button>
        <button onclick="scrollCards('four')"></button>
        <button onclick="scrollCards('five')"></button>
        <button onclick="scrollCards('six')"></button>
    </button-control>
    

</section>

<section class="lower-section">
    <div class="lower-section-title">
        <h2 class="lay-loud-voice">The only connected ecosystem with choice.</h2>
        <a href="#" class="lay-calm-voice">Connect to a world of devices<svg class="icon-right-arrow"><use xlink:href="#icon-right-arrow"></use></svg></a>
    </div>

    <div class="grid-wrapper-bottom">
        <article>
            <picture>
                <img src="assets/android-man-and-woman.png" alt="">
            </picture>
            
            <h2 class="lay-attention-voice">Seamlessly share photos, videos and more with Nearby Share.</h2>
            <a href=""><svg class="icon-plus"><use xlink:href="#icon-plus"></use></svg></a> 
            <!-- or should this bbe a button? -->
            

        </article>

        <article>
            <picture>
                <img src="assets/android-man-with-clicker.png" alt="">
            </picture>
            
            <h2 class="lay-attention-voice">Share your phone screen on a big screen.</h2>
            <a href=""><svg class="icon-plus"><use xlink:href="#icon-plus"></use></svg></a> 
            <!-- or should this bbe a button? -->
            

        </article>
    </div>


</section>
<script>
    //click the button 
    //change the color of the background
    console.clear();

console.log(window.innerWidth);

const cards = document.querySelectorAll('.middle-section li');

cards.forEach(function(card) {
    card.addEventListener('click', function(event) {
        if (event.target.matches('input[data-color]')) {
            card.style.backgroundColor = event.target.getAttribute('data-color');
        }
    });
});

let currentScrollIndex = 0;
const scrollBar = document.querySelector('.middle-section ul')

function scrollCards(cardNumber){
    if (cardNumber === 'one' ) {
        scrollBar.style.transform = 'translateX(0vw)';
    }
    if (cardNumber === 'two' ) {
        scrollBar.style.transform = 'translateX(-100vw)';
    }
    if (cardNumber === 'three') {
        scrollBar.style.transform = 'translateX(-200vw)';
    }
    if (cardNumber === 'four') {
        scrollBar.style.transform = 'translateX(-300vw)';
    }
    if (cardNumber === 'five') {
        scrollBar.style.transform = 'translateX(-400vw)';
    }
    if (cardNumber === 'six') {
        scrollBar.style.transform = 'translateX(-500vw)';
    }

}



function switchImg() {
    cards.forEach(function(card){
        const cardImage = card.querySelector('.middle-section img');
        card.addEventListener('click', function(event){
            if (event.target.matches('input[data-img]')) {
            cardImage.src = event.target.getAttribute('data-img');
        }

        });
    });
}

switchImg();


// function toggleButtons() {
//     const button = document.querySelect('.middle-section button');
//     button.classList.toggle('')
// }


</script>
