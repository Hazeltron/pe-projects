<mubasic-wrapper>

    <article>

        <header>
            <a href="#" class="lay-calm-voice">mubasic</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 356 373" fill="none">
            <path d="M248 9.53571C248 4.26928 252.269 0 257.536 0H346.464C351.731 0 356 4.26928 356 9.53571V114.464C356 119.731 351.731 124 346.464 124H257.536C252.269 124 248 119.731 248 114.464V9.53571Z" fill="#1B1A19"></path>
            <rect y="139.996" width="108" height="123.964" rx="9.53571" fill="#1B1A19"></rect>
            <rect x="124" y="62.1211" width="108" height="309.911" rx="9.53571" fill="#1B1A19"></rect>
            <rect x="248" y="139.996" width="108" height="123.964" rx="9.53571" fill="#1B1A19"></rect>
        </svg>
        </header>

        <h2 class="lay-louder-voice">The <span>#1</span> source for children's music.</h2>

        <footer>
            <p>An ever-growing catalogue of high-quality children’s music, sourced by talented music creators from all over the world.</p>
        </footer>
            
    </article>

    

    <aside>
        <ul>
            <li onClick="playSound('assets/arcade.mp3')"><p>m</p></li>
            <li onClick="playSound('assets/arcade-alert.mp3')"><p>u</p></li>
            <li onClick="playSound('assets/arcade-mission-complete.mp3')"><p>b</p></li>
            <li onClick="playSound('assets/arcade-bonus.mp3')"><p>a</p></li>
            <li onClick="playSound('assets/arcade-jump.mp3')"><p>s</p></li>
            <li onClick="playSound('assets/arcade-new-item.mp3')"><p>i</p></li>
            <li onClick="playSound('assets/arcade-new-level.mp3')"><p>c</p></li>
        </ul>
    </aside>

</mubasic-wrapper>

<script>
      function playSound(audioFile) {
        const audio = new Audio(audioFile);
        audio.play();
    }
</script>