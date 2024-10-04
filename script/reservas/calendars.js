document.addEventListener('DOMContentLoaded', function () {

    const months = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    let currentDate = new Date();
    let currentMonthIndex = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();
    let days = 5; // Número total de días que queremos seleccionar

    // Array para almacenar las fechas seleccionadas
    window.selectedDates = [];

    function renderCalendar(date, calendarId) {
        const calendarEl = document.getElementById(calendarId);
        const monthEl = document.createElement('div');
        monthEl.className = 'calendar-header';
        const monthYearEl = document.createElement('div');
        monthYearEl.className = 'month-year';
        const daysGrid = document.createElement('div');
        daysGrid.classList.add('days-grid');
        daysGrid.classList.add('days-grid-' + calendarId);

        monthYearEl.innerHTML = `<span>${months[date.getMonth()]}</span> <span>${date.getFullYear()}</span>`;
        monthEl.appendChild(monthYearEl);

        const calendarBody = document.createElement('div');
        calendarBody.className = 'calendar-body';

        const dayNames = document.createElement('div');
        dayNames.className = 'day-names';
        ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"].forEach(day => {
            const dayName = document.createElement('div');
            dayName.textContent = day;
            dayNames.appendChild(dayName);
        });

        calendarBody.appendChild(dayNames);
        calendarBody.appendChild(daysGrid);

        calendarEl.innerHTML = '';
        calendarEl.appendChild(monthEl);
        calendarEl.appendChild(calendarBody);

        const firstDayOfMonth = (new Date(date.getFullYear(), date.getMonth(), 1).getDay() + 6) % 7;  // Ajuste para que el lunes sea el primer día
        const lastDateOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();

        daysGrid.innerHTML = '';

        for (let i = 0; i < firstDayOfMonth; i++) {
            daysGrid.innerHTML += `<div></div>`;
        }

        for (let i = 1; i <= lastDateOfMonth; i++) {
            daysGrid.innerHTML += `<div class='unselect'>${i}</div>`;
        }

        const dayDivs = daysGrid.querySelectorAll('.unselect');

        // Aplicar las clases 'selected' y 'mid' a los días seleccionados
        dayDivs.forEach(d => {
            let dayNum = parseInt(d.textContent);
            let dayDate = new Date(date.getFullYear(), date.getMonth(), dayNum);
            let dayDateString = formatDate(dayDate); // Es la cadena que representa la fecha del día actual que se está iterando en el calendario

            // Verifica si la fecha actual (dayDateString) está en el array selectedDates
            if (selectedDates.includes(dayDateString)) {
                if (dayDateString === selectedDates[0] || dayDateString === selectedDates[selectedDates.length - 1]) { // Si la fecha es la primera o la última de la selección les asigna selected
                    d.classList.add('selected');
                } else {
                    d.classList.add('mid');
                }
            }
        });

        dayDivs.forEach(dayDiv => {
            dayDiv.addEventListener('click', () => {
                if (document.getElementsByClassName('error').length > 0) {
                    let error = document.getElementsByClassName('error')[0];
                    error.classList.remove('show');
                }
                
                let allDays = document.querySelectorAll('.unselect');
                allDays.forEach(d => {
                    d.classList.remove('selected');
                    d.classList.remove('mid');
                });

                // Limpiar el array de fechas seleccionadas
                selectedDates = [];

                let selectedDayNum = parseInt(dayDiv.innerHTML);
                let startDate = new Date(date.getFullYear(), date.getMonth(), selectedDayNum);
                let monthUpdated = false;
                // Generar las fechas seleccionadas
                for (let i = 0; i < days; i++) {
                    let currentDate = new Date(startDate.getFullYear(), startDate.getMonth(), startDate.getDate() + i);
                    let dateString = formatDate(currentDate);

                    // Comprobar si el mes de la fecha generada es mayor al del calendario actual
                    if (!monthUpdated && dayDiv.parentElement.classList.contains('days-grid-calendar3')) {
                        // Si estamos en diciembre (mes 11), hacemos el salto al año siguiente y mes enero (mes 0)
                        if (currentDate.getMonth() === 0 && startDate.getMonth() === 11) {
                            updateMonthIndex(1);
                            monthUpdated = true;
                        }
                        // Si es cualquier otro mes que no sea diciembre
                        else if (currentDate.getMonth() > startDate.getMonth()) {
                            updateMonthIndex(1);
                            monthUpdated = true;
                        }
                    }

                    selectedDates.push(dateString);
                }

                // Re-renderizar los calendarios para aplicar la selección
                renderCalendars();
            });
        });
    }

    function renderCalendars() {
        renderCalendar(new Date(currentYear, currentMonthIndex, 1), 'calendar1');
        renderCalendar(new Date(currentYear, currentMonthIndex + 1, 1), 'calendar2');
        renderCalendar(new Date(currentYear, currentMonthIndex + 2, 1), 'calendar3');
    }

    function updateMonthIndex(step) {
        currentMonthIndex += step;
        if (currentMonthIndex < 0) {
            currentMonthIndex += 12;
            currentYear -= 1;
        } else if (currentMonthIndex > 11) {
            currentMonthIndex -= 12;
            currentYear += 1;
        }
        renderCalendars();
    }

    let containerDate = document.getElementById('dateButtons');

    // Botones de navegación
    const prevBtn = document.createElement('button');
    prevBtn.className = "monthBtn";
    prevBtn.textContent = '<< Prev';
    prevBtn.addEventListener('click', (event) => {
        event.preventDefault(); // Asegura que no se recargue la página
        updateMonthIndex(-1)
    });

    const nextBtn = document.createElement('button');
    nextBtn.className = "monthBtn";
    nextBtn.textContent = 'Next >>';
    nextBtn.addEventListener('click', (event) => {
        event.preventDefault(); // Asegura que no se recargue la página
        updateMonthIndex(1)
    });

    containerDate.appendChild(prevBtn);
    containerDate.appendChild(nextBtn);

    renderCalendars();

    // Función para formatear la fecha como 'YYYY-MM-DD'
    function formatDate(date) {
        let year = date.getFullYear();
        let month = ('0' + (date.getMonth() + 1)).slice(-2);
        let day = ('0' + date.getDate()).slice(-2);
        return `${year}-${month}-${day}`;
    }
});
