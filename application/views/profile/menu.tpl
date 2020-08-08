<main class="container">
    <div class="profile">
        <div class="profile__header">
            {if $user}
            <div class="profile__avatar">
                <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                {$user.name}
            </div>
            {else}
            <a href="#" class="standart-btn" data-toggle="modal" data-target="#signinModal">
                Войти
            </a> 
            {/if}
            
        </div>
        <div class="profile__body">
            <a href="#" class="profile__item">Заказы</a>
            <a href="#" class="profile__item">Обратная связь</a>
            <a href="#" class="profile__item">Помощь</a>
        </div>
        <div class="profile__footer">
            <a href="{$url}/profile/signout" class="profile__item">Выход</a>
        </div>
    </div>
</main>