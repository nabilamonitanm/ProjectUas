 <!-- Sing in  Form -->
 <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=  base_url('assets_auth/')?>images/login.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>

                        <?= $this->session->flashdata('message'); ?>
                        <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                
                                <input type="text" name="email" id="email" value="<?= set_value('email'); ?>" placeholder="Your Email"/>
                                <?= form_error('email','<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" value="<?= set_value('password'); ?>" placeholder="Password"/>
                                <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                <a href="<?= base_url('Auth/registrasi') ?>" class="signup-image-link">Create an account</a>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/><br><br>
                                <span class="social-label">Or login with</span>
                                <ul class="socials">
                                    <!-- <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li> -->
                                </ul>
                                
                            </div>
                        
                        </form>

                    </div>
                </div>
            </div>
        </section>