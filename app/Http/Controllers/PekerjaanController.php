<?php namespace App\Http\Controllers;
/**
* 
*/
use App\Http\Controllers\Controller as BaseController;
use App\Pekerjaan;
use Session;

class PekerjaanController extends BaseController
{
	private $model ;
	private $formLocation;
	function __construct(Pekerjaan $model) {
		$this->model = $model;
		$this->formLocation = 'pekerjaan.form';
		parent::__construct();
	}
	public function index()
	{
		$data = $this->model->all();
		$session = $this->session;
		return view('pekerjaan.index',compact('data','session'));
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
		return view('pekerjaan.create',compact('form','session'));
	}

	/**
	 * fungsi untuk menampilkan form untuk mengubah data
	 */
	public function edit($id)
	{
		$data = $this->model->find($id);
		$session = $this->session;
		$form = $this->formLocation;
		return view('pekerjaan.edit',compact('form','session','data'));
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
		return $this->model->fill($this->request->only('title'))->save() ? redirect()->route('pekerjaan.index')->with('success','pekerjaan Berhasil diperbarui/ditambahkan') : redirect()->back() ;
	}
	/**
	 *  fungsi untuk menghapus data pada database
	 */
	public function destroy($id)
	{
		$this->model = $this->model->find($id);
		return $this->model->delete()  ? redirect()->route('pekerjaan.index')->with('success','Pekerjaan Berhasil dihapus') : redirect()->back() ;
	}

	/**
	 *  fungsi untuk mendaftarkan aturan pada saat di impan
	 */
	protected function rules()
	{
		return[
			'title' => 'required'
		];
	}
	/**
	 * fungsi untuk mendaftarkan alias nama form
	 */
	protected function attributes()
	{
		return[
			'title'=>'Pekerjaan'
		];
	}
}