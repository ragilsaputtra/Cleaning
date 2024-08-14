<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #2AA5FF;
        }

        input[type="date"] {
            width: 11%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: white;
            color: #333;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            cursor: pointer;
        }

        input[type="date"]:focus {
            border-color: #0056b3;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        }
        .current-image {
            max-width: 100px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
    <title>Jadwal</title>
</head>

<body>
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
                <label for="floatingInput">Masukkan Judul</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="" name="deskripsi">
                <label for="floatingInput">Masukkan Deskripsi</label>
            </div>
            <input type="date" id="waktu" name="waktu">
            <br> <br>
            <button class="btn btn-light">Submit</button>
        </form>
    </div>

    <div class="container mt-5">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Jadwal as $Jadwals)
                    <tr>
                        <td>{{ $Jadwals->judul }}</td>
                        <td>{{ $Jadwals->deskripsi }}</td>
                        <td>{{ $Jadwals->waktu }}</td>
                        <td> <div class="status-indicator
                            {{ $Jadwals->active === 'active' ? 'status-active' : 'status-selesai' }}">
                                {{ $Jadwals->active === 'active' ? 'Selesai' : 'Belum' }}
                            </div></td>
                            <td><img src="{{ asset('storage/' . $Jadwals->foto) }}" alt="Current Image" class="current-image"></td>
                        <td>
                            <button class="btn btn-light mb-3"><a href="{{ route('Jadwal.edit',$Jadwals->id) }}" style="text-decoration:none; color:black;">Edit</a></button>

                            <form action="{{ route('Jadwal.destroy',$Jadwals->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-light mb-3" value="Delete">Delete</button>
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
