<?php
require 'function.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height:100dvh; background-color:#5339AD">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-5">Sistem Informasi</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="index.php" class="nav-link text-white  d-flex align-items-center gap-2">
                        <svg fill="#000000" width="28" height="28" viewBox="0 0 24 24" id="dashboard-alt-2" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <line id="secondary" x1="16" y1="9" x2="12" y2="15" style="fill: none; stroke: #ecf2f3; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                <line id="secondary-upstroke" x1="12" y1="14.98" x2="12" y2="15.08" style="fill: none; stroke: #ecf2f3; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                <path id="primary" d="M21,13a9,9,0,0,1-3.36,7H6.36A9,9,0,1,1,21,13Z" style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                            </g>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="pelanggan.php" class="nav-link text-white">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        kelola user
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="stimata.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Edit</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 w-100">
            <h2>Data Mahasiswa</h2>

            <!-- Modal Create -->
            <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Mahasiswa
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah Data Mahasiswa </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                                    <input type="text" id="nim" class="form-control" name="nim">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" id="nama" class="form-control" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="prodi" class="form-label">Program Studi</label>
                                    <input type="text" id="prodi" class="form-control" name="prodi">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto Mahasiswa</label>
                                    <input type="file" id="foto" class="form-control" name="foto">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" name="tambahmahasiswa">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Modal Create  -->

            <!-- Modal Edit -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Edit Data Mahasiswa </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="hasil-data"></div>

                                <!-- <div class="mb-3">
                                    <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                                    <input type="text" id="nim" class="form-control" name="nim">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" id="nama" class="form-control" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="prodi" class="form-label">Program Studi</label>
                                    <input type="text" id="prodi" class="form-control" name="prodi">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto Mahasiswa</label>
                                    <input type="file" id="foto" class="form-control" name="foto">
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Modal Edit  -->

            <div class="my-3">
                <table class="table table-hover w-100">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($mahasiswa as $mhs) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $mhs['nim']; ?></td>
                                <td><?= $mhs['nama']; ?></td>
                                <td><?= $mhs['email']; ?></td>
                                <td><?= $mhs['prodi']; ?></td>
                                <td><img src="img/<?= $mhs['foto']; ?>" alt="" width="200"></td>
                                <td><a href="#exampleModal2" data-id="<?= $mhs['id'] ?>" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-warning">Edit</a> | <a class="btn btn-danger" href="hapusmhs.php?id=<?php echo $mhs['id']; ?>">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#exampleModal2').on('show.bs.modal', function(e) {

                var idx = $(e.relatedTarget).data('id');
                console.log(idx);
 
                $.ajax({

                    type: 'post',

                    url: 'detail.php',

                    data: 'idx=' + idx,

                    success: function(data) {

                        $('.hasil-data').html(data);

                    }

                });

            });

        });
    </script>


</body>

</html>