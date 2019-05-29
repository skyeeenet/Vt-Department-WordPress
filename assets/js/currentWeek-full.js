$(function () {
    let offset = document.getElementById('week_offset').innerHTML;
    if (offset == '') {
        offset = 0;
    }
    getWeek(offset);

    function getWeek(offset) {
        let now = new Date();
        now.setTime(Date.parse(now));
        let FirstSeptYear = now.getFullYear();
        if (now.getMonth() < 8) FirstSeptYear = FirstSeptYear - 1;
        let FirstSept = new Date('09/01/' + FirstSeptYear);
        let day = FirstSept.getDay();
        if (day == 0) {
            day = 7;
        }
        --day;
        FirstSept.setTime(Date.parse(FirstSept) - day * 86400000);
        let i = parseInt(offset);                                              //для изменения четности вручную изменить на 0 или 1
        while (now > FirstSept) {
            FirstSept.setTime(Date.parse(FirstSept) + 604800000);
            i++;
        }
        if (i % 2 == 0) {
            document.getElementById('current_week').innerHTML = 'Четная';
        } else {
            document.getElementById('current_week').innerHTML = 'Нечетная';
        }
        return;
    }
});
