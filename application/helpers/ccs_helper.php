<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    }
      
}
if (!function_exists('bulan')) {
    function bulan()
    {
        $bulan = Date('m');
        switch ($bulan) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;

            default:
                $bulan = Date('F');
                break;
        }
        return $bulan;
    }
}


/**
 * Fungsi untuk membuat tanggal dalam format bahasa indonesia
 * @param void
 * @return string format tanggal sekarang (contoh: 22 Desember 2016)
 */
if (!function_exists('tanggal')) {
    function tanggal()
    {
        $tanggal = Date('d') . " " . bulan() . " " . Date('Y');
        return $tanggal;
    }
}

function noUrutClient()
{
    $ci = get_instance();
    $query = "SELECT max(no_urut) as maxNo FROM klien";
    $data = $ci->db->query($query)->row_array();
    $kode = $data['maxNo'];
    $noUrut = (int) substr($kode, 0);

    $noUrut++;

    $kodeBaru = sprintf('%01s', $noUrut);
    return $kodeBaru;
}

function noTiket()
{
    $ci = get_instance();
    $taun = date('Y');
    $bulan = date('m');
    $query = "SELECT max(no_tiket) as maxNotiket FROM pelaporan";
    $data = $ci->db->query($query)->row_array();
    $noTiket = $data['maxNotiket'];
    $noUrut = (int) substr($noTiket, 0, 3);

    $noUrut++;
    $kodeHuruf = "TIC";

    $noTiketBaru = $kodeHuruf . $taun . $bulan . sprintf('%03s', $noUrut);
    return $noTiketBaru;
}






