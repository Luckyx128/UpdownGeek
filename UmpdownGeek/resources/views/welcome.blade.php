@extends('Layouts.Main')

@section('title', 'Updown Geek')

@section('content')
<div class="corpo" >
<section class="Bemvindo">
    <div>
    <h1>Bem vindos a</h1>
    <h2>Updown Geek</h2>
    </div>
    <button class="Home" > Começar aventura </button>
</section>    
    <div class="container2">
        <div class="image-container">
            <img src="img/shopping.png" alt="">
        <div class="product_detail_container">
            <h2>Produto</h2>
            <details>
                <summary>Descrição do produto</summary>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet itaque, praesentium provident natus numquam suscipit.</p>
            </details>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="color_and_price">
                <div class="color_container">
                    <p>Cores:</p>
                    <div class="red"></div>
                    <div class="blue"></div>
                    <div class="green"></div>
                </div>
                <div class="price">
                    <p> R$: 50,00 </p>
                </div>
            </div>
            <button class="Card">Adicinar ao carrinho</button>
        </div>
    </div>
</div>


@endsection