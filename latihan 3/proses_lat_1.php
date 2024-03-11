<?php
if (isset($_POST['btnSubmit'])){
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$dropdown = $_POST["dropdown"];
$alamat = $_POST["alamat"];
$nomor = $_POST["nomor"];
$subject = $_POST["subject"];
} else{
    header("location: latihan1.php");
}
?>
<html>
    <head>
        <h1>data anda</h1>
    </head>
    <body>
        
            name :
            <?$nama?><br><br>
            E-mail :
            <?$email?><br><br>
            password : 
            <?$password?><br><br>
            Tanggal_lahir : 
            <?$tanggal_lahir?><br><br>
            prodi : 
            <?$dropdown?><br><br>
            alamat : 
            <?$alamat?><br><br>
            nomor : 
            <?$nomor?><br><br>
            jenis kelamin :  
            <?$subject?><br><br>
    
    </body>
    <script>
        alert("Login berhasil!");
        window.location.href = "login.php";
    </script>
</html>

