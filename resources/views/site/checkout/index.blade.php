@extends('layouts.app')
@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        @if(!$city)
        <h2 class="mb-6 pb-4">SEU BILHETE ESTÁ VAZIO</h2>
        @else
        <h2 class="page-title">Resumo bilhete da cidade: {{ $city->name }}/{{ $city->state->abbreviation }}</h2>
        @endif
        <div class="checkout-steps">
            <a href="{{ route('cart.show') }}" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">01</span>
                <span class="checkout-steps__item-title">
                    <span>Gerencie sua lista</span>
                    <em>Escolha bem seus candidatos</em>
                </span>
            </a>
            <a href="javascript:void(0)" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">02</span>
                <span class="checkout-steps__item-title">
                    <span>Envio e finalizar compra</span>
                    <em>Confira sua lista de palpites</em>
                </span>
            </a>
            <a href="javascript:void(0)" class="checkout-steps__item">
                <span class="checkout-steps__item-number">03</span>
                <span class="checkout-steps__item-title">
                    <span>Confirmação</span>
                    <em>Pedido confirmado</em>
                </span>
            </a>
        </div>
        <form name="checkout-form" action="{{-- route('cart.place.an.order') --}}" method="POST">
            @csrf
            <div class="checkout-form">
                <div class="billing-info__wrapper">
                    <div class="row">
                        <div class="col-6">
                            <h4>IDENTIFICAÇÃO DO APOSTADOR</h4>
                        </div>
                        <div class="col-6">
                            {{ Auth::user()->id }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="my-account__address-list">
                                <div class="my-account__address-list-item">
                                    <div class="my-account__address-item-detail">
                                        <p><strong>Nome: </strong>{{ Auth::user()->name }}</p>
                                        <p><strong>Telefone de contato: </strong>{{ Auth::user()->mobile }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout__totals-wrapper">
                    <div class="sticky-content">
                        <div class="checkout__totals">
                            <h3 class="text-center">Pagamento do bilhete</h3>
                            <h5>Cidade: <strong>{{ $city->name }} - {{ $city->state->abbreviation }} (nº eleitos: <strong>{{ $city->quantity }})</strong></h5>
                            
                            <div class="text-center">
                                <p>Total candidatos selecionados: </p> <h1><strong>{{ count($cart) }}</strong></h1>
                            </div>
                            <table class="checkout-cart-items">
                                <thead>
                                    <tr>
                                        <th>CANDIDATO</th>
                                        <th align="right">Nº LEGENDA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $index => $item)
                                        <tr>
                                            <td>{{ $item['short_name'] }}</td>
                                            <td align="right">{{ $item['caption_number'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <table class="checkout-totals">
                                <tbody>
                                    <tr>
                                        <th><h3>TOTAL</h3></th>
                                        <td class="text-right"><h3>R$ 30,00</h3></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="checkout__payment-methods">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mode" id="mode3" value="cod" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Pix
                                </label>
                              </div>
                            <div class="policy-text">
                                Após confirmar o pedido, realize o pix conforme orientação do bilhete!
                            </div>
                        </div>
                        <a href="{{ route('cart.order.confirmation') }}" class="btn btn-primary btn-checkout">Confirmar bilhete</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection