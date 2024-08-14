<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <title>Edit Jadwal</title>
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
    </style>
</head>

<body>

    <div class="container mt-5">
        <form action="{{ route('Jadwal.update', $Jadwal->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="" name="judul"
                    value="{{ $Jadwal->judul }}">
                <label for="floatingInput">Judul</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="" name="deskripsi"
                    value="{{ $Jadwal->deskripsi }}">
                <label for="floatingInput">Deskripsi</label>
            </div>
            <input type="date" id="waktu" name="waktu" value="{{ $Jadwal->waktu }}"> <br>
            <button class="btn btn-light mt-4">Submit</button>
        </form>
    </div>

</body>

</html>
