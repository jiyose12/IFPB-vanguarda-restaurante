@extends('principal')

@section('conteudo')
@if(!empty($mensagem))
 <div class="alert alert-success">
   {{ $mensagem }}
  </div>
  @endif
<section>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Carrinho de Compras</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">

                        <form action="/checkout">

                            <!-- <div class="alert alert-danger" role="alert">
                            Error!
                            </div> -->

                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Produto</th>
                                        <th class="product-price">Preço</th>
                                        <th class="product-quantity">Quantidade</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($cart as $c)

                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a title="Remover este item" class="remove" href="/cart/removeAll/{{$c->id}}">
                                                <i class="fas fa-times-circle" style="font-size: 30px;"></i>
                                            </a>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="#"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="/storage/img_itens/{{$c->img_itens}}"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="#">{{$c->nome}}</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="amount">{{$c->preco_bruto}}</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input type="button" class="minus" value="-" onclick="window.location.href = '/cart/removeOne/{{$c->id}}'">
                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="{{$c->nrqtd}}" min="0" step="1">
                                                <input type="button" class="plus" value="+" onclick="window.location.href = '/cart/add/{{$c->id}}'">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount">R$ {{$c->vltotal}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="cart-collaterals d-flex justify-content-around">
<!--
                                <div class="cross-sells">

                                    <h2>Cálculo de Frete</h2>

                                    <div class="coupon">
                                        <label for="cep">CEP:</label>
                                        <input type="text" placeholder="00000-000" value="" id="cep" class="input-text" name="zipcode">
                                        <input type="submit" formmethod="post" formaction="/cart/freight" value="CÁLCULAR" class="button">
                                    </div>

                                </div> -->

                                <div class="">

                                    <h2>Resumo da Compra</h2>

                                    <table cellspacing="0">
                                        <!-- <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="amount">$700.00</span></td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Frete</th>
                                                <td>$5.00 <small>prazo de 0 dia(s)</small></td>
                                            </tr> -->

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="amount">R$ {{$total[0]->vlsoma}}</span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="mb-4">
                                        <a href="/menu">
                                            <input type="button" class="btn btn-outline-secondary" value="Continue Comprando" name="proceed" class="checkout-button button alt wc-forward">
                                        </a>
                                    </div>
                                    <div class="">
                                        <input type="submit" value="Finalizar Compra" name="proceed" class="checkout-button button alt wc-forward">
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop
