<main class="container order-block">
    <div class="row" style="flex-grow: 1;">
    {if $order|count == 0}
        <div class="col-12 d-flex order-empty">
            <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
            <h3>Ваша корзина пуста, вы ещё ничего сюда не добавили!</h3>
        </div>
    {else}
        <div class="col-12 col-md-4 order-1">
            <div class="order__info standart-block">
                <div class="order__item">Всего товаров: {$order|count}</div>
                <div class="order__item">Общая стоимость: </div>
                <div class="order__item">Примерное время доставки: </div>
            </div>
        </div>
        <div class="col-12 col-md-8 order-lg-2">
            <div class="products">
                {foreach from=$order key=product_key item=product}
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
                            <a href="{$url}/order/remove/?product_key={$product_key}" class="product__close-btn">
                                <i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
    {/if}
    </div>
</main>
{*{$order|json_encode}*}