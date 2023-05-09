@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Analysis</h1>
        <p>This is the Finance Analysis feature page</p>
        
        <div class="calendar-container">
            <div class="calendar-header">
                <button id="prev-btn">&lt;</button>
                <h2 id="month-year"></h2>
                <button id="next-btn">&gt;</button>
            </div>
            <table class="calendar">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody id="calendar-body">
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        const months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];
        
        let date = new Date();
        let year = date.getFullYear();
        let month = date.getMonth();
        let today = date.getDate();
        
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const monthYear = document.getElementById('month-year');
        const calendarBody = document.getElementById('calendar-body');
        
        prevBtn.addEventListener('click', () => {
            month--;
            if (month < 0) {
                year--;
                month = 11;
            }
            renderCalendar();
        });
        
        nextBtn.addEventListener('click', () => {
            month++;
            if (month > 11) {
                year++;
                month = 0;
            }
            renderCalendar();
        });
        
        function renderCalendar() {
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const firstDay = new Date(year, month, 1).getDay();
            const lastDay = new Date(year, month, daysInMonth).getDay();
            const todayDate = new Date();
            
            let date = 1;
            let rows = '';
            for (let i = 0; i < 6; i++) {
                let days = '';
                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDay) {
                        days += '<td></td>';
                    } else if (date > daysInMonth) {
                        days += '<td></td>';
                    } else {
                        let classes = '';
                        if (date === today && year === todayDate.getFullYear() && month === todayDate.getMonth()) {
                            classes += 'today ';
                        }
                        days += `<td class="${classes}">${date}</td>`;
                        date++;
                    }
                }
                rows += `<tr>${days}</tr>`;
            }
            calendarBody.innerHTML = rows;
            monthYear.innerHTML = `${months[month]} ${year}`;
        }
        
        renderCalendar();
    </script>
@endsection
