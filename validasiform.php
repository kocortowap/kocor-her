<?php session_start();
include("config/koneksi.php");
require_once("head.php");
$id=$_GET['id'];

$daftar=mysql_query("SELECT * FROM DAFTAR WHERE id_pmbid='$id'");
$data=mysql_fetch_array($daftar);

if($data[jk]=="L"){
    $jk="Laki-laki";
}else{
    $jk="Perempuan";
}
?>
<link href="assets/stylesheets/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/javascripts/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/javascripts/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#propinsi').change(function(){
            $.getJSON('kab.php',{action:'getKab', id_prov:$(this).val()}, function(json){
                $('#kabupaten').html('');
                $.each(json, function(index, row) {
                    $('#kabupaten').append('<option value='+row.id+'>'+row.nama+'</option>');
                });
            });
        });
        $('#kabupaten').change(function(){
            $.getJSON('kab.php',{action:'getKec', id_kabupaten:$(this).val()}, function(json){
                $('#kecamatan').html('');
                $.each(json, function(index, row) {
                    $('#kecamatan').append('<option value='+row.id+'>'+row.nama+'</option>');
                });
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#propinsi_slta').change(function(){
            $.getJSON('kab_slta.php',{action:'getKab', id_prov:$(this).val()}, function(json){
                $('#kabupaten_slta').html('');
                $.each(json, function(index, row) {
                    $('#kabupaten_slta').append('<option value='+row.id+'>'+row.nama+'</option>');
                });
            });
        });
        $('#kabupaten_slta').change(function(){
            $.getJSON('kab_slta.php',{action:'getKec', id_kabupaten:$(this).val()}, function(json){
                $('#kecamatan_slta').html('');
                $.each(json, function(index, row) {
                    $('#kecamatan_slta').append('<option value='+row.id+'>'+row.nama+'</option>');
                });
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#propinsi_ortu').change(function(){
            $.getJSON('kab_ortu.php',{action:'getKab', id_prov:$(this).val()}, function(json){
                $('#kabupaten_ortu').html('');
                $.each(json, function(index, row) {
                    $('#kabupaten_ortu').append('<option value='+row.id+'>'+row.nama+'</option>');
                });
            });
        });
        $('#kabupaten_ortu').change(function(){
            $.getJSON('kab_ortu.php',{action:'getKec', id_kabupaten:$(this).val()}, function(json){
                $('#kecamatan_ortu').html('');
                $.each(json, function(index, row) {
                    $('#kecamatan_ortu').append('<option value='+row.id+'>'+row.nama+'</option>');
                });
            });
        });
    });
</script>
<script>
    $(function(){
        $("#tanggallahir").datepicker({
            dateFormat:'yy-mm-dd',
            changeYear:true,
            changeMonth:true,
            yearRange:"-50:+0"

        });
    });

</script>
<div class="page-header"><h2>Data Mahasiswa Baru</h2></div>
<div class="widget-container stats-container">
    <form class="form-horizontal" action="?call=updatevalidasi" method="post">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#pribadi" data-toggle="tab">Data Pribadi</a>
        </li>
        <li><a href="#pendidikan" data-toggle="tab">Data Sekolah Asal</a> </li>
        <li><a href="#ortu" data-toggle="tab">Data Orang Tua/Wali</a> </li>
    </ul>

        <div class="tab-content">
            <div id="pribadi" class="tab-pane fade in active">
                <br />
                <div class="form-group">
                    <label class="control-label col-md-3">PMB ID :</label>
                    <div class="col-md-1">
                        <label class="control-label"><?php echo $data[id_pmbid];?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Nama :</label>
                    <div class=" col-md-3">
                        <input type="text" name="nama" class="form-control" value="<?php echo $data[nama];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Kelamin :</label>
                    <div class="col-md-1">
                        <label class="control-label "><?php echo $jk;?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tempat Lahir & Tanggal Lahir :</label>
                    <div class=" col-md-2">
                        <input type="text" name="tempatlahir" class="form-control" value="<?php echo $data[tempatlahir];?>"><span>
                            <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" value="<?php echo $data[tanggallahir];?>"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Alamat :</label>
                    <div class=" col-md-5">
                        <input type="text" name="alamat" class="form-control" value="<?php echo $data[alamat];?>">

                    </div>
                </div>
                <?php
                $query = "SELECT id, nama FROM provinsi ORDER BY nama";
                $sql = mysql_query($query);
                $arrpropinsi = array();
                while ($row = mysql_fetch_array($sql)) {
                    $arrpropinsi [ $row['id'] ] = $row['nama'];
                }
                ?>
                <div class="form-group">
                    <label class="control-label col-md-3">Propinsi :</label>
                    <div class=" col-md-2">

                        <select name="propinsi" id="propinsi" class="form-control">
                            <?php
                            if($data[propinsi]==0){
                                echo "<option value=0 selected>-- Pilih Propinsi --</option>";
                            }
                            $propinsi_combo=mysql_query("select * from provinsi order by id");
                            while($pc=mysql_fetch_array($propinsi_combo))
                            {
                                if ($pc[id]==$data[propinsi])
                                {
                                    ?>
                                    <option value="<?php echo"$pc[id]";?>" selected="selected"><?php echo"$pc[nama]";?></option>
                                <?php
                                }else{
                                    ?>
                                    <option value="<?php echo"$pc[id]";?>"><?php echo"$pc[nama]";?></option>
                                <?php
                                }
                            }?>
                            </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Kabupaten :</label>
                    <div class=" col-md-2">

                        <select name="kabupaten" id="kabupaten" class="form-control">
                            <?php

                            $kabupaten_combo=mysql_query("select * from kabupaten order by id");
                            while($pk=mysql_fetch_array($kabupaten_combo))
                            {
                                if ($pk[id]==$data[kabupaten])
                                {
                                    ?>
                                    <option value="<?php echo"$pk[id]";?>" selected="selected"><?php echo"$pk[nama]";?></option>
                                <?php
                                }else{
                                    ?>
                                    <option></option>
                                <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Kabupaten :</label>
                    <div class=" col-md-2">
                        <select name="kecamatan" id="kecamatan" class="form-control">
                            <?php


                            $kecamatan_combo=mysql_query("select * from kecamatan order by id");
                            while($pkec=mysql_fetch_array($kecamatan_combo))
                            {
                                if ($pkec[id]==$data[kecamatan])
                                {
                                    ?>
                                    <option value="<?php echo"$pkec[id]";?>" selected="selected"><?php echo"$pkec[nama]";?></option>
                                <?php
                                }else{
                                    ?>
                                    <option ></option>
                                <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Status Pernikahan :</label>
                    <div class="col-md-1">
                        <label class="control-label "><?php echo $data[statuspernikahan];?></label>
                    </div>
                </div>



            </div>

            <div id="pendidikan" class="tab-pane fade">
                <h3>Halaman Informasi Pendidikan</h3>
            </div>
            <div id="ortu" class="tab-pane fade">
                <h3>Halaman Informasi Orang Tua</h3>
            </div>

        </div>

    </form>

</div>




