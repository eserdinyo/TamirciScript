<?php 

	error_reporting(0); // Hiç bir hata mesajı gösterme


	if(unlink("2.txt"))
	{
		echo "Dosya Silindi";
	}else{
		echo "Dosya Silinemedi.";
	}
	
	?>