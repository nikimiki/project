
@extends('layout')
@section('content')
<section>
    <div id="sectionCenter">
            @foreach($products as $product)
            @section('title') {{ $product->name }} @endsection
            <h3>{{ $product->name }}</h3>
            <div id="productDetail">
                <div id="bigImage">
                    <img src="{{ $product->image }}" alt="{{ $product->name }} Resmi"/>
                </div>
                <div id="prdDtlRight">
                     <h4>{{ $product->name }}</h4>
                     <div class="infRow">
                         <p>Kategori</p><p>{{ $product->category }}</p>
                     </div>
                     <div class="infRow">
                         <p>Marka</p><p>{{ $product->brandName }}</p>
                     </div>
                     <div class="infRow">
                         <p>Stok Durumu</p><p>
                         @if($product->stock > 0)
                            Stokta var
                         @else
                            Stokta yok
                         @endif
                         </p>
                     </div>
                     <div class="infRow">
                         <p>Fiyat</p><p><b>{{ $product->price }} ₺</b></p>
                     </div>
                     <div class="infRow">
                            @if($product->stock > 0)
                             <a href="{{ route('product.sepeteEkle', ['id' => $product->id]) }}" class="addBasket">SEPETE EKLE</a>
                            @else
                            <div class="noStockV">STOK YOK</div>
                            @endif

                     </div>
                 </div>
            </div>
            @endforeach
    </div>
</section>
@endsection