<?php
    $money=fn($v)=>"Rp ".number_format($v,0,',','.');
    $nama = ['Bayu','Arya','Cedric','Busran','Delan','Dika','Ezra','Gilang','Malik','Rafie'];
    $jabatan = ['Manager','Asisten','Kabag','Staff'];
    $divisi = ['SDM','Keuangan','Operasional','Marketing'];
    $agama = ['Islam','Protestan','Katolik','Hindu','Buddha','Khonghucu'];
    $ar_pegawai = [];
    foreach($nama as $data){
        $pegawai = [
            'nip'=> random_int(100,1000),
            'nama'=>$data,
            'jabatan'=>$jabatan[array_rand($jabatan)],
            'divisi'=>$divisi[array_rand($divisi)],
            'agama'=>$agama[array_rand($agama)]
        ];
        array_push($ar_pegawai,$pegawai);
    }
    $ar_judul = ['No','NIP','Nama','Agama','Jabatan','Divisi','Gaji Pokok','Tunjangan Jabatan','Gaji Kotor','Take Home Pay'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas 3 PHP</title>
</head>

<body class="bg-info">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center text-success fw-bold">Data Pegawai</h1>
            </div>
            <div class="card-body">
                <table class="table table-light table-striped table-hover">
                    <thead>
                        <tr>
                            <?php foreach($ar_judul as $judul) echo "<th>$judul</th>" ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($ar_pegawai as $pegawai) : 
                            switch($pegawai['jabatan']){
                                case 'Manager' : $gapok = 20_000_000;break;
                                case 'Asisten' : $gapok = 15_000_000;break;
                                case 'Kabag' : $gapok = 10_000_000;break;
                                case 'Staff' : $gapok = 4_000_000;break;
                                default : 0;
                            }
                            $tunjab = $gapok*0.2;
                            $gator = $gapok+$tunjab;
                            $zakat = ($pegawai['agama']=='Islam') && ($gator>=6000000) ? $gator*0.025 : 0;
                            $takeHome = $gator-$zakat;
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $pegawai['nip'] ?></td>
                            <td><?= $pegawai['nama'] ?></td>
                            <td><?= $pegawai['agama'] ?></td>
                            <td><?= $pegawai['jabatan'] ?></td>
                            <td><?= $pegawai['divisi'] ?></td>
                            <td><?= $money($gapok) ?></td>
                            <td><?= $money($tunjab) ?></td>
                            <td><?= $money($gator) ?></td>
                            <td><?= $money($takeHome) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>