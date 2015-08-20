<?php session_start();
require_once("config/koneksi.php");

$no=0;
$q=mysql_query("SELECT
                    daftar.id_pmbid,daftar.nama,daftar.tempatlahir,daftar.tanggallahir,
                     prodi.singkatan,tes.jalur
                FROM daftar
                JOIN prodi on daftar.id_prodi=prodi.id_prodi
                join tes on daftar.id_pmbid=tes.idtes
                ");
?>
<link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/stylesheets/datatables.css" type="text/css" />
<script type="text/javascript" src="assets/javascripts/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/javascripts/html-table-search.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#data').tableSearch({
            searchText:'Cari Nama/PMB ID',
            searchPlaceHolder:'ketik nama/PMB ID'

        });
    } );

</script>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-heading">
            <h3>Data Mahasiswa Baru</h3>
        </div>

        <div class="widget-container fluid-height clearfix">
        <table class="table table-bordered" id="data">
            <thead>
            <tr>
                <th>#</th>
                <th>PMB ID</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Prodi</th>
                <th>Jalur</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($r=mysql_fetch_array($q)){
            ?>
                <tr>
                    <td><?php echo ++$no;?></td>
                    <td><?php echo $r[id_pmbid];?></td>
                    <td><?php echo $r[nama];?></td>
                    <td><?php echo $r[tempatlahir];?></td>
                    <td><?php echo $r[tanggallahir];?></td>
                    <td><?php echo $r[singkatan];?></td>
                    <?php if($r[jalur]==""){
                        $jalur="<span class='label label-danger'>Belum TES</span>";
                    }else{
                        $jalur="$r[jalur]";
                    }?>

                    <td><?php echo $jalur;?></td>
                    <td><a href="?call=validasiform&id=<?php echo $r[id_pmbid];?>"><span class="label label-warning"><i class="icon icon-asterisk icon-white"></i> Validasi</span> </a> </td>
                </tr>
            </tbody>
            <?php }?>
        </table>
        </div>
    </div>
</div>