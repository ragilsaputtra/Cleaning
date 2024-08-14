<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <title>Edit Jadwal</title>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #2AA5FF;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-floating input,
        .form-floating textarea {
            border-radius: 5px;
            border: 2px solid #007bff;
        }

        .form-floating input:focus,
        .form-floating textarea:focus {
            border-color: #0056b3;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        }

        input[type="date"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: white;
            color: #333;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            outline: none;
            cursor: pointer;
        }

        input[type="date"]:focus {
            border-color: #0056b3;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
        }

        .custom-file-upload {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 10px;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: white;
            color: #007bff;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s, border-color 0.3s;
            margin-bottom: 20px;
        }

        .custom-file-upload:hover {
            background-color: #e9ecef;
            border-color: #0056b3;
        }

        .file-name {
            margin-top: 10px;
            color: #555;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Jadwal</h1>
        <form action="{{ route('Detail.update', $Jadwal->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="custom-file-upload">
                    <input type="file" name="foto" id="foto" onchange="updateFileName()">
                    {{-- Choose File --}}
                </label>
                <div class="file-name" id="fileName">No file chosen</div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        function updateFileName() {
            const fileInput = document.getElementById('foto');
            const fileName = document.getElementById('fileName');
            fileName.textContent = fileInput.files.length > 0 ? fileInput.files[0].name : 'No file chosen';
        }
    </script>

</body>

</html>
