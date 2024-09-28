<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductList(){

        $data['product'] = ProductModel::all();
        return view('product_list',$data);
    }

    // to oreder the product and also check the product is out of stock or not
    public function placeOrder(Request $request){

        // dd($request->all());
        $cartItems = $request->items;

        foreach ($cartItems as $productId => $quantity) {

            $product = ProductModel::find($productId);

            // Check stock availability
            if ($product->product_stock == 0) {
                return response()->json([
                    'error' => "Product {$product->product_name} is out of stock"
                ], 400);
            }elseif($product->product_stock < $quantity){
                return response()->json([
                    'error' => "{$product->product_name} Product is only {$product->product_stock} left"
                ], 400);
            }

            // Decrement stock
            $product->decrement('product_stock', $quantity);

        }

        return response()->json(['success' => 'Order placed successfully']);
    }

    //to reset the stock values
    public function updateStock(Request $request){

        $stock = $request->input('stock');
        $productId = $request->input('product_id');

        if ($productId === 'all') {
            // Update stock for all products
            ProductModel::query()->update(['product_stock' => $stock]);
            return response()->json(['success' => 'Stock updated for all products.']);
        } else {
            // Update stock for the selected product
            $product = ProductModel::find($productId);
            if ($product) {
                $product->product_stock = $stock;
                $product->save();
                return response()->json(['success' => "Stock updated for {$product->name}."]);
            } else {
                return response()->json(['error' => 'Product not found.'], 404);
            }
        }
    }
}
