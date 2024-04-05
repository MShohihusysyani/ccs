<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Register<b></b></a>
            <small>SIMA</small>
        </div>
        <?= validation_errors(); ?>
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="body">
                <?php echo form_open_multipart('auth/register') ?>
                <form>

                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="divisi" placeholder="Divisi/ Bagian" required
                                autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required
                                autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">note_add</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nik" placeholder="NIK" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" minlength="5"
                                required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="number" class="form-control" name="contact" placeholder="Contact Person"
                                minlength="5" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="5"
                                placeholder="Password" required>
                        </div>
                    </div>

                    <label for="nama">Foto Tanda Tangan(ukuran 1:1) (jpg/png) max 2mb</label>
                    <div class="form-group">
                        <label for="exampleInputFile"></label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_ttd" name="foto_ttd" required>

                            </div>
                        </div>
                    </div>



                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">REGISTER</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                    </div>
                </form>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>