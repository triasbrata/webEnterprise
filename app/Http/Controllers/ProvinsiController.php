<?php namespace App\Http\Controllers;
use Route;
use App\Http\Controllers\Controller as BaseController;
use App\Provinsi;
use App\Request;
class ProvinsiController extends BaseController
{
	public function index(Request $r)
	{
		
		return view('provinsi.index',['data'=>Provinsi::all()]);
	}
	public function edit($id)
	{
		$data = Provinsi::find($id);
		return view('provinsi.edit',array('data'=>$data));
	}
	/**
	 * fungsi yang di jalankan ketika menampilkan form tambah
	 */
	public function create()
	{
		return view('provinsi.create');
	}
	public function show($id)
	{
		$data = Provinsi::find($id);
		return view('provinsi.show',$data);

	}
	public function store()
	{	
		$data = new Provinsi;
		dd(Request::only('title','trias'));
		if($data->fill([])->save()){
			return redirect()->route('provinsi.index');
		}
		return route('provinsi.index');		
	}
	public function update($id)
	{	
		$data = Provinsi::find($id);
		if($data->fill($r->all())->save()){
			return redirect()->route('provinsi.index');
		}
		return redirect()->back();
	}
	public function destroy($id)
	{
		$data = Provinsi::find($id);
		if($data->destroy()){
			return redirect()->route('provinsi.index');
		}

		return redirect()->back();
	}


}