<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $users = DB::table('users')->where('id', 1)->get();
		// dd(DB::table('users')->max('permission'));
		// dd(DB::table('users')->lists('email', 'id'));
		// dd(DB::table('users')->count());
		// $users = DB::table('users')->where('id', 1)->orWhere('id', 3)->get();
		// $users = DB::table('users')->where('id','>', 1)->orderBy('email', 'desc')->take(2)->skip(0)->get();

		$users = DB::table('users')->join('posts','users.id', '=', 'posts.user_id')->get();

		$data = array(
			'email' => 'some12@email.com',
			'password' => Hash::make('12345')
			);

		//DB::table('users')->insert($data);
		DB::table('users')->where('id', 5)->update($data);

		DB::table('users')->where('id', 5)->delete();

		return View::make('user.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// $user = DB::table('users')->where(array('email'=>'jolinar@jolinar.org', 'id'=>3))->first();
		
		$user = User::with('categories')->find($id);
		return View::make('user.show', compact('user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('user.edit', compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}

		dd(Input::all());

		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
