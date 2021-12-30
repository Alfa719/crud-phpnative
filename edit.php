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

    <div class="container-fluid">
        <!-- Dark table -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card shadow p-3">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Update Mahasiswa</h3>
                    </div>
                    <div class="table-responsive">
                        <form action="" method="post" role="form">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                    </div>
                                    <input type="number" name="nim" id="nim" class="form-control" required placeholder="Masukkan NIM" value="<?= $nim ?>">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                    </div>
                                    <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan Nama" value="<?= $nama ?>">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                    </div>
                                    <input type="text" name="tempat_lahir" id="tempat" class="form-control" required placeholder="Masukkan Tempat Lahir" value="<?= $tempat_lahir ?>">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input type="date" name="tanggal_lahir" id="tanggal" class="form-control" required placeholder="Masukkan Tanggal Lahir" value="<?= $tanggal_lahir ?>">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input type="radio" name="jenis_kelamin" id="gender" value="L" <?= $jenis_kelamin == 'L'? 'checked': '' ?> class="mr-2"> Laki-Laki <br>
                                    <input type="radio" name="jenis_kelamin" id="gender" value="P" class="mx-2" value="P" <?= $jenis_kelamin == 'P'? 'checked': '' ?>> Perempuan
                                </div>
                            </div>
                            <textarea name="alamat" id="alamat" cols="10" rows="3" required class="form-control" placeholder="Alamat"><?= $alamat ?></textarea><br>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include_once "templates/footer.php" ?>

<?php

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $updated_at = date('Y-m-d H:i:s');

        $query = "UPDATE mahasiswas SET nim = '$nim', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', created_at = '$created_at', updated_at = '$updated_at' WHERE id = '$id'";

        $sql = mysqli_query($connection, $query);

        if ($sql) {
            echo "<script>alert('Success update Mahasiswa!')</script>";
        }else {
            echo "Error ! Fail update mahasiswa";
        }

    }