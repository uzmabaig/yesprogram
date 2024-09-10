$(document).ready(function () {
    let isDatepickerOpen = false;

    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
    }).on('show', function () {
        isDatepickerOpen = true;
    }).on('hide', function () {
        isDatepickerOpen = false;
    });

    $('#date-icon2').click(function () {
        if (isDatepickerOpen) {
            $('#datepicker').datepicker('hide');
        } else {
            $('#datepicker').datepicker('show');
        }
    });

    $('#datepicker2').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
    }).on('show', function () {
        isDatepickerOpen = true;
    }).on('hide', function () {
        isDatepickerOpen = false;
    });

    $('#date-icon').click(function () {
        if (isDatepickerOpen) {
            $('#datepicker2').datepicker('hide');
        } else {
            $('#datepicker2').datepicker('show');
        }
    });

});


document.getElementById('calculateBtn').addEventListener('click', function () {
    const selectedDate = new Date(document.getElementById('datepicker').value);
    const endDate = new Date('2024-08-15');

    document.getElementById('textshow').innerText = '15 August 2024';

    if (isNaN(selectedDate)) {
        document.getElementById('txtyears').value = '';
        document.getElementById('months').value = '';
        document.getElementById('days').value = '';
        return;
    }

    let years = endDate.getFullYear() - selectedDate.getFullYear();
    let months = endDate.getMonth() - selectedDate.getMonth();
    let days = endDate.getDate() - selectedDate.getDate();

    if (days < 0) {
        months--;
        days += new Date(endDate.getFullYear(), endDate.getMonth(), 0).getDate();
    }
    if (months < 0) {
        years--;
        months += 12;
    }

    document.getElementById('txtyears').value = years + ' years';
    document.getElementById('months').value = months + ' months';
    document.getElementById('days').value = days + ' days';
});

document.getElementById('calculateBtn2').addEventListener('click', function () {
    const selectedDate = new Date(document.getElementById('datepicker2').value);
    const endDate = new Date('2024-08-15');

    document.getElementById('textshow2').innerText = '15 August 2024';

    if (isNaN(selectedDate)) {
        document.getElementById('txtyears2').value = '';
        document.getElementById('months2').value = '';
        document.getElementById('days2').value = '';
        return;
    }

    let years = endDate.getFullYear() - selectedDate.getFullYear();
    let months = endDate.getMonth() - selectedDate.getMonth();
    let days = endDate.getDate() - selectedDate.getDate();

    if (days < 0) {
        months--;
        days += new Date(endDate.getFullYear(), endDate.getMonth(), 0).getDate();
    }
    if (months < 0) {
        years--;
        months += 12;
    }

    document.getElementById('txtyears2').value = years + ' years';
    document.getElementById('months2').value = months + ' months';
    document.getElementById('days2').value = days + ' days';
});