<?php namespace App\Http\Controllers;

use Route;
use App\Http\Controllers\Controller as BaseController;
use App\Kelurahan;
use App\Request;

class KelurahanController extends BaseController
{
	
	private $model ;
	private $formLocation;
	function __construct(Kelurahan $model) {
		$this->model = $model;
		$this->formLocation = 'kelurahan.form';
		parent::__construct();
	}

	public function index()
	{
		$data = $this->model->all();
		$session = $this->session;
		return view('kelurahan.index',compact('data','session'));
		//sama saja dengan
		//return view('agama.index',array('data'=>$data,'session'=>$session));
	}

	/**
	 * fungsi untuk menampilkan form untuk menambah data
	 */
	public function create()
	{
		$session = $this->session;
		$form = $this->formLocation;
		return view('kelurahan.create',compact('form','session'));
	}

	/**
	 * fungsi untuk menampilkan form untuk mengubah data
	 */
	public function edit($id)
	{
		$data = $this->model->find($id);
		$session = $this->session;
		$form = $this->formLocation;
		return view('kelurahan.edit',compact('form','session','data'));
	}

	/**
	 * fungsi untuk memperoses perbarui data
	 */
	public function update($id)
	{
		$this->model = $this->model->find($id);
		return $this->updateStore();
	}

	/**
	 * fungsi untuk memperoses  menyimpan data
	 */
	public function store(){
		
		return $this->updateStore();
	}

	/**
	 * fungsi untuk memperoses menyimpan dan memperbarui data
	 */
	protected function updateStore()
	{
		if($this->validate()->fails()){
			return redirect()->back()->with('error',$this->validate()->errors());
		}
		return $this->model->fill($this->request->only('title'))->save() ? redirect()->route('agama.index')->with('success','Agama Berhasil diperbarui/ditambahkan') : redirect()->back() ;
	}
	/**
	 *  fungsi untuk menghapus data pada database
	 */
	public function destroy($id)
	{
		$this->model = $this->model->find($id);
		return $this->model->delete()  ? redirect()->route('kelurahan.index')->with('success','Agama Berhasil dihapus') : redirect()->back() ;
	}


		/**
		 *  fungsi untuk mendaftarkan aturan pada saat di impan
		 */
		protected function rules()
		{
			return[
				'label' => 'required'
			];
		}
		/**
		 * fungsi untuk mendaftarkan alias nama form
		 */
		protected function attributes()
		{
			return[
				'title'=>'Kelurahan'
			];
		}


	}