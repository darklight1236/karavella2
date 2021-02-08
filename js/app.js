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
                    <div class="close_form" onclick="close_form()"><img src="img/close.svg" alt=""></div>
                    <div class="section__row1">
                        <p class="section__title">Получить каталог</p>
                        <div class="section__hr"></div>
                    </div>

                    <div class="email_f__container" id="testim">
                      <form action="#" method="POST" class="formID" id="formID" name="form">
		                    <input type="hidden" name="form_subject" value="Фабрика каравелла">
                        <div class="input_form_column">
                            <input class="email_inp _req" name="org" type="text" value="" placeholder="Название организации" required>
                            <input class="email_inp _req" name="city" type="text" value="" placeholder="Город" required>
                            <input class="email_inp _req" name="phone" id='user_phone' type="text" value="" placeholder="Телефон" required>
                            <span id="textPhone"></span>
                            <input class="email_inp _req _email" id='user_email' name="admin_email[]" type="text" value="" placeholder="Почта" required>
                            <input type="hidden" name="email_copy" id='email_copy' value="">
                            <input type="hidden" name="email_double[]" id='email_double' value="newhub1236@yandex.ru">
                            <input type="hidden" name="file">
                        </div>
                        <button type="submit" name="saveinf" class="form_submit">Отправить</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
  `);
});

//Получаю данные из формы и отправляю в php
const cat_btn = document.querySelector('.free_cat__button');
cat_btn.addEventListener('click', () => {

const form_submit = document.querySelector('.form_submit');

form_submit.addEventListener('click', (e) => {
  e.preventDefault();

  let user_email = document.getElementById('user_email');
  let email_copy = document.getElementById('email_copy');

  email_copy.value = user_email.value;

  let regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  let regPhone = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
  let user_phone = document.getElementById('user_phone');

  if(!regPhone.test(user_phone.value)){

    alert('Введите корректный номер телефона!');

  }else{

    if(!regEmail.test(user_email.value)){

      alert('Введите корректный email!');

    }else{

      const form = document.forms.form;
      let formData = new FormData(form);
    
      let xhr = new XMLHttpRequest();
    
      let response = fetch('sendbd.php', {
          method: 'POST',
          body: formData
      });
    
      xhr.open('POST', 'mail.php', true);
      xhr.send(formData);

      send_double();

      form.reset();
      setTimeout(close_form, 500);

    }

  }
}); 

});
// -------------------------------------------------

function send_double() {
  const form = document.forms.form;
      let formData = new FormData(form);
  let xhr2 = new XMLHttpRequest();
      xhr2.open('POST', 'mail2.php', true);
      xhr2.send(formData);
}

function close_form() {
  $('.black_layer').remove();
  $('.email_form').remove();
}

function black_l__close(e) {
  // наличие чёрного фона
  if($('.black_layer')){
    $('.black_layer').remove();
  }
  // наличие формы для каталога
  if($('.email_form')){
    $('.email_form').remove();
  }
}

$('.msg_box').on('click', function() {
  $('.msg_form').toggleClass("msgActive");
});

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
  $('body,html').animate({scrollTop:0},1000);
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

$(document).mouseup(function(e) {
  let container = $('.msgActive');
  if (container.has(e.target).length === 0){
    container.removeClass('msgActive');
  }
})