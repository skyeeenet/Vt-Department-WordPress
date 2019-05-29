$(function () {
    $('#schedule_show').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: "/wp-admin/admin-ajax.php", //url, к которому обращаемся
            type: "POST",
            data: {
                action: "get_schedule",
                group: $('#group').val(),
                day: $('#day').val(),
                week: $('#week').val()
            }, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function(data){
                $('#schedule-container').empty();
                $('#schedule-container').append(data);
            }
        });
    })
});