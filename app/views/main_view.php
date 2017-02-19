<!-- Прототипирование интерфейса, позднее будет разбросано по Views -->

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.2017
 * Time: 4:28
 */
?>

<div class="container">

    <!-- Для списка коментариев коментариев -->
    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4> <h6><</h6>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>
    <!-- Пагинация -->
    <div class="pagination">
        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>
    <!-- Форма отправки -->
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
</div>
