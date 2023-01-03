<!doctype html>
<html lang="en">

<?php
include 'components/head.php';
?>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include 'components/sidebar.php';
        ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php
            include 'components/navbar.php';
            ?>

            <section id="main-content">
                <section class="wrapper">
                    <!--overview start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li><i class="fa fa-cogs"></i><a href="hitung.php"> Hitung</a></li>
                            </ol>
                        </div>
                    </div>
                    <div>
                        <b>
                            <h6><b>MATRIX X</b></h6>
                        </b>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-arrow-down"></i> No</th>
                                    <th><i class="fa fa-arrow-down"></i> NAMA</th>
                                    <th><i class="fa fa-arrow-down"></i> RAM</th>
                                    <th><i class="fa fa-arrow-down"></i> ROM</th>
                                    <th><i class="fa fa-arrow-down"></i> LAYAR</th>
                                    <th><i class="fa fa-arrow-down"></i> KAMERA BELAKANG</th>
                                    <th><i class="fa fa-arrow-down"></i> KAMERA DEPAN</th>
                                    <th><i class="fa fa-arrow-down"></i> BATERAI</th>
                                    <th><i class="fa fa-arrow-down"></i> PROCESSOR</th>
                                    <th><i class="fa fa-arrow-down"></i> KONEKSI</th>
                                    <th><i class="fa fa-arrow-down"></i> HARGA</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include 'koneksi.php';

                                $b = 0;
                                $sql = "SELECT*FROM saw_penilaian ORDER BY nama ASC";
                                $hasil = $conn->query($sql);
                                $rows = $hasil->num_rows;
                                if ($rows > 0) {
                                    while ($row = $hasil->fetch_row()) {
                                ?>
                                        <tr>
                                            <td align="center"><?php echo $b = $b + 1; ?></td>
                                            <td><?= $row[0] ?></td>
                                            <td align="center"><?= $row[1] ?></td>
                                            <td align="center"><?= $row[2] ?></td>
                                            <td align="center"><?= $row[3] ?></td>
                                            <td align="center"><?= $row[4] ?></td>
                                            <td align="center"><?= $row[5] ?></td>
                                            <td align="center"><?= $row[6] ?></td>
                                            <td align="center"><?= $row[7] ?></td>
                                            <td align="center"><?= $row[8] ?></td>
                                            <td align="center"><?= $row[9] ?></td>
                                        </tr>
                                <?php }
                                } else {
                                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <b>
                            <h6><b>NORMALISASI</b></h6>
                        </b>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-arrow-down"></i> No</th>
                                    <th><i class="fa fa-arrow-down"></i> NAMA</th>
                                    <th><i class="fa fa-arrow-down"></i> RAM</th>
                                    <th><i class="fa fa-arrow-down"></i> ROM</th>
                                    <th><i class="fa fa-arrow-down"></i> LAYAR</th>
                                    <th><i class="fa fa-arrow-down"></i> KAMERA BELAKANG</th>
                                    <th><i class="fa fa-arrow-down"></i> KAMERA DEPAN</th>
                                    <th><i class="fa fa-arrow-down"></i> BATERAI</th>
                                    <th><i class="fa fa-arrow-down"></i> PROCESSOR</th>
                                    <th><i class="fa fa-arrow-down"></i> KONEKSI</th>
                                    <th><i class="fa fa-arrow-down"></i> HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT*FROM saw_penilaian";
                                $hasil = $conn->query($sql);
                                $rows = $hasil->num_rows;
                                if ($rows > 0) {
                                    $b = 0;
                                    $C1 = '';
                                    $C2 = '';
                                    $C3 = '';
                                    $C4 = '';
                                    $C5 = '';
                                    $C6 = '';
                                    $C7 = '';
                                    $C8 = '';
                                    $C9 = '';


                                    $sql = "SELECT*FROM saw_penilaian ORDER BY ram DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C1 = $row[1];
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY rom DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C2 = $row[2];
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY layar DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C3 = $row[3];
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY kamerabl DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C4 = $row[4];
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY kameradp DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C5 = $row[5];
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY baterai DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C6 = $row[6];
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY processor DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C7 = $row[7];
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY koneksi DESC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C8 = $row[8];
                                    // Biaya
                                    $sql = "SELECT*FROM saw_penilaian ORDER BY harga ASC";
                                    $hasil = $conn->query($sql);
                                    $row = $hasil->fetch_row();
                                    $C9 = $row[9];
                                } else {
                                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                                }

                                $sql = "SELECT*FROM saw_penilaian";
                                $hasil = $conn->query($sql);
                                $rows = $hasil->num_rows;
                                if ($rows > 0) {
                                    while ($row = $hasil->fetch_row()) {
                                ?>
                                        <tr>
                                            <td align="center"><?php echo $b = $b + 1; ?></td>
                                            <td><?= $row[0] ?></td>
                                            <td align="center"><?= round($row[1] / $C1, 2) ?></td>                                           
                                            <td align="center"><?= round($row[2] / $C2, 2) ?></td>
                                            <td align="center"><?= round($row[3] / $C3, 2) ?></td>
                                            <td align="center"><?= round($row[4] / $C4, 2) ?></td>
                                            <td align="center"><?= round($row[5] / $C5, 2) ?></td>
                                            <td align="center"><?= round($row[6] / $C6, 2) ?></td>
                                            <td align="center"><?= round($row[7] / $C7, 2) ?></td>
                                            <td align="center"><?= round($row[8] / $C8, 2) ?></td>
                                            <td align="center"><?= round($C9 / $row[9], 2) ?></td>
                                        </tr>
                                <?php }
                                }  ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <b>
                            <h6><b>NILAI PREFERENSI</b></h6>
                        </b>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-arrow-down"></i> No</th>
                                    <th><i class="fa fa-arrow-down"></i> Nama</th>
                                    <th><i class="fa fa-arrow-down"></i> Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $b = 0;
                                $B1 = '';
                                $B2 = '';
                                $B3 = '';
                                $B4 = '';
                                $B5 = '';
                                $B6 = '';
                                $B7 = '';
                                $B8 = '';
                                $B9 = '';
                                $nilai = '';
                                $nama = '';
                                $x = 0;
                                $sql = "SELECT * FROM saw_kriteria";
                                $hasil = $conn->query($sql);
                                $rows = $hasil->num_rows;
                                if ($rows > 0) {
                                    $row = $hasil->fetch_row();
                                    $B1 = $row[1];
                                    $B2 = $row[2];
                                    $B3 = $row[3];
                                    $B4 = $row[4];
                                    $B5 = $row[5];
                                    $B6 = $row[6];
                                    $B7 = $row[7];
                                    $B8 = $row[8];
                                    $B9 = $row[9];
                                }
                                $sql = "TRUNCATE TABLE saw_perankingan";
                                $hasil = $conn->query($sql);

                                $sql = "SELECT * FROM saw_penilaian";
                                $hasil = $conn->query($sql);
                                $rows = $hasil->num_rows;
                                if ($rows > 0) {
                                    while ($row = $hasil->fetch_row()) {
                                        $nilai = round((($row[1] / $C1) * $B1) +
                                            (($row[2] / $C2) * $B2) +
                                            (($row[3] / $C3) * $B3) +
                                            (($row[4] / $C4) * $B4) +
                                            (($row[5] / $C5) * $B5) +
                                            (($row[6] / $C6) * $B6) +
                                            (($row[7] / $C7) * $B7) +
                                            (($row[8] / $C8) * $B8) +
                                            (($C9 / $row[9]) * $B9), 3);
                                        $nama = $row[0];
                                        $sql1 = "INSERT INTO saw_perankingan(nama,nilai_akhir) VALUES ('" . $nama . "','" . $nilai . "')";
                                        $hasil1 = $conn->query($sql1);
                                    }
                                }
                                $sql = "SELECT * FROM saw_perankingan";
                                $hasil = $conn->query($sql);
                                $rows = $hasil->num_rows;
                                if ($rows > 0) {
                                    while ($row = $hasil->fetch_row()) {
                                ?>
                                        <tr>
                                            <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                                            <td><?= $row[1] ?></td>
                                            <td><?= $row[2] ?></td>
                                        </tr>
                                <?php }
                                } else {
                                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <b>
                            <h6><b>PERANKINGAN</b></h6>
                        </b>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-arrow-down"></i> No</th>
                                    <th><i class="fa fa-arrow-down"></i> Nama</th>
                                    <th><i class="fa fa-arrow-down"></i> Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $b = 0;
                                $sql = "SELECT*FROM saw_perankingan ORDER BY nilai_akhir DESC";
                                $hasil = $conn->query($sql);
                                if ($hasil->num_rows > 0) {
                                    while ($row = $hasil->fetch_row()) {
                                ?>
                                        <tr>
                                            <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                                            <td><?= $row[1] ?></td>
                                            <td><?= $row[2] ?></td>
                                        </tr>
                                <?php }
                                } else {
                                    echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </section>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>