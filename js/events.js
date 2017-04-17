(function($) {

    $(document).ready(function() {
        var counts = $('.tp_event_counter');
        for (var i = 0; i < counts.length; i++) {
            var time = $(counts[i]).attr('data-time');
            time = new Date(time);
            $(counts[i]).countdown({
                labels: TIME.l18n.labels,
                until: time,
            });
        }
        var carousels = $('.tp_event_owl_carousel');
        for (var i = 0; i < carousels.length; i++) {
            var data = $(carousels[i]).attr('data-countdown');
            var options = {
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            };
            if (typeof data !== 'undefined') {
                data = JSON.parse(data);
                $.extend(options, data);
                $.each(options, function(k, v) {
                    if (v === 'true') {
                        options[k] = true;
                    } else if (v === 'false') {
                        options[k] = false;
                    }
                });
            }
            if (typeof options.slide === 'undefined' || options.slide === true) {
                $(carousels[i]).owlCarousel(options);
            } else {
                $(carousels[i]).removeClass('owl-carousel');
            }
        }
    });
})(jQuery);