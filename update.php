<!DOCTYPE html>
<html>
<head>
    <title>UPDATE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    include "database.php";

    if (isset($_GET['id'])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM mahasiswa WHERE id=$id";
        $hasil = mysqli_query($kon, $sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        {
                $id = $_POST["id"];
                $nama = input($_POST["nama"]);
                $alamat = input($_POST["alamat"]);
                $umur = $_POST["umur"];

                $sql = "UPDATE mahasiswa SET
                            nama='$nama',
                            alamat='$alamat',
                            umur=$umur
                            WHERE id=$id";

                $hasil = mysqli_query($kon, $sql);

                if ($hasil) {
                    header("Location:index.php");
                } else {
                    echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
                }
            
        }
    }

    function input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Update Data</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo $data['nama']; ?>" required />
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" placeholder="Masukan Alamat" required><?php echo $data['alamat']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Umur:</label>
            <input type="number" name="umur" class="form-control" placeholder="Masukan Umur" value="<?php echo $data['umur']; ?>" required />
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
        <button type="submit" name="submit" value="Update" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
