<?php 
    spl_autoload_register(function ($class){
        require_once 'class/'.$class.'.php';
    });
    $th = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
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

    <title>Tugas 7 PHP</title>
    <style>
    </style>
</head>

<body style="background:linear-gradient(90deg,#1e90ff,#70a1ff);">
    <div class="container mt-5 fs-5">
        <div class="card">
            <div class="card-header text-center bg-info">
                <h1 class="fw-bold">Hitung Luas Bidang 2D</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-light">
                    <thead>
                        <tr>
                            <?php foreach($th as $judul): ?>
                            <th scope="col"><?= $judul ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(range(1,10) as $x ):
                            $pilihData = random_int(1,3);
                            $data = ($pilihData==1) ? new Lingkaran(random_int(5,50))
                                    : ($pilihData==2 ? new PersegiPanjang(random_int(30,60),random_int(5,25))
                                    : ($pilihData==3 ? new Segitiga(random_int(10,30),random_int(20,30))
                                    : "Data Tidak Valid"));
                        ?>
                        <tr>
                            <td><?= $x ?></td>
                            <td><?= $data->namaBidang() ?></td>
                            <td><?= $data->keterangan() ?></td>
                            <td><?= $data->luasBidang() ?></td>
                            <td><?= $data->kelilingBidang() ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="fw-bold">
                        <tr>
                            <!-- <td colspan="4" class="text-center">Total</td> -->
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