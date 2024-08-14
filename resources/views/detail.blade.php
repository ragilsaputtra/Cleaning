<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Cleaning</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .calendar h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: #007bff;
        }

        .calendar nav {
            margin-top: 10px;
            font-weight: 700;
        }

        .calendar nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
            cursor: pointer;
            transition: color 0.3s;
        }

        .calendar nav a:hover {
            color: #0056b3;
        }

        .calendar .days {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .calendar .days div {
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #eee;
            color: #333;
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s;
        }

        .calendar .days div:hover {
            background-color: #d0d0d0;
        }

        .calendar .days .selected {
            background-color: #007bff;
            color: white;
        }

        .schedule {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .schedule h2 {
            margin: 0;
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: 700;
            color: #007bff;
        }

        .schedule .task {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 8px;
            position: relative;
        }

        .schedule .task h3 {
            margin: 0;
            font-weight: 700;
            color: #333;
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

        .schedule .task button {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .schedule .task button:hover {
            background-color: #0056b3;
        }

        .schedule .task .status-indicator {
    padding: 5px 10px;
    color: white;
    border-radius: 4px;
    display: inline-block;
    font-weight: bold;
    margin-top: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.schedule .task .status-active {
    background-color: #007bff; /* Blue for active */
}

.schedule .task .status-selesai {
    background-color: #dc3545; /* Red for selesai */
}

    </style>
</head>

<body>
    <div class="container">
        <div class="calendar">
            <h1>Jadwal Cleaning</h1>
            <nav>
                <a href="#" id="prevWeek">&lt;</a>
                <span id="currentMonth">July 2024</span>
                <a href="#" id="nextWeek">&gt;</a>
            </nav>
            <div class="days" id="daysOfWeek">
                <!-- Days of the week will be inserted here by JavaScript -->
            </div>
            <div class="days" id="days">
                <!-- Dates will be inserted here by JavaScript -->
            </div>
        </div>
        <div class="schedule">
            <h2 id="scheduleTitle">Kegiatan Pada tanggal 19 July</h2>
            @foreach ($Jadwal as $Jadwals)
            <div class="task">
                <h3>{{ $Jadwals->judul }}</h3>
                <p>{{ $Jadwals->deskripsi }}</p>
                <span>{{ $Jadwals->waktu }}</span>
                <button><a href="{{ route('Detail.edit',$Jadwals->id) }}" 
                    style="text-decoration:none; color:white;padding: 5px 10px;
    color: white;
    font-weight: bold;
    margin-top: 10px;
    cursor: pointer;
    transition: background-color 0.3s;">Update</a></button>
                <div class="status-indicator
                {{ $Jadwals->active === 'active' ? 'status-active' : 'status-selesai' }}">
                    {{ $Jadwals->active === 'active' ? 'Selesai' : 'Belum' }}
                </div>
                
            </div>
            @endforeach
        </div>
    </div>

    <script>
        const daysOfWeek = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];
        const months = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'October', 'November', 'Desember'
        ];

        let currentDate = new Date();

        function renderCalendar() {
            const currentMonth = document.getElementById('currentMonth');
            const daysElement = document.getElementById('days');
            const scheduleTitle = document.getElementById('scheduleTitle');

            const firstDayOfWeek = new Date(currentDate);
            firstDayOfWeek.setDate(currentDate.getDate() - currentDate.getDay());

            currentMonth.textContent = `${months[currentDate.getMonth()]} ${currentDate.getFullYear()}`;
            scheduleTitle.textContent = `Kegiatan Pada tanggal ${currentDate.getDate()} ${months[currentDate.getMonth()]}`;

            daysElement.innerHTML = '';

            // Display days of the week
            const daysOfWeekElement = document.getElementById('daysOfWeek');
            daysOfWeekElement.innerHTML = '';
            daysOfWeek.forEach(day => {
                const dayElement = document.createElement('div');
                dayElement.textContent = day;
                daysOfWeekElement.appendChild(dayElement);
            });

            // Fill in the days for the week
            for (let i = 0; i < 7; i++) {
                const dayDiv = document.createElement('div');
                const dayDate = new Date(firstDayOfWeek);
                dayDate.setDate(firstDayOfWeek.getDate() + i);
                dayDiv.textContent = dayDate.getDate();

                if (dayDate.toDateString() === currentDate.toDateString()) {
                    dayDiv.classList.add('selected');
                }

                daysElement.appendChild(dayDiv);
            }
        }

        document.getElementById('prevWeek').addEventListener('click', () => {
            currentDate.setDate(currentDate.getDate() - 7);
            renderCalendar();
        });

        document.getElementById('nextWeek').addEventListener('click', () => {
            currentDate.setDate(currentDate.getDate() + 7);
            renderCalendar();
        });

        renderCalendar();
    </script>
</body>

</html>
