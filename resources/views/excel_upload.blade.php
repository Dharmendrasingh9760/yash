<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel Upload</title>
</head>
<body>
    <form action="{{route('importExcel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file" accept=".xlsx, .xls" required>
        <button type="submit">Upload and Import</button>
    </form>    
</body>
</html>