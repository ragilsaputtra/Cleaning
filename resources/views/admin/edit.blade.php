<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}>
    <title>Author</title>
</head>
<body style="background-color:#2AA5FF">

      <div class="container mt-5">
        <form action="{{ route('Jadwal.update', $Jadwal->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="" name="judul" value="{{ $Jadwal->judul }}">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="" name="deskripsi" value="{{ $Jadwal->deskripsi }}">
            <label for="floatingInput">Description</label>
          </div>
          <label for="waktu">waktu:</label>
          <input type="date" id="waktu" name="waktu" value="{{ $Jadwal->waktu }}">
          <button class="btn btn-dark mb-3">Submit</button>
          {{-- </form>
          <button class="btn btn-dark mb-3">Submit</button>
          </form> --}}
      </div>
</body>
</html>