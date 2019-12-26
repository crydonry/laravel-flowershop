<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;
use App\Flower;
use App\Repositories\FlowerRepository;

class FlowerController extends Controller
{
    /**
     * The flower repository instance.
     *
     * @var FlowerRepository
     */
    protected $flowers;

    /**
     * Create a new controller instance.
     *
     * @param  FlowerRepository  $flowers
     * @return void
     */
    public function __construct(FlowerRepository $flowers)
    {
        $this->middleware('auth');

        $this->flowers = $flowers;
    }

    /**
     * Display a list of all of the user's flower.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('flowers.addflower', [
            'flowers' => $this->flowers->forUser($request->user()),
        ]);
    }

    /**
     * Create a new flower.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|max:255',
            'name' => 'required|max:255',
            'detail' => 'required|max:255',
            'deliver_status' => 'required|max:255',
            'price' => 'required|max:255',
            'product_type' => 'required|max:255',
            'occasion' => 'required|max:255',
            'color' => 'required|max:255',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->hasfile('images')){
            $images=array();
            if($files=$request->file('images')){
                foreach($files as $file){
                    $name=rand(100000000,999999999) . '.' .$file->getClientOriginalExtension();

                    $image_resize = Image::make($file->getRealPath());              
                    $image_resize->resize(1200, 1480);
                    $image_resize->save(public_path('images/product/' .$name));

                    //$file->move('public/images/product/',$name);
                    $images[]=$name;
                }
            }
        $request->user()->flowers()->create([
                'product_id' => $request->product_id,
                'name' => $request->name,
                'detail' => $request->detail,
                'deliver_status' => $request->deliver_status,
                'price' => $request->price,
                'product_type' => $request->product_type,
                'occasion' => $request->occasion,
                'color' => $request->color,
                'images'=>  implode($images),
        ]);
        }else{
            $request->user()->flowers()->create([
                'product_id' => $request->product_id,
                'name' => $request->name,
                'detail' => $request->detail,
                'deliver_status' => $request->deliver_status,
                'price' => $request->price,
                'product_type' => $request->product_type,
                'occasion' => $request->occasion,
                'color' => $request->color,
            ]);
        }     
            return redirect('/flowers')->with('add','Post has been add successfully')->with('add','Post has been add successfully');
        }


    /**
     * Destroy the given flower.
     *
     * @param  Request  $request
     * @param  Flower  $flower
     * @return Response
     */
    public function destroy(Request $request, Flower $flower)
    {
        for ($x = 0; $x < strlen($flower->images); $x = $x + 13) {
            $name = substr($flower->images, $x,13);
            $path = "public/images/product/". $name;
            unlink($path);
        }
        $this->authorize('destroy', $flower);

        $flower->delete();

        return redirect('/flowers')->with('delete','Post has been delete successfully');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Flower $flower)
    {
        return view('flowers.editflower',compact('flower'));
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Flower $flower)
    { 
        $this->validate($request, [
            'product_id' => 'required|max:255',
            'name' => 'required|max:255',
            'detail' => 'required|max:255',
            'deliver_status' => 'required|max:255',
            'price' => 'required|max:255',
            'product_type' => 'required|max:255',
            'occasion' => 'required|max:255',
            'color' => 'required|max:255',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('images')){
            for ($x = 0; $x < strlen($flower->images); $x = $x + 13) {
                $name = substr($flower->images, $x,13);
                $path = "public/images/product/". $name;
                unlink($path);
            }
            $images=array();
            if($files=$request->file('images')){
                foreach($files as $file){
                    $name=rand(100000000,999999999) . '.' .$file->getClientOriginalExtension();

                    $image_resize = Image::make($file->getRealPath());              
                    $image_resize->resize(1200, 1480);
                    $image_resize->save(public_path('images/product/' .$name));

                    //$file->move('public/images/product',$name);
                    $images[]=$name;
                }
            }
        $flower->product_id = $request->product_id;
        $flower->name = $request->name;
        $flower->detail = $request->detail;
        $flower->deliver_status = $request->deliver_status;
        $flower->price = $request->price;
        $flower->product_type = $request->product_type;
        $flower->occasion = $request->occasion;
        $flower->color = $request->color;
        $flower->images = implode($images);
        $flower->save();
        }else{
        $flower->product_id = $request->product_id;
        $flower->name = $request->name;
        $flower->detail = $request->detail;
        $flower->deliver_status = $request->deliver_status;
        $flower->price = $request->price;
        $flower->product_type = $request->product_type;
        $flower->occasion = $request->occasion;
        $flower->color = $request->color;
        $flower->save();
        }
        
        

        return redirect('/flowers')->with('success','Post has been updated successfully');

    }

    
}