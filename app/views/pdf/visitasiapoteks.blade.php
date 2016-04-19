<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Perijinan Boyolali</title>
  <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
    </style>
</head>
<body>
    <div style="font-family:Arial; font-size:16px;">
            <center><h2>Data Visitasi Perijinan</h2></center>  
    </div>
    <br>
    <table class="tg">
        <thead>
            <tr>
                <td class="tg-3wr7">Nama</td>
                <td class="tg-3wr7">Perijinan</td>
                <td class="tg-3wr7">Lokasi</td>
                <td class="tg-3wr7">Verifikasi</td>
                <td class="tg-3wr7">Email</td>
                <td class="tg-3wr7">Tanggal Registrasi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitasiapoteks as $visitasiapotek)
            <tr>
                <td class="tg-rv4w">{{ $visitasiapotek->nama }}</td>
                <td class="tg-rv4w">{{ $visitasiapotek->perijinan->nama }}</td>
                <td class="tg-rv4w">{{ $visitasiapotek->lokasi }}</td>
                <td class="tg-rv4w">{{ $visitasiapotek->verifikasi }}</td>
                <td class="tg-rv4w">{{ $visitasiapotek->email }}</td>
                <td class="tg-rv4w">{{ $visitasiapotek->created_at }}</td>          
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>