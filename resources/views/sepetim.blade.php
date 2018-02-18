
@extends('layout')
@section('title')
    Sepetim
@endsection
@section('content')
<section>
    <div id="sectionCenter">
        <h3>SEPETİM</h3>

        <div class="sepetTitleLine">
            <div class="sepetTitleRow"></div>
            <div class="sepetTitleRow">Ürün Adı</div>
            <div class="sepetTitleRow">Kategori</div>
            <div class="sepetTitleRow">Adet</div>
            <div class="sepetTitleRow">Fiyat</div>
            <div class="sepetTitleRow">Toplam Fiyat</div>
            <div class="sepetTitleRow"></div>
        </div>
        @if(Session::has('sepet'))

            @foreach($urunler as $urun)
                <div class="sepetLine">
                    <img src="{{ $urun['urun']['image'] }}" class="sptImg" alt="Product Name"/>
                    <div class="sptName">{{ $urun['urun']['name'] }}</div>
                    <div class="sptCategory">{{ $urun['urun']['category'] }}</div>
                    <div class="sptNumber">
                        <form action="{{ route('sepetim.sepetGuncelle', ['id' => $urun['urun']['id']]) }}" method="post">
                        <input type="number" name="adet" value="{{ $urun['adet'] }}" min="1" class="sptQuantity"/>
                        {{ csrf_field() }}
                        <button class="updtBtn" type="submit"><img src="{{ URL::to('img/reload.png') }}" alt=""/></button>
                        </form>
                    </div>
                    <div class="sptPrice">{{ $urun['urun']['price'] }} ₺</div>
                    <div class="sptPriceTotal">{{ $urun['adet']*$urun['urun']['price'] }} ₺</div>
                    <div class="sptRemove">
                        <a href="{{ route('sepetim.sepetUrunSil', ['id' => $urun['urun']['id']]) }}"><img src="{{ URL::to('img/remove.png') }}" class="sptRemIcon" alt="Remove"/></a>
                </div>
            @endforeach
                <div class="sepetLine sptLnTotalPrice">
                    <div id="subTotal">
                        Ara Toplam: {{ number_format($toplamFiyat, 2, ',', '.') }} ₺<br/>
                        Toplam (KDV): {{ number_format((($toplamFiyat * 18) / 100) + $toplamFiyat, 2, ',', '.') }} ₺
                    </div>
                </div>
        @else
            <div class="sepetLine">
                <div id="subTotal">
                    <p>TOPLAM</p> <p>0,00 ₺</p>
                </div>
            </div>
        @endif

    </div>
</section>
@endsection