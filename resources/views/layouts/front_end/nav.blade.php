<?php 
// Get the current URL without the query string...
 $url = url()->current();
?>      
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <?php 
    $base_user_url = trim(basename($url));
    ?>
    <a href="/" class="navbar-brand p-0">
        <h1 class="m-0">SDI</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a <?php if(preg_match("/about/i", $url)){ ?> class="nav-item nav-link active" <?php } ?> href="/about" class="nav-item nav-link">
                About
            </a>
            <a <?php if(preg_match("/training/i", $url)){ ?> class="nav-item nav-link active" <?php } ?> href="/training" class="nav-item nav-link">
                Training
            </a>
            <a href="index.html" class="nav-item nav-link">
                Advocacy
            </a>
            <a href="index.html" class="nav-item nav-link">
                Consultancy
            </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a <?php if(preg_match("/team/i", $url)){ ?>  class="dropdown-item active bg-success" <?php } ?> href="/team" class="dropdown-item">Our Team</a>
                    <a href="team.html" class="dropdown-item">Become A Member</a>
                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                    <a href="event.html" class="dropdown-item">Events</a>
                </div>
            </div>
            <a <?php if(preg_match("/apply/i", $url)){ ?> class="nav-item nav-link active" <?php } ?> href="/apply" class="nav-item nav-link">
                Apply
            </a>
            <a <?php if(preg_match("/contact/i", $url)){ ?> class="nav-item nav-link active" <?php } ?> href="/contact" class="nav-item nav-link">
                Contact
            </a>
        </div>
        <a  href="/donate" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Donate</a>
    </div>
</nav>