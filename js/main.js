/* Animacija za sliku scroll */

var mainClass = $('main').attr('class');
console.log(mainClass);
if ( mainClass == 'o-nama') {
    function animateImage () {
        var sectionPosition = $('.education').offset().top;
        console.log(sectionPosition);

        var fromTop = $(window).scrollTop();
        if(fromTop > sectionPosition - sectionPosition/2){
            $('.zorana').addClass('animate-img');
        }
    }
    animateImage();
    $(window).on('resize', animateImage);
    $(window).on('scroll', animateImage);
}


// Kontakt forma
$('#contact-form').validate({
    submitHandler: function (form) {

        // Uzimanje podataka iz forme
        var data = $(form).serialize();

        // Uzimanje vrednosti iz action atributa
        var action = $(form).prop('action');

        // Onemogućavanje svih polja
        $('input, textarea, button').prop('disabled', true);
        // Promena natpisa na dugmetu
        $(form).find('button').text('Sending...');

        // Slanje podataka iz forme putem AJAX metode
        $.post(
            action,
            data,
            function (response) {
                console.log(response);
                if (response == 1) {
                    // Sakrij i ukloni formu
                    $(form).slideUp(function () {
                        $(this).remove();
                    });
                    // Prikaži da je poruka uspešno poslata
                    $('.alert-success').slideDown();
                } else if ( response != '') {
                    // Ako poruka nije prosleđena - pokazaće se greška
                    alert(response);
                } else {
                    alert('Server validation failed');
                }
            }
        );
    }
});

// Magnific popup
$(document).ready(function() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
    });
});

