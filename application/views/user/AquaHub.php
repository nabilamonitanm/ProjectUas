<div class="container-xxl py-5">
    <div class="container">
        <div class="card-body">
            <h1 class="mt-4">AquaHub</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pembelian Air Bersih</li>
            </ol>
            <div class="bg-blue rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 100px;">
                        <div class="position-relative  w-20 h-100">
                            <img class="position-relative w-100 h-100 rounded" src="<?= base_url('assets2/') ?>img/tangki2.png" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">

                            <h1 class="mb-4">Pembelian Air Bersih</h1>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="aquahub" action="<?= base_url('AquaHub/pembelian'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="sumber_air">Nama Lengkap:</label>
                                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Masukkan Nama Lengkap" value="<?= set_value('namalengkap'); ?>">
                                    <?= form_error('namalengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="sumber_air">No Telp:</label>
                                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telepon/WA yang bisa dihubungi" value="<?= set_value('no_telp'); ?>">
                                    <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Alamat Lengkap:</label>
                                    <input type="text" class="form-control" name="alamat_lengkap" id="alamat_lengkap" placeholder="Masukkan Alamat Lengkap" autocomplete="off" value="<?= set_value('alamat_lengkap'); ?>">
                                    <?= form_error('alamat_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="kualitas">Kebutuhan:</label>
                                    <select class="form-control" name="kebutuhan" id="kebutuhan" value="<?= set_value('kebutuhan'); ?>">
                                        <option value="rumah tangga"></option>
                                        <option value="rumah tangga">Rumah Tangga</option>
                                        <option value="hajat/pesta">Hajat/Pesta</option>
                                        <option value="perusahaan">Perusahaan</option>
                                    </select>
                                    <?= form_error('kebutuhan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="sumber_air">Jumlah Pemesanan:</label>
                                    <input type="number" class="form-control" name="jumlah_pemesanan" placeholder="/Liter" id="jumlah_pemesanan" value="<?= set_value('jumlah_pemesanan'); ?>">
                                    <?= form_error('jumlah_pemesanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <br>

                                <div class="col-12">
                                    <button class="btn btn-info w-100 py-3" type="submit">Beli</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>