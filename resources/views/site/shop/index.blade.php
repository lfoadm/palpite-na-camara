@extends('layouts.app')
@section('content')
<style>
    .brand-list li, .category-list li{
        line-height: 40px
    }
    .brand-list li .chk-brand , .category-list li .chk-category{
        width: 1rem;
        height: 1rem;
        color: #e4e4e4;
        border: 0.12rem solid currentColor;
        border-radius: 0;
        margin-right: 0.75rem;
    }
    .filled-heart{
        color: orange;
    }
    .badge {
        background-color: green !important
    }
</style>
<main class="pt-90">
    <section class="shop-main container d-flex pt-4 pt-xl-5">
        <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
            <h3>{{ $city->name }}</h3>
            <div class="aside-header d-flex d-lg-none align-items-center">
                <h3 class="text-uppercase fs-6 mb-0">Filtrar por</h3>
                <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
            </div>

            {{-- <div class="accordion" id="brand-filters">
                <div class="accordion-item mb-4 pb-3">
                    <h5 class="accordion-header" id="accordion-heading-brand">
                        <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-brand" aria-expanded="true" aria-controls="accordion-filter-brand">
                            <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg"> <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" /></g>
                            </svg>
                        </button>
                    </h5>
                    <div id="accordion-filter-brand" class="accordion-collapse collapse show border-0"
                        aria-labelledby="accordion-heading-brand" data-bs-parent="#brand-filters">
                        <div class="search-field multi-select accordion-body px-0 pb-0">
                            <ul class="list list-inline mb-0 brand-list">
                                @foreach ($cities as $city)
                                    <li class="list-item">
                                        <span class="menu-link py-1">
                                            <input type="checkbox" name="cities" value="{{ $city->id }}" class="chk-brand" @if(in_array($city->id, explode(',', $f_cities))) checked="checked" @endif>
                                            {{ $city->name }}
                                        </span>
                                        <span class="text-right float-end">
                                            {{ $city->candidates->count() }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="accordion" id="parties-list">
                <div class="accordion-item mb-4 pb-3">
                    <h5 class="accordion-header" id="accordion-heading-1">
                        <button class="accordion-button p-0 border-0 fs-5 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-filter-1" aria-expanded="true" aria-controls="accordion-filter-1">
                            Partido político
                            <svg class="accordion-button__icon type2" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg"> <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                                    <path d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z" /></g>
                            </svg>
                        </button>
                    </h5>
                    <div id="accordion-filter-1" class="accordion-collapse collapse show border-0"
                        aria-labelledby="accordion-heading-1" data-bs-parent="#categories-list">
                        <div class="accordion-body px-0 pb-0 pt-3 category-list">
                            <ul class="list list-inline mb-0">
                                @foreach ($parties as $party)
                                    <li class="list-item">
                                        <span class="menu-link py-1">
                                            <input type="checkbox" class="chk-party" name="parties" value="{{ $party->id }}"
                                                @if(in_array($party->id, explode(',', $f_parties))) checked="checked" @endif
                                            />
                                            {{ $party->acronym }}
                                        </span>
                                        <span class="text-right float-end">{{ $party->candidates->filter(function ($candidate) use ($city) {
                                            return $candidate->city_id === $city->id;
                                        })->count() }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shop-list flex-grow-1">
            <div class="mb-3 pb-2 pb-xl-3"></div>
            @if(session('error'))
                <div class="alert alert-danger">
                    <h2>{{ session('error') }}</h2>
                </div>
            @endif
            <div class="d-flex justify-content-between mb-4 pb-md-2">
                <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                    <a href="{{ route('home.index') }}" class="menu-link menu-link_us-s text-uppercase fw-medium">Início</a>
                    <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                    <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Lista candidatos</a>
                </div>

                <div class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">

                    <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">Itens por página:</span>
                    <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Page Size" id="pagesize" name="pagesize" style="margin-right: 2px;">
                        <option value="12"  {{ $size == 12 ? 'selected':'' }}>12</option>
                        <option value="24"  {{ $size == 24 ? 'selected':'' }}>24</option>
                        <option value="48"  {{ $size == 48 ? 'selected':'' }}>48</option>
                        <option value="155" {{ $size == 155 ? 'selected':'' }}>Todos</option>
                    </select>
                    
                    <div class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"></div>
                    
                    <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">Ordenar por: </span>
                    <select class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0" aria-label="Sort Items" name="orderby" id="orderby">
                        <option value="-1" {{ $order == -1 ? 'selected':'' }}>Nome: A-Z</option>
                        <option value="1" {{ $order == 1 ? 'selected':'' }}>Nome: Z-A</option>
                        <option value="2" {{ $order == 2 ? 'selected':'' }}>Nº urna: Crescente</option>
                        <option value="3" {{ $order == 3 ? 'selected':'' }}>Nº urna: Decrescente</option>
                    </select>


                    {{-- <div class="col-size align-items-center order-1 d-none d-lg-flex">
                        <span class="text-uppercase fw-medium me-2">Ver</span>
                        <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="2">2</button>
                        <button class="btn-link fw-medium me-2 js-cols-size" data-target="products-grid" data-cols="3">3</button>
                        <button class="btn-link fw-medium js-cols-size" data-target="products-grid" data-cols="4">4</button>
                    </div> --}}

                    <div class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none" style="margin-right: 2px;">
                        <button class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside" data-aside="shopFilter">
                            <svg class="d-inline-block align-middle me-2" width="14" height="10" viewBox="0 0 14 10"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_filter" />
                            </svg>
                            <span class="text-uppercase fw-medium d-inline-block align-middle">Filtros Partido</span>
                        </button>
                    </div>
                </div>
            </div>
            
            @php
                $cartCollection = collect($cart);
            @endphp

            @if($city->candidates->count() === 0)
                <h1>Cidade não possui candidatos ainda!</h1>
                <a type="button" class="btn btn-info" href="{{ route('home.index') }}" class="navigation__link">Voltar</a>
            @elseif (isset($quantity) && $cartCollection->count() >= $quantity)
                <h2>Você atingiu a quantidade máxima de candidatos nessa cidade.</h2>
                <a type="button" class="btn btn-success" href="{{ route('cart.show') }}" class="navigation__link">Ir para o resumo do bilhete</a>
            @else
            <div class="products-grid row row-cols-2 row-cols-md-3" id="products-grid">
                @foreach($candidates as $candidate)
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img js-swiper-slider"
                                data-settings='{"resizeObserver": true}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="{{-- route('shop.candidate.show', ['candidate_slug' => $candidate->slug]) --}}"><img loading="lazy" src="{{ asset('uploads/candidates') }}/{{ $candidate->image }}" width="330" height="400" alt="{{ $candidate->short_name }}" class="pc__img"></a>
                                    </div>
                                </div>
                                <span class="pc__img-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg></span>
                                <span class="pc__img-next"><svg width="7" height="11" viewBox="0 0 7 11"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_sm" />
                                    </svg></span>
                            </div>

                            @php
                                $cartCollection = collect($cart);
                            @endphp

                            @if($cartCollection->contains('id', $candidate->id))
                                <a href="{{ route('cart.show') }}" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium btn-warning mb-3">Ir para o bilhete</a>
                            @else
                                <form name="addtocart-form" method="post" action="{{ route('cart.add', ['candidateId' => $candidate->id]) }}" id="myForm" class="submitForm">
                                    @csrf
                                    <button type="submit" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium" data-aside="cartDrawer" title="Add To Cart">Adicionar ao bilhete</button>
                                </form>
                            @endif
                        </div>

                        <div class="pc__info position-relative">
                            <h6 class="pc__title"><a href="{{-- route('shop.candidate.show', ['candidate_slug' => $candidate->slug]) --}}">{{ $candidate->short_name }}</a></h6>
                            <p class="pc__category">{{ $candidate->party->name }}</p>
                            <div class="product-card__price d-flex">
                                <span class="money price">{{ $candidate->number }}</span>
                            </div>

                            <div class="product-card__review d-flex align-items-center">
                                {{-- <div class="reviews-group d-flex">
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                                    <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                                </div> --}}
                                @if($candidate->status == 1)
                                    <span class="badge bg-danger">Concorrendo</span>
                                @else
                                    <span class="badge bg-danger">Indeferido</span>
                                @endif
                            </div>

                            {{-- @if(Cart::instance('wishlist')->content()->where('id', $candidate->id)->count() > 0) --}}
                            <form method="POST" action="{{-- route('wishlist.item.remove', ['rowId'=>Cart::instance('wishlist')->content()->where('id', $candidate->id)->first()->rowId]) --}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist filled-heart" title="Remover da lista de desejos">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                </button>
                            </form>
                            {{-- @else --}}
                            
                            <form method="POST" action="{{-- route('wishlist.add') --}}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $candidate->id }}" />
                                <input type="hidden" name="name" value="{{ $candidate->short_name }}" />
                                <input type="hidden" name="price" value="{{ $candidate->sale_price == '' ? $candidate->regular_price : $candidate->sale_price }}" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="number" value="{{ $candidate->number }}" />
                                <input type="hidden" name="party_id" value="{{ $candidate->party->name }}" />
                                <input type="hidden" name="short_name" value="{{ $candidate->short_name }}" />
                                <button type="submit" class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Adicionar a lista de desejos">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                                </button>
                            </form>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="divider"></div>
            <div class="flex items-center justify-between flex-wrap gap10 wg-pagination">
                {{ $candidates->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
            @endif
        </div>
    </section>
</main>

<form id="frmfilter" method="GET" accept="{{-- route('shop.index') --}}">
    <input type="hidden" name="page" value="{{ $candidates->currentPage() }}" />
    <input type="hidden" name="size" id="size" value="{{ $size }}" />
    <input type="hidden" name="order" id="order" value="{{ $order }}" />
    <input type="hidden" name="cities" id="hdnCities" />
    <input type="hidden" name="parties" id="hdnParties" />
    <input type="hidden" name="min" id="hdnMinPrice" value="{{ $min_price }}"/>
    <input type="hidden" name="max" id="hdnMaxPrice" value="{{ $max_price }}"/>
</form>

@endsection

@push('scripts')
    <script>
        $(function() {
            $("#pagesize").on("change", function(){
                $("#size").val($("#pagesize option:selected").val());
                $("#frmfilter").submit();
            });

            $("#orderby").on("change", function(){
                $("#order").val($("#orderby option:selected").val());
                $("#frmfilter").submit();
            });
            
            $("input[name='cities']").on("change", function(){
                var cities = "";
                $("input[name='cities']:checked").each(function(){
                  if(cities == "")  
                  {
                    cities += $(this).val();
                  }
                  else
                  {
                    cities += "," + $(this).val();
                  }
                });
                $("#hdnCities").val(cities);
                $("#frmfilter").submit();
            });

            $("input[name='parties']").on("change", function(){
                var parties = "";
                $("input[name='parties']:checked").each(function(){
                  if(parties == "")  
                  {
                    parties += $(this).val();
                  }
                  else
                  {
                    parties += "," + $(this).val();
                  }
                });
                $("#hdnParties").val(parties);
                $("#frmfilter").submit();
            });

            $("[name='price_range']").on("change", function(){
                var min = $(this).val().split(',')[0];
                var max = $(this).val().split(',')[1];
                $("#hdnMinPrice").val(min);
                $("#hdnMaxPrice").val(max);
                setTimeout(() => {
                    $("#frmfilter").submit();
                }, 2000);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Seleciona todos os formulários na página
            var forms = document.querySelectorAll('.submitForm');
            var isSubmitting = false; // Controle de bloqueio de submissão

            forms.forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    if (isSubmitting) {
                        e.preventDefault(); // Impede a submissão se já houver um formulário sendo enviado
                        return;
                    }

                    isSubmitting = true; // Bloqueia submissões subsequentes
                    var submitBtn = form.querySelector('.submitBtn');
                    submitBtn.disabled = true; // Desativa o botão de envio do formulário atual
                    submitBtn.innerText = 'Enviando...'; // Feedback visual

                    // Simula um tempo de processamento (ou aguarda resposta do servidor)
                    setTimeout(function() {
                        submitBtn.disabled = false;
                        submitBtn.innerText = 'Enviar';
                        isSubmitting = false; // Libera para o próximo formulário após 2 segundos
                    }, 1000);
                });
            });
        });
        
    </script>
@endpush