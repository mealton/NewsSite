<?php
/**
 * Отображение меню пользователя в навигации сайта
 */
?>

<div class="profile-area">
    <?php if ($_SESSION['user']): ?>
        <?php if ($_SESSION['user']['profile_image']): ?>
            <img class="user-circle-img dropdown-toggle" src="<?= $_SESSION['user']['profile_image'] ?>"
                 id="navbarDropdown-profile" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="" width="50"
                 title="<?= $username ?>">
        <?php else: ?>
            <img src="/assets/uploads/icons/profile/profile-<?= $_SESSION['user']['gender'] ?>-default.jpg" alt=""
                 id="navbarDropdown-profile" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                 width="50" title="<?= $username ?>">
        <?php endif; ?>
        <div class="dropdown-menu" style="right: 0;" aria-labelledby="navbarDropdown-profile">
            <a class="dropdown-item" href="/profile/user/<?= $id ?>/profile-page.html">Личный кабинет</a>
            <a class="dropdown-item" href="/profile/logout.html">Выйти</a>
            <?php if ($_SESSION['user']['is_admin']): ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/manager/index.html">Менеджер</a>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <img class="nav-link dropdown-toggle" src="/assets/uploads/icons/profile/log-in.jpg" alt=""
             id="navbarDropdown-profile" role="button"
             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
             width="32" title="Авторизация / Регистрация">
        <div class="dropdown-menu" style="right: 0;" aria-labelledby="navbarDropdown-profile">
            <a class="dropdown-item" href="/profile/login.html">Авторизация</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/profile/registration.html">Регистрация</a>

        </div>
    <?php endif; ?>
</div>


