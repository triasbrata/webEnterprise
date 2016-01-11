<?php namespace App\Http\Controllers;
use Route;
use App\Http\Controllers\Controller as BaseController;
use App\Kadis;
use App\Request;
class KadisController extends BaseController
{
	public function index(Request $r)
	{
		return view('kadis.index',['data'=>Kadis::all()]);
		
	}

	public function edit($id)
	{
		$data = Kadis::find($id);
		return view('kadis.edit',array('data'=>$data));
	}

	public function create()
	{
		return view('kadis.create');
	}

		public function show($id)
		{
			$data = Kadis::find($id);
			return view('kadis.show',$data);

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
				'nama' => 'required'
				'nip' => 'required'
			];
		}
		/**
		 * fungsi untuk mendaftarkan alias nama form
		 */
		protected function attributes()
		{
			return[
				'title'=>'KepalaDinas'
			];
		}



	}