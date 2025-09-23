<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\users;
use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\categories;
use App\Models\contact;
use App\Models\newsteller;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{

    function homepage()
    {
        // fetch all by category {distinct}
        $posts = Post::orderBy('post.id', 'desc')->get();



        $trending = Post::select('post.id', 'post.image', 'post.title', 'post.content', 'post.created_at', DB::raw('COUNT(comments.id) as total_comments'))
            ->leftJoin('comments', 'post.id', '=', 'comments.post_id')
            ->groupBy('post.id', 'post.title', 'post.content', 'post.created_at', 'post.image')
            ->orderByDesc('total_comments')
            ->take(3)
            ->get();// fetching data from post and cemments using join jis post post kay comments zyada hain use fetch karo

        // return $trending;
        return view("welcome", ["posts_by_category" => $posts, "trending" => $trending]);
    }

    function category($id)
    {
        // Category id ke hisaab se posts fetch karo
        $category = categories::findOrFail($id);
        // return $category;
        $posts = Post::where('category_id', $id)->paginate(10);

        // View ko posts pass karo
        return view("category", compact('posts', "category"));
    }

    function singlepost($id)
    {
        $post = DB::table('post')
            ->join('user', 'post.user_id', '=', 'user.id') // post ka author
            ->leftJoin('comments', 'post.id', '=', 'comments.post_id') // post ke comments
            ->where('post.id', $id)
            ->select(
                'post.*',
                'user.first_name as author_name',
                'user.role as author_role',
                'user.image_path as author_profile',

            )
            ->get();

        $comments = Comment::select('comments.*', 'user.first_name')
            ->join('user', 'comments.user_id', '=', 'user.id')
            ->where('comments.post_id', $id)
            ->paginate(10);


        // return $comments;

        // return $post;
        //so fetch all comments that are belongs to this post and also fetch auther of this post 
        return view("singleblogg", ["post" => $post, "comments" => $comments]);
    }

    function bloggs()
    {

        $categories = categories::all();
        $posts = Post::select('post.*', 'category.id as category_id', 'category.name as category_name')
            ->join('category', 'category.id', '=', 'post.category_id')
            ->join(DB::raw('(SELECT MIN(id) as id FROM post GROUP BY category_id) as p2'), 'post.id', '=', 'p2.id')
            ->get();

        // return $posts;
        return view("bloggs", ["categories" => $categories, "posts" => $posts]);
    }


    function addcomment(Request $request)
    {
        // Validation
        $request->validate([
            "comment" => "required|min:3",
            "post_id" => "required|exists:post,id", // check karega post exist karta hai ya nahi
        ]);

        // Logged-in user (agar tum sessions use kar rahe ho)
        $user_id = $request->session()->get("LoggedUser")->id ?? 0;

        // Create comment
        $result = Comment::create([
            "comment_content" => $request->input("comment"),
            "user_id" => $user_id,
            "post_id" => $request->post_id,
        ]);

        if ($result) {
            return back()->with("success", "Comment successfully added!");
        } else {
            return back()->with("error", "Something went wrong, please try again.");
        }
    }

    function about()
    {
        // return $id;
        $admins = Users::where('role', 'admin')->get();
        // return $admins;
        return view("about", ["admins" => $admins]);

    }


    function message(Request $request)
    {
        // return $request->all();
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required"
        ]);

        $result = contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);

        if ($result) {
            return redirect()->back()->with("success", "message sent successfully");
        } else {
            return redirect()->back()->with("error", "something went wrong");
        }
    }

    function newsteller(Request $request)
    {
        $request->validate([
            "email" => "required|email|unique:newstellers,email"
        ]);

        $result = Newsteller::create([
            "email" => $request->email
        ]);

        if ($result) {
            return redirect()->back()->with("success", "Successfully Subscribed");
        } else {
            return redirect()->back()->with("error", "Something Went Wrong");
        }

    }
}
