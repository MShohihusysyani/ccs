<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic-icons.css">
    <!-- Setting CSS bagian header/ kop -->
    <style type="text/css">
    table.page_header {
        width: 1020px;
        border: none;
        background-color: #DDDDFF;
        border-bottom: solid 1mm #AAAADD;
        padding: 2mm
    }

    table.page_footer {
        width: 1020px;
        border: none;
        background-color: #DDDDFF;
        border-top: solid 1mm #AAAADD;
        padding: 2mm
    }
    </style>
    <!-- Setting Margin header/ kop -->
    <!-- Setting CSS Tabel data yang akan ditampilkan -->
    <style type="text/css">
    .tabel2 {
        border-collapse: collapse;
        margin: 0 auto;
        width: 90%;
        margin-left: 30px;
        margin-right: 30px;
    }

    .tabel2 th,
    .tabel2 td {
        padding: 5px 5px;
        border: 1px solid #000000;

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

    <table>
        <tr>
            <th rowspan="3"><img src="<?= base_url('assets/'); ?>images/amik.png" style="width:100px;height:80px" />
            </th>
            <td align="center" style="width: 520px;">
                <font style="font-size: 18px"><b>UNIVERSITAS AMIKOM PURWOKERTO</b></font>
                <br>Jl. Letjen Pol Sumarto Watumas, Purwanegara, Purwokerto Utara, Banyumas, Kode Pos : 53127
                <br>Telepon : (0281) 623321 / (0281) 623196
            </td>

        </tr>
    </table>
    <hr>
    <p align="center" style="font-weight: bold; font-size: 18px;"><u>DAFTAR INVENTARIS BARANG</u></p>

    <?php
    $ruang = $this->db->query("SELECT nama_ruangan FROM tbl_ruangan Where id_ruangan = '$kode_ruangan'");

    foreach ($ruang->result() as $ruangan) {
    ?>
    <div class="isi" style="margin: 0 auto;">
        <p style="color: black; text-align: left;">Nama Ruangan :
            <b><?= $ruangan->nama_ruangan ?></b>
        </p>
        <?php } ?>

        <table class="tabel2">
            <thead>
                <tr>
                    <th style="text-align: center;  "><b>No.</b></th>
                    <th style="text-align: center;  "><b>Kode Barang</b></th>
                    <th style="text-align: center;  "><b>Nama Barang</b></th>
                    <th style="text-align: center;  "><b>Jumlah</b></th>
                    <th style="text-align: center;  "><b>Satuan</b></th>
                    <th style="text-align: center;  "><b>Kondisi</b></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($kode_ruang as $kr) : ?>
                <tr>
                    <td style="text-align: center; font-size: 12px;"><?php echo $no++; ?></td>
                    <td style="text-align: center; font-size: 12px;"><?= $kr['kode_barang']; ?></td>
                    <td style="text-align: center; font-size: 12px;"><?= $kr['nama_barang']; ?></td>
                    <td style="text-align: center; font-size: 12px;"><?= $kr['jumlah_barang']; ?></td>
                    <td style="text-align: center; font-size: 12px;"><?= $kr['satuan_barang']; ?></td>
                    <td style="text-align: center; font-size: 12px;"><?= $kr['keadaan_barang']; ?></td>
                </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <?php
        $user = $this->db->query("SELECT nama_ketua, nama_divisi, ttd FROM jabatan Where id_jabatan = '1'");
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d');

        foreach ($user->result() as $users) {
        ?>
    <div class="kiri" style="margin: 0 auto;">
        <p></p>
        <p>Purwokerto, <?= tanggal_indo($now) ?><br><?php echo $users->nama_divisi ?></p>
        <p></p>
        <p> </p>
        <p><img src="<?= base_url('assets/img/ttd_ketua/') . $users->ttd; ?>" style="width:50px;height:50px" /></p>
        <b>
            <p><u><?php echo $users->nama_ketua ?></u><br></p>
        </b>
        <br>
        <br>
        <br>

    </div>
    <?php } ?>
</body>

<script type="text/javascript">
window.print();
</script>


<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</html>