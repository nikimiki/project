<html>
<head>
    <title>@yield('title') Project</title>
    <link rel="stylesheet" href="{{ URL::to('css/header.css') }}"/>
</head>
<body>
    <header>
        <ul id="topButtons">
            <li><a href="{{ url('/') }}">ANASAYFA</a></li>
            <li><a href="{{ url('products') }}">ÜRÜNLER</a></li>
            <li><a href="{{ url('sepetim') }}">SEPETİM</a></li>
            <li><a href="{{ url('product-upload') }}">ÜRÜN YÜKLEME</a></li>
        </ul>
        <div id="sepetBox">
            <p>SEPETİM</p>
            <img src="{{ URL::to('img/sepet.png') }}" id="sptIcon" alt="Sepet Icon"/>
            <div class="sptAdet">{{ Session::has('sepet') ? Session::get('sepet')->toplamUrun : '0' }}</div>
        </div>
    </header>
    @yield('content')

</body>
</html>