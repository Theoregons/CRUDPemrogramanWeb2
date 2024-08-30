<?php

    require "function.php";

    if ($_POST['idx']) {

        $id = $_POST['idx'];

        $sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $id");

        while ($result = mysqli_fetch_array($sql)) {
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">

            <div class="form-group mb-3">
                <label class="form-label">Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $result['nim']; ?>"> 
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $result['nama']; ?>"> 
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $result['email']; ?>"> 
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" class="form-control" name="prodi" value="<?php echo $result['prodi']; ?>"> 
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" value="<?php echo $result['foto']; ?>"> 
            </div>
 
            <div class="modal-footer mt-5">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="editmahasiswa">Submit</button>
            </div>
        </form>

        <?php 
        }
    } 
?>