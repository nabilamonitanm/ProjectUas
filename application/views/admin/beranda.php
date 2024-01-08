<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="page-wrapper">

<div class="page-body">
        <div class="row">
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                        <span class="text-c-blue f-w-600">Total Pelanggan</span>
                        <h4><?= $total_users; ?></h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                        <span class="text-c-pink f-w-600">Total Pembelian</span>
                        <h4><?= 'Rp ' . number_format($total_harga, 0, ',', '.'); ?></h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                        <span class="text-c-green f-w-600">Total Tagihan</span>
                        <h4><?= $total_tagihan; ?></h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                        <span class="text-c-yellow f-w-600">Total Keluhan</span>
                        <h4><?= $total_keluhan; ?></h4>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- Statestics Start -->
            <div class="col-md-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Statestics</h5>
                        <div class="card-header-left ">
                        </div>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left "></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div style="width: 80%; margin: auto;">
                    <canvas id="myChart" style="height: 400px;"></canvas>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="styleSelector">

</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_column($total_harga_per_bulan, 'bulan')); ?>,
            datasets: [{
                label: 'Total Harga',
                data: <?= json_encode(array_column($total_harga_per_bulan, 'total_harga_bulan')); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>