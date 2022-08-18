<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="flexstyle.css">


<div class="container">

	<center>
		<h2>Kalsör Oluşturma Silme  işlemleri</h2>
	</center>

<form action="olustur.php" method="post">
	<input type="text" name="kname" tabindex="0" placeholder="klasör adını giriniz">
	<input type="submit" value="Klasör Oluştur">
</form>

<hr>

<form action="sil.php" method="post">
	<input type="text" name="kname" tabindex="0" placeholder="klasör adını giriniz">
	<input type="submit" value="Klasör Sil">
</form>

</div>