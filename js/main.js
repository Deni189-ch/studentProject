
        let $popup = $('.popup')        
       //открываем popup через меню header
        $('.header__hav_link-js').click(function () {
            $popup.fadeIn(500);
            $popup.css('display', 'flex');
       });

       //закрываем popup по клику на кнопку 
       $('.popup-close').click(function () {
            $popup.fadeOut(500);
       });

       //Закрываем popup по клику на кнопку Esc
       $(window).keyup(function(e){
           //узнаем код клавиши
           //console.log(e.keyCode) 
           if(e.keyCode == 27) {
            $('.popup').slideUp(500)
           }
       })

       //открываем popup через кнопу контента
       $('.communication__button').click(function () {
            $popup.slideDown(700);
            $popup.css('display', 'flex');
       });

        //открываем скрытый текст (ответ на вопрос)
        $('.faq-item').click(function () {
            $(this).find('.faq-item__answer').slideToggle(1000);
        });

        //открываем и скрываем текс в 6 колонках (страны)
        $('.trips-item').click(function () {
            $(this).find('.trips-title').slideToggle(1000);
        });

        //анимированно изменяем размер hr в 6 колонках (страны)
        $('.trips__dividing-line').click(function () {
            $(this).animate ({
                width: '100%',
                height: '12px'
            }, 1000);
        });

        //скрол вниз страницы до контента 
        // $('.header__about').click(function () {
        //     $('html, body').animate ({
        //         scrollTop: $('.content__title').offset().top-$('.header').outerHeight() 
        //     }, 500)
        //     return false;
        // })

        //скрол вниз страници к контактам 
        $('.header__nav_contacts').click(function () {
            $('html, body').animate ({
                scrollTop: $('.footer').offset().top
            },500);
        });
 
        //Плавный скролл вверх страницы
        $('.up').click(function (){
            $('html, body').animate ({
                scrollTop: 0
            },2000);
        });

        //Плавный скрол вниз страницы
        $('.image__link-end').click(function () {
            $('html, body').animate ({
                scrollTop: $('.footer').offset().top
            },500);
        });

        //Всплывающий cookies про заходе на страницу
        $(function () {
            $('.cookies').fadeIn(2000);
        });

        //Закрываем куки кнопкой  
        $('.cookies__clouse, .cookies__button').click(function () {
            $('.cookies').fadeOut(2000);
        });

        //Валидация формы
        let $fio = $('[name="fio"]');
        let $email = $('[name="email"]');
        let $phone = $('[name="phone"]');
        let $massadge = $('[name="massadge"]');
        let $reset = $('.popup-reset');
                
        $('.popup-form').submit(function(){

            if ($fio.val() == '') {
                $fio.addClass('error');
            } else {
                $fio.removeClass('error');
            };

            if ($email.val() == '') {
                $email.addClass('error');
            } else {
                $email.removeClass('error');
            };

            if ($phone.val() == '') {
                $phone.addClass('error');
            } else {
                $phone.removeClass('error');
            };

            if ($massadge.val() == '') {
                $massadge.addClass('error');
            } else {
                $massadge.removeClass('error');
            };

            console.log ('Значение ФИО= ', $fio.val());            
            console.log ('Значение почта= ', $email.val());            
            console.log ('Значение телефон= ', $phone.val());   
            console.log ('Значение телефон= ', $massadge.val());

            if (!$fio.hasClass('error') && !$email.hasClass('error') && !$phone.hasClass('error') && !$massadge.hasClass('error')) {                 
                //отправляем данные на сервер
                return this.submit();
                $reset.fadeOut(500);
                $('.popup-form--hide').slideUp(500);
                $('.popup-answer h4').html('Уважаемый(ая): ' + $fio.val() + ' спасибо что посетили наш сайт');
                $('.popup-answer p').html('Скоро вам позвонят по тел ' + $phone.val());
                $('.popup-answer').delay(600).slideDown(500);
                this.reset();                
            }  else {
                $reset.fadeIn(500); 
            };  
            
        });

        $('.popup-form').keyup(function(e){
            
            if ($fio.val() == '') {
                $fio.addClass('error');
            } else {
                $fio.removeClass('error');
            };

            if ($email.val() == '') {
                $email.addClass('error');
            } else {
                $email.removeClass('error');
            };

            if ($phone.val() == '') {
                $phone.addClass('error');
            } else {
                $phone.removeClass('error');
            };

            if ($massadge.val() == '') {
                $massadge.addClass('error');
            } else {
                $massadge.removeClass('error');
            };

            if (!$fio.hasClass('error') && !$email.hasClass('error') && !$phone.hasClass('error') && !$massadge.hasClass('error')) {                 
                $reset.fadeOut(500);               
            }  else {
                $reset.fadeIn(500); 
            }        
        })

        //слайд image по стрелкам
        let $image = $('.image');
        let $imageLenta = $image.find('.image-lenta');
        let $imageItem = $image.find('.image-item--slide');
        let $imageArrowRight = $image.find('.image-arrow-right');
        let $imageArrowLeft = $image.find('.image-arrow-left');
        let indexItemActiv = 0;

        //клик на стрелку правую, прокрутка слайдов вправо
        $imageArrowRight.click(function(){
            if(indexItemActiv < $imageItem.length-1) {
                indexItemActiv++
                $imageLenta.animate({
                    left: -100 * indexItemActiv + '%'
                },500)
            } else {
                indexItemActiv++
                $imageLenta.animate({
                    left: -100 * indexItemActiv + '%'
                },500, function(){
                    indexItemActiv = 0
                    $imageLenta.css('left', indexItemActiv)
                })
            }
        })
        //клик на cтрелку левую, возврат слайдов
        $imageArrowLeft.click(function(){
            if(indexItemActiv > 0) {
                indexItemActiv--
                $imageLenta.animate({
                    left: -100 * indexItemActiv + '%'
                },500)
            }   else {
                indexItemActiv = $imageItem.length-1
                $imageLenta.animate({
                    left: -100 * indexItemActiv + '%'
                })
            }                         
        })
     

        //автоматическая прокрутка слайдов
        // setInterval(function(){
        //     $imageArrowRight.click()
        // }, 5000)
        
        //переключатель на бургер класса опен
        let $burger = $('.header__burger');
        let $headerNav = $('.header__nav');

        $burger.click(function(){
            $(this).toggleClass('open')

            //открытие мени при появлении класса опен
            if($(this).hasClass('open')) {
               $headerNav.css('display', 'flex').animate({
                   right: 0 + '%'
               },1500); 
            } else {
                $headerNav.animate({
                    right: '-100%'
                },1500, function(){
                    $headerNav.css('display', 'none')
                });
            }
        })


        
           
        
        

