<?php
require_once("config/koneksi.php");
$id=$_GET['id'];
$q=mysql_query("SELECT * FROM USER where iduser='$id'");
$r=mysql_fetch_array($q);
?>

<link href="assets/stylesheets/style.css" rel="stylesheet" type="text/css"/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-heading">
            <h3><b>Input Pengguna</b></h3>
        </div>

            <form class="form-horizontal" action="?call=user_update" method="post">
                <input type="hidden" value="<?php echo $r['iduser'];?>" name="iduser">
                <div class="form-group">
                    <label class="control-label col-md-3">Nama</label>
                    <div class="col-md-4">
                        <input type="text" name="nama" class="form-control" value="<?php echo $r['nama'];?>"/>
                   </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Username</label>
                    <div class="col-md-4">
                        <input type="text" name="username" class="form-control" value="<?php echo $r['username'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Password</label>
                    <div class="col-md-4">
                        <input type="password" name="password" class="form-control" value="<?php echo $r['password'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Role</label>
                    <div class="col-md-2">
                       <select class="form-control" name="role" value="<?php echo $r['role'];?>" >
                           <option value="">-- Pilih Role User --</option>
                           <option value="Teller">Teller</option>
                           <option value="Validator">Validator Berkas</option>
                       </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Aktif</label>
                    <div class="col-md-1">
                        <select class="form-control" name="aktif" value="<?php echo $r['aktif'];?>">
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
