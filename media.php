<?php
session_start();
require_once("head.php");
require_once("menu.php");
include("config/koneksi.php");

if($_GET[call]=="dashboard"){
    require_once("home.php");
}elseif($_GET[call]=="manageuser"){
    require_once("user.php");
}elseif($_GET[call]=="userinput"){
    require_once("user_input.php");
}if($_GET[call]=="simpanuser"){
    $nama=$_POST[nama];
    $user=$_POST[username];
    $pass=$_POST[password];
    $role=$_POST[role];
    $aktif=$_POST[aktif];


    mysql_query("INSERT INTO user(nama,username,password,role,aktif) VALUES ('$_POST[nama]','$_POST[username]','$_POST[password]','$_POST[role]','$_POST[aktif]')");

    ?>

    <script>
        alert("Data Pengguna bernama : <?php echo $nama;?>, Berhasil disimpan");
        location='media.php?call=manageuser';
    </script>
<?php
}elseif ($_GET[call]=="updateuser"){
    require_once("user_update.php");
}elseif($_GET[call]=="user_update"){
    $id=$_POST[iduser];
    $nama=$_POST[nama];
    $user=$_POST[username];
    $pass=$_POST[password];
    $role=$_POST[role];
    $aktif=$_POST[aktif];

    mysql_query("UPDATE user set nama='$nama',username='$user',password='$pass',role='$role',aktif='$aktif' where iduser='$id'");
?>

<script>
    alert("Data Pengguna bernama : <?php echo $nama;?>, Berhasil diganti");
    location='media.php?call=manageuser';
</script>
<?php
}elseif($_GET[call]=="deleteuser"){
    $id=$_GET['id'];

    mysql_query("DELETE FROM user where iduser='$id'");
?>

<script>
    alert("Data Pengguna dengan ID : <?php echo $id;?>, Berhasil hapus");
    location='media.php?call=manageuser';
</script>
<?php
}elseif($_GET[call]=="validasi"){
    require_once("validasi.php");
}elseif($_GET[call]=="validasiform"){
    require_once("validasiform.php");
}

?>