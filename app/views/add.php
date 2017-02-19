/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2017
 * Time: 4:13
 */
<div class="addComment">
    <form class="form-comment">
        <h2 class="form-comment-heading">Оставить коментарий</h2>
        <label for="inputName" class="sr-only">Имя:</label>
        <input type="text" id="inputName" class="form-control" placeholder="Иванов Иван" required>
        <label for="inputEmail" class="sr-only">Email address:</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
        <textarea name="comment" class="form-control" placeholder="Сообщение" rows="5" required></textarea>
        <!-- Добавить что то для отображения прикрепленного изображения -->
        <button class="btn " type="submit">Отправить</button>
        <button class="btn " type="button">Прикрепить изображение</button>
    </form>
</div>