<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Email;
use App\Models\User;


class AdminController extends Controller
{
    public function collection()
    {
        return view('admin.collection');
    }

    public function uploadcollection(Request $request)
    {
        $data=new collection;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('imagecollection',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->discount=$request->discount;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Collection Added!');
    }


    public function showcollection()
    {
        $data=collection::all();
        return view('admin.showcollection', compact('data'));
    }


    public function deletecollection($id)
    {
        $data=collection::find($id);
        $data->delete();
        return redirect()->back()->with('message','Collection Deleted!');
    }


    public function updatecollection($id)
    {
        $data=collection::find($id);
        return view('admin.updatecollection',compact('data'));
    }

    public function updatecollections(Request $request, $id)
    {
        $data=collection::find($id);
        $image=$request->file;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('imagecollection',$imagename);

            $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->discount=$request->discount;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        
        return redirect()->back()->with('message','Collection Updated!');
    }



    public function showcontactus()
    {
        $data=email::all();
        return view('admin.showcontactus', compact('data'));
    }


    public function deletecontactus($id)
    {
        $data=email::find($id);
        $data->delete();
        return redirect()->back()->with('message','Collection Deleted!');
    }



    public function showuser()
    {
        $data=user::all();
        return view('admin.showuser', compact('data'));
    }

    public function updateuser($id)
    {
        $data=user::find($id);
        return view('admin.updateuser',compact('data'));
    }

    public function updateusers(Request $request, $id)
    {
        $data=user::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->usertype=$request->usertype;
        $data->phone=$request->phone;
        $data->address=$request->address;

        $data->save();

        
        return redirect()->back()->with('message','User Updated!');
    }


    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back()->with('message','User Deleted!');
    }
}
