<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Get all posts in the db
     * @return Posts[]
     */
    public function index()
    {
        return Posts::all();
    }

    /**
     * Get post by id
     * @param string $id
     */
    public function show($id)
    {
        return Posts::find($id);
    }

    /**
     * Get post by id
     * @param string $title
     */
    public function search($title)
    {
        return Posts::where('title', 'LIKE', '%' . $title . '%')->get();
    }

    /**
     * Add a post to db
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {   $data = $request->all();
        $data['position'] = json_encode($data['position']);
        $posts = Posts::create($data);
        return response()->json($posts, 201);
    }

    /**
     * Update post by id
     * @param Request $request
     * @param string $id
     */
    public function update(Request $request, $id)
    {
        $posts = Posts::findOrFail($id);
        $posts->update($request->all());

        return $posts;
    }

    /**
     * Delete post by id
     * @param string $id
     * @return JsonResponse
     */
    public function delete(Request $request, $id)
    {
        $posts = Posts::findOrFail($id);
        $posts->delete();

        return 204;
    }
}
