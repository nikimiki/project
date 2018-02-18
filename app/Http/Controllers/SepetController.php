<?php

namespace App\Http\Controllers;


use App\Products;
use App\Sepet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SepetController {

    public function home() {
        if(!Session::has('sepet')) {
            return view('sepetim', ['urunler' => null]);
        }
        $hafiza = Session::get('sepet');
        $sepet = new Sepet($hafiza);
        return view('sepetim', ['urunler' => $sepet->urunler, 'toplamFiyat' => $sepet->toplamFiyat]);
    }

    public function sepetUrunSil(Request $request, $id) {
        $urunler = $request->session()->get('sepet', $id);

        $fiyat = $urunler->urunler[$id]['urun']->price;
        $adet = $urunler->urunler[$id]['adet'];

        $yeniFiyat = $urunler->toplamFiyat - ($fiyat * $adet);
        $urunler->toplamFiyat = $yeniFiyat;
        $urunler->toplamUrun = ($urunler->toplamUrun) - ($adet);

        unset($urunler->urunler[$id]);
        return redirect()->back();
    }

    public static function sepetUrunGuncelle(Request $request, $id) {
        $urun = $request->session()->get('sepet', $id);

        $eskiFiyat = $urun->urunler[$id]['urun']->price * $urun->urunler[$id]['adet'];
        $yeniFiyat = $urun->urunler[$id]['urun']->price * $request->adet;
        $urun->toplamFiyat;
        $dgrFiyat = $urun->toplamFiyat - $eskiFiyat;

        $yeniTplFiyat = $yeniFiyat + $dgrFiyat;

        $urun->toplamFiyat = $yeniTplFiyat;
        $urun->urunler[$id]['adet'] = $request->adet;

        $adets = array_column($urun->urunler, 'adet');
        $yeniTplUrun = array_sum($adets);
        $urun->toplamUrun = $yeniTplUrun;

        return redirect()->back();
    }
} 