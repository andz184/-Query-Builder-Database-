<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('storeStudents')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tên</span>
            <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Giới Tính</span>
            <input type="text" class="form-control" name="gender" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">số điện thoại</span>
            <input type="text" class="form-control" name="phone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">dịa chỉ</span>
            <input type="text" class="form-control" name="address" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <label for="">Ảnh</label>
           <input type="file" name="image" id="">
          </div>
          <button type="submit"> Thêm Học Sinh</button>
    </form>
</body>
</html>