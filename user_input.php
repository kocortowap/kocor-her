<?php
require_once("config/koneksi.php");

?>

<link href="assets/stylesheets/style.css" rel="stylesheet" type="text/css"/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-heading">
            <h3><b>Input Pengguna</b></h3>
        </div>

            <form class="form-horizontal" action="?call=simpanuser" method="post">
                <div class="form-group">
                    <label class="control-label col-md-3">Nama</label>
                    <div class="col-md-4">
                        <input type="text" name="nama" class="form-control" />
                   </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Username</label>
                    <div class="col-md-4">
                        <input type="text" name="username" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Password</label>
                    <div class="col-md-4">
                        <input type="password" name="password" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Role</label>
                    <div class="col-md-2">
                       <select class="form-control" name="role" >
                           <option value="">-- Pilih Role User --</option>
                           <option value="Teller">Teller</option>
                           <option value="Validator">Validator Berkas</option>
                       </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Aktif</label>
                    <div class="col-md-1">
                        <select class="form-control" name="aktif" >
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-7 pull-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger" onclick="self.history.back()">Batal</button>
                    </div>
                </div>
            </form>

    </div>
</div>
