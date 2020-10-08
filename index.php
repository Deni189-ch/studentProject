  <?php
    $title = 'Главная страница';
    include('./parts/header.php');
    ?>

  <div class="image">
      <div class="image-lenta">
          <div class="image-item image-item--slide"></div>

          <div class="image-item image-item--slide"></div>

          <div class="image-item image-item--slide"></div>

          <div class="image-item image-item--slide"></div>
          <div class="image-item"></div>
      </div>

      <div class="image-arrows">
          <div class="image-arrow-right"></div>

          <div class="image-arrow-left"></div>
      </div>

      <div class="image__info">
          <h2 class="image__title">
              Только красивые путешествия!
          </h2>

          <div class="image__button">
              Присоединяйся
          </div>

          <div class="image__link">
              <a class="image__link-end" href="#"></a>
          </div>
      </div>

      <ul class="image__nav">
          <li>
              <a href="#" class="image__nav_vkontakte"></a>
          </li>
          <li>
              <a href="#" class="image__nav_fasebook"></a>
          </li>
          <li>
              <a href="#" class="image__nav_instagram"></a>
          </li>
      </ul>
  </div>

  <div class="content">
      <h1 class="content__title">
          Путешествуй красиво! Блог в фотографиях.
      </h1>

      <p class="content__paragraph">
          Представьте себе все лучшее, что есть в России: широкие просторы, разнообразная природа, щедрая душа,
          девушки особой красоты, баня в конце концов. Добавьте к этому все то, чем так привлекательна Москва:
          гастрономические рестораны, безудержные вечеринки, звезды ТВ и инстаграмма вокруг. Взболтайте, но не
          смешивайте и получите Розу Хутор 2017 – правильный баланс здорового лайфстайла и роскоши.
      </p>

      <p class="content__paragraph">
          Красная поляна также радует своей доступностью: перелет занимает 2,5 часа, иметь визу необходимости нет,
          заказать такси можно через привычное приложение за 1400 руб., а время в пути от аэропорта до отеля
          составляет менее часа! Ну, где еще такое есть? При этом местная инфраструктура не просто ничуть не
          уступает Альпам, но и даже предвосхищает ожидания: здесь вкуснее, уютнее и веселее. Я уже не говорю об
          удивительном контрасте температур – наверху зима, а внизу лето!
      </p>

      <p class="content__paragraph">
          Более того, несмотря на весну за окном, успеть все это оценить лично совсем не поздно – рекордное
          количество снега обещает продлить сезон на весь апрель, а курорт тем временем предлагает на этот период
          очень привлекательные цены!
      </p>

      <p class="content__paragraph">
          В общем, какое бы время вы ни выбрали, Роза Хутор удивит и подарит желание говорить о России с
          восторгом!
      </p>
  </div>


  <div class='trips'>
    <?php
        $sql = "SELECT * FROM trips WHERE active = 'y'";
        $result = mysqli_query($link, $sql);       
    ?>

    <?php
        //Второй способ пройтись по массиву
        while ($row = mysqli_fetch_assoc($result)) :
    ?>    
        <div class="trips-item">
             <div class='trips__image'>
            <img src="<?=$row['img_url']?>" style="width: 100px" alt="<?= $row['title']?>" title="<?= $row['title']?>"/>
            </div>

            <h3 class="trips__country-name">
                <?= $row['title']?>
            </h3>

            <hr class="trips__dividing-line">

            <p class="trips-title">
                <?= $row['description']?>
            </p>
        </div>
    <?php endwhile ?>
    

  </div>


  <div class="communication">
      <div class="communication__info">
          <h4 class="communication__title">
              Отправьте нам вопрос и мы ответим в близжайшее время
          </h4>

          <div class="communication__button">
              Отправить вопрос
          </div>

          <?php @include('form.php'); ?>

      </div>
  </div>

  <div class="faq">
  <h4 class="faq-title">Часто задаваемые вопросы</h4>
      <?php
          $template = [
              'faq' => []
          ];  
      
        $sql = "SELECT * FROM faq ORDER BY priority ASC";
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $template['faq'] [] =$row;
        }
      ?>

    <?php foreach($template['faq'] as $item) : ?>     
      <div class="faq-item">
          <div class="faq-item__title faq-item__title--1">
          <?= $item['question']; ?>
          </div>

          <div class="faq-item__answer faq-item__answer--1">
          <?= $item['answer']; ?>
          </div>
      </div>
    <?php endforeach; ?>

  </div>
  <div class="cookies">
      <div class="wrapper">
          <div class="cookies__content">
              <div class="cookies__logo"></div>

              <div class="cookies__text">
                  Наш сайт использует файлы cookies для получения
                  <br>
                  статистики и улучшения качества работы сайта
              </div>

              <div class="cookies__button">
                  я понял
              </div>

              <div class="cookies__clouse"></div>
          </div>
      </div>
  </div>


  <?php include('./parts/form.php'); ?>;
  <?php include('./parts/footer.php'); ?>;