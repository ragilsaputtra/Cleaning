<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Cleaning</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 20px;
        }
        .calendar {
            text-align: center;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .calendar h1 {
            margin: 0;
            font-size: 24px;
        }
        .calendar nav {
            margin-top: 10px;
        }
        .calendar nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }
        .calendar nav a:hover {
            text-decoration: underline;
        }
        .calendar .days {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .calendar .days div {
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #eee;
            color: #333;
            font-weight: bold;
            border-radius: 4px;
        }
        .calendar .days .selected {
            background-color: #007bff;
            color: white;
        }
        .schedule {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .schedule h2 {
            margin: 0;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .schedule .task {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .schedule .task p {
            margin: 5px 0;
        }
        .schedule .task span {
            display: block;
            margin-top: 10px;
            color: #555;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="calendar">
            <h1>Jadwal Cleaning</h1>
            <nav>
                <a href="#">&lt;</a>
                <span>July 2024</span>
                <a href="#">&gt;</a>
            </nav>
            <div class="days">
                <div>M</div>
                <div>T</div>
                <div>W</div>
                <div>T</div>
                <div>F</div>
                <div>S</div>
                <div>S</div>
            </div>
            <div class="days">
                <div>17</div>
                <div>18</div>
                <div class="selected">19</div>
                <div>20</div>
                <div>21</div>
                <div>22</div>
                <div>23</div>
            </div>
        </div>
        <div class="schedule">
            <h2>Kegiatan Pada tanggal 19 July</h2>
            <div class="task">
                <h3>Pagi Hari</h3>
                <p>Cek dan buang sampah.</p>
                <p>Membersihkan ringan.</p>
                <p>Mengepel kamar mandi.</p>
                <p>Merapikan kamar mandi agar terlihat rapi.</p>
                <span>06-11 WIB</span>
            </div>
            <div class="task">
                <h3>Sore Hari</h3>
                <p>Cek kembali dan buang sampah jika perlu.</p>
                <p>Pastikan kamar mandi dalam keadaan bersih dan rapi.</p>
                <span>16-17 WIB</span>
            </div>
        </div>
    </div>
</body>
</html>
