<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>
    <title>Area Of Shape</title>
</head>
<body>
    <h2><center>Area Of Shape</center></h2>
    <div class="container flex">
    <div style="width:404">
    <h2><center>Diện tích hình tam giác</center></h2>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="a">Nhập giá trị của (A)</label>
            <input type="text" class="form-control" id="a" name="a">
        </div>
        <div class="form-group">
            <label for="b">Nhập giá trị của (H)</label>
            <input type="text" class="form-control" id="b" name="h">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2>The result: {{$areaTriangle}}</h2>
    </div>

    <div style="width:404">
    <h2><center>Chu vi hình tứ giác</center></h2>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="c">Nhập giá trị một cạnh</label>
            <input type="text" class="form-control" id="c" name="c1">
        </div>
        <div class="form-group">
            <label for="d">Nhập giá trị một cạnh</label>
            <input
             type="text" class="form-control" id="d" name="c2">
        </div>
        <div class="form-group">
            <label for="e">Nhập giá trị một cạnh</label>
            <input type="text" class="form-control" id="e" name="c3">
        </div>
        <div class="form-group">
            <label for="f">Nhập giá trị một cạnh</label>
            <input type="text" class="form-control" id="f" name="c4">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2>The result: {{$areaQuadrangle}}</h2>
    </div>
    </div>
</body>
</html>