<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex  flex-column">


        <div class="row">
            <div class="col-md-7" style="margin-top: -100px">
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
            <div class="col-md-5">
                <h1>Login</h1>
                <div class="container register-form">
                    <?php if (isset($_SESSION['error'])){?>
                        <div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
                        <?php
                    }?>
                    <form action="" method="post">
                    <div class="form">
                        <div >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email *" name="email" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" name="password" value=""/>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btnSubmit" name="login">Login</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>