<?php
if (isset($_POST['btnSubmit'])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    echo "welcome $name<br>";
    echo "your email address is $email";
}
?>

<html>
    <body>
        <form action="" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input name="btnSubmit" type="submit">
        </form>
    </body>
</html>