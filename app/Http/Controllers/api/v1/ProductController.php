<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Filters\SomeFilter;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, SomeFilter $filters)
    {
        $q = $request->q;

       
        if (!is_null($q)) {
            $products = Product::sortable()
                                ->where('products.name', 'like', '%'.$q.'%')
                                ->where('products.deleted', '=', '0')
                                ->filter($filters)
                                ->paginate(5);

        } else {
            $products = Product::sortable()
                                ->where('products.name', 'like', '%'.$q.'%')
                                ->where('products.deleted', '=', '0')
                                ->filter($filters)
                                ->paginate(5);

        }

        return view('produtos.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->price = $this->coin($request->price);
        $product->quantity = 0;
        $product->save();

        return redirect('/')->with('msg','Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);


        return view('produtos.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);


        return view('produtos.edit', ['product' => $product]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['price'] = $this->coin($data['price']);
        Product::findOrFail($request->id)->update($data);

        return redirect('produtos')->with(['msg' => 'Produto Alterado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['deleted'] = 1;
        Product::findOrFail($request->id)->update($data);
        return redirect('produtos')->with(['msg' => 'Produto deletado com sucesso!']);
    }

    public function addQuantity($id){

        $product = Product::findOrFail($id);


        return view('produtos.addQuantity', ['product' => $product]);

    }

    public function updateQuantity(Request $request, $id){

        $data['quantity'] = $request->quantity + $request->newquantity;
        
        Product::findOrFail($request->id)->update($data);
        


        return redirect('produtos')->with(['msg' => 'Quantidade adicionada com sucesso!']);

    }

    private function coin($price) {
        $price = str_replace('.','', $price);
        $price = str_replace(',','.', $price);
        return $price;
    }



}
