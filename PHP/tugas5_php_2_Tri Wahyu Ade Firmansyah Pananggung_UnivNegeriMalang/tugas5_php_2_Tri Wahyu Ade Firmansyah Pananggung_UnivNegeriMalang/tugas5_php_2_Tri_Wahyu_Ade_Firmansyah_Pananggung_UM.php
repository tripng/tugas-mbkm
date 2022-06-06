<?php 
    require_once 'KonversiSuhu.php';
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

    <title>Tugas 5 PHP</title>
</head>

<body style="background:linear-gradient(90deg,#1e90ff,#70a1ff);">
    <div class="container mt-5 fs-5">
        <div class="card">
            <div class="card-header text-center bg-info">
                <h1 class="fw-bold">Konversi Suhu</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-light">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Suhu Awal</th>
                            <th scope="col">Besaran Suhu</th>
                            <th scope="col">Suhu Tujuan</th>
                            <th scope="col">Hasil Conversi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                             $data = $arr_data = ['Celcius','Fahrenheit','Reamur'];
                             for($i=1; $i<=10; $i++) : 
                                if(empty($arr_data)) $arr_data = $data;
                                $index = array_rand($arr_data, 2);
                                $data1 = $arr_data[$index[0]];
                                $data2 = $arr_data[$index[1]];
                                unset($arr_data);
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <?php
                                $konversi = new KonversiSuhu($data1,random_int(0,100),$data2);
                                echo $konversi->getData();
                            ?>
                        </tr>
                        <?php endfor; ?>
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