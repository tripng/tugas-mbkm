<?php     
    function cekLogin($nama,$password){
        if($nama == 'admin' && $password == 'mimin')  header("location:https://www.google.com");
        else echo "<script>
            alert('Maaf Username Atau Password Anda Salah');
            history.go(-1);
        </script>";
    }
    if(isset($_POST['login'])) cekLogin($_POST['username'],$_POST['password']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #242830;
    }

    .container {
        width: 50%;
        padding: 20px;
        box-shadow: 2px 2px 5px rgba(255, 255, 255, 0.2);
        /* display: none; */
    }

    .container h2 {
        color: #00bffb;
        text-align: center;
        font-size: 30px;
        margin-bottom: 60px;
    }

    .container h2 span {
        border-bottom: 3px solid white;
        margin: 0 auto;
        border-radius: 4px;
    }

    .container .row {
        position: relative;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(autofit, minmax(300px), 1fr);
    }

    .container .row .col {
        position: relative;
        width: 100%;
        padding: 0 10px;
        margin: 30px 0 10px;
        transition: 0.5s;
    }

    .container .row .input {
        position: relative;
        width: 100%;
        height: 40px;
        color: #00bffb;
    }

    .container .row .input input,
    .container .row .input.textarea textarea,
    .container .row select {
        position: absolute;
        width: 100%;
        height: 100%;
        background: transparent;
        box-shadow: none;
        border: none;
        outline: none;
        font-size: 18px;
        padding: 0 10px;
        z-index: 1;
    }

    .container .row select {
        background: #00bffb;
        padding: 10px;
    }

    select option {
        margin: 100px;
    }

    .container .row .input .text {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 40px;
        font-size: 18px;
        padding: 0 10px;
        display: block;
        transition: 0.5s;
        pointer-events: none;
    }

    .container .row .input input:focus+.text,
    .container .row .input input:valid+.text {
        top: -35px;
        left: -10px;
    }

    .container .row .input .line {
        position: absolute;
        bottom: 0;
        display: block;
        width: 100%;
        height: 2px;
        background: #00bffb;
        transition: 0.5s;
        border-radius: 2px;
        pointer-events: none;
    }

    .container .row .input input:focus~.line,
    .container .row .input input:valid~.line {
        height: 100%;
    }

    .row .col button,
    .row .tombol {
        background-color: #00bffb;
        border: none;
        outline: none;
        padding: 9px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.4s;
    }

    .row .col button:hover,
    .row .tombol:hover {
        background-color: #00bffb4f;
        color: white;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2><span>LOGIN</span></h2>
        <form name="buah" method="POST">
            <div class="row">
                <div class="col">
                    <div class="input">
                        <input type="text" required="required" name="username" class="jumlah" autocomplete="off">
                        <span class="text">Masukkan Username</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="input">
                        <input type="password" required="required" name="password" class="jumlah">
                        <span class="text">Masukkan Password </span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="reset">Clear</button>
                    <button type="submit" class="tombol" name="login">Login</span>
                </div>
            </div>
        </form>
    </div>
</body>

</html>