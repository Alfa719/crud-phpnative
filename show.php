<?php
    require_once "database.php";
    $id = $_GET['id'];

    $query = "SELECT * FROM mahasiswas WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    while ($data = mysqli_fetch_array($result)) {
        $nim = $data['nim'];
        $nama = $data['nama'];
        $tempat_lahir = $data['tempat_lahir'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];
        $created_at = $data['created_at'];
    }

    
    include_once "templates/header.php";
?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                
                <div class="card-body pt-0">
                
                    <div class="text-center">
                        <h5 class="h3">
                        <?= $nama ?><span class="font-weight-light">, <?= $nim ?></span>
                        </h5>
                        <div class="h5 font-weight-300">
                        <i class="ni location_pin mr-2"></i><?= $tempat_lahir ?>, <?= $tanggal_lahir ?>
                        </div>
                        <div class="h5 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i><?= $alamat ?>
                        </div>
                        <div>
                        <i class="ni education_hat mr-2"></i>Universitas Nurul Jadid
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
<?php include_once "templates/footer.php" ?>