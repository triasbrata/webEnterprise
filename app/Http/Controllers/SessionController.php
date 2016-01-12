<?php namespace App\Http\Controllers;
/**
* 
*/
use App\Http\Controllers\Controller as BaseController;
use App\User;
use Session;

class SessionController extends BaseController
{
	private $model ;
	private $formLocation;
	function __construct(User $model) {
		$this->model = $model;
		parent::__construct();
	}
	public function login()
	{
		if($this->validate())
		{
			$user = $this->model->where($this->request->only('username','password'))->get();
			// dd($user->count());
			if($user->count() > 0){
				$this->session->put('user',$user->first());
				$this->session->save();
				return redirect()->route('penduduk.index');
			}
		}
		return redirect()->back()->with('error','Username atau Password salah');
	}
	public function form()
	{
		if($this->session->has('user')){
			if(User::find($this->session->get('user')->count() > 0)){
				return redirect()->route('penduduk.index');
			}
		}
		$session = $this->session;
		return view('login',compact('session'));	
	}
	public function logout()
	{
		$this->session->flush();
		return redirect()->route('login.form')->with(['error'=>'Anda Berhasil Logout']);
	}
	public function rules()
	{
		return[
			'username'=>'required',
			'password'=>'required',
		];
	}
	public function attributes()
	{
		return[

		];
	}
}