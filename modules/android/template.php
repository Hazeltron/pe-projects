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
                    <h3>Emoji Kitchen stickers</h3>
                    <a href=""></a> 
                    <h2 class="lay-attention-voice">New season, new sticker combinations.</h2>
                </text-content>

                <picture>
                    <img src="assets/android-girls-on-phone.png" alt="">
                </picture>
            </forground-card>


        </hero-grid>

    </article>

</section>


<section>
    <h2>New Android phones dropped.</h2>

    <ul>
    <?php 
        $json = file_get_contents('../../data-php/android.json');
        $cards = json_decode($json, true);

        foreach ($cards as $card) { ?>
        <li>
            <article>
                <picture>
                    <img src="" alt="">
                </picture>

                <text-content>
                    <h3></h3>
                    <input name="color" type="radio" value="grey">
                    <!-- or button -->
                </text-content>
            </article>

        </li>
    <?php } ?>
    </ul>
    

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

