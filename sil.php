<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="flexstyle.css">

<?php 


$kname = $_POST['kname'];

   if (!empty($kname)) {

  if (!file_exists($kname)) {
  	 
  	  echo "Böyle bir klasör bulunmamaktadır.";
  	  header("Refresh:1; url=index.php");
  }
  else
  {

   $deletedfile =rmdir($kname);
   if ($deletedfile) {
   	 
   	 echo "$kname adlı  klasör silme işlemi başarılı..";
	header("Refresh:1; url=index.php");

   }
   else
   {

   	echo "Klasör silinemedi...";
	header("Refresh:1; url=index.php");

   }

  }

}
else
{
	echo "Klasör adı boş bırakılamaz ";
	header("Refresh:1; url=index.php");
}

?>