<div class="card">
    <h1 class="mt-4">History Pembelian Air</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">History Pembelian Air</li>
    </ol>
    <table class="table" id="example">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama Pembelian</th>
                <th scope="col">Tanggal Pembelian</th>
                <th scope="col">Acara</th>
                <th scope="col">Proses</th>
                <th scope="col" style="text-align: center;">status</th>
                <th scope="col" style="text-align: center;">Tagihan</th> <!-- Kolom untuk aksi -->

            </tr>
        </thead>
        <tbody style="font-size: 18px;">
            <?php foreach ($aquahub as $us) : ?>
                <tr>
                    <td><?= $us['namalengkap']; ?></td>
                    <td><?= $us['tanggal_pembelian']; ?></td>
                    <td><?= $us['kebutuhan']; ?></td>
                    <td>
                        <span class="<?= $us['request'] ? 'badge badge-success' : 'badge badge-warning'; ?>">
                            <?= $us['request'] ? 'Dikirim' : 'Dalam Proses'; ?>
                        </span>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($us['request']) : ?>
                            <span class="badge badge-primary">sudah disetujui</span>
                        <?php else : ?>
                            <span class="badge badge-danger">Belum disetujui</span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($us['request']) : ?>
                            <span class="badge badge-success">Selesai</span>
                        <?php else : ?>
                            <span class="badge badge-warning">Menunggu</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
