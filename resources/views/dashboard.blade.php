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
            background-color: #2AA5FF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calendar-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            padding: 20px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendar-header h2 {
            font-size: 24px;
            font-weight: bold;
        }

        .calendar-header .navigation {
            font-size: 18px;
            cursor: pointer;
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }

        .calendar-day {
            text-align: center;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            cursor: pointer;
        }

        .calendar-day.selected {
            background-color: #2AA5FF;
            color: white;
        }

        .calendar-day:hover {
            background-color: #d0d0d0;
        }

        .calendar-day.empty {
            background-color: transparent;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div class="calendar-container">
        <div class="calendar-header">
            <span class="navigation" id="prevMonth">&lt;</span>
            <h2 id="monthYear"></h2>
            <span class="navigation" id="nextMonth">&gt;</span>
        </div>
        <div class="calendar" id="calendar">
            <!-- Calendar days will be inserted here by JavaScript -->
        </div>
    </div>

    <script>
        const calendar = document.getElementById('calendar');
        const monthYear = document.getElementById('monthYear');
        const prevMonth = document.getElementById('prevMonth');
        const nextMonth = document.getElementById('nextMonth');

        let date = new Date();

        function renderCalendar() {
            const month = date.getMonth();
            const year = date.getFullYear();
            const firstDay = new Date(year, month, 1).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();

            const months = [
               'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'October', 'November', 'Desember'
            ];

            monthYear.textContent = `${months[month]} ${year}`;
            calendar.innerHTML = '';

            for (let i = 0; i < firstDay; i++) {
                const day = document.createElement('div');
                day.classList.add('calendar-day', 'empty');
                calendar.appendChild(day);
            }

            for (let i = 1; i <= lastDate; i++) {
                const day = document.createElement('div');
                day.classList.add('calendar-day');
                day.textContent = i;
                
                // Menambahkan event listener untuk redirect ke route /detail
                day.addEventListener('click', () => {
                    window.location.href = `/detail`;
                });
                
                // Menandai hari yang dipilih (misalnya tanggal saat ini)
                if (i === new Date().getDate() && month === new Date().getMonth() && year === new Date().getFullYear()) {
                    day.classList.add('selected');
                }

                calendar.appendChild(day);
            }
        }

        prevMonth.addEventListener('click', () => {
            date.setMonth(date.getMonth() - 1);
            renderCalendar();
        });

        nextMonth.addEventListener('click', () => {
            date.setMonth(date.getMonth() + 1);
            renderCalendar();
        });

        renderCalendar();
    </script>
</body>
</html>
