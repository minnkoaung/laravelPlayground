<?php

namespace App\Http\Controllers;

use App\Blog;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		$articles = Blog::all();
		return view("blog.index", compact("articles"));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view("blog.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$title = $request->input("title");
		$body = $request->input("body");
		Blog::create([
			'title' => $title,
			'body' => $body,
		]);
		//Showing flash message
		//$request->session()->flash('alert-success', 'Your Article "'.$title.'" Article was successful added!');
		flash('Article was successful added!')->success();
		//redirecting to blog index
		return redirect()->route("blog.index");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$articles = DB::table('blogs')->where('id', $id)->get();
		return view("blog.edit", compact("articles"));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		dd($request);

		$id = $request->input("id");
		$title = $request->input("title");
		$body = $request->input("body");
		DB::table('blogs')
			->where('id', $id)
			->update([
				'title' => $title,
				'body' => $body,
			]);

		// Blog::update([
		// 	'title' => $title,
		// 	'body' => $body,
		// ])->where(['id' => $id]);

		//Showing flash message
		//$request->session()->flash('alert-success', 'Your Article "'.$title.'" Article was successful added!');
		flash('Article was successful Update!')->success();
		//redirecting to blog index
		return view("blog.index");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
