    <form class="lead-form" action="../../../send.php" method="post">
      <h2 class="lead-form__title">Задать вопрос</h2>
      <textarea class="lead-form__input textarea" name="question" placeholder="Напишите вопрос или сообщение"
        required></textarea>
      <input class="lead-form__input" name="fio" type="text" placeholder="Имя" required>
      <input class="lead-form__input" name="tel" type="tel" placeholder="Телефон">
      <input class="lead-form__input" name="e-mail" type="email" placeholder="E-mail" required>
      <input class="lead-form__input hidden" name="url" value="<?php $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; echo $url; ?>">
      <button type="submit" class="lead-form__button">Отправить вопрос</button>
    </form>
    <p class="tour__mark">Туроператор отвечает на вопросы по будням с 10:00 до 19:00 по московскому времени, обработка
      занимает до 24 часов.</p>
