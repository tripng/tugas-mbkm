<?php 
    spl_autoload_register(function($class){
        require_once 'class/'.$class.'.php';
    });
    $judul = ['No','Nama','Tahun','Keterangan','Nilai'];
    $aset = ['Rumah','Villa','Mobil','Mobil','Motor','Motor','Motor','Logam Mulia','Berlian','Berlian'];
    $keterangan = ['Type 36/72','Malang','Toyota','Lamborgini','Yamaha','Honda','Kawasaki','6 kg','8 kg','5kg'];
    $nilai = [5_000_000_000,7_000_000_000,200_000_000,8_000_000_000,30_000_000,25_000_000,10_000_000,15_000_000,18_000_000,15_000_000];
    $assocArray = [];
    $a = 1;
    for($i=0; $i<count($aset); $i++) :
        $data = [
            'nama_aset' => $aset[$i],
            'tahun_aset' => random_int(2010,2020),
            'keterangan' => $keterangan[$i],
            'nilai' => $nilai[$i]
        ];
        array_push($assocArray,$data);
    endfor;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas 6 PHP</title>
    <style>
    </style>
</head>

<body style="background:linear-gradient(90deg,#1e90ff,#70a1ff);">
    <div class="container mt-5 fs-5">
        <div class="card">
            <div class="card-header text-center bg-info">
                <h1 class="fw-bold">Asset</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-light">
                    <thead>
                        <tr>
                            <?php foreach($judul as $j): ?>
                            <th scope="col"><?= $j ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($assocArray as $data) :
                            if($data['nama_aset'] == 'Rumah') $assets = new Rumah($data['nama_aset'],$data['tahun_aset'],$data['nilai'],$data['keterangan']);
                            else if($data['nama_aset'] == 'Villa') $assets = new Villa($data['nama_aset'],$data['tahun_aset'],$data['nilai'],$data['keterangan']);
                            else if($data['nama_aset'] == 'Motor') $assets = new Motor($data['nama_aset'],$data['tahun_aset'],$data['nilai'],$data['keterangan']);
                            else if($data['nama_aset'] == 'Mobil') $assets = new Mobil($data['nama_aset'],$data['tahun_aset'],$data['nilai'],$data['keterangan']);
                            else if($data['nama_aset'] == 'Logam Mulia') $assets = new LogamMulia($data['nama_aset'],$data['tahun_aset'],$data['nilai'],$data['keterangan']);
                            else if($data['nama_aset'] == 'Berlian') $assets = new Berlian($data['nama_aset'],$data['tahun_aset'],$data['nilai'],$data['keterangan']);
                            else "Aset Tidak Ditemukan";
                        ?>
                        <tr>
                            <td><?= $a++ ?></td>
                            <?php $assets->getData($data['keterangan']); ?>
                        </tr>
                        <?php endforeach;  ?>
                    </tbody>
                    <tfoot class="fw-bold">
                        <tr>
                            <td colspan="4" class="text-center">Total</td>
                            <td><?= 'Rp '.number_format(array_sum(array_column($assocArray,'nilai')),0,',','.'); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>