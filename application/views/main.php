<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex  flex-column">
        <?php if (isset($_SESSION['logged_user'])){?>
        <div class="row">
            <div class="col-md-5" style="margin-top: -100px">
                <img class="masthead-plane mb-12" src="<?php echo base_url(); ?>assets/img/airplane.svg" alt="" style="width:25rem;margin-bottom: -100px;margin-right: 100px">
                <h1 class="masthead-heading text-uppercase mb-0">Claim24</h1>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="container register-form">
                    <div class="form">
                        <form method="post" action="<?php echo base_url(); ?>weather">
                        <div class="form-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="prefetch" class="form-group">
                                        <input  type="text"  name="airport"  id="aiport-input" class="type" placeholder="Aeroport name *" value="" style="    display: block;
    width: 640px;
    height: 60px;
    padding: .500rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: .125rem solid #ced4da;
    border-radius: .5rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="date" name="date" class="datepicker form-control" value=""/>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="time" name="time" class="form-control" placeholder="Confirm Password *" value=""/>
                                </div>
                            </div>

                            <button type="submit" name="weather-search" class="btnSubmit">Search</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        else {
            ?>
            <div class="row">
                <div class="col-md-5">
                    <h1 class="masthead-heading text-uppercase mb-0">Claim24</h1>
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <img class="masthead-plane mb-12" src="<?php echo base_url(); ?>assets/img/airplane.svg" alt="" style="width:25rem;margin-top: -120px;">

                </div>
                <div class="col-md-7">
                    <div class="row" style="margin-left: 5%">
                        <img class="masthead-plane mb-12" src="<?php echo base_url(); ?>assets/img/cloud.png" alt="" style="width:20rem;margin-top: -50px;margin-right: 50px" >
                        <img class="masthead-plane mb-12" src="<?php echo base_url(); ?>assets/img/storm.png" alt="" style="height:5rem ;margin-top: -10px; width:7rem;margin-left:-50px " >
                        <img class="masthead-plane mb-12" src="<?php echo base_url(); ?>assets/img/weather.png" alt="" style="height:10rem ; width:15rem;margin-top: -220px;margin-left: 60%" >
                    </div>
                    <div class="row" style="margin-left:20%;margin-top: 5%" >
                        <a href="<?php echo base_url(); ?>/login"><button type="button" class="btn btn-outline-light btn-xl" >REQUEST THE WEATHER AT CLAIM24</button></a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</header>
<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Our services</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">

            <!-- Portfolio Item 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/pilote.jpg" alt="">
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/checkin.jpg" alt="">
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/carte.png" alt="">
                </div>
            </div>

            <!--Portfolio Item 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/plane.jpg" alt="">
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/operator.jpg" alt="">
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/portfolio/delay.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
</section>

<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

        <!-- About Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- About Section Content -->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container">

        <!-- Contact Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>