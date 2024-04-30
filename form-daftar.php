<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | STM BOYS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            margin-top: 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
        }
        input[type="radio"] {
            margin-right: 5px;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <div class="container">
        <form action="proses-pendaftaran.php" method="POST">
            <label for="Id">Id:</label>
            <input type="text" name="Id" placeholder="Id" value="<?php echo isset($_POST['Id']) ? htmlspecialchars($_POST['Id']) : ''; ?>" required>
            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" placeholder="Nama lengkap" value="<?php echo isset($_POST['Nama']) ? htmlspecialchars($_POST['Nama']) : ''; ?>" required>
            <label for="Umur">Umur:</label>
            <input type="text" name="Umur" placeholder="Umur" value="<?php echo isset($_POST['Umur']) ? htmlspecialchars($_POST['Umur']) : ''; ?>" required>
            <label for="Alamat">Alamat:</label>
            <textarea name="Alamat" placeholder="Alamat" required><?php echo isset($_POST['Alamat']) ? htmlspecialchars($_POST['Alamat']) : ''; ?></textarea>
            <label for="TTL">Tempat Tanggal Lahir:</label>
            <input type="text" name="TTL" placeholder="Tempat Tanggal Lahir" value="<?php echo isset($_POST['TTL']) ? htmlspecialchars($_POST['TTL']) : ''; ?>" required>
            <label for="Jenis_Kelamin">Jenis Kelamin:</label>
            <label><input type="radio" name="Jenis_Kelamin" value="Laki-Laki" <?php echo (isset($_POST['Jenis_Kelamin']) && $_POST['Jenis_Kelamin'] == 'Laki-Laki') ? 'checked' : ''; ?>> Laki-laki</label>
            <label><input type="radio" name="Jenis_Kelamin" value="Perempuan" <?php echo (isset($_POST['Jenis_Kelamin']) && $_POST['Jenis_Kelamin'] == 'Perempuan') ? 'checked' : ''; ?>> Perempuan</label>
            <input type="submit" value="Daftar" name="daftar">
        </form>
    </div>
</body>
</html>
