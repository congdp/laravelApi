<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    /**
     * Get all blogs in the db
     * @return Blog[]
     */
    public function index()
    {
        $blogs = Blog::all();
        return response()->json($blogs, 200);
    }

    /**
     * Get blog by id
     * @param string $id
     * @return Blog[$id]
     */
    public function show($id)
    {
        return Blog::find($id);
    }

    /**
     * Get blog by id
     * @param string $title
     */
    public function search(Request $request)
    {
        $query = Blog::select('*');
        if(isset($request->title)) {
            $query->where('title','like','%'. $request->title .'%');
        }
        return $query->get();
        // return Blog::where('title', 'LIKE', '%'  .$request->title . '%')->get();
    }

    /**
     * Add a blog to db
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $blogs = Blog::create($data);
        return response()->json($blogs, 201);
    }

    /**
     * Update blog by id
     * @param Request $request
     * @param string $id
     */
    public function update(Request $request, $id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->update($request->all());

        return $blogs;
    }

    /**
     * Delete blog by id
     * @param string $id
     * @return JsonResponse
     */
    public function delete(Request $request, $id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();

        return 204;
    }
}
