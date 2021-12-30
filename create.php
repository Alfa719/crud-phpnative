<?php
    include_once "database.php";
    include_once "templates/header.php";
?>

    <div class="container-fluid">
        <!-- Dark table -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card shadow p-3">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Add Mahasiswa</h3>
                    </div>
                    <div class="table-responsive">
                        <form action="" method="post" role="form">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                    </div>
                                    <input type="number" name="nim" id="nim" class="form-control" required placeholder="Masukkan NIM">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                    </div>
                                    <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                    </div>
                                    <input type="text" name="tempat_lahir" id="tempat" class="form-control" required placeholder="Masukkan Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input type="date" name="tanggal_lahir" id="tanggal" class="form-control" required placeholder="Masukkan Tanggal Lahir">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input type="radio" name="jenis_kelamin" id="gender" value="L" checked class="mr-2"> Laki-Laki <br>
                                    <input type="radio" name="jenis_kelamin" id="gender" value="P" class="mx-2"> Perempuan
                                </div>
                            </div>
                            <textarea name="alamat" id="alamat" cols="10" rows="3" required class="form-control" placeholder="Alamat"></textarea><br>
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
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = $created_at;

        $query = "INSERT INTO mahasiswas VALUES ('', '$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$created_at', '$updated_at')";

        $sql = mysqli_query($connection, $query);

        if ($sql) {
            echo "<script>alert('Success add new Mahasiswa!')</script>";
        }else {
            echo "Error ! Fail add new mahasiswa";
        }

    }