
<?php	@session_start();
	include"config/koneksi.php";
	//menagkap data dari form login
	$username =$_POST['username'];
	$password =$_POST['password'];

$query=mysql_query("SELECT * FROM user WHERE username ='$username' AND password='$password' AND aktif=1");
$r=mysql_fetch_array($query);
if(mysql_num_rows($query)>0){
$_SESSION[iduser]=$r['iduser'];
$_SESSION[username]=$r['username'];
$_SESSION[password]=$r['password'];
$_SESSION[nama]=$r['nama'];
$_SESSION[role]=$r['role'];
$_SESSION[aktif]=$r['aktif'];

?>
	<script>
	alert("Hai <?php echo $_SESSION[role];?>, Selamat datang di PMB IAI Nurul Jadid ")
	location='media.php?call=dashboard';
	</script>
  <?php 
    }else{
	?>
	<script>
	alert("Akses Dilarang masuk Anda bukan ADMIN")
	location='index.php';
	</script>
    <?php
}
?>