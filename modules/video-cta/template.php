<video-cta>
    <video-container>
        <video class="tiff-video" autoplay muted loop>
        <source src="assets/video.mp4" type="video/mp4">
        </video>
        <video-states>
            <button onclick="playPause()">playpause</button>
            <button onclick="muteUnmute()">mute</button>
        </video-states>
    
    </video-container>
    
    <text-content>
        <div class="tiitle-tiff">
        <h2 class="lay-loud-voice">A Tiffany Holiday Awaits</h2>
        <p>Join Rosie Huntington-Whiteley as she captures the joy and magic of the festive season in the heart of New York City.</p>
        <a href="#">Explore The story</a>

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