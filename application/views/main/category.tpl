<main class="container category-block">
    <h3 class="category-block__title">
        <i class="fa fa-{$category.icon}" aria-hidden="true"></i>{$category.name} ({$products|@count})
    </h3>
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="category-searcher standart-block">
                <input type="text" class="category-searcher__input" placeholder="Поиск по категории">
                <a href="#" class="category-searcher__close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <a href="#" class="category-searcher__search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            </div>
            <div class="filters standart-block">
                Фильтры
            </div>
        </div>
        <div class="col-12 col-lg-8">
            {if $products|@count != 0}
            <div class="products">
                
                {foreach from=$products item=product}
                <div class="product standart-block">
                    <div class="row">
                        <div class="col-12 col-sm-2 product__image">
                            <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-8 col-sm-7 justify-content-start">
                            <div class="product__info">
                                <div class="product__name">{$product.name}</div>
                                <div class="product__rating">4.6</div>
                                <div class="product__reviews">1 обзор</div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-3 product__buy-section">
                            <a href="#" class="product__buy-btn">
                                <p class="product__price">
                                    {$product.price}
                                </p>
                                <p class="product__buy-text">
                                    Купить
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>
            {else}
                <h2>Товаров этой категории ещё нет</h2>
            {/if}                
        </div>
    </div>
</main>