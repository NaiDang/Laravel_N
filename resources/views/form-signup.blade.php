<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
</head>
<body>
    <h1>Form Result</h1>
    <form method="post" action="{{ route('submit-form') }}">
        @csrf
        <div class="form-group">
            <label> Name</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input class="form-control" type="text" name="age" >
        </div>
        <div class="form-group">
            <label> Date</label>
            <input class="form-control" type="text" name="date">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone">
        </div>
        <div class="form-group">
            <label>Web</label>
            <input class="form-control" type="text" name="web">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" name="address">
        </div>
        <div>
            @include('block.error')
        </div>
        <button type="submit">Submit</button>
        <div class="display-info">
            @if(isset($user))
            <p>Name: {{$user['name']}}</p>
            <p>Age: {{$user['age']}}</p>
            <p>Date: {{$user['date']}}</p>
            <p>Phone: {{$user['phone']}}</p>
            <p>Web: {{$user['web']}}</p>
            <p>Address: {{$user['address']}}</p>
            @endif
        </div>
    </form>
</body>
</html>
