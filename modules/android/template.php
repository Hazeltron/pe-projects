<section class="top-section">
    <article>

        <background-card>

            <picture>
                <img src="assets/android-main-lady-small.png" alt="">
            </picture>

            <text-content>
                <h2 class="lay-attention-voice">Android lets you do you.</h2>
                <a href="#" class="lay-calm-voice">Get in on what's new</a> 
            </text-content>
                
        </background-card>


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
                    <a href=""></a>
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

