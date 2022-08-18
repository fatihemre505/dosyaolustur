<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="flexstyle.css">

<?php 		

$kname = $_POST['kname'];

if (file_exists($kname)) {

	 echo "$kname adlı Kalsör daha  önce  olusturmuş";
     header("Refresh:1; url=index.php");

}else{

if (empty($kname)) {

	echo "Kalsör adı boş bırakılamaz";
	header("Refresh:1; url=index.php");

}else{

  $olustur = mkdir("$kname" ,"0777");

   if ($olustur) {
   	
   	echo "$kname adlı Kalsör  oluşturuldu..";
   	header("Refresh:1; url=index.php");

   }else
   {
   	echo "Klasör  oluşturulamadı...";
   }
 } 

}

?>