<main class="container">
        <div id="carouselExampleIndicators" class="carousel slide hot-news" data-ride="carousel">
            <ol class="carousel-indicators hot-news__nav">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="hot-news_nav-item active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="hot-news_nav-item"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="hot-news_nav-item"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active hot-news__content">
                    <div class="hot-new__title">Первый слайд</div>
                    <div class="hot-news__description">Description of news</div>
                </div>
                <div class="carousel-item hot-news__content">
                    <div class="hot-new__title">2 слайд</div>
                    <div class="hot-news__description">Катаемся</div>
                </div>
                <div class="carousel-item hot-news__content">
                    <div class="hot-new__title">Title</div>
                    <div class="hot-news__description">Хуебондим, ае</div>
                </div>
            </div>
        </div>

    <div class="categories">
        <div class="categories__header">
            <div class="categories__title">Категории</div>
            <div class="categories__show-all">Смотреть все</div>
        </div>

        <div class="categories__main">
            {foreach from=$categories item=category name=categories}

            {if $smarty.foreach.categories.index == 8}
                {break}
            {/if}

            <a href="{$url}/main/category/?category_id={$category.id}" class="category">
                <div class="category__icon">
                    <i class="fa fa-{$category.icon} fa-2x" aria-hidden="true"></i>
                </div>
                <div class="category__title">{$category.name}</div>
            </a>

            {/foreach} 
        </div>
    </div>
</main>