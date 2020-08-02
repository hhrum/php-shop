<div class="hot-news">
    <div class="hot-new__title">Title</div>
    <div class="hot-news__description">Description of news</div>
    <div class="hot-news__nav">
        <div class="hot-news_nav-item hot-news_nav-item_selected"></div>
        <div class="hot-news_nav-item"></div>
        <div class="hot-news_nav-item"></div>
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

        <a href="{$url}/main/category/?category_id={$category->getId()}" class="category">
            <div class="category__icon">
                <i class="fa fa-{$category->getIcon()} fa-2x" aria-hidden="true"></i>
            </div>
            <div class="category__title">{$category->getName()}</div>
        </a>

        {/foreach} 
    </div>
</div>