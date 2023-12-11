<video-cta>
    <video-container>
        <video class="tiff-video" autoplay muted loop>
        <source src="assets/video.mp4" type="video/mp4">
        </video>
        <video-states>
            <button class="play" onclick="playPause()"><svg class="icon-pause"><use xlink:href="#icon-pause"></use></svg></button>
            <button class="unmute" onclick="muteUnmute()"><svg class="icon-volume-up"><use xlink:href="#icon-volume-up"></use></svg></button>
        </video-states>
    
    </video-container>
    
    <text-content>
        <div class="title-tiff">
        <h2 class="lay-loud-voice">A Tiffany Holiday Awaits</h2>
        <p>Join Rosie Huntington-Whiteley as she captures the joy and magic of the festive season in the heart of New York City.</p>
        <a href="#">Explore The Story</a>

        </div>
       
    </text-content>
</video-cta>

<script>
    const video = document.querySelector(".tiff-video");
    const playButton = document.querySelector(".play");
    const muteButton = document.querySelector(".unmute");


    function playPause() {
        if(video.paused) {
            video.play();
            playButton.innerHTML = `<svg class="icon-pause"><use xlink:href="#icon-pause"></use></svg>`;
        } else {
            video.pause();
            playButton.innerHTML = `<svg class="icon-play"><use xlink:href="#icon-play"></use></svg>`;
            
        }
    };

    function muteUnmute() {
        if(video.muted) {
            video.muted = false;
            muteButton.innerHTML = `<svg class="icon-volume-off"><use xlink:href="#icon-volume-off"></use></svg>`;
        } else {
            video.muted = true;
            muteButton.innerHTML = `<svg class="icon-volume-up"><use xlink:href="#icon-volume-up"></use></svg>`;
        }
    };


    //if the play button is pressed add the pause button
    //if the unmute button is pressed add the mute button
    

</script>