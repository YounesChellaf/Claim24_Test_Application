<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Claim24 test application</title>

    <!-- Custom fonts for this theme -->
    <link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" />
    <link href="<?php echo base_url(); ?>assets/fonts/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>assets/css/freelancer.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>#page-top">Claim24</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>#portfolio">Service</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>#about">About</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>#contact">Contact</a>
                </li>
                <?php if (isset($_SESSION['logged_user'])){?>
                    <li class="nav-item dropdown mx-0 mx-lg-1 row" style="padding-left: 10%">
                        <img style="width: 20%; height: 100%"  src="<?php echo base_url(); ?>assets/img/avataaars.svg" alt="">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: 5%">
                            <?php echo $_SESSION['first_name'];?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
                        </div>
                    </li>
                    <?php
                }
                else { ?>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login">Login</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="register">Register</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<? $menu?>

<footer class="footer text-center">
    <div class="container">
        <div class="row">

            <!-- Footer Location -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Netherland</p>
            </div>

            <!-- Footer Social Icons -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/Claim24-UK-500333113821296/" target="_">
                    <i class="fab fa-fw fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/claim24uk/" target="_blank">
                    <i class="fab fa-fw fa-instagram"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/company/14015909/" target="_blank">
                    <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
            </div>

            <!-- Footer About Text -->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Claim24</h4>
                <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                </p>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Test application by Younes CHELLAF</small>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<? $model?>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<script>
    $(document).ready(function(){
        var sample_data = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch:'<?php echo base_url(); ?>autocomplete/fetch',
            remote:{
                url:'<?php echo base_url(); ?>autocomplete/fetch/%QUERY',
                wildcard:'%QUERY'
            }
        });
        $('#prefetch .type').typeahead(null, {
            name: 'sample_data',
            display: 'name',
            source:sample_data,
            limit:10,
            templates:{
                suggestion:Handlebars.compile('<div class="row"><div class="col-md-12" style="color:#000000; padding-right:5px; padding-left:5px;"><strong style="margin-right: 2%">{{iata}}  </strong> {{name}} , {{city}}</div></div>')
            }
        });
    });

</script>

</body>

</html>
