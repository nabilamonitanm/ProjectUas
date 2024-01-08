<div class="card">
    <h1 class="mt-4">Daftar Member</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Daftar Member</li>
    </ol>


    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%">
                    <thead>
                        <thead>
                            <tr style="font-weight: bold;">
                                <td>No</td>
                                <td>Nama Lengkap</td>
                                <td>Email</td>
                                <td>Alamat</td>
                                <td>No Telepon</td>
                                <td>Tanggal Pembuatan</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($user as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['email']; ?></td>
                                <td><?= $us['alamat']; ?></td>
                                <td><?= $us['telepon']; ?></td>
                                <td><?= $us['date_created']; ?></td>
                                <td>
                                    <a href="<?= base_url('Beranda_admin/hapus/') . $us['id'] ?>" class="btn btn-danger">Hapus</a>
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