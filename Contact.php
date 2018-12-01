<<<<<<< HEAD
<?php
	if(isset($_Post['submit'])){
		$year=$_Post['year'];
		$model=$_Post['model'];
		$tech=$_Post['Technician Name'];
		$repair=$_Post['Repair Category'];
		$etc=$_Post['ETC'];
		$message=$_Post['message'];
		$submit=$_Post['submit'];
		$mailTo="f22b2honda@gmail.com";
		$headers="none";
		$txt=$message;
		mail($mailTo, $year, $model, $tech, $repair, $etc, $txt);
		header("Location: contact.php?mailsend");}
=======
<?php
	if(isset($_Post['submit'])){
		$year=$_Post['year'];
		$model=$_Post['model'];
		$tech=$_Post['Technician Name'];
		$repair=$_Post['Repair Category'];
		$etc=$_Post['ETC'];
		$message=$_Post['message'];
		$submit=$_Post['submit'];
		$mailTo="f22b2honda@gmail.com";
		$headers="none";
		$txt=$message;
		mail($mailTo, $year, $model, $tech, $repair, $etc, $txt);
		header("Location: contact.php?mailsend");}
>>>>>>> 6ce9ec70183cf21b404cdaaf8bdcbb154fd9140c
?>