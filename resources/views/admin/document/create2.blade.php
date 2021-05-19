<!DOCTYPE html>
<html>
<head>
    <tittle>Journal</tittle>
</head>
<body>

    <form action="/files2" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="judul" placeholder="judul">
    <input type="text" name="penulis" placeholder="penulis">
    <input type="file" name="file">
    <input type="submit" name="Submit">

    </form>

</body>
</html>