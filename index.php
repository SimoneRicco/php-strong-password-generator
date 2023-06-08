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
                <input type="text" name="len" id="length">
            </div>
            <div class="form-check">
                <label for="char">Caratteri</label>
                <input type="checkbox" name="char" id="char">
            </div>
            <div class="form-check">
                <label for="num">Numeri</label>
                <input type="checkbox" name="num" id="num">
            </div>
            <div class="form-check">
                <label for="sym">Simboli</label>
                <input type="checkbox" name="sym" id="sym">
            </div>
            <input type="submit" value="Genera" class="btn btn-success">
            <input type="reset" value="Resetta" class="btn btn-danger">
        </form>
        <div class="answer">
            <?php
            var_dump($_GET);
            ?>
        </div>
    </div>
</body>

</html>