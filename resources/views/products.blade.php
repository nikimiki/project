
@extends('layout')
@section('title')
    Ürünler
@endsection
@section('content')
<section>
    <div id="sectionCenter">
        <h3>ÜRÜNLER</h3>

           @foreach($urunliste as $urun)
           <div class="productArea">
                <a href="{{ URL('product/'.$urun->id) }}"><img src="{{ $urun->image }}" class="prImg" alt="{{ $urun->name }} Resmi"/></a>
                <p class="prName">{{ $urun->name }}</p>
                <p class="prPrice">{{ $urun->price }} ₺</p>
                @if($urun->stock > 0)
                    <a href="{{ route('product.sepeteEkle', ['id' => $urun->id]) }}" class="addProduct">SEPETE EKLE</a>
                @else
                    <div class="noStockV">STOK YOK</div>
                @endif
           </div>
           @endforeach

    </div>
</section>
@endsection