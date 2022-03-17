<?php
$title = 'Регистрация в системе';

@include_once 'header.php';
?>

<?= (isset($_GET['error_password'])
    ? "<div class='alert alert-danger'>Пароли не совпали!</div>"
    : "")
?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 border border-1 rounded-2 mt-2 p2">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-label" name="name" placeholder="Фамилия Имя Отчество" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-label" name="login" placeholder="Укажите логин:" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-label" name="password" placeholder="Укажите пароль:" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-label" name="password_confirmed" placeholder="Укажите пароль повторно:"
                               required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Регистрация">
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>


<?php @include_once 'footer.php'; ?>