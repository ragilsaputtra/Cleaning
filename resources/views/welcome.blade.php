<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkom Schools Login</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
            background: #2AA5FF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            text-align: center;
        }

        .login-container h1 {
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .login-box {
            background: #e0f0ff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px; /* Menambah lebar tabel */
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        .textbox {
            margin-bottom: 20px;
            position: relative;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .show-password {
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .show-password input[type="checkbox"] {
            position: absolute;
            opacity: 0;
        }

        .show-password .toggle-icon {
            position: absolute;
            right: 10px;
            cursor: pointer;
            font-size: 16px;
            color: #333;
        }

        .btn {
            width: 100%;
            background: #2AA5FF;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            color: #fff;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #1fa0fc;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>TELKOM <br> SCHOOLS</h1>
        <div class="login-box">
            <h2 style="margin-bottom: 2ch; color: #333; font-size: 30px;">LOG IN</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h4 style="margin-right: 40ch">Email</h4>
                <div class="textbox">
                    <input type="email" placeholder="Email" name="email" required autofocus autocomplete="username">
                </div>

                <h4 style="margin-right: 40ch">Password</h4>
                <div class="textbox show-password">
                    <input id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                    <i id="togglePassword" class="fas fa-eye toggle-icon"></i>
                </div>

                <button type="submit" class="btn">MASUK</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            var passwordField = document.getElementById('password');
            var type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            this.classList.toggle('fa-eye', type === 'password');
            this.classList.toggle('fa-eye-slash', type === 'text');
        });
    </script>
</body>
</html>
