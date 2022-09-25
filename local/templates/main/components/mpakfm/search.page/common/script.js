document.addEventListener("DOMContentLoaded", function(event) {
    $('.search__more-button').click(function() {
        showMore();
        return false;
    });
});

function showMore() {
    let url = $('.search__more-button').attr('href');
    $.ajax({
        url: url,
        type: 'GET',
        success: function (data) {
            let res = $(data);
            let navText = $(data)[3];
            let list = $(data).find('.search-card');
            let nav = $(navText).children();
            //console.log('list', list);
            $('.search__cards').append(list);
            $('.nav-container').html(nav);
            $('.search__more-button').click(function() {
                showMore();
                return false;
            });
        }
    });
}
