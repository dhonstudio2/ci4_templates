<?= $this->extend('templatemo/' . $template_name . '/layout'); ?>

<?= $this->section('content'); ?>

<body>

    <?= $this->include('templatemo/' . $template_name . '/menubar'); ?>

    <!-- BLOG -->
    <section class="blog section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                    <h1 class="mb-4" data-aos="fade-up">Digital Trend Blog</h1>
                </div>

                <div class="col-lg-7 col-md-7 col-12 mb-4">
                    <div class="blog-header" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/blog/blog-header-image.jpg" class="img-fluid" alt="blog header">

                        <div class="blog-header-info">
                            <h4 class="blog-category text-info">Creative</h4>

                            <h3><a href="blog-detail.html">The Key to Creative Work is Knowing When to Walk Away</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-12 mb-4">
                    <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/blog/blog-sidebar-image.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                            <h4 class="blog-category text-danger">Design</h4>

                            <h3><a href="blog-detail.html">Why Truly Accessible Design Benefits Everyone</a></h3>
                        </div>
                    </div>

                    <div class="blog-sidebar py-4 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/blog/blog-sidebar-image01.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                            <h4 class="blog-category text-success">lifestyle</h4>

                            <h3><a href="blog-detail.html">Be Humble About What You Know</a></h3>
                        </div>
                    </div>

                    <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/blog/blog-sidebar-image02.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                            <h4 class="blog-category text-primary">Coding</h4>

                            <h3><a href="blog-detail.html">The Mistakes I Made As a Coding Beginner</a></h3>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12">

                    <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/newsletter.png" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
                </div>

                <div class="col-lg-5 mr-auto mt-5 pt-5 col-md-6 col-12 newsletter-form">
                    <h4 data-aos="fade-up" data-aos-delay="200">Email Newsletter</h4>

                    <h2 data-aos="fade-up" data-aos-delay="300">Let’s stay up-to-date. We'll share you all good stuffs.</h2>
                    <form action="#" method="get" enctype="multipart/form-data">
                        <div class="form-group mt-4" data-aos="fade-up" data-aos-delay="400">
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Please enter your email" required>

                            <small id="emailHelp" class="form-text text-muted">We'll NOT share your email address to anyone else.</small>

                        </div>

                        <div class="form-group form-check" data-aos="fade-up" data-aos-delay="500">
                            <input name="monthly" type="checkbox" class="form-check-input" id="monthly">

                            <label class="form-check-label" for="monthly">Please send me a monthly newsletter.</label>
                        </div>

                        <button type="submit" data-aos="fade-up" data-aos-delay="500" class="btn w-100 mt-3">Sign up</button>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        +99 080 070 4224
                    </p>

                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            hello@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Our Studio</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i>
                        Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; 2020 Your Company
                        <br>
                        <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a>
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                    <ul class="footer-link">
                        <li><a href="#">Stories</a></li>
                        <li><a href="#">Work with us</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-dribbble"></a></li>
                        <li><a href="#" class="fa fa-behance"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="<?= $assets ?>vendor/templatemo_538_digital_trend/js/jquery.min.js"></script>
    <script src="<?= $assets ?>vendor/templatemo_538_digital_trend/js/bootstrap.min.js"></script>
    <script src="<?= $assets ?>vendor/templatemo_538_digital_trend/js/aos.js"></script>
    <script src="<?= $assets ?>vendor/templatemo_538_digital_trend/js/owl.carousel.min.js"></script>
    <script src="<?= $assets ?>vendor/templatemo_538_digital_trend/js/custom.js"></script>

</body>

<?= $this->endSection(); ?>