document.addEventListener("DOMContentLoaded", function(event) {
    drivers_handlers();
});
function drivers_handlers() {
    $('.s-drivers__search-btn').click(function(){
        $('.s-drivers__search-input .fancybox-button').show();
        let query = $('.s-drivers__search-input input').val();
        let re = new RegExp(query,"g");
        let items = $('.s-drivers__table-text');
        for (var i = 0; i < items.length; i++) {
            let str = $(items[i]).text();
            let res = str.match(re);
            if (!res) {
                $(items[i]).parent().hide();
            }
        }
    });
    $('.s-drivers__search-input .fancybox-button').click(function(){
        $('.s-drivers__search-input input').val('');
        $(this).hide();
        let items = $('.s-drivers__table-text');
        for (var i = 0; i < items.length; i++) {
            $(items[i]).parent().show();
        }
    });
}
