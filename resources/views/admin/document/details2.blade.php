<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
</head>
<body>
    <h2>{{$data->judul}}</h2>
    <h3>{{$data->penulis}}</h3>
    <p>
        <iframe src="{{url('storage2/'.$data->file)}}" style="width: 600 px; heigth: 500px;"> </iframe>
    </p>
    
</body>
</html>