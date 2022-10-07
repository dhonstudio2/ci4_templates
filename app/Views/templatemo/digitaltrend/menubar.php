<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg <?= $template_page == 'blog' || $template_page == 'contact' ? "position-absolute" : ($template_page == 'project-detail' ? "position-relative" : "") ?>">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('templatemo/' . $template_name) ?>">
            <i class="fa fa-line-chart"></i>
            Digital Trend
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= base_url('templatemo/' . $template_name) ?>#about" class="nav-link smoothScroll">Studio</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('templatemo/' . $template_name) ?>#project" class="nav-link smoothScroll">Our Works</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('templatemo/' . $template_name . '/blog') ?>" class="nav-link <?= $template_page == 'blog' ? "active" : "" ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('templatemo/' . $template_name . '/contact') ?>" class="nav-link <?= $template_page == 'contact' ? "active" : "" ?> contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>