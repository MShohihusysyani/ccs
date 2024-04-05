<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic-icons.css">
    <!-- Setting CSS bagian header/ kop -->

    <!-- Setting Margin header/ kop -->
    <!-- Setting CSS Tabel data yang akan ditampilkan -->
    <style type="text/css">
    .tabel2 {
        border-collapse: collapse;
    }


    .tabel2 th,
    .tabel2 td {
        padding: 5px 5px;
        border: 2px solid #000000;

    }

    p {
        margin-left: 30px;
    }



    div.kanan {
        position: absolute;

        right: 50px;

    }

    div.tengah {
        position: absolute;

        right: 330px;

    }

    div.kiri {
        position: absolute;

        left: 10px;
    }
    </style>

    <table class="tabel2">
        <?php foreach ($kode as $kd) : ?>

        <tr>

            <th rowspan="3"><img src="<?= base_url('assets/'); ?>images/amik.png" style="width:80px;height:64px" />
            </th>
            <td style="font-size : 18px;"><b>Universitas Amikom Purwokerto</b></td>

        </tr>
        <tr>
            <td style="text-align:center;"><b> <?= $kd['kode_lokasi']; ?></b></td>
        </tr>
        <tr>
            <td style="text-align:center;"><b> <?= $kd['kode_barang']; ?></b></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

<script type="text/javascript">
window.print();
</script>


<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</html>