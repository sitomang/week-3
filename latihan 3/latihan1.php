<html>
    <head>
        <title>sign up</title>
        <h1>sign up</h1>
        <style>
        body {
            padding: 5rem;
            font-family: Arial, sans-serif;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        h1 {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select,
        textarea,
        input[type="number"] {
            border: 2px solid #3498db;
            border-radius: 5px;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        
        input[type="radio"] {
            margin-right: 0.5rem;
        }
        
        input[type="submit"],
        input[type="reset"] {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.75rem 1rem;
            cursor: pointer;
            font-size: 1rem;
        }
        
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #2980b9;
        }
    </style>
    </head>
    <body>
        <form action="proses_lat_1.php" method="post">
            name : <input type="text" name="name">
            <br><br>
            E-mail : <input type="email" name="email">
            <br><br>
            password : <input type="password" name="password">
           <br><br>
            Tanggal_lahir : <input type="date" name="tanggal_lahir">
            <br><br>
            prodi : <select name="dropdown">
                <option value="">your prodi</option>
                <option value="Bussines manajemen">Bussines manajemen</option>
                <option value="Computer science">Computer science</option>
                <option value="Bussines information system">Bussines information system</option>
                <option value="Teknik industri">Teknik industri</option>
                <option value="psikologi">psikologi</option>
                <option value="ilmu komunikasi">ilmu komunikasi</option>
                <option value="sastra inggris">sastra inggris</option>
            </select>
            <br><br>
            alamat : <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            <br><br>
            nomor : <input type="number" name="nomor">
            <br><br>
            jenis kelamin :<input type="radio" name="subject" value="laki-laki">laki-laki
            <input type="radio" name="subject" value="perempuan">perempuan 
            <br><br>
            <input type="submit" name="btnSubmit" value="submit">
            <input type="reset" name="reset" value="reset">
        </form>
    </body>
</html>