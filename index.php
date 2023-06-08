<?php
$letters = 'abcdefghijklmnopqrstuvwxyz';
// $UpperCaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <div class="container text-center">
        <form action="" method="get">
            <div class="form-group">
                <label for="lenght">Lunghezza della password</label>
                <input type="number" name="len" id="length" required>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label for="let">Caratteri</label>
                    <input type="checkbox" name="let" id="let">
                </div>
                <div class="form-check">
                    <label for="num">Numeri</label>
                    <input type="checkbox" name="num" id="num">
                </div>
                <div class="form-check">
                    <label for="sym">Simboli</label>
                    <input type="checkbox" name="sym" id="sym">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label for="yes">
                        Si
                    </label>
                    <input type="radio" name="yes" id="yes" value="1">

                    <label for="no">
                        No
                    </label>
                    <input type="radio" name="no" id="no" value="0">
                </div>
            </div>
            <input type="submit" value="Genera" class="btn btn-success">
            <input type="reset" value="Resetta" class="btn btn-danger">
        </form>
        <div class="answer">
            <?php
            include_once 'functions.php';
            ?>
        </div>
    </div>
</body>

</html>