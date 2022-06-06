<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body style="background:#F8F9FA;">
    <div class="container-fluid">
        <div class="row">
            <?php require_once 'layouts/header.php' ?>
        </div>
        <div class="row">
            <?php require_once 'layouts/menu.php' ?>
        </div>
        <div class="row justify-content-around">
            <div class="col-md-2">
                <?php require_once 'layouts/sidebar.php' ?>
            </div>
            <div class="col-md-9 border border-1 mt-4 mb-5" style="background:white;">
                <?php require_once 'layouts/main.php' ?>
            </div>
        </div>
        <div class="text-center py-2 row text-dark mt-5" style="background:#92BEFF;">
            <h6>Create By ❤️ Tri Pananggung | 2022</h6>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>