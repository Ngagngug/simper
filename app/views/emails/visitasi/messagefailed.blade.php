<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Sistem Informasi Perijinan Boyolali</h2><br>

		<p>Yth. Bapak/Ibu {{ $nama }} </p><br>

		<p>Sebagai bagian dari proses visitasi perijinan, dengan ini kami memberitahukan bahwa kelengkapan syarat VISITASI . Adapun untuk kelanjutan proses VISITASI diharapkan anda melakukan pengumpulan ulang syarat proses perijinan. Adapun kelengkapan yang sudah lengkap dapat dilihat sebagai berikut :    
		</p>
		
            @for($i=0;$i<count($data);$i++)
		    {{ "<b>".$syarat[$i]."</b>"." ".$data[$i]->id.". ".$data[$i]->kelengkapan }} <br>
			@endfor

		<p>
			Terima kasih untuk perhatian dan kerjasamanya. Kami tunggu kehadirannya. <br>
			Salam, <br>
			Tim SIMPER BOYOLALI 2016<br>
		</p>
	</body>
</html>