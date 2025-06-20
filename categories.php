<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Categories | SonaMistry</title>
    <!-- header head -->
    <?php
	include_once 'includes/header-includes.php';
?>
    <!--close  header head -->

</head>

<body>
    <div class="main-wrapper">

        <main class="main_wrap">
            <!-- Header -->
            <?php
				include_once 'includes/header.php';
			?>
            <!--close Header -->

            <!--Content-->
            <section class="sm-hero-banner sm-first-sec">
                <div class="inner-wrap">
                    <div class="sm-img-wrapper">
                        <div class="sm-img-wrap">
                            <img class="for-desktop-img" src="images/mehndi79.webp" alt="mehendi banner">
                        </div>
                    </div>
                    <div class="sm-doodle container sm-banner-container">
                        <div class="sm-banner-container-wrap">
                            <div class="sec-icon">
                                <img class="sec-icon-img" src="images/flowerCircle.svg" alt="flowerCircle">
                            </div>
                            <div class="sec-head">
                                <p class="sm-subline">Find Your Perfect Pattern...</p>
                                <h1 class="sm-title">Celebrate Uniquely, Choose Your Style</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sm-categories-sec bg-light">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="sm-sec-head sm-center">
                            <h2 class="sm-title">Our Categories</h2>
                            <p class="sm-desc">
                                Discover a stunning range of Mehndi styles tailored for every
                                occasion and personality. From intricate bridal designs to
                                bold Arabic patterns and modern minimal art, our categories
                                reflect tradition, creativity, and elegance. Explore the
                                variety and find the perfect design that speaks to your style.
                            </p>
                        </div>

                        <div class="sm-card-wrapper">
                            <div class="sm-categorie-list">
                                <div class="sm-categorie-item-card">
                                    <div class="sm-categorie-item">
                                        <div class="sm-img-wrapper">
                                            <div class="sm-img-wrap">
                                                <img src="images/hand6.jpg" alt="mehndi" />
                                            </div>
                                            <div class="sm-caption">
                                                <p>
                                                    Bridal <br />
                                                    Mehndi
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sm-categorie-desc">
                                            <p>
                                                Perfect bridal Mehndi designs that narrate the story
                                                of love, commitment, and new beginnings, filled with
                                                intricate details and personalized patterns.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm-categorie-item-card">
                                    <div class="sm-categorie-item">
                                        <div class="sm-img-wrapper">
                                            <div class="sm-img-wrap">
                                                <img src="images/hand7.jpg" alt="mehndi" />
                                            </div>
                                            <div class="sm-caption">
                                                <p>
                                                    Arabic <br />
                                                    Mehndi
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sm-categorie-desc">
                                            <p>
                                                Bold, beautiful, and spacious Arabic patterns
                                                featuring floral motifs and graceful curves, ideal for
                                                modern women who love simplicity with elegance.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm-categorie-item-card">
                                    <div class="sm-categorie-item">
                                        <div class="sm-img-wrapper">
                                            <div class="sm-img-wrap">
                                                <img src="images/hand8.jpg" alt="mehndi" />
                                            </div>
                                            <div class="sm-caption">
                                                <p>
                                                    Rajasthani <br />
                                                    Mehndi
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sm-categorie-desc">
                                            <p>
                                                Traditional Rajasthani designs reflecting rich Indian
                                                culture, filled with detailed motifs of peacocks,
                                                mandalas, and cultural symbolism.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm-categorie-item-card">
                                    <div class="sm-categorie-item">
                                        <div class="sm-img-wrapper">
                                            <div class="sm-img-wrap">
                                                <img src="images/hand9.jpg" alt="mehndi" />
                                            </div>
                                            <div class="sm-caption">
                                                <p>
                                                    Modern <br />
                                                    Mehndi
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sm-categorie-desc">
                                            <p>
                                                Modern Mehndi blends contemporary creativity with
                                                minimalist elegance, offering chic designs perfect for
                                                casual events and stylish gatherings.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-wrap">
                            <a href="#0" class="sm-btn btn-primary">
                                Load More
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sm-categories-filter-sec">
                <div class="container">
                    <div class="inner-wrapper">
                        <div class="sm-filter-row">
                            <div id="filter-buttons" class="sm-filter-buttons">
                                <button class="sm-filter-btn" data-category="all">All</button>
                                <button class="sm-filter-btn" data-category="bridal">
                                    Bridal
                                </button>
                                <button class="sm-filter-btn" data-category="arabic">
                                    Arabic
                                </button>
                                <button class="sm-filter-btn" data-category="modern">
                                    Modern
                                </button>
                            </div>
                        </div>
                        <div id="category-list" class="sm-category-list">
                            <div class="category-item" data-category="bridal">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/hand6.jpg">
                                    <div class="sm-img-wrap">
                                        <img src="images/hand6.jpg" alt="Bridal Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="arabic">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/hand7.jpg">
                                    <div class="sm-img-wrap">
                                        <img src="images/hand7.jpg" alt="Arabic Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="modern">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/hand8.jpg">
                                    <div class="sm-img-wrap">
                                        <img src="images/hand8.jpg" alt="Modern Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="bridal">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/hand9.jpg">
                                    <div class="sm-img-wrap">
                                        <img src="images/hand9.jpg" alt="Bridal Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="arabic">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi16.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi16.webp" alt="Arabic Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="modern">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi15.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi15.webp" alt="Modern Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="bridal">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi1.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi1.webp" alt="Bridal Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="arabic">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi2.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi2.webp" alt="Arabic Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="modern">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi3.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi3.webp" alt="Modern Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="bridal">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi4.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi4.webp" alt="Bridal Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="arabic">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi5.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi5.webp" alt="Arabic Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="modern">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi6.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi6.webp" alt="Modern Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="bridal">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi7.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi7.webp" alt="Bridal Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="arabic">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi8.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi8.webp" alt="Arabic Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="modern">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi9.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi9.webp" alt="Modern Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="bridal">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi10.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi10.webp" alt="Bridal Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="arabic">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi11.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi11.webp" alt="Arabic Mehndi" />
                                    </div>
                                </div>
                            </div>
                            <div class="category-item" data-category="modern">
                                <div class="sm-img-wrapper" data-fancybox="gallery" data-src="images/mehndi12.webp">
                                    <div class="sm-img-wrap">
                                        <img src="images/mehndi12.webp" alt="Modern Mehndi" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Content-->

        </main>
        <!--footer -->
        <?php
					include_once 'includes/footer.php';
			 ?>
        <!--close footer -->
    </div>

    <!--footer scrpit -->
    <?php
	include_once 'includes/footer-includes.php';
?>
    <!--close footer scrpit -->

</body>

</html>