<?php
    include_once "templates/header.php";
?>
    <div class="container-fluid">
        <!-- Dark table -->
        <div class="row mt-5">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">All Mahasiswa</h3>
                    </div>
                    
                    <div class="table-responsive">
                        <a href="create.php" class="btn btn-primary px-3 m-3"><i class="ni ni-fat-add"></i></a>
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort" data-sort="no">No</th>
                                    <th scope="col" class="sort" data-sort="nim">NIM</th>
                                    <th scope="col" class="sort" data-sort="nama">Nama</th>
                                    <th scope="col">Tempat, Tanggal Lahir</th>
                                    <th scope="col" class="sort" data-sort="jenkel">Jenis Kelamin</th>
                                    <th scope="col" class="sort" data-sort="jenkel">Alamat</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php
                                    $query = "SELECT * FROM mahasiswas";
                                    $no = 1;
                                    if ($result = mysqli_query($connection, $query)) {
                                        while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td class="no"><?= $no++ ?></td>
                                    <td class="nim"><?= $row['nim'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td>
                                        <?= $row['tempat_lahir'] ?>, <?= $row['tanggal_lahir'] ?>
                                    </td>
                                    <td>
                                        <?= $row['jenis_kelamin'] == 'L'? 'Laki-Laki': 'Perempuan' ?>
                                    </td>
                                    <td>
                                        <?= $row['alamat'] ?>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                                                <a class="dropdown-item" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                                                <a class="dropdown-item" href="show.php?id=<?= $row['id'] ?>">Detail</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "templates/footer.php" ?>
</html>