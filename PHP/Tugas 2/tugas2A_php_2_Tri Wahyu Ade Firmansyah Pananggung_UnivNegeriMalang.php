<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas 2 PHP</title>
</head>

<body class="bg-info">
    <div class="container mt-5 w-50">
        <?php 
            if(isset($_POST['simpan'])) :
                $kelulusan = $_POST['nilai']>=60 & $_POST['nilai']<=100 ? "Lulus" : "Tidak Lulus";
                if($_POST['nilai']>=90 && $_POST['nilai']<=100) $grade = "A";
                elseif($_POST['nilai']>=80 && $_POST['nilai']<90) $grade = "B";
                elseif($_POST['nilai']>=60 && $_POST['nilai']<80) $grade = "C";
                elseif($_POST['nilai']>=40 && $_POST['nilai']<60) $grade = "D";
                elseif($_POST['nilai']>=0 && $_POST['nilai']<40) $grade = "E";
                else $grade = "Nilai Tidak Valid";

                switch($grade){
                    case 'A': $predikat = "Sangat Baik"; break;
                    case 'B': $predikat = "Baik"; break;
                    case 'C': $predikat = "Cukup"; break;
                    case 'D': $predikat = "Kurang"; break;
                    case 'E': $predikat = "Sangat Kurang"; break;
                    default : "Predikat Tidak Valid";
                }
        ?>
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Status</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $_POST['nama']; ?></td>
                    <td><?= $_POST['matpel']; ?></td>
                    <td><?= $_POST['nilai']; ?></td>
                    <td><?= $kelulusan; ?></td>
                    <td><?= $grade; ?></td>
                    <td><?= $predikat; ?></td>
                </tr>
            </tbody>
        </table>
        <?php endif; ?>
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
                    <select class="form-select" aria-label="Default select example" name="matpel">
                        <option selected disabled>--Mata Pelajaran--</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Fisika">Fisika</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label mt-2">Nilai</label>
                        <input type="text" class="form-control" name="nilai" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>