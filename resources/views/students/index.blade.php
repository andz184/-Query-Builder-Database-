<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <a href="{{route('addStudents')}}">Thêm Mới Học Sinh</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">giới tính</th>
            <th scope="col">số điện thoại</th>
            <th scope="col">địa chỉ</th>
            <th scope="col">ảnh</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($students as $student)
          <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->address}}</td>
            <td><img src="{{ Storage::url($student->image) }}" width="30px" alt="Student Image"></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>