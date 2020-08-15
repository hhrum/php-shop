<main class="container order-block">
    <div class="row" style="flex-grow: 1;">
    {if $basket|count == 0}
        <div class="col-12 d-flex basket-empty">
            <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
            <h3>Ваша корзина пуста, вы ещё ничего сюда не добавили!</h3>
        </div>
    {else}
        <div class="col-12 col-md-4 order-1">
            <div class="basket__info">
                <div class="basket__item">Всего товаров: {$basket|count}</div>
                <div class="basket__item">Общая стоимость: </div>
                <div class="basket__item">Примерное время доставки: </div>
                <div class="basket__buy-btn">
                    <button class="standart-btn" id="basket-buy">
                        49 999р
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 ">
            <div class="products">
                {foreach from=$basket key=product_key item=product}
                {* <div class="product standart-block">
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
                            <a href="{$url}/basket/remove/?product_key=" data-product-key="{$product_key}" class="product__close-btn">
                                <i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div> *}

                <div class="product standart-block">
                    <div class="row">
                        <div class="col-4 col-md-3 product__image">
                            <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i>
                        </div>
                        <div class="col-8 col-md-9 product__other">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="product__info">
                                        <div class="product__name">{$product.name}</div>
                                        <div class="product__rating">4.6</div>
                                        <div class="product__reviews">1 обзор</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 product__buy-section justify-content-md-end">
                                    <div class="d-md-none product__price">{$product.price}</div>
                                    <a href="{$url}/basket/remove/?product_key=" data-product-key="{$product_key}" class="product__close-btn">
                                        <i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
    {/if}
    </div>
</main>

<script>
    var basket = JSON.parse('{$basket|json_encode}');
</script>
{*{$order|json_encode}*}