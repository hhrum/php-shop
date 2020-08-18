<main class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

            {if $orders|count == 0}
    
                <div class="col-12 d-flex basket-empty">
                    <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>
                    <h3>Ваш список заказов пуст, вы ещё ничего не заказали!</h3>
                </div>
    
            {else}
    
                {foreach from=$orders item=$order key=key}
                    <div class="user-order standart-block row mb-3 mr-1 mr-md-0 ml-1 ml-md-0">
                        <div class="col-12 col-md-3 order-md-1 d-flex justify-content-center mt-2 mt-md-0 mb-3 mb-md-0">
                            <div class="user-order__images">
                                {foreach from=$order.products item=product key=key name=products}
                                    {if $smarty.foreach.products.index == 3} {break} {/if}
            
                                    <img src="{$url}/public/img/not_image.svg" title="{$product.name}">
                                {/foreach}
                            </div>
                        </div>
                        <div class="col-12 col-md-9 d-flex flex-column justify-content-center">
                            <header>
                                <h5>Идентификатор заказа: {$order.id}</h5>
                            </header>
                            <div>
                                <p>Дата заказа: {$order.date}</p>
                                <p>Статус заказа: {$order.state}</p>
                            </div>
                        </div>
                    </div>
                {/foreach}
    
            {/if}


        </div>
    </div>
</main>