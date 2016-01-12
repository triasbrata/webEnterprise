<?php namespace App\Http\Controllers;
use Route;
use App\Http\Controllers\Controller as BaseController;
use App\Kadis;
class KadisController extends BaseController
{
	public function __construct(Kadis $model)
	{
		$this->model = $model;
		$this->formLocation = 'kadis.form';
		parent::__construct();
	}
	public function index()
	{
		return view('kadis.index',['data'=>Kadis::all(),'session'=>$this->session]);
	}

	public function edit($id)
	{
		$data = Kadis::find($id);
		return view('kadis.edit',array('data'=>$data));
	}

	public function create()
	{
		$session = $this->session;
		$form = $this->formLocation;
		return view('kadis.create',compact('form','session'));
	}

	public function show($id)
	{

		$data = Kadis::find($id);
		$session = $this->session;
		return view('kadis.show',compact($data,$session));
	}

	public function store()
	{	
		$data = new Kadis;
		dd(Request::only('title','zaki'));
		if($data->fill([])->save()){
			return redirect()->route('kadis.index');
		}
		return route('kadis.index');		
	}

	public function update($id)
	{	
		$data = kadis::find($id);
		if($data->fill($r->all())->save()){
			return redirect()->route('kadis.index');
		}
		return redirect()->back()->withInput();
	}

	public function destroy($id)
	{
		$data = kadis::find($id);
		if($data->destroy()){
			return redirect()->route('kadis.index');
		}
		return redirect()->back()->withInput();
	}

/**
*  fungsi untuk mendaftarkan aturan pada saat di impan
*/
protected function rules()
{
	return[
	'nama' => 'required',
	'nip' => 'required',
	'kabupaten_id'=>'required'
	];
}
/**
* fungsi untuk mendaftarkan alias nama form
*/
protected function attributes()
{
	return[
	'nip' => 'NIP',
	'kabupaten_id'=>'Nama Kabupaten'
	];
}



}