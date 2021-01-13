window.onload = function () {
  $('#toTop').fadeOut();
  let preloader = document.getElementById('preloader');
  preloader.style.display = 'none';
}

// form
$('.free_cat__button').on('click', function() {
  $('body').append(`
        <div class="black_layer" onclick="black_l__close(event)"></div>
        <div class="email_form">
            <div class="container">
                
                <div class="email_f__helper">

                    <div class="section__row1">
                        <p class="section__title">Быстрая регистрация</p>
                        <div class="section__hr"></div>
                    </div>

                    <div class="email_f__container" id="testim">
                        <div class="input_form_column">
                            <input type="text" value="" placeholder="Название организации">
                            <input type="text" value="" placeholder="Город">
                            <input type="text" value="" placeholder="Телефон">
                            <input type="text" value="" placeholder="Почта">
                        </div>
                        <div class="form_submit">Отправить</div>
                    </div>

                </div>


            </div>

        </div>
  `);
});

function black_l__close(e) {
  $('.email_form').remove();
  $('.black_layer').remove();
}


// carousel
$('.sl').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  autoplay: true,
  autoplaySpeed: 2500,
  cssEase: 'linear'
});


// scroll to Top
$(function() {
  $(window).scroll(function() {
  if($(this).scrollTop() != 0) {
  $('#toTop').fadeIn();
  } else {
  $('#toTop').fadeOut();
  }
  });
  $('#toTop').click(function() {
  $('body,html').animate({scrollTop:0},800);
  });
});

// для меню
$("#nav_menu").on("click","a", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1500);
});
// для кнопки сверху
$("#header__button").on("click","a", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  console.log(id+ ' ' +top)
  $('body,html').animate({scrollTop: top}, 1500);
});
$("#header__button").on("click","a", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1500);
});

$("#skipToHitSales").on("click","a", function (event) {
  event.preventDefault();
  var id  = $(this).attr('href'),
  top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1500);
});

