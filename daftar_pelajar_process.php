<?php
require '../includes/config.php';
require '../includes/functions.php';

//if ( !is_login())
//{
//redirect('../index.php', 'Anda perlu log masuk terlebih dahulu',
//'warning');
//}


// pastikan pengguna mengakses fail ini menggunakan form sahaja
if ( ! $_POST)
{
redirect('../index.php', 'Akses tidak dibenarkan!',
'error');
}

//function untuk upload gambar


// jika terdapat imej yang dipilih, kita akan upload terlebih dahulu
// pastikan pengguna mengakses fail ini menggunakan form sahaja
if ( ! $_POST)
    {
    redirect('../../admin/vehicle_add.php', 'Akses tidak dibenarkan!',
    'error');
    }
// jika terdapat imej yang dipilih, kita akan upload terlebih dahulu
if ( ! empty($_FILES['gambar']['name']))
{
// dapatkan ext file tersebut
$ext = strrchr(strtolower($_FILES['gambar']['name']), '.');
// semak ext sah
if ($ext == '.jpg' || $ext == '.jpeg' || $ext == '.png')
{
// dapatkan nama unik
$gambar = ($_POST['ic']). $ext;
// tetapkan lokasi
$dir = dirname(dirname(__FILE__)).'/uploads/pelajar/';

// pindahkan drp tmp -> folder upload
move_uploaded_file($_FILES['gambar']['tmp_name'], $dir.$gambar);
}

else
{
$gambar = "no_image.jpg";
}
}
else
{
$gambar = "no_image.jpg";
}

//temporary bg nama dekat gambar

$gambar2 = ($_POST['ic']).'.jpg';

$sql = "
INSERT INTO
pelajar
SET
nama = '".clean_input($_POST['nama'])."',
ic = '".clean_input($_POST['ic'])."',
dob = '".clean_input($_POST['dob'])."',
jantina = '".clean_input($_POST['jantina'])."',
agama = '".clean_input($_POST['agama'])."',
bangsa = '".clean_input($_POST['bangsa'])."',
alamat1 = '".clean_input($_POST['alamat1'])."',
id_program = '".clean_input($_POST['program'])."',
matrik = '".clean_input($_POST['matrik'])."',
asal = '".clean_input($_POST['asal'])."',
telpelajar = '".clean_input($_POST['telpelajar'])."',    
semester = '1',
sesi='JUL-DIS 2016',
felda='".clean_input($_POST['felda'])."',
id_lepasan='".clean_input($_POST['lepasan'])."', 
id_aliran='".clean_input($_POST['aliran'])."',
gambar = '".$gambar2."'
"; 
connect_db_student();

 //jika operasi tidak berjaya, paparkan notis kepada pengguna
if ( ! mysql_query($sql))
{
redirect('../index.php', mysql_error(), 'warning');
}
else
{
redirect('../daftar_pelajar.php', 'Pendaftaran telah berjaya
direkodkan.');
}
    close_db();
     
?>
