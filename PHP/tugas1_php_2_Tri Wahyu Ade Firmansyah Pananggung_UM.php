<?php
    if(isset($_GET['submit'])) :
        $money = fn($rupiah) => "Rp. ".str_replace(",", ".", number_format($rupiah));
        switch($_GET['jabatan']) :
            case 'Manager': $gaji = 20_000_000;break;
            case 'Asisten': $gaji = 15_000_000;break;
            case 'Kabag': $gaji = 10_000_000;break;
            case 'Staff': $gaji = 4_000_000;break;
            default : $gaji = "Jabatan Tidak Valid";
        endswitch;
        $tunjab = 0.2 * $gaji;
        if($_GET['status']=='Menikah' && (int)$_GET['anak']<=2) $tunkel = 0.05 * $gaji;
        else if($_GET['status']=='Menikah' && (int)$_GET['anak']>2 && (int)$_GET['anak']<=5) $tunkel = 0.1 * $gaji; 
        else $tunkel = 0 ;
        $gator = $gaji + $tunjab + $tunkel;
        $zakat = $_GET['agama'] == 'Islam' && $gator >= 6_000_000 ? $gator * 0.025 :  0;
        $gajiBersih = $gator - $zakat;
    endif;
    ?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tugas 1 PHP</title>
</head>

<body style="background:linear-gradient(90deg,#74b9ff,#81ecec)">
    <div class="container">
        <?php if(isset($_GET['submit'])) : ?>
        <table class="table table-light table-strip table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Gaji</th>
                    <th scope="col">Tunjangan Jabatan</th>
                    <th scope="col">Tunjangan Kelularga</th>
                    <th scope="col">Gaji Kotor</th>
                    <th scope="col">Zakat</th>
                    <th scope="col">Gaji Bersih</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $_GET['nama'] ?></td>
                    <td><?= $_GET['agama'] ?></td>
                    <td><?= $_GET['status'] ?></td>
                    <td><?= $_GET['jabatan'] ?></td>
                    <td><?= $money($gaji) ?></td>
                    <td><?= $money($tunjab) ?></td>
                    <td><?= $money($tunkel) ?></td>
                    <td><?= $money($gator) ?></td>
                    <td><?= $money($zakat) ?></td>
                    <td><?= $money($gajiBersih) ?></td>
                </tr>
            </tbody>
        </table>
        <?php endif; ?>
        <form method="GET" class="mt-5">
            <label for="inputPassword5" class="form-label fw-bold">Nama</label>
            <input autocomplete="off" type="text" id="inputPassword5" class="form-control mb-3"
                aria-describedby="passwordHelpBlock" name="nama" required>
            <select class="form-select mb-3" name="jabatan" aria-label="Default select example">
                <option selected>-- Jabatan --</option>
                <option value="Manager">Manager</option>
                <option value="Asisten">Asisten</option>
                <option value="Kabag">Kabag</option>
                <option value="Staff">Staff</option>
            </select>
            <select class="form-select mb-3" name="agama" aria-label="Default select example">
                <option selected>-- Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Khatolik">Khatolik</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
            <select class="form-select mb-3" name="status" aria-label="Default select example">
                <option selected>-- Status --</option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
            </select>
            <label for="inputAnak" class="form-label fw-bold">Jumlah Anak</label>
            <input type="number" id="inputAnak" class="form-control mb-3" aria-describedby="passwordHelpBlock"
                name="anak" required>
            <button type="submit" class="btn btn-primary" name="submit">Lihat Data</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>