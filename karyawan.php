<!DOCTYPE html>
<html>

<head>
    <title>Data Karyawan Mba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!--/coment -->
    <?php
    include 'koneksi.php';
    ?>

    <table border="1" class="table table-striped table-light">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
            $sql = mysqli_query($koneksi, "select * from user");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['pekerjaan']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br />
    <div class="col">
        <a href="cetak.php" target="_blank">CETAK</a>
    </div>



    </center>
</body>

</html>