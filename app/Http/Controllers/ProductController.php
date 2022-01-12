<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\view\products\book;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
   public function input(Request $request)
   {
       $productResponse = $this->productValidation($request);

       Product::create($productResponse);             //mass assignment:
        return back();

   }

    public function productValidation(Request $request){
        $productResponse = $request->validate([
            'type' => ['required', 'max:255'],
            'firstname' => ['required', 'max:255'],
            'mainname' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'numpages' => ['required', 'min:0'],
            'price' => ['required', 'min:0'],
        ]);

        return  $productResponse;
    }

    public function showBookproduct()
    {
        $products = DB::table('product')
            ->where('type','Book')
            ->paginate(5);

            return view('products/book', [
            'product' => $products
            ]);


    }

    public function showCDproduct()
    {
        $products = DB::table('product')
            ->where('type','CD')
            ->paginate(5);

        return view('products/cd', [
            'product' => $products
        ]);


    }

    public function showGameproduct()
    {
        $products = DB::table('product')
            ->where('type','Game')
            ->paginate(5);

        return view('products/game', [
            'product' => $products
        ]);

    }

    public function updateProductform(Product $product)
    {

        return view('products.updateProduct', [
            'product' => $product
        ]);
    }
    public function updateProduct(Request $request, Product $product)
    {
        $updatedProduct = $this->productValidation($request);
        Product::where('id',$product->id)->update($updatedProduct);
        if ($product->type=='CD'){
            return redirect('/products/cd');
        }
        elseif ($product->type=='Game'){
            return redirect('/products/game');
        }
        return redirect('/products/book');
    }

    public function deleteProduct(Product $product)
    {
        Product::where('id',$product->id)->delete();
        if ($product->type=='CD'){
            return redirect('/products/cd');
        }
        elseif ($product->type=='Game'){
            return redirect('/products/game');
        }
        return redirect('/products/book');
    }
}
