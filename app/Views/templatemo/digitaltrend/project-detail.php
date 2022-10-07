<?= $this->extend('templatemo/' . $template_name . '/layout'); ?>

<?= $this->section('content'); ?>

<body>

    <?= $this->include('templatemo/' . $template_name . '/menubar'); ?>

    <!-- PROJECT DETAIL -->
    <section class="project-detail section-padding-half">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">

                    <h4>Digital Marketing Agency</h4>

                    <h1>127+ Duis sollicitudin urna id elit pulvinar placerat</h1>
                </div>

            </div>
        </div>
    </section>

    <div class="full-image text-center" data-aos="zoom-in">
        <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/project/project-detail/interview-process.jpg" class="img-fluid" alt="interview process">
    </div>

    <!-- PROJECT DETAIL -->
    <section class="project-detail section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12 mb-5">

                    <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/project/project-detail/personal-website.png" class="img-fluid" alt="personal website" data-aos="fade-up">
                </div>

                <div class="col-lg-5 col-md-6 mr-lg-auto mt-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">

                    <h2>Pellentesque pretium interdum</h2>

                    <p class="mt-3 mb-4">Nunc sapien nulla, interdum at diam non, aliquam vestibulum leo. Fusce laoreet malesuada ante, consectetur consequat.</p>

                    <ul class="list-detail">
                        <li><span>Curabitur commodo a sapien non</span></li>
                        <li><span>Sed facilisis convallis turpis</span></li>
                        <li><span>Quisque placerat augue neque</span></li>
                        <li><span>Nullam fringilla arcu a tortor</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 col-12">
                <div class="embed-responsive embed-responsive-16by9 my-5 py-5" data-aos="fade-up">
                    <iframe class="embed-responsive-item" width="800" height="450" src="https://www.youtube.com/embed/myVN26Vx4MU?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-9 mx-auto col-12" data-aos="fade-up">
                <div class="client-info mt-lg-5 py-lg-5">
                    <h3>Curabitur egestas mollis tellus sit amet porttitor. Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel.</h3>

                    <div class="d-flex align-items-center mt-3">
                        <img src="<?= $assets ?>vendor/templatemo_538_digital_trend/images/project/project-detail/male-avatar.png" class="img-fluid" alt="male avatar">

                        <p>Angelo Sharp, Creative Director</p>
                    </div>
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