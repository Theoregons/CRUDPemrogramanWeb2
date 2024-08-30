<?php

    session_start();

    $koneksi = mysqli_connect("localhost", "root", "", "kasir");
    
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
        $hitung = mysqli_num_rows($check);

        if($hitung > 0){
            $_SESSION['username'] = $username;
            header('location:index.php');
        }else{
            echo '<script type="text/javascript"> alert("Username atau Password Salah!"); </script>';
        }
    }

    if(isset($_POST['register'])){
        $email = htmlspecialchars($_POST["email"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
 
        $query = "insert into user values ('' , '$email',  '$username', '$password')";
        
        mysqli_query($koneksi, $query);
        
        $_SESSION['username'] = $username;
        header('location:index.php');
    }
    
    if(isset($_POST['tambahproduk'])){
        $nama_produk = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $stock = $_POST['stock'];

        $insert_produk = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, deskripsi, harga, stock) VALUES ('$nama_produk', '$deskripsi', '$harga', '$stock')");

        if($insert_produk){
            header('location:stock.php');
        }else{
            echo '<script type="text/javascript"> alert("Gagal!"); </script>';
            header('location:stock.php');
        }
    }

    if(isset($_POST['tambahpelanggan'])){
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $notelp = $_POST['notelp'];
        $alamat = $_POST['alamat']; 

        $insert_pelanggan = mysqli_query($koneksi, "INSERT INTO pelanggan (nama_pelanggan, notelp, alamat) VALUES ('$nama_pelanggan', '$notelp', '$alamat')");

        if($insert_pelanggan){
            header('location:pelanggan.php');
        }else{
            echo '<script type="text/javascript"> alert("Gagal!"); </script>';
            header('location:pelanggan.php');
        }
    }

    if(isset($_POST['tambahmahasiswa'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email']; 
        $prodi = $_POST['prodi']; 

        $foto = $_FILES['foto']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];	
        
        move_uploaded_file($file_tmp, 'img/'.$foto);
        $insert_mahasiswa = mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, email, prodi, foto) VALUES ('$nim', '$nama', '$email', '$prodi', '$foto')");

        if($insert_mahasiswa){
            header('location:pelanggan.php');
            echo '<script type="text/javascript"> alert("Data Berhasil Diinputkan !"); </script>';
        }else{
            echo '<script type="text/javascript"> alert("Gagal!"); </script>';
            header('location:pelanggan.php');
        }
    }

    if(isset($_POST['editmahasiswa'])){
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email']; 
        $prodi = $_POST['prodi']; 

        $foto = $_FILES['foto']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];	
        
        move_uploaded_file($file_tmp, 'img/'.$foto);
        $update_mahasiswa = mysqli_query($koneksi, "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', email = '$email', prodi = '$prodi', foto = '$foto' WHERE id = $id ");

        if($update_mahasiswa){
            header('location:pelanggan.php');
            echo '<script type="text/javascript"> alert("Data Berhasil Diupdate !"); </script>';
        }else{
            echo '<script type="text/javascript"> alert("Gagal!"); </script>';
            header('location:pelanggan.php');
        }
    }

    if(isset($_POST['tambahpesanan'])){
        $id_pelanggan = $_POST['id_pelanggan'];
        $notelp = $_POST['notelp'];
        $alamat = $_POST['alamat']; 

        $insert_pelanggan = mysqli_query($koneksi, "INSERT INTO pesanan (id_pelanggan) VALUES ('$id_pelanggan')");

        if($insert_pelanggan){
            header('location:index.php');
        }else{
            echo '<script type="text/javascript"> alert("Gagal!"); </script>';
            header('location:index.php');
        }
    }
?>