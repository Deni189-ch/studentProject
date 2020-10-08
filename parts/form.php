<div class="popup">
    <div class="popup-content">
        <div class="popup-close"></div>

        <div class="popup-reset">
            Заполнены не все поля
        </div>
        <div class="popup-form--hide">
            <form class="popup-form" method="POST" action="../thank.php">
                <h4 class="popup-title">
                    Напишите нам:
                </h4>

                <input type="text" placeholder="ФИО" name="fio">

                <input type="email" placeholder="Почта" name="email">

                <input type="tel" placeholder="Телефон" name="phone">

                <textarea placeholder="Введите текст" name="massadge"></textarea>

                <label>
                    <input type="checkbox" name="personal_data" value="yes">
                    Согласен на обработку персональных данных
                </label>
                <br>
                <br>
                Выберети удобный вид связи 
                <br>
                <label>
                    <input type="radio" name="method" value="phone" checked>
                    Телефон
                </label>
                <br>
                <label>
                    <input type="radio" name="method" value="email">
                    Почта
                </label>
                <br>
                <br>
                Укажите ваш пол:
                <br>
                <label>
                    <input type="radio" name="gender" value="m">
                    мужской
                </label>
                <br>
                <label>
                    <input type="radio" name="gender" value="f">
                    женский
                </label>
                <br>
                <br>

                <!-- Добавить селект с выбором страны -->
                Выберети страну:
                <br>
                <select name="country">
                    <option></option>
                    <option value="russia">Россия</option>

                    <option value="europe">Европа</option>

                    <option value="africa">Африка</option>

                    <option value="northernAmerica">северная Америка</option>

                    <option value="southernAmerica">южная америка</option>

                    <option value="australia">Австралия</option>
                </select>

                <input class="popup-button" type="submit" value="Отправить вопрос">
            </form>
        </div>

        <div class="popup-answer">
            <h4>
                Уважаемый(ая) спасибо что посетили наш сайт.
            </h4>

            <p>
                В близжайше время вам позвонят по тел: 8 999 99 99.
            </p>
        </div>
    </div>
</div>