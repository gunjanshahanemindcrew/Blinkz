$(document).ready(function () {
    $('.slot-slider').slick({
        infinite: false,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    adaptiveHeight: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 300,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            }
        ]
    });

    $('.slot-time').on('click', function () {
        $('.slot-time').removeClass('selected');
        $(this).addClass('selected');
        $('#slot_date').val($(this).data('date'));
        $('#slot_time').val($(this).data('slot'));
    });

    $('#slot_form').on('submit', function (e) {
        var slotDate = $('#slot_date').val();
        var slotTime = $('#slot_time').val();

        if ((slotDate == 'undefined' || slotTime == 'undefined') || (slotDate == '' || slotTime == '')) {
            alert('Please select one time slot');
            e.preventDefault();
        }
    });
});
