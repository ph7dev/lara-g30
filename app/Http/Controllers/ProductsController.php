<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductsController extends Controller
{
    public function index(int $brandId)
    {
        $products = DB::select("SELECT * FROM products WHERE brand_id = :brand_id AND status='ENABLED'", [
            ':brand_id' => $brandId
        ]);
        $brand = DB::selectOne('SELECT * FROM brands WHERE id = :id', [':id' => $brandId]);

        return view('products', ['products' => $products, 'brand' => $brand]);
    }

    public function details(int $id)
    {
        $product = DB::selectOne('SELECT * FROM products WHERE id = :id', [':id' => $id]);
        if (empty($product)) {
            throw new NotFoundHttpException();
        }
        $brand = DB::selectOne('SELECT * FROM brands WHERE id = :id', [':id' => $product->brand_id]);
        return view('details', ['product' => $product, 'brand' => $brand]);
    }
}
