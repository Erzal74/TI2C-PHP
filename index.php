<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | STM BOYS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }
        header h3 {
            margin: 0;
            font-size: 24px;
        }
        header h1 {
            margin: 5px 0;
            font-size: 36px;
        }
        nav {
            background-color: #ddd;
            padding: 10px 20px;
            border-radius: 0 0 10px 10px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav ul li a:hover {
            background-color: #333;
            color: #fff;
        }
        .status-message {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #ddd;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>STM BOYS</h1>
        </header>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
        <?php if(isset($_GET['status'])): ?>
            <div class="status-message">
                <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
