<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Comment;

class UserController extends Controller
{
    public function uploadAvatar(Request $request){
        // if($request->hasFile('image')){
        //     $filename = $request->image->getClientOriginalName();
        //     $this->deleteOldImage();
        //     $request->image->storeAs('images',$filename, 'public');
        //     //User::find(1)->update(['avatar' => $filename]);
        //     //var_dump('anges');
        //     auth()->user()->update(['avatar' => $filename]);
        //     //var_dump('despues');
        // }
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            //session()->put('message', 'Image Uploaded.');
            //$request->session()->flash('message', 'Image Uploaded.');
            //return redirect()->back();
            return redirect()->back()->with('message', 'Image Uploaded.');
        }
        //$request->session()->flash('error', 'Image not Uploaded.');
        //return redirect()->back();
        return redirect()->back()->with('error', 'Image not Uploaded.');

    }



    public function index()
    {
        // DB::insert('insert into users (name, email, password) values (?,?,?)' , [
        //     'byron', 'bgva@yahoo.com', '123456'
        // ]);
        // $users = DB::select('select * from users');
        // return $users;
        //DB::update('update users set name = ? where id = 1', ['bitfumes1']);
        // DB::update('update users set name = ? where id = ?', ['bitfumes2',1]);
        // $users = DB::select('select * from users');
        // return $users;

        //$user = new User();
        //var_dump($user);
        //dd($user);
        // $user->name = 'byronValdivieso';
        // $user->email = 'b@hotmail.com';
        // $user->password = 'byron';
        // $user->save();

        // $data = [
        //     'name' => 'Elon',
        //     'email' => 'elon@hotmail.com',
        //     'password' => 'password',
        // ];
        // User::create($data);

        // $userDos = User::all();
        // return $userDos;
        $phone = User::find(1)->address;
        return $phone;


        return view ('home');
    }

    public function indexcomments(){
        $comments = User::find(1)->comments;
        return $comments;
    }

    public function usuariosPorComentario(){
        $comment = Comment::find(1);
        return $comment->user;
    }

    public function rolesPorUsuario(){
        $user = User::find(1);

        foreach ($user->roles as $role) {
            echo $role->name;
        }
    }
}
