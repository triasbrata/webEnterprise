<?php namespace App\Http\Controllers;
/**
* 
*/
use App\Http\Controllers\Controller as BaseController;
use App\KartuKeluarga;
class KartuKeluargaController extends BaseController
{
	private $model ;
	private $formLocation;
	function __construct(KartuKeluarga $model) {
		$this->model = $model;
		$this->formLocation = 'kartu_keluarga.form';
		parent::__construct();
	}
	public function index()
	{
		$data = $this->model->all();
		$session = $this->session;
		return view('kartu_keluarga.index',compact('data','session'));
		//sama saja dengan
		//return view('kartu_keluarga.index',array('data'=>$data,'session'=>$session));
	}
	/**
	 * fungsi untuk menampilkan form untuk menambah data
	 */
	public function create()
	{
		$session = $this->session;
		$form = $this->formLocation;
		return view('kartu_keluarga.create',compact('form','session'));
	}
	/**
	 * fungsi untuk menampilkan form untuk mengubah data
	 */
	public function edit($id)
	{
		$data = $this->model->find($id);
		$session = $this->session;
		$form = $this->formLocation;
		return view('kartu_keluarga.edit',compact('form','session','data'));
	}
	public function show($id)
	{
		$data = $this->model->find($id)->get()->first();
		$session = $this->session;
		$form = $this->formLocation;
		return view('kartu_keluarga.show',compact('form','session','data'));
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
		return $this->model->fill($this->request->all())->save() ? redirect()->route('kartu_keluarga.index')->with('success','Kartu Keluarga Berhasil diperbarui/ditambahkan') : redirect()->back() ;
	}
	/**
	 *  fungsi untuk menghapus data pada database
	 */
	public function destroy($id)
	{
		$this->model = $this->model->find($id);
		return $this->model->delete()  ? redirect()->route('kartu_keluarga.index')->with('success','Kartu Keluarga Berhasil dihapus') : redirect()->back() ;
	}
	public function penduduk($id)
	{
		$data = $this->model->find($id);
		$session = $this->session;
		$form = $this->formLocation;
		return view('kartu_keluarga.penduduk_form',compact('form','session','data'));
	}
	public function syncPenduduk($id)
	{
		$model = $this->model->find($id);
		if(!is_array($this->request->input('penduduk')))
		return redirect()->back() ;
		return $model->penduduk()->sync($this->request->input('penduduk')) ? redirect()->route('kartu_keluarga.show',$id)->with('success','Penduduk Berhasil ditambahkan') : redirect()->back() ;
	}
	/**
	 *  fungsi untuk mendaftarkan aturan pada saat di impan
	 */
	protected function rules()
	{
		return[
			'kepala_keluarga_id'=>'required',
			'rt'=>'required',
			'no_kk'=>'required',
			'rw'=>'required',
			'alamat'=>'required',
			'kelurahan_id'=>'required',
			'tgl_keluar'=>'required',
			'kd_pos'=>'required',
		];
	}
	/**
	 * fungsi untuk mendaftarkan alias nama form
	 */
	protected function attributes()
	{
		return[
			'kepala_keluarga_id'=>'Kepala Keluarga',
			'kelurahan_id'=>'Kecamatan',
			'no_kk'=>'No. Kartu Keluarga',
			'tgl_keluar'=>'Tanggal Keluar',
			'kd_pos'=>'Kode Pos',
		];
	}
}