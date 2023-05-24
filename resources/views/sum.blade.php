<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf 
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Số a" name="soA">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Số B" name="soB">
        </div>
        <button type="submit" class="btn btn-primary">Tính</button>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Kết quả" disabled="" value="<?php if(isset($sum)) echo $sum; ?>">
        </div>
    </form>
</body>
</html>