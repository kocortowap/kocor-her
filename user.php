<?php
require_once("config/koneksi.php");

?>


<link href="assets/stylesheets/datatables.css" rel="stylesheet" type="text/css"/>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel-heading">
                <div class="panel-heading pull-right">
                    <a href="media.php?call=userinput"> <button type="button" class="btn btn-primary" formaction="media.php?call=userinput"><i class="icon-bar glyphicon-plus-sign"></i> Tambah</button></a>
                </div>
                <h3>
                    Data Pengguna
                </h3>

            </div>


            <div class="widget-container stats-container">

                <table class="table table-bordered table-striped" id="user">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aktif</th>
                        <th>Action</th>
                    </thead>
                <?php
                    $no=0;
                    $q=mysql_query("SELECT * FROM user");
                    while($h=mysql_fetch_array($q)){;?>

                    <tbody>
                        <tr>
                            <td class="hidden-xs"><?php echo ++$no;?></td>
                            <td class="hidden-xs"><?php echo $h['nama'];?></td>
                            <td class="hidden-xs"><?php echo $h['username'];?></td>
                            <td class="hidden-xs"><?php echo $h['role'];?></td>
                            <?php if($h['aktif']==1){
                               $a="<span class='label label-success'>Aktif</span>";
                            }else{
                                $a="<span class='label label-danger'>Non Aktif</span>";
                            }?>
                            <td class="hidden-xs"><?php echo $a;?></td>
                            <td class="hidden-xs"><a href="<?php echo "?call=updateuser&id=$h[iduser]";?>">Edit</a> | <a href="<?php echo "?call=deleteuser&id=$h[iduser]";?>">Hapus</a> </td>

                        </tr>
                    </tbody>
                    <?php }?>
                        </table>

            </div>
        </div>
    </div>