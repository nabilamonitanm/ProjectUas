<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Registration</h2>
                <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" value="<?= set_value('name'); ?>" placeholder="Your Name" />
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" value="<?= set_value('email'); ?>" placeholder="Your Email" />
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" value="<?= set_value('password'); ?>" placeholder="Password" />
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_password" id="re_password" value="<?= set_value('re_password'); ?>" placeholder="Repeat your password" />
                        <?= form_error('re_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="provinsi"><i class="zmdi zmdi-pin"></i></label>
                        <input type="alamat" name="alamat" id="alamat" value="<?= set_value('alamat'); ?>" placeholder="Enter Your Address" />
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-phone"></i></label>
                        <input type="telepon" name="telepon" id="telepon" value="<?= set_value('telepon'); ?>" placeholder="Enter Your Phone Number" />
                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <!-- <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label> -->
                        <a href="<?= base_url('Auth') ?>" class="signup-image-link">I am already member</a>
                    </div>
                    <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />

                </form>
            </div>
            <div class="signup-image">
                <figure><img src="<?= base_url('assets_auth/') ?>images/register.jpg" alt="sing up image"></figure>

            </div>
        </div>
    </div>
          
</section>