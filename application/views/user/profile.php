<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" id="profileImage" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <input type="file" id="inputImage" style="display:none;">
                    <button class="btn btn-info" type="button" onclick="document.getElementById('inputImage').click();">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="<?php echo site_url('profile/updateProfile'); ?>" method="post" enctype="multipart/form-data">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="Username">Username</label>
                                <h5 class="card-titile"><?= $user['nama']; ?></h5>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email address</label>
                                <h5 class="card-titile"><?= $user['email']; ?></h5>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="alamat">Addres</label>
                                    <h5 class="card-titile"><?= $user['alamat']; ?></h5>
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="telepon">Phone number</label>
                                    <h5 class="card-titile"><?= $user['telepon']; ?></h5>
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tanggal_lahir">Member Since</label>
                                    <h5 class="card-titile"><?= date('D F Y', $user['date_created']); ?></p>
                                </div>
                                <div class="mb-3">
                                <label class="small mb-1" for="keteranagan">pekerjaan</label>
                                <h5 class="card-titile">pegawai</h5>
                            </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div>
</div>
</div> -->
