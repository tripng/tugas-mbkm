<?php 
    if(isset($_POST['simpan'])){
        $display = "inline-block";
        $_POST['clear'] = null;
    }
    if(isset($_POST['clear'])) $display = "none";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas 2 PHP</title>
</head>

<body class="bg-success">
    <div class="container mt-5">
        <div class="tabel w-100" style="display:none; display:<?= $display ?>;">
            <table class="table table-light">
                <thead class="w-100">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Hobby</th>
                    </tr>
                </thead>
                <tbody class="w-100">
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $_POST['nama']; ?></td>
                        <td><?= $_POST['pekerjaan']; ?></td>
                        <td><?= $_POST['hobby']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card">
            <div class="card-header">
                <h1>Form</h1>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <select class="form-select" aria-label="Default select example" name="pekerjaan">
                        <option selected disabled>--Pekerjaan--</option>
                        <?php $i=1; for($j=$i; $j<=10; $j++) : ?>
                        <option value="Pekerjaan <?= $j ?>">Pekerjaan <?= $j ?></option>
                        <?php endfor; ?>
                    </select>
                    <div class="radio d-flex justify-content-around flex-wrap">
                        <?php while($i<=10) : ?>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="radio" name="hobby" id="inlineRadio<?= $i ?>"
                                value="Hobi <?= $i ?>">
                            <label class="form-check-label" for="inlineRadio<?= $i ?>">Hobby <?= $i ?></label>
                        </div>
                        <?php ++$i; endwhile; ?>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="clear" class="btn btn-warning" name="clear">Clear</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>