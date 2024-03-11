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
echo "$name<br>";
echo "$email<br>";
echo "$password<br>";
echo "$tanggal_lahir<br>";
echo "$dropdown<br>";
echo "$alamat<br>";
echo "$nomor<br>";
echo "$subject<br>";
}
?>


