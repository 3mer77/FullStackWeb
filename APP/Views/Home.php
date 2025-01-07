<?php include VIEWS . "inc/Header.php";


if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']; }?>

<main>
    <article>
        <!-- 
        - #HERO
    -->

        <section class="hero" id="hero">
            <div class="container">

                <p class="hero-subtitle"> <?php echo htmlspecialchars($username) ?></p>

                <h1 class="h1 hero-title">ETHIO GAMES</h1>

                <div class="btn-group">

                    <button class="btn btn-link">Dream making</button>

                </div>

            </div>
        </section>





        <div class="section-wrapper">





            <!-- 
          - #Game Area
        -->

            <section class="gallery" id="game">
                <div class="container">
                    <a href="../html/GameArea.html">
                        <h2 class="h2 section-title">Coming Soon</h2>
                    </a>
                    <ul class="gallery-list has-scrollbar">

                        <li>
                            <figure class="gallery-item">

                                <img src="<?php echo BURL . 'assets/images/2972150.jpg' ?>" alt="nn image">

                            </figure>
                        </li>

                        <li>
                            <figure class="gallery-item">
                                <img src="<?php echo BURL . 'assets/images/346520.jpg' ?>" alt="nn image">
                            </figure>
                        </li>

                        <li>
                            <figure class="gallery-item">
                                <img src="<?php echo BURL . 'assets/images/521950.jpg' ?>" alt="nn image">
                            </figure>
                        </li>

                        <li>
                            <figure class="gallery-item">
                                <img src="<?php echo BURL . 'assets/images/4922983.jpg' ?>" alt="nn image">
                            </figure>
                        </li>

                    </ul>

                </div>
            </section>


            <!-- 
          - #GEARS
        -->

            <section class="gears" id="gears">
                <div class="container">
                    <a href="<?php echo url("product/index"); ?>">
                        <h2 class="h2 section-title">check our gears</h2>
                    </a>

                    <ul class="gears-list">

                        <li>
                            <div class="gears-card">

                                <div class="card-banner">

                                    <a href="#">
                                        <img src="<?php echo BURL . 'assets/images/gears-img-1.png' ?>" alt="nn image">
                                    </a>

                                    <button class="share">
                                        <ion-icon name="share-social"></ion-icon>
                                    </button>

                                    <div class="card-time-wrapper">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <span>In 4 days</span>
                                    </div>

                                </div>

                                <div class="card-content">

                                    <div class="card-title-wrapper">

                                        <h3 class="h3 card-title">Headphone</h3>

                                        <p class="card-subtitle">e-sports</p>

                                    </div>

                                    <div class="card-prize">$18</div>

                                </div>

                                <div class="card-actions">

                                    <button class="btn btn-primary">
                                        <ion-icon name="add-outline"></ion-icon>

                                        <span>Add to cart</span>
                                    </button>

                                    <button class="btn card-btn">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="gears-card">

                                <div class="card-banner">

                                    <a href="#">
                                        <img src="<?php echo BURL . 'assets/images/gears-img-2.png' ?>" alt="nn image">
                                    </a>

                                    <button class="share">
                                        <ion-icon name="share-social"></ion-icon>
                                    </button>

                                    <div class="card-time-wrapper">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <span>In 4 days</span>
                                    </div>

                                </div>

                                <div class="card-content">

                                    <div class="card-title-wrapper">

                                        <h3 class="h3 card-title">Controller</h3>

                                        <p class="card-subtitle">e-sports</p>

                                    </div>

                                    <div class="card-prize">$29</div>

                                </div>

                                <div class="card-actions">

                                    <button class="btn btn-primary">
                                        <ion-icon name="add-outline"></ion-icon>

                                        <span>Add to cart</span>
                                    </button>

                                    <button class="btn card-btn">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="gears-card">

                                <div class="card-banner">

                                    <a href="#">
                                        <img src="<?php echo BURL . 'assets/images/gears-img-3.png' ?>" alt="nn image">
                                    </a>

                                    <button class="share">
                                        <ion-icon name="share-social"></ion-icon>
                                    </button>

                                    <div class="card-time-wrapper">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <span>In 4 days</span>
                                    </div>

                                </div>

                                <div class="card-content">

                                    <div class="card-title-wrapper">

                                        <h3 class="h3 card-title">Gaming mask</h3>

                                        <p class="card-subtitle">e-sports</p>

                                    </div>

                                    <div class="card-prize">$45</div>

                                </div>

                                <div class="card-actions">

                                    <button class="btn btn-primary">
                                        <ion-icon name="add-outline"></ion-icon>

                                        <span>Add to cart</span>
                                    </button>

                                    <button class="btn card-btn">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>


            <!-- 
        - #ABOUT
        -->

            <a href="<?php echo url("product/index"); ?>">
                <h2 class="h2 section-title">OUR TEAM</h2>
            </a>
            <section class="about" id="about">
                <div class="container">


                    <div class="about-content">

                        <p class="about-subtitle">Find your perfect game</p>

                        <h2 class="about-title">Experience just for <strong>gamers</strong> </h2>

                        <p class="about-text">
                            "Our Ethio" emerged on April 23, 2024, when a team of four passionate individuals from
                            Ethiopia united with a shared mission: to reach people's hearts through the medium of
                            games. With a focus on storytelling, cultural representation, and innovation, they
                            dedicated themselves to creating captivating gaming experiences. By infusing their games
                            with elements rooted in Ethiopian heritage and showcasing the country's beauty, they
                            aimed to foster pride and connection. Overcoming challenges, their creations resonated
                            with an expanding audience, forging connections and leaving a lasting impact. Today,
                            "Our Ethio" stands as a testament to the transformative power of games, touching hearts
                            and celebrating Ethiopian culture worldwide.
                        </p>

                        <p class="about-bottom-text">
                            <ion-icon name="arrow-forward-circle-outline"></ion-icon>

                            <span>Will sharpen your brain and focus</span>
                        </p>

                    </div>

                </div>
            </section>



        </div>


    </article>
</main>




<?php include VIEWS . "inc/Footer.php"; ?>





<!-- 
    - #GO TO TOP
  -->

<a href="#top" class="btn btn-primary go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
</a>





<!-- 
    - custom js link
  -->
<script>
    <?php include ASSETS . 'js/script.js' ?>
</script>

<script>
    <?php include ASSETS . 'js/swiper-bundle.min.js' ?>
</script>

<!-- 
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>