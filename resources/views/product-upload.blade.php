
@extends('layout')
@section('title')
    Ürün Yükleme
@endsection
@section('content')
<section>
    <div id="sectionCenter">
        <h3>ÜRÜN YÜKLEME</h3>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
        	<button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <form action="product-upload-send" method="post" enctype="multipart/form-data">
            <input type="file" name="xml" class="xmlFile" required="required"/>
            {{ csrf_field() }}
            <button id="sendBtn">XML Yükle</button>
        </form>
    </div>
</section>
@endsection