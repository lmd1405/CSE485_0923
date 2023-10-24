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
    <form method="POST" action="{{ route('majors.store') }}" enctype="multipart/form-data">
        @csrf
    
        <div class="form-group">
            <label for="artist_name">Tên:</label>
            <input type="text" class="form-control"  name="name" required>
        </div>
    
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea class="form-control"  name="description" required></textarea>
        </div>    
        <div class="form-group">
            <label for="duration">Năm học:</label>
            <input type="text" class="form-control"  name="duration" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</body>
<script src="{{ asset('js/bootstrap.js') }}" ></script>
</html>