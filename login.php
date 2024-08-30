<?php 
    require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="auth">
        <div class="wrapper" id="wrapper">
            <div class="form-wrapper sign-up">
                <form method="post">
                    <h1>Registrasi</h1>
                    <span class="mb-4">Gunakan email untuk registrasi</span>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" name="register">Register</button>
                </form>
            </div>
            <div class="form-wrapper sign-in">
                <form method="post">
                    <h1>Masuk</h1>
                     
                    <span class="mb-4">gunakan username dan password anda <span id="hint"></span></span>
                    <input type="text" placeholder="Username" name="username" required/>
                    <input type="password" placeholder="Password" name="password" required/>
                     <button type="submit" name="login">
                        Masuk
                        <!-- <div class="loadingio-spinner-rolling-nq4q5u6dq7r">
                            <div class="ldio-x2uulkbinbj">
                                <div></div>
                            </div>
                        </div> -->
                    </button>
                </form>
            </div>
            <div class="toggle-wrapper">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Sistem Informasi</h1>
                        <img src="stimata.png" alt="stimata" width="35%">
                        <p>Masukkan data diri lengkap untuk dapat menggunakan semua fitur</p>
                        <button class="hidden" id="login">Masuk</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Sistem Informasi</h1>
                        <img src="stimata.png" alt="stimata" width="35%">
                        <p>Daftarkan data diri anda untuk dapat menggunakan semua fitur</p>
                        <button class="hidden" id="register" >Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>

</body>

</html>