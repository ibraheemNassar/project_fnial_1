<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Cartegory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ibraheemController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    // category
    public function all_categories(){
        $categories = Cartegory::all();
        return view('all_categories', compact('categories'));
    }
    public function create_category(){
        return view('create_category');
    }
    public function store(Request $request){
        $cartegory = new Cartegory;
        $cartegory->categoryName = $request->categoryN;
        $cartegory->save();
        return redirect()->back();
    }
    public function destroy($id){
        $cartegory = Cartegory::find($id);
        $cartegory->delete();
        return redirect('all_categories');
    }
    public function edit($id){
        $cartegory = Cartegory::find($id);
        return view('edit_category' , compact('cartegory'));
    }

    public function update(Request $request , $id){

        $cartegory = Cartegory::find($id);
        $cartegory->categoryName = $request->categoryN;
        $cartegory->save();
        return redirect('all_categories');
    }
    // product
    public function all_products(){
        $products = Product::all();

        return view('all_products' ,compact('products'));
    }



    public function create_product(){

        $cartegory = Cartegory::all();
        return view('create_Product' ,compact('cartegory'));
    }
    public function storePro(Request $request){
        $product = new Product;
        $product->proName = $request->productName;
        $product->proPrice = $request->productPrice;
        $product->proQuantity = $request->productQty;
        $product->car_id = $request->aa ;
        $product->save();
        return redirect()->back();
    }
    public function destroyPro($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('all_products');
    }
    public function editPro($id){
        $product = Product::find($id);
        return view('edit_product' , compact('product'));
    }

    public function updatePro(Request $request , $id){

        $product = Product::find($id);
        $product->proName = $request->productName;
        $product->proPrice = $request->productPrice;
        $product->proQuantity = $request->productQty;
        $product->car_id =  1 ;
        $product->save();
        return redirect('all_products');
    }


    public function add_order(){
        $products = Product::all();
        $cartegory = Cartegory::all();
        return view('create_order' ,compact('products','cartegory'));
    }

    public function Creat_order(){


    }
    // order
    public function storeOrd(Request $request ){
        $order = new Order;

        $order->pro_id = $request->b;
        $order->proQyt = $request->order_qty;
        $order->save();
        return redirect()->back();
        return view('create_order', compact('order'));
    }

    public function index()
    {
        $ordes = Order::all();
        $products = Product::all();

        $users = DB::table('users')->selectRaw('*')->where('id', '<>', 1)->get();
        if( $users != null)
        {
        return view('all-order' ,compact('ordes'));
        }
        else
        {
            return view('all_products' ,compact('products'));
        }
    }

}
