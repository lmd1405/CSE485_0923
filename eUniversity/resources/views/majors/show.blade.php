
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body> 
        <div class="form-group">
            <label for="artist_name">Tên:</label>
            <input type="text" class="form-control"  name="name" value="{{$major->name}}" required>
        </div>
    
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <input type="text" class="form-control"  name="description" value="{{$major->description}}" required>
        </div>    
        <div class="form-group">
            <label for="duration">Năm học:</label>
            <input type="text" class="form-control" value="{{$major->duration}}"  name="duration" required>
        </div>
</body>
<script src="{{ asset('js/bootstrap.js') }}" ></script>
</html>