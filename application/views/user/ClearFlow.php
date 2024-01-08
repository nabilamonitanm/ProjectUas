<div class="container-xxl py-5">
    <div class="container">
        <div class="card-body">
            <h1 class="mt-4">ClearFlow</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pembelian Air Bersih</li>
            </ol>
            <div class="bg-blue rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 100px;">
                        <div class="position-relative  w-20 h-100">
                            <img class="position-relative w-100 h-100 rounded" src="<?= base_url('assets2/') ?>img/poster3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">

                            <h1 class="mb-4">Pembelian Air Bersih</h1>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="aquahub" action="<?= base_url('AquaHub/registrasi'); ?>" method="post">
                                <div class="form-group">
                                    <label for="sumber_air">Nama Lengkap:</label>
                                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" value="<?= set_value('namalengkap'); ?>">
                                    <?= form_error('namalengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="sumber_air">No Telp:</label>
                                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?= set_value('status'); ?>">
                                    <?= form_error('stauts', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi:</label>
                                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukkan lokasi" autocomplete="off" value="<?= set_value('lokasi'); ?>">
                                    <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="kualitas">Kebutuhan:</label>
                                    <select class="form-control" name="kualitas" id="kualitas" value="<?= set_value('kualitas'); ?>">
                                        <option value="layak">Rumah Tangga</option>
                                        <option value="tidak_layak">Hajat / Pesta</option>
                                    </select>
                                    <?= form_error('kualitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="sumber_air">Jumlah Pemesanan:</label>
                                    <input type="text" class="form-control" name="sumber_air" id="sumber_air" value="<?= set_value('sumber_air'); ?>">
                                    <?= form_error('sumber_air', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="jumlah_penduduk">Waktu Pengiriman:</label>
                                    <input type="number" class="form-control" name="jumlah_penduduk" id="jumlah_penduduk" value="<?= set_value('jumlah_penduduk'); ?>">
                                    <?= form_error('jumlah_penduduk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_sumur">Metode Pembayaran:</label>
                                    <input type="text" class="form-control" name="jenis_sumur" id="jenis_sumur" value="<?= set_value('jenis_sumur'); ?>">
                                    <?= form_error('jenis_sumur', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan Tambahan:</label>
                                    <textarea class="form-control" name="keterangan" id="keterangan" rows="4" value="<?= set_value('keterangan'); ?>"></textarea>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <br>

                                <div class="col-12">
                                    <button class="btn btn-info w-100 py-3" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>