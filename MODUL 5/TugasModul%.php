<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #1f4e78;
            color: white;
            text-align: center;
            padding: 25px;
        }

        .header h1 {
            margin: 0;
        }

        .header p {
            margin-top: 8px;
        }

        .container {
            width: 500px;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #1f4e78;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background-color: #1f4e78;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #163a5c;
        }

        .error {
            background-color: #ffdede;
            color: #a00000;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .hasil {
            background-color: #e8f5e9;
            padding: 15px;
            margin-top: 25px;
            border-radius: 5px;
            border-left: 5px solid #2e7d32;
        }

        .hasil h3 {
            color: #2e7d32;
            margin-top: 0;
        }

        .hasil p {
            margin: 8px 0;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>Buku Tamu Digital STITEK Bontang</h1>
    <p>Silakan isi buku tamu melalui form berikut</p>
</div>

<div class="container">

    <h2>Form Buku Tamu</h2>

    <?php

    $nama = "";
    $email = "";
    $pesan = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $pesan = htmlspecialchars($_POST["pesan"]);

        if (empty($nama) || empty($email) || empty($pesan)) {
            $error = "Semua kolom wajib diisi!";
        }
    }

    ?>

    <?php if ($error != "") { ?>

        <div class="error">
            <?php echo $error; ?>
        </div>

    <?php } ?>

    <form method="POST" action="">

        <label>Nama Lengkap</label>
        <input type="text" name="nama"
               value="<?php echo $nama; ?>">

        <label>Alamat Email</label>
        <input type="email" name="email"
               value="<?php echo $email; ?>">

        <label>Pesan / Komentar</label>
        <textarea name="pesan"><?php echo $pesan; ?></textarea>

        <button type="submit">Kirim Pesan</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $error == "") {

    ?>

        <div class="hasil">

            <h3>Pesan Berhasil Dikirim!</h3>

            <p>
                <strong>Nama Lengkap:</strong>
                <?php echo $nama; ?>
            </p>

            <p>
                <strong>Alamat Email:</strong>
                <?php echo $email; ?>
            </p>

            <p>
                <strong>Pesan / Komentar:</strong>
                <?php echo $pesan; ?>
            </p>

        </div>

    <?php

    }

    ?>

</div>

</body>
</html>