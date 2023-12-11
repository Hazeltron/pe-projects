<video-cta>
    <video-container>
        <video class="tiff-video" autoplay muted loop>
        <source src="assets/video.mp4" type="video/mp4">
        </video>
        <video-states>
            <button onclick="playPause()"><svg class="icon-play"><use xlink:href="#icon-play"></use></svg></button>
            <button onclick="muteUnmute()"><svg class="icon-mute"><use xlink:href="#icon-sound"></use></svg></button>
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


    function playPause() {
        if(video.paused) {
            video.play();
        } else {
            video.pause();
        }
    };

    function muteUnmute() {
        if(video.muted) {
            video.muted = false;
        } else {
            video.muted = true;
        }
    };

    

</script>