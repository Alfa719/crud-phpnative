<?php
include_once "templates/header.php";

$mahasiswa = mysqli_query($connection, "SELECT * FROM mahasiswas");
$totalMahsiswa = mysqli_num_rows($mahasiswa);

?>
<div class="container-fluid">
    <!-- Dark table -->
    <div class="row mt-5">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Mahasiswa</h5>
                            <span class="h2 font-weight-bold mb-0"><?= $totalMahsiswa?></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "templates/footer.php" ?>

</html>