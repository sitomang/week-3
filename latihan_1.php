<html>
    <head>
        <title>sign up</title>
        <h1>sign up</h1>
    </head>
    <body>
        <form action="proses_lat_1.php" method="post">
            name : <input type="text" name="name"><br>
            E-mail : <input type="email" name="email"><br>
            password : <input type="password" name="password"><br>
            Tanggal_lahir : <input type="date" name="tanggal_lahir"><br>
            prodi : <select name="dropdown">
                <option value="">your prodi</option>
                <option value="Bussines manajemen">Bussines manajemen</option>
                <option value="Computer science">Computer science</option>
                <option value="Bussines information system">Bussines information system</option>
                <option value="Teknik industri">Teknik industri</option>
                <option value="psikologi">psikologi</option>
                <option value="ilmu komunikasi">ilmu komunikasi</option>
                <option value="sastra inggris">sastra inggris</option>
                </select><br>
            alamat : <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
            nomor : <input type="number" name="nomor"><br>
            jenis kelamin :<input type="radio" name="subject" value="laki-laki">laki-laki
            <input type="radio" name="subject" value="perempuan">perempuan <br>
            <input type="submit" name="btnSubmit" value="submit">
            <input type="reset" name="reset" value="reset">
        </form>
    </body>
</html>