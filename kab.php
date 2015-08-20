<?php
#koneksi
$conn = mysqli_connect("localhost", "root", "", "dbpmb");
#akhir-koneksi

#ambil data propinsi
$query = "SELECT id, nama FROM provinsi ORDER BY nama";
$sql = mysqli_query($conn, $query);
$arrpropinsi = array();
while ($row = mysqli_fetch_assoc($sql)) {
	$arrpropinsi [ $row['id'] ] = $row['nama'];
}

#action get Kabupaten
if(isset($_GET['action']) && $_GET['action'] == "getKab") {
	$kode_prop = $_GET['id_prov'];
	
	//ambil data kabupaten
	$query = "SELECT id, nama FROM kabupaten WHERE id_prov='$kode_prop' ORDER BY nama";
	$sql = mysqli_query($conn, $query);
	$arrkab = array();
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($arrkab, $row);
	}
	echo json_encode($arrkab);
	exit;
}
#action get kecamatan
if(isset($_GET['action']) && $_GET['action'] == "getKec"){
	$kode_kab=$_GET['id_kabupaten'];
	
	//ambil data kecamatan
	$x="SELECT id, nama FROM kecamatan WHERE id_kabupaten='$kode_kab' ORDER BY nama";
	$s=mysqli_query($conn,$x);
	$arrkec = array();
	while($row=mysqli_fetch_assoc($s)){
		array_push($arrkec,$row);
	}
	echo json_encode($arrkec);
	exit; }
	

?>