<main class="container order-block">
    <div class="row" style="flex-grow: 1;">
        {if $basket|count == 0}
            <div class="col-12 d-flex basket-empty">
                <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                <h3>Ваша корзина пуста, вы ещё ничего сюда не добавили!</h3>
            </div>
        {else}
            <div class="col-12 col-lg-4 order-1 d-flex justify-content-center">
                <div class="basket__info">
                    <div class="basket__item">Всего товаров: {$basket|count}</div>
                    <div class="basket__item">Общая стоимость: </div>
                    <div class="basket__item">Примерное время доставки: </div>
                    <div class="basket__buy-btn">
                        <a href="#" class="standart-btn" {if $user} data-target="#buyModal" {else} data-target="#signinModal" {/if} data-toggle="modal" id="basket-buy">
                            49 999р
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 ">
                <div class="products">
                    {foreach from=$basket key=product_key item=product}
        
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
            <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Купить</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Вы действительно хотите купить добавленные в корзину товары?
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="modal-btn standart-btn" id="buy-btn">ДА, купить</a>
                        </div>
                    </div>
                </div>
            </div>
        {/if}
    </div>
</main>

<script>
    var basket = JSON.parse('{$basket|json_encode}');
</script>
{*{$order|json_encode}*}