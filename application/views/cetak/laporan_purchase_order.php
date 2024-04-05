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
    <p align="center" style="font-weight: bold; font-size: 18px;">PURCHASE ORDER</p>
    <?php
    $bulan = date('m');
    $romawi = romawipo($bulan);
    $taun = date('Y');
    $query = $this->db->query("SELECT max(kode_surat) as maxKode FROM surat_po where month(tanggal_surat) = '$bulan' AND year(tanggal_surat) = '$taun' ");
    foreach ($query->result() as $surats) {
    ?>
    <p align="center" style="font-weight: bold; font-size: 15px;"><?= $surats->maxKode ?></p>
    <?php } ?> <br>
    <p align="center" style="font-weight: bold; font-size: 18px;">Unit Pengadaan Barang</p>

    <!-- <p align="center" style="font-weight: bold; font-size: 14px;"><u>Untuk Bagian <?= $divisi ?></u></p> -->
    <table class="table table-no-bordered">
        <tr>
            <th align="left">Kirim Ke</th>
        </tr>

        <tr>
            <td align="justify">
                Universitas Amikom Purwokerto
                Jl. Let.Jend.Pol. Soemarto (depan SPN), Watumas, Purwanagara, Purwokerto Utara
                Phone: 0281-623321
                HP/WA: (+62) 0857-1410-6913

            </td>
        </tr>


    </table>
    <hr>

    <div class="isi" style="margin: 0 auto;">
        <?php
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d');
        $user = $this->db->query("SELECT nama_vendor as nama FROM tbl_vendor Where id_vendor = '$id_vendor'");

        foreach ($user->result() as $users) {
        ?>

        <p style="color: black; text-align: left;">
            <!-- No : 0001/PO/UPB/AMIKOMPWT/II/2023 <br> -->
            Tanggal pesan : <?php echo tanggal_indo($now) ?> <br>
            Metode Pembayaran : Transfer Bank/Cash
            </b>
        </p>

        <p>


            Vendor : <?= $users->nama ?></b>


        </p>
        <?php } ?>

        <table class="tabel2">
            <thead>
                <tr>
                    <th style="text-align: center;  "><b>No.</b></th>
                    <th style="text-align: center;  "><b>Nama Barang</b></th>
                    <!-- <th style="text-align: center;  "><b>Jumlah</b></th> -->
                    <th style="text-align: center;  "><b>Jumlah</b></th>
                    <th style="text-align: center;  "><b>Harga</b></th>
                    <th style="text-align: center;  "><b>Total Harga</b></th>



                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($dpengajuanpr as $dpr) : ?>
                <tr>
                    <td style="text-align: center; font-size: 12px;"><?php echo $no++; ?></td>
                    <td style="text-align: left; font-size: 12px;"><?= $dpr['nama_brg']; ?></td>
                    <!-- <td style="text-align: left; font-size: 12px;"><?= $dpr['jumlah']; ?></td> -->
                    <td style="text-align: left; font-size: 12px;"><?= $dpr['realisasi']; ?></td>
                    <td style="text-align: left; font-size: 12px;">Rp. <?= number_format($dpr['harga']); ?></td>
                    <td style="text-align: left; font-size: 12px;">Rp. <?= number_format($dpr['total']); ?></td>

                </tr>
                <?php endforeach;
                ?>
            </tbody>
            <tfoot>
                <?php

                $totalp = $this->db->query("SELECT sum(total) as totalp FROM pengajuan Where id_vendor = '$id_vendor' AND status = 'Disetujui keuangan'");

                foreach ($totalp->result() as $total) {
                ?>
                <tr>
                    <td colspan="4">
                        <b>TOTAL</b>
                    </td colspan="1">
                    <td><b><?php echo 'Rp. ' . number_format($total->totalp) ?></b></td>
                </tr>

                <?php } ?>

            </tfoot>
        </table>
    </div>

    <?php
    $user = $this->db->query("SELECT nama_ketua, nama_divisi, ttd FROM jabatan Where id_jabatan = '2'");

    foreach ($user->result() as $users) {
    ?>


    <div class="kiri" style="margin: 0 auto;">
        <p>Pemesan</p>
        <p>Ka. <?php echo $users->nama_divisi ?></p>

        <p><img src="<?= base_url('assets/img/ttd_ketua/') . $users->ttd; ?>" style="width:100px;height:100px" /></p>
        <b>
            <p><u><?php echo $users->nama_ketua ?></u><br></p>

        </b>
    </div>
    <?php } ?>

    <?php
    $user = $this->db->query("SELECT nama_ketua, nama_divisi, ttd FROM jabatan Where id_jabatan = '3'");

    foreach ($user->result() as $users) {
    ?>
    <div class="kanan" style="margin: 0 auto;">
        <p>Mengetahui</p>
        <p>Dir. <?php echo $users->nama_divisi ?></p>

        <p><img src="<?= base_url('assets/img/ttd_ketua/') . $users->ttd; ?>" style="width:100px;height:100px" /></p>
        <b>
            <p><u><?php echo $users->nama_ketua ?></u><br></p>

        </b>



    </div>
    <?php } ?>

</body>

<script type="text/javascript">
window.print();
</script>


<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</html>