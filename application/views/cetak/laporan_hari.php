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
    <p align="center" style="font-weight: bold; font-size: 18px;"><u>FORM TANDA TERIMA SUPPLIES KANTOR</u></p>

    <!-- <p align="center" style="font-weight: bold; font-size: 14px;"><u>Untuk Bagian <?= $divisi ?></u></p> -->
    <?php
    $user = $this->db->query("SELECT divisi as user FROM user Where id = '$user_id'");

    foreach ($user->result() as $users) {
    ?>


    <div class="isi" style="margin: 0 auto;">
        <p style="color: black; text-align: left;">Pengajuan oleh Divisi : <b><?= $users->user ?></b><br>Tanggal
            pengajuan :
            <b><?php echo tanggal_indo($tanggal) ?>
            </b><br>Minggu Ke : <b><?= $minggu ?><br><br> Di bawah ini data barang yang
                diajukan dan sudah di validasi : </b>
        </p>
        <?php } ?>

        <table class="tabel2">
            <thead>
                <tr>
                    <th style="text-align: center;  "><b>No.</b></th>
                    <th style="text-align: center;  "><b>Nama Barang</b></th>
                    <th style="text-align: center;  "><b>Jumlah</b></th>
                    <th style="text-align: center;  "><b>Realisasi</b></th>
                    <th style="text-align: center;  "><b>Satuan</b></th>
                    <th style="text-align: center;  "><b>Validasi</b></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($dpengajuan as $dp) : ?>
                <tr>
                    <td style="text-align: center; font-size: 12px;"><?php echo $no++; ?></td>
                    <td style="text-align: left; font-size: 12px;"><?= $dp['nama_brg']; ?></td>
                    <td style="text-align: left; font-size: 12px;"><?= $dp['jumlah']; ?></td>
                    <td style="text-align: left; font-size: 12px;"><?= $dp['realisasi']; ?></td>
                    <td style="text-align: left; font-size: 12px;"><?= $dp['satuan']; ?></td>
                    <td style="text-align: left; font-size: 12px;"><?= $dp['validasi']; ?></td>
                </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <?php
        $user = $this->db->query("SELECT nama as user, divisi, nik, foto_ttd FROM user Where id = '$user_id'");

        foreach ($user->result() as $users) {
        ?>


    <div class="kiri" style="margin: 0 auto;">
        <p>Penerima :<br><?= $users->divisi ?></p>
        <p><img src="<?= base_url('assets/img/ttd/') . $users->foto_ttd; ?>" style="width:100px;height:100px" /></p>
        <b>
            <p><u><?php echo $users->user ?></u></p>
            <p>NIK : <?php echo $users->nik ?><br></p>
        </b>
    </div>
    <?php } ?>
    <?php
        $user = $this->db->query("SELECT nama_ketua, nama_divisi, nik, ttd FROM jabatan Where id_jabatan = '1'");

        foreach ($user->result() as $users) {
        ?>
    <div class="kanan" style="margin: 0 auto;">
        <p></p>
        <p>Purwokerto, <?php echo tanggal_indo($dp['waktu_validasi']) ?><br><?php echo $users->nama_divisi ?></p>
        <p></p>
        <p> </p>
        <p><img src="<?= base_url('assets/img/ttd_ketua/') . $users->ttd; ?>" style="width:100px;height:100px" /></p>
        <b>
            <p><u><?php echo $users->nama_ketua ?></u></p>
            <p>NIK : <?php echo $users->nik ?><br></p>
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