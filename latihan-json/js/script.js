

$(document).ready(function () {

    function getMenu() {
        $('#list-menu').html('')

        $.getJSON('data/donuts.json', function (result) {
            let menus = result.menu
            $.each(menus, function (index, menu) {
                $('#list-menu').append(`<div class="col-sm-3 text-center mt-2">
                <div class= "card">
                <div class="card-header">${menu.nama}</div>
                <div class="card-body">
                <img src="images/${menu.gambar}" alt="" width="200">
                <p><strong class="badge-warning"><h5>${menu.kategori}</h5></strong></p>
                <p class="card-text">${menu.deskripsi}</p>
                <a href="#" class="btn btn-primary">See detail</a>
                </div>
                </div>
                </div>`)
            })
        })
    }

    getMenu()

    $('.nav-link').click(function () {
        $('.nav-link').removeClass('active')
        $(this).addClass('active')

        let kategori = $(this).text();
        $('#judul').html(`<u>${kategori}</u>`)

        $.getJSON('data/donuts.json', function (data) {
            let menus = data.menu
            let content = ''

            if (kategori == 'All Menu') {
                getMenu()
                return;
            }

            $.each(menus, function (i, menu) {
                if (menu.kategori == kategori.toLowerCase()) {
                    content += `<div class="col-sm-3 text-center mt-2">
                    <div class= "card">
                    <div class="card-header">${menu.nama}</div>
                    <div class="card-body">
                    <img src="images/${menu.gambar}" alt="" width="200">
                    <p><strong class="badge-warning"><h5>${menu.kategori}</h5></strong></p>
                    <p class="card-text">${menu.deskripsi}</p>
                    <a href="#" class="btn btn-primary">See detail</a>
                    </div>
                    </div>
                    </div>`

                    $('#list-menu').html(content)
                }
            })
        })
    })
})