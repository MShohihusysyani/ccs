<section class="content">
    <div class="container-fluid">
        <div class="block-header">


        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3>
                            Data Pengajuan
                        </h3>

                        <h5>Minggu Ke - <?= $minggu ?></h5>
                        <?php
                        $user = $this->db->query("SELECT divisi as user FROM user Where id = '$user_id'");

                        foreach ($user->result() as $users) {
                        ?>
                        <h5>Divisi : <?= $users->user ?></h5>
                        <?php } ?>
                        <h5>Tanggal : <?= $tanggal ?></h5>

                        <form
                            action="<?= base_url('export/cetak_hari'); ?>/<?= $tanggal ?>/<?= $user_id ?>/<?= $minggu ?>"
                            method="
                            post" enctype="multipart/form-data">
                            <div>
                                <button class='btn btn-primary waves-effect m-r-20' type="submit">
                                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                                    Export Pdf
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example"
                                id="example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Realisasi</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Validasi</th>
                                    </tr>

                                </thead>


                                <tbody>

                                    <?php
                                    $no = 1;
                                    foreach ($dpengajuan as $dp) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?= $dp['nama_brg']; ?></td>
                                        <td><?= $dp['jumlah']; ?></td>
                                        <td><?= $dp['realisasi']; ?></td>
                                        <td><?= $dp['satuan']; ?></td>
                                        <td>Rp. <?= number_format($dp['harga']);  ?></td>
                                        <td>Rp. <?= number_format($dp['total']); ?></td>
                                        <td><?= $dp['status']; ?></td>
                                        <td><?= $dp['validasi']; ?></td>




                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
    <!-- MODAL  edit -->
    <?php
    $no = 0;
    foreach ($dpengajuan as $brg) : $no++; ?>
    <div class="modal fade" id="editModal<?= $brg['id']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">SETUJUI PENGAJUAN</h4>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('pengajuan/setuju') ?>
                    <input type="hidden" name="id" value="<?= $brg['id']; ?>">
                    <div class="body">
                        <form class="form-horizontal">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="nama">Nama Barang</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" id="nama_brg" name="nama_brg" class="form-control"
                                                value="<?= $brg['nama_brg']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="nama">Jumlah</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="number" id="jumlah" name="jumlah" class="form-control"
                                                onkeyup="hitung();" value="<?= $brg['jumlah']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="nama">Realisasi</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="number" id="realisasi" name="realisasi" class="form-control"
                                                value="<?= $brg['jumlah']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="nama">Satuan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" id="satuan" name="satuan" class="form-control"
                                                value="<?= $brg['satuan']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="nama">Harga</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="number" id="harga" name="harga" class="form-control"
                                                onkeyup="hitung();" value="<?= $brg['harga']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="nama">Total</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" id="total" name="total" class="form-control"
                                                onkeyup="hitung();" value="<?= $brg['total']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-link waves-effect">SETUJUI</button>
                                <button type="button" class="btn btn-link waves-effect"
                                    data-dismiss="modal">CLOSE</button>
                                <?php echo form_close() ?>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ?>

</section>







<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#nama_brg').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: '<?= base_url() ?>admin/barangList',
                type: 'post',
                dataType: 'json',
                data: {
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        select: function(event, ui) {
            $('#nama_brg').val(ui.item.label);
            $('#id').val(ui.item.value);

            return false;
        }
    });
});
</script>
<script>
$(document).ready(function() {
    $(document).on('click', '#pilih', function() {
        var nama_barang = $(this).data('barang');
        var id = $(this).data('id');
        $('#nama_brg').val(nama_barang);
        $('#barang_id').val(id);
        $('#defaultModal').modal('hide');
    })
});
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#jumlah, #harga").keyup(function() {
        var harga = $("#harga").val();
        var jumlah = $("#jumlah").val();

        var total = parseInt(harga) * parseInt(jumlah);
        $("#total").val(total);
    });
});
</script>

<script>
function hitung() {

    var jumlah = Number(document.getElementById('jumlah').value);
    var harga = Number(document.getElementById('harga').value);
    var total = parseInt(jumlah) * parseInt(harga);
    if (!isNaN(result)) {

        document.getElementById('total').value = total;

    }

}
</script>