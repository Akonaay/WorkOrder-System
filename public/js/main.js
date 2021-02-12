$(document).ready(function () {

    $('#v-pills-home-tab').on('click', function () {
        $.ajax({
            type: 'GET',
            url: '/about',
            success: function (data) {
                console.log(data);
            }
        });
    });
});