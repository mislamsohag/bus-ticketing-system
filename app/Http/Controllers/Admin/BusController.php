<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BusController extends Controller
{
    // Product Show
    function Buses(){
       $buses=Bus::get();

        // dd($bus);
        return view('Backend.Pages.Management.buses',compact('buses'));
    }


    // Single Product Details
   function BusDetails($id){
     $bus=Bus::where('id',$id)->first();

        // dd($bus);

        return view('Backend.Pages.Management.bus-details', compact('bus'));
    } 

    public function updateShow($id){        
        $bus=Bus::findOrFail($id);
        // dd($product);
        return view('Backend.Pages.Management.bus-update', compact('bus'));
    }
    public function BusUpdate(Request $request, $id){
        // dd($request->all()); 
        
        /*  $request->validate([                      
            'title'=>'requird|string',
            'short_desc'=>'nullable|string',
            'price'=>'requird',
            'discount'=>'requird',
            'discount_price'=>'requird',
            'image'=>'image|mimes:png,jpg,jpeg,svg,gif',
            'stock'=>'requird',
            'star'=>'requird',
            'remark'=>'requird',           
        ]); */
    
        // Image Upload
        
        /* if($request->hasFile('image')){
            $image=$request->file('image');
            $fileNameToStore='image-'.md5(uniqid()).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'),$fileNameToStore);
        } */
    
        //Update Data to Products table
       /*  DB::table('products')->where('id', $id)->update([
            'title'=>$request->title,
            'short_desc'=>$request->short_desc,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'discount_price'=>$request->discount_price,
            'image'=>'assets/images/products/'.$fileNameToStore,
            'stock'=>$request->stock,
            'star'=>$request->star,
            'remark'=>$request->remark,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id
        ]); */
        return redirect('admin/buses')->with('success', 'Product Upload Success!');
          
        } 
    

    // Single Product Delete/Destroy
    /* function Destroy($id){
        // $product = DB::table('products')->where('id', $id)->first();
        $product=DB::table('products')->where('id', $id)->first();
        $imageRemove=unlink(public_path($product->image));
        if($imageRemove){
            DB::table('products')->where('id',$id)->delete();
            return redirect()->back()->with('success', 'Album Deleted Successfully');
        }
        return redirect()->back();
    } */
}
