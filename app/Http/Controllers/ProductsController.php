<?php

namespace App\Http\Controllers;

use App\ProductUpload;
use App\Products;
use App\Sepet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ProductsController extends Controller {
    public function __construct() {
        $this->middleware('xml');
    }
    public function home() {
        $products = Products::all();
        return view('products', array('urunliste'=>$products));
    }

    public function productDetail($id) {
        $products = DB::table('products')->where('id', $id)->get();
        return view('product', compact('products'));
    }

    public function sepeteEkle(Request $request, $id) {
        $urun = Products::find($id);
        $hafiza = Session::has('sepet') ? Session::get('sepet') : null;
        $sepet = new Sepet($hafiza);
        $sepet->ekle($urun, $urun->id);

        $request->session()->put('sepet', $sepet);
        return redirect()->back();
    }

    public function upload() {
        return view('product-upload');
    }

    public function productUploadSend(Request $request) {
        $use_errors = libxml_use_internal_errors(true);
        $xml = simplexml_load_file($request->xml);
        if (false === $xml) {
            echo 'calismadi';
        } else {

            function xml2array ($xmlObject, $out = array ()) {
                foreach ((array) $xmlObject as $index => $node) {
                    $out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;
                }
                return $out;
            }

            foreach($xml->product as $item) {

                $simple_single = simplexml_load_string($item->description);
                $single_array = xml2array($simple_single);

                /*
                $productId = $item->id;
                $name = $item->name;
                $description = $single_array[0];
                $brandId = $item->brandId;
                $brandName = $item->brandName;
                $categoryId = $item->categoryId;
                $categoryName = $item->categoryName;
                $sku = $item->sku;
                $stock = $item->stock;
                $tax = $item->tax;
                $category = $item->categories->category;
                $image = $item->images->image;
                $price = $item->price;
                $priceNot = $item->priceNot;
                */

                $items = [
                    'productId' => $item->id,
                    'name' => $item->name,
                    'description' => $single_array[0],
                    'brandId' => $item->brandId,
                    'brandName' => $item->brandName,
                    'categoryId' => $item->categoryId,
                    'categoryName' => $item->categoryName,
                    'sku' => $item->sku,
                    'stock' => $item->stock,
                    'tax' => $item->tax,
                    'category' => $item->categories->category,
                    'image' => $item->images->image,
                    'price' => $item->price,
                    'priceNot' => $item->priceNot
                ];

                ProductUpload::create($items);
            }
        }
        libxml_clear_errors();
        libxml_use_internal_errors($use_errors);

        return redirect()->route('products')->with('success','Ürünler başarıyla yüklendi.');
    }
} 