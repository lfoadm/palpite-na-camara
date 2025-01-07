@extends('layouts.app')
@section('content')
<style>
    .text-success{
        color: #278c04 !important;
    }
    .text-danger{
        color: red !important;
    }
</style>
<main class="pt-90">
    <div class="mb-6 pb-4"></div>
    <section class="shop-checkout container">
        @if(!$city)
            <h2 class="mb-6 pb-4">SEU BILHETE ESTÁ VAZIO</h2>
        @else
            <h2 class="page-title">Resumo bilhete da cidade:  {{ $city->name }}</h2>  
        @endif
        <div class="checkout-steps">
            <a href="javascript:void(0)" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">01</span>
                <span class="checkout-steps__item-title">
                    <span>Gerencie sua lista</span>
                    <em>Escolha bem seus candidatos</em>
                </span>
            </a>
            <a href="javascript:void(0)" class="checkout-steps__item">
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
                    <em>Revise e envie seu palpite</em>
                </span>
            </a>
        </div>
        
        <div class="shopping-cart">
            @if (isset($cart) && count($cart) > 0)
                <div class="cart-table__wrapper">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                {{-- <th class="text-center">Índice</th> --}}
                                <th class="text-center">Imagem</th>
                                <th class="text-center">Dados</th>
                                <th class="text-center">Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $index => $item)
                                <tr>
                                    {{-- <td class="text-center">{{ $index+1 }}</td> --}}
                                    <td class="text-center">
                                        <div class="">
                                            <img loading="lazy" src="{{ asset('uploads/candidates/thumbnails') }}/{{ $item['image'] }}" width="90" height="90" alt="{{ $item->name }}" />
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="shopping-cart__product-item__detail">
                                            <h4>{{ $item['short_name'] }}</h4>
                                            <ul class="shopping-cart__product-item__options">
                                                Nº legenda: {{ $item['caption_number'] }}
                                                <li>Partido: <strong>{{ $item->party->acronym }}</strong></li>
                                                <li>Cidade: <strong>{{ $item->city->name }}</strong></li>
                                                
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.item.remove', ['rowId' => $index]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="javascript:void(0)" class="remove-cart">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                                                    <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                                                </svg>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">

                        <p>Total selecionados: </p><strong>{{ count($cart) }} de {{ $city->quantity }}</strong> 
                    </div>
                    <div class="cart-table-footer">
                        
                        <form action="{{ route('cart.empty') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-light">Limpar bilhete</button>
                        </form>
                    </div>
                    <div>
                        @if(Session::has('success'))
                            <p class="text-success">{{ Session::get('success') }}</p>
                        @elseif(Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif
                    </div>
                </div>
                <div class="shopping-cart__totals-wrapper">
                    <div class="sticky-content">
                        <div class="shopping-cart__totals">
                            <h3>Valor total do Bilhete</h3>
                            @if (Session::has('discounts'))

                            <table class="cart-totals">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>R${{ Cart::instance('cart')->subtotal() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Desconto {{ Session::get('coupon')['code'] }}</th>
                                        <td>R${{ Session::get('discounts')['discount'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Subtotal com desconto</th>
                                        <td>R${{ Session::get('discounts')['subtotal'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Frete</th>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <th>Impostos</th>
                                        <td>R${{ Session::get('discounts')['tax'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>R${{ Session::get('discounts')['total'] }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            @else
                            
                            <table class="cart-totals">
                                <tbody>
                                    <tr>
                                        <th>Total</th>
                                        <td>R$ 20,00</td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                        </div>
                        <div class="mobile_fixed-btn_wrapper">
                            <div class="button-wrapper container">
                                @if(isset($cart, $city) && count($cart) <  $city->quantity)
                                    <a href="{{ route('shop.city.index', ['city_slug' => $city->slug]) }}" class="btn btn-danger btn-checkout">Complete seu bilhete</a>

                                @elseif(isset($cart) && count($cart) > $city->quantity )
                                    <p >Você <strong>excedeu</strong> a quantidade de candidatos por bilhete!</p>
                                    <p >Quantidade dever ser igual a {{ $city->quantity }}</p>
                                    <h3>Exclua itens do seu bilhete!</h3>
                                @else
                                    <a href="{{ route('shop.city.index', ['city_slug' => $city->slug]) }}" class="btn btn-primary btn-checkout">Continuar a compra</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12 text-center pt-5 bp-5">
                        <p>Nenhum item encontrado em seu bilhete</p>
                        <a href="{{ route('home.index') }}" class="btn btn-info">Escolha uma cidade!</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    $(function() {
        $(".qty-control__increase").on("click", function(){
            $(this).closest('form').submit();
        });

        $(".qty-control__reduce").on("click", function(){
            $(this).closest('form').submit();
        });

        $(".remove-cart").on("click", function(){
            $(this).closest('form').submit();
        });

    });
</script>
@endpush