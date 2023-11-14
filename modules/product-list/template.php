

        <module>
     
       

        <?php
        $json = file_get_contents('../../data-php/product-list.json');
        $products = json_decode($json, true);

        foreach ($products as $product) { ?>

        <article class='product-card'>

            <figure class='thumbnail'>
                <picture class='product-picture pic-1'>
                    <img src="assets/<?= $product['image-1'] ?>" alt="" />
                </picture>

                <picture class='product-picture pic-2'>
                    <img src="assets/<?= $product['image-2'] ?>" alt="" />
                </picture>
            </figure>

            <color-picker>
                <ul>
                    <li>
                        <picture class="color-select">
                            <img src="assets/<?= $product['color-select'] ?>" alt="">
                        </picture>
                    </li>
                    <!-- Add more color options here if needed -->
                </ul>
                <ul>
                    <li>
                        <picture class="color-select">
                            <img src="assets/<?= $product['color-select'] ?>" alt="">
                        </picture>
                    </li>
                    <!-- Add more color options here if needed -->
                </ul>
            </color-picker>

            <p class="product-calm-voice product-name"><?= $product['name'] ?></p>

            <rating>
                <ul>
                    <li>
                        <picture>
                            <img src="assets/<?= $product['star-rating'] ?>" alt="">
                        </picture>
                    </li>
                </ul>

                <p><?= $product['num-reviews'] ?></p>
            </rating>

            <p class="product-calm-voice"><?= $product['price'] ?></p>

            <a class="add-button href="#">
                <div class="product-button-voice">+</div>
                <div class="product-button-voice">Add</div>
            </a>
        </article>

    <?php } ?>

</module>
