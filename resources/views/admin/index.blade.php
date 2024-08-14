<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}>
    <title>Jadwal</title>
</head>
<body style="background-color:#2AA5FF">
    {{-- <nav class="navbar navbar-expand-lg bg-transparent p-3">
        <div class="container">
          <a href="#">
            <img src="Image/Group 2.svg" alt="">
          </a>
          </button>
            <div class="navbar-nav ms-auto gap-4" style="font-size: large; transform: translateY(8px);">
              <b><a class="nav-link active" href="/"  style="color: black;" >Author</a></b>
              <b><a class="nav-link active" href="/Jadwal" style="color: black;" >Jadwal</a></b>
              <b><a class="nav-link active" href="/Book" style="color: black;" >Book</a></b>
            </div>
          </div>
        </div>
      </nav> --}}

      <div class="container mt-5">
        <form action="/Jadwal" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="" name="judul">
            <label for="floatingInput">Masukkan Nama</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="" name="deskripsi">
            <label for="floatingInput">Masukkan Alamat</label>
          </div>
          <label for="waktu">waktu:</label>
          <input type="date" id="waktu" name="waktu">
          <br> <br>
          <button class="btn btn-dark">Submit</button>
          </form>
      </div>

      <div class="container mt-5">
        <div>
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Jadwal as $Jadwals)
                  <tr>
                    <td>{{ $Jadwals->judul }}</td>
                    <td>{{ $Jadwals->deskripsi }}</td>
                    <td>{{ $Jadwals->waktu }}</td>

                    <td>
                        <button class="btn btn-dark mb-3"><a href="{{ route('Jadwal.edit',$Jadwals->id) }}" style="text-decoration:none; color:white;">Edit</a></button>

                        <form action="{{ route('Jadwal.destroy',$Jadwals->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark mb-3" value="Delete">Delete</button>
                        </form>
                    </td>
                  </tr>                  
                  @endforeach
                </tbody>
              </table>
        </div>
      </div>
</body>
</html>