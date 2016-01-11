<?php namespace App\Http\Controllers;
/**
* 
*/
use App\Http\Controllers\Controller as BaseController;
use App\Kabupaten;
use Session;

class KabupatenController extends BaseController
{
	private $model ;
	private $formLocation;
	function __construct(Kabupaten $model) {
		$this->model = $model;
		$this->formLocation = 'kabupaten.form';
		parent::__construct();
	}
	public function index()
	{
		$data = $this->model->all();
		$session = $this->session;
		return view('kabupaten.index',compact('data','session'));
		
	}

	/**
	 * fungsi untuk menampilkan form untuk menambah data
	 */
	public function create()
	{
		$session = $this->session;
		$form = $this->formLocation;
		return view('kabupaten.create',compact('form','session'));
	}

	/**
	 * fungsi untuk menampilkan form untuk mengubah data
	 */
	public function edit($id)
	{
		$data = $this->model->find($id);
		$session = $this->session;
		$form = $this->formLocation;
		return view('kabupaten.edit',compact('form','session','data'));
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
		return $this->model->fill($this->request->only('label'))->save() ? redirect()->route('kabupaten.index')->with('success','Kabupaten Berhasil diperbarui/ditambahkan') : redirect()->back() ;
	}
	/**
	 *  fungsi untuk menghapus data pada database
	 */
	public function destroy($id)
	{
		$this->model = $this->model->find($id);
		return $this->model->delete()  ? redirect()->route('kabupaten.index')->with('success','Kabupaten Berhasil dihapus') : redirect()->back() ;
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
			'label'=>'Kabupaten'
		];
	}
}