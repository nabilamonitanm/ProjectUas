<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Pengaduan </h1>
            <p>Pengaduan tentang kondisi air yang terdapat pada wilayah. </p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-map-marker-alt fa-2x text-info"></i>
                </div>
                <h6>Pekanbaru, Indonesia</h6>
            </div>
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-envelope-open fa-2x text-info"></i>
                </div>
                <h6>info@example.com</h6>
            </div>
            <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                    <i class="fa fa-phone-alt fa-2x text-info"></i>
                </div>
                <h6>+012 345 6789</h6>
            </div>
        </div>
        <div class="border rounded">
            <div class="rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <p class="mb-4">Kami sangat menghargai partisipasi Anda dalam memberikan masukan terkait kondisi air di wilayah kami. Kami sepenuhnya terbuka untuk mendengar keluhan dan masukan Anda. Tim kami berkomitmen untuk terus meningkatkan kualitas layanan kami. Mohon berikan informasi lebih lanjut atau sampaikan keluhan Anda agar kami dapat mengatasi permasalahan tersebut dengan sebaik-baiknya.

                            </p>
                            <div class="container">
                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h4 class="m-0 font-weight-bold text-primary">Info Tagihan Pelanggan</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p>No. Kontrol : <?php echo $session['id']; ?></p>
                                                <p>Nama Lengkap : <?php echo $session['name']; ?> </p>
                                                <p>Alamat : <?php echo $session['alamat']; ?> </p>
                                                <p>Aktif : <?php echo $session['aktif']; ?> </p>
                                                <p>No. Telepon : <?php echo $session['no_telepon']; ?> </p>
                                                <p>Tanggal Aktif : <?php echo $date; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="rekap_tagihan" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th width="1%">
                                                                <center>No</center>
                                                            </th>
                                                            <th width="20%">
                                                                <center>Bulan Rek</center>
                                                            </th>
                                                            <th width="15%">
                                                                <center>Lunas</center>
                                                            </th>
                                                            <th width="15%">
                                                                <center>Tarif</center>
                                                            </th>
                                                            <th width="15%">
                                                                <center>St. Awal</center>
                                                            </th>
                                                            <th width="18%">
                                                                <center>St. Akhir</center>
                                                            </th>
                                                            <th width="20%">
                                                                <center>Pemakaian</center>
                                                            </th>
                                                            <th width="20%">
                                                                <center>Rp. Tagihan</center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-9">
                                            </div>
                                            <div class="col-lg-3">
                                                <p>
                                                <h6><b>Jumlah : <?php echo $get['jumlah']; ?></b></h6>
                                                <h6><b>Total Tagihan : Rp <?php echo $get['total_tagihan']; ?></b></h6>
                                                </p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <div class="position-relative  w-70 h-150">
                                <!-- <br><br><br><br> -->
                                <img class="position-relative w-75 h-75 rounded" src="<?= base_url('assets2/') ?>img/poster1.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
    $('#rekap_tagihan').ready(function() {
        var c = $('#rekap_tagihan').DataTable();
        load_data();

        function load_data() {
            $.ajax({

                url: '<?php echo site_url("MemberControl/get_rekap_tagihan") ?>',
                dataType: "JSON",
                success: function(data) {
                    c.clear().draw();

                    for (var i = 0; i < data.length; i++) {
                        var modal = '<button type="button" class="btn btn-xs btn-primary btn_detail" id="' + data[i]['id_tagihan'] + '" data-toggle="modal" data-target="#exampleModal">Lihat</button>';
                        //var btn = '<button type="button" name="btn_terima" id="' + data[i]['no_konsul'] + '" class="btn btn-xs btn-primary btn-circle btn_terima"><i class="fas fa-check"></i></button>';
                        //var imgHtml = "<img src='../assets/img/" + data[i]['ktp'] + "' width='150' height='100'

                        c.row.add([
                            "<center>" + [i + 1] + "</center>",
                            "<center>" + data[i]['bulan'] + "-" + data[i]['tahun'] + "</center>",
                            "<center>" + data[i]['lunas'] + "</center>",
                            "<center>" + data[i]['tarif'] + "</center>",
                            "<center>" + data[i]['st_awal'] + "</center>",
                            "<center>" + data[i]['st_akhir'] + "</center>",
                            "<center>" + data[i]['pemakaian'] + "</center>",
                            "<center>" + data[i]['biaya'] + "</center>",
                        ]).draw();

                    }
                }
            });
        }


        $(document).on("click", ".btn_detail", function() {
            var id_keluhan = $(this).attr('id');

            var t = $('#detail_keluhan').DataTable();
            $.ajax({
                url: "<?php echo site_url('MemberControl/get_personal_keluhan'); ?>",
                method: "GET",
                data: {
                    id_keluhan: id_keluhan
                },
                success: function(ajaxData) {
                    t.clear().draw();
                    var result = JSON.parse(ajaxData);
                    t.row.add([
                        "<center>" + result[0]['no_kontrol'] + "</center>",
                        "<center>" + result[0]['nama_permohon'] + "</center>",
                        "<center>" + result[0]['alamat_permohon'] + "</center>",
                        "<center>" + result[0]['ukuran_meter'] + "</center>",
                        "<center>" + result[0]['merek_meter'] + "</center>",
                        "<center>" + result[0]['seri_meter'] + "</center>",
                        "<center>" + result[0]['no_locis'] + "</center>",
                        "<center>" + result[0]['no_agenda'] + "</center>",
                        "<center>" + result[0]['tgl_pengaduan'] + "</center>",
                        "<center>" + result[0]['tgl_pk'] + "</center>",
                        "<center>" + result[0]['tgl_meter'] + "</center>",
                        "<center>" + result[0]['tgl_pasang'] + "</center>",
                        "<center>" + result[0]['jenis_keluhan'] + "</center>",
                        "<center>" + result[0]['catatan'] + "</center>",
                    ]).draw();



                }
            });

        });

        $(document).on("click", ".btn_kirim", function() {
            var id_keluhan = $(this).attr('id');

            $.ajax({
                url: "<?php echo site_url('Beranda_admin/get_balasan_keluhan'); ?>",
                method: "GET",
                data: {
                    id_keluhan: id_keluhan,
                },
                success: function(ajaxData) {
                    var hasil = JSON.parse(ajaxData);
                    $('#isi_balasan').val(hasil[0]['reply_keluhan']);

                }
            });




            $(document).on("click", "#btn_reply", function() {
                isi_balasan = $('#isi_balasan').val();
                $.ajax({
                    url: "<?php echo site_url('Beranda_admin/kirim_reply'); ?>",
                    method: "GET",
                    data: {
                        id_keluhan: id_keluhan,
                        isi_balasan: isi_balasan
                    },
                    success: function(ajaxData) {
                        //load_data();
                        swal({
                            title: 'Berhasil Dibalas',
                            text: '',
                            type: 'success'
                        });


                    }
                });



            });

        });




    });
</script>