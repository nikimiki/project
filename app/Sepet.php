<?php

namespace App;

class Sepet {
    public $urunler;
    public $toplamUrun = 0;
    public $toplamFiyat = 0;

    public function __construct($sepet) {
        if($sepet) {
            $this->urunler = $sepet->urunler;
            $this->toplamUrun = $sepet->toplamUrun;
            $this->toplamFiyat = $sepet->toplamFiyat;
        }
    }

    public function ekle($urun, $id) {
        $hafiza = ['adet' => 0, 'fiyat' => $urun->price, 'urun' => $urun];
        if($this->urunler) {
            if(array_key_exists($id, $this->urunler)) {
                $hafiza = $this->urunler[$id];
            }
        }
        $hafiza['adet']++;
        $hafiza['fiyat'] = $urun->price * $hafiza['adet'];
        $this->urunler[$id] = $hafiza;
        $this->toplamUrun++;
        $this->toplamFiyat += $urun->price;
    }

    public function sil($id) {
        $product = session()->get('sepet', $id);
        unset($product->urunler[$id]);
        $hafiza = $this->urunler;
        return $hafiza;
    }

    public function guncelle($urun, $id) {
        $hafiza = ['adet'];
    }
}