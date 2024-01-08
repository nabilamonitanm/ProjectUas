<div class="card">
    <h1 class="mt-4">Request Pembelian Air</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Request Pembelian Air</li>
    </ol>


    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%">
                    <thead>
                        <tr>
                            <thead>
                                <tr style="font-weight: bold;">
                                    <td>No</td>
                                    <td>Nama Lengkap</td>
                                    <td>No Telepon</td>
                                    <td>Alamat Lengkap</td>
                                    <td>Kebutuhan</td>
                                    <td>Jumlah Pemesanan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($aquahub as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['namalengkap']; ?></td>
                                <td><?= $us['no_telp']; ?></td>
                                <td><?= $us['alamat_lengkap']; ?></td>
                                <td><?= $us['kebutuhan']; ?></td>
                                <td><?= $us['jumlah_pemesanan']; ?></td>
                                <td>
                                    <a href="<?= base_url('request/setuju/') . $us['id_aquahub'] ?>" class="btn btn-success">Setuju</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->