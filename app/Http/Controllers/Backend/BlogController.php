<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('backend.blogs.details.add');
    }


    public function storeBlog(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);

        // Create a unique URL from the title
        $url = Str::slug($request->input('title'));

        // Validate the uniqueness of the slug
        $request->validate([
            'title' => 'unique:blogs,title',
            'slug' => 'unique:blogs,slug',
        ]);

        // Handle image upload if provided
        $imgFile = null;
        if ($request->hasFile('image')) {
            $path = "/frontend/blog/image/";
            $imgFile = $request->file('image');
            $imgName = $path . $imgFile->getClientOriginalName();
            $imgFile->move(public_path($path), $imgName);
        }

        // Store the blog entry in the database
        Blog::create([
            'title' => $request->title,
            'slug' => $url,
            'image' => $imgName,
            'description' => $request->description,
        ]);

        // Redirect or respond as needed
        return redirect()->route('show.blog')->with('success', 'Blog entry created successfully');
    }



    public function showBlogs()
    {
        $blogs = Blog::all();
        return view('backend.blogs.index', compact('blogs'));
    }

    public function editBlog($id)
    {
        $blog = Blog::find($id);
        return view('backend.blogs.details.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('blogs', 'title')->ignore($id),
            ],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);

        // Retrieve the blog entry from the database
        $blog = Blog::find($id);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $path = "/frontend/blog/image/";
            $oldImage = $blog->image;
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();

            // Check if the new image is the same as the old image
            if (File::exists($oldImage) && hash_file('md5', $image->getRealPath()) == hash_file('md5', $oldImage)) {
                return redirect()->back()->with('error', 'The image already exists. Please upload a new image.');
            }

            // Delete the old image file if it exists
            if ($oldImage && File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $image->move(public_path($path), $imageName);
            $blog->image = $path . $imageName;
        }

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);

        // Redirect or respond as needed
        return redirect()->route('show.blog')->with('success', 'Blog entry updated successfully');
    }


    public function deleteBlog($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            // Blog entry not found
            return redirect()->route('show.blog')->with('error', 'Blog not found.');
        }

        if ($blog) {
            dd($blog->image, File::exists($blog->image), File::delete($blog->image));
            if (File::delete($blog->image)) {
                $blog->delete();
                return redirect()->route('show.blog')->with('success', 'Blog deleted successfully.');
            } else {
                // Failed to delete image
                return redirect()->route('show.blog')->with('error', 'Failed to delete blog image.');
            }
        }


        // $blog->delete();
    }


}
