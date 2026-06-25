<?php

use App\Http\Controllers\ProfileController;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register_user', function(){
    return view('register_user');
});

Route::get('/tailwind', function(){
    return view('tailwind');
});

Route::get('/livewire', function(){
    $data = [
        'name' => 'Pratik',
        'title' => 'Live',
        'header' => 'check',
        'btn' => 'nbtn'
    ];
    return view('dynamic-view', compact('data'));
});

Route::post('validate-register', function(Request $request){

    // dump($request->all());
    $request->validate([
        'email' => 'required|email|max:50',
        'password' => 'required|min:8'
    ]);

    $user = User::create([
        'name' => 'Pratik Auth',
        'email' => $request->email,
        'password' => $request->password
    ]);

    Auth::login($user);
    return redirect()->route('dashboard');

})->name('validate_register');

Route::get('/database1', function(Request $request){
        $post = Post::findOrFail(1);
        // dump($post);
        return new PostResource($post);
        // dump(new PostResource($post));
        //     // ->where(function(Builder $query){
        //     //     return $query->where('content', 'like', '%Deleniti%');
        //     // })
        //     withCount('posts')
        //     ->find(8)
        //     );

        // dump($request->user()->id);
        // dump($request->user()->latest_post()->first()->meta);
        // dump(Post::whereBelongsTo(User::where('id', $request->user()->id))->get());
        // dump($request->user()->post->get());
        // dump($request->user()->posts()->where('content', 'like', '%Deleniti cum tempora quae cumque dolori%')->get());
    
    
        // $user = User::all()->reject(function($user){
        //     return $user->name == 'Pratik';
        // })->map(function($user){
        //     return $user->name;
        // });

        // User::find(1, 'id')->dump();
        // $file = DB::table('posts')
        //         ->paginate(15);

        // dump($page);
        // return view('paginate', compact('file'));

        // foreach($user as $u){
        //     dump($u->email);
        // };

        // foreach(User::lazy(4) as $task){
        //     dump($task);
        // };
        // dump(User::where('id', 8)->get()->load('posts','passport'));
        // dump(User::with('posts','passport')->get());

        // $add = User::create([
        //     'name' => 'Pratik',
        //     'email' => 'pratik6677877g@example.com',
        //     'password' => 'password'
        // ]);

        // dump($add->posts()->createMany([
        //     [
        //         'title' => 'New Post',
        //         'content' => 'This is the content of the new post.',
        //         'meta' => ['key' => 'value']
        //     ],
        //     [
        //         'title' => 'New Post2',
        //         'content' => 'This is the content of the new post2.',
        //         'meta' => ['key' => 'value']
        //     ],
        //     [
        //         'title' => 'New Post3',
        //         'content' => 'This is the content of the new post3.',
        //         'meta' => ['key' => 'value']
        //     ]
        // ]));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/database', function(Request $request){
        $user = $request->user();
        dump(User::find(8)->posts);
        // dump($request->user()->id);
        // dump($request->user()->latest_post()->first()->meta);
        // dump(Post::whereBelongsTo(User::where('id', $request->user()->id))->get());
        // dump($request->user()->post->get());
        // dump($request->user()->posts()->where('content', 'like', '%Deleniti cum tempora quae cumque dolori%')->get());
    });
});

require __DIR__.'/auth.php';
