<?php

namespace App\Http\Controllers;
use App\Events\UserPush;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Collection;
use App\Models\email;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $data = collection::paginate(5);
            return view('home', compact('data'));
            return view('ourcollection', compact('data'));
        }
    }


    public function index()
    {
        if(Auth::id())

        {
            return redirect('redirect');
        }

        else
        {
            $data = collection::paginate(5);
            return view('home', compact('data'));
            return view('ourcollection', compact('data'));
        }
    }

    public function ourcollection()
    {

            $data = collection::all();
            return view('ourcollection', compact('data'));
        
    }

    
    public function search(Request $request)
    {
        $search=$request->search;

        $data=collection::where('title','Like','%'.$search.'%')->get();

        return view('ourcollection', compact('data'));
    }


    public function detail($id)
    {
        $data=collection::find($id);
        return view('detail',compact('data'));
    }


    public function uploademail(Request $request)
    {
        $data=new email();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;

        $data->save();

        event(new userpush($data->name)); 

    }
}
