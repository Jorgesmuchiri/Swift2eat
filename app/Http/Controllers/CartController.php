<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function cart()
    {
        return view('cart.cart');
    }

    // public function add_to_cart($product_id, $vendor_id) {
    //     // $request->validate([

    //     // ]);
    //     // dd($product_id, $vendor_id);
    //     $cart = new Cart;

    //     $cart->product_id = $product_id;
    //     $cart->user_id = Auth::id();
    //     $cart->vendor_id = $vendor_id;
    //     $cart->quantity = 1;

    //     try {
    //         $cart->save();

    //         return back()-> withSuccess('Product added to cart successfully');
    //     } catch (\Illuminate\Database\QueryException $e) {
    //         return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    //     }
    // }

    public function remove_from_cart($id) {
        if ($id) {
            $cart = session()->get('cart');

            if (isset($cart[$id])) {
                unset($cart[$id]);

                session()->put('cart', $cart);
            }

            // session()->flash('success', 'Product removed successfully');
            return redirect()->back()->with('success', 'Product removed from the cart successfully!');

        }
        // $product = Cart::whereproduct_id($id)->first();

        // // dd($product);

        // try {
        //     $product->delete();

        //     return back()-> withSuccess('Product added to cart successfully');
        // } catch (\Illuminate\Database\QueryException $e) {
        //     return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        // }
    }

    public function checkout() {
        if (!Auth::id()) {
            dd("Please log in");
        }
        return view('checkout.checkout');
    }

    public function add_to_cart($id, $vend_id)
    {
        $product = Products::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "prod_id"=>$product->id,
                    "vendor_id" => $vend_id,
                    "name" => $product->product_name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->image
                ]

            ];

            session()->put('cart', $cart);

            // $htmlCart = view('cart._header_cart')->render();

            // return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $htmlCart]);

            // return redirect()->route('store');
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            // $htmlCart = view('cart._header_cart')->render();

            // return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $htmlCart]);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "prod_id"=>$product->id,
            "vendor_id" => $vend_id,
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->image
        ];

        session()->put('cart', $cart);

        // $htmlCart = view('cart._header_cart')->render();

        // return response()->json(['msg' => 'Product added to cart successfully!', 'data' => $htmlCart]);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            $subTotal = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];

            $total = $this->getCartTotal();

            // $htmlCart = view('cart._header_cart')->render();

             session()->flash('success', 'Cart updated successfully');
            return response()->json(['msg' => 'Cart updated successfully','total' => $total, 'subTotal' => $subTotal]);


        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            $total = $this->getCartTotal();

            // $htmlCart = view('cart._header_cart')->render();

            session()->flash('success', 'Product removed successfully');
            return response()->json(['msg' => 'Product removed successfully','total' => $total]);


        }
    }


    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    private function getCartTotal()
    {
       $total = 0;
        $cart = session()->get('cart');
        if (!$cart)
        {
            return 0;
        }
        else
        {
        foreach($cart as $id => $details)
        {
            $total += $details['price'] * $details['quantity'];
        }

        return number_format($total);
        }
    }
}
