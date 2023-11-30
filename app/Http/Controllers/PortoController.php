<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function index(){
        return view('app.profile');
    }

    public function work(){
        return view('app.work');
    }

    public function forms(){
        return view('app.forms');
    }

    public function submit(PostRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validate(PostRequest::rules());
    
        // Create a new Post instance
        $post = new Post();
    
        // Fill the Post instance with the validated data
        $post->nama = $validatedData['nama'];
        $post->email = $validatedData['email'];
        $post->komen = $validatedData['komen'];
    
        // Save the Post instance to the database
        $post->save();
    
        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')
            ->with('Success', 'Pesan Berhasil Terkirim');
    }

    public function message(){
        if (session('nama')||session('email')||session('komen')) {
            return view('dashboard.dashbord'); // Tampilkan pesan
        }

        // Jika tidak, arahkan kembali ke formulir
        return redirect()->route('forms');
    }

    public function dashboard(){
        $posts = Post::all();
        return view('dashboard.dashbord', ["posts"=>$posts]);
    }

}
