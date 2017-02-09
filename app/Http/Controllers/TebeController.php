<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tempat;
use App\Kursus;
use App\Fasilitas;
use App\FasilitasTempat;
use App\FasilitasKursus;
use App\Role;
use App\User;
use App\PemesananTempat;
use App\PemesananKursus;
use Mail;

class TebeController extends Controller{
	public

	function index()
	{
		$tempat = Tempat::inRandomOrder()->paginate(3);
		$kursus = Kursus::inRandomOrder()->paginate(3);
		return view('welcome', ['tempat' => $tempat, 'kursus' => $kursus]);
	}

	public

	function profil()
	{
		return view('profil');
	}

	public

	function sub_properti()
	{
		$fasilitas = Fasilitas::all();
		return view('sub_properti')->with('fasilitas', $fasilitas);
	}

	public

	function gantipass()
	{
		return view('gantipass');
	}

	public

	function caritempat(Request $r)
	{
    if($r->input('cari')){
      $data = array(
        'data' => tempat::where('nama','LIKE','%'.$r->input('cari').'%')->orWhere('alamat','LIKE','%'.$r->input('cari').'%')->orWhere('lokasi','LIKE','%'.$r->input('cari').'%')->paginate(9)
			);
    }
    else{
      $data = array(
        'data' => tempat::orderBy('id', 'desc')->paginate(9)
      );
    }

    return view('caritempat')->with($data);
	}

	public

	function carikursus(Request $r)
	{
		if($r->input('cari')){
      $data = array(
        'data' => kursus::where('nama','LIKE','%'.$r->input('cari').'%')->orWhere('alamat','LIKE','%'.$r->input('cari').'%')->orWhere('lokasi','LIKE','%'.$r->input('cari').'%')->paginate(9)
			);
    }
    else{
      $data = array(
        'data' => kursus::orderBy('id', 'desc')->paginate(9)
      );
    }

    return view('carikursus')->with($data);
}

	public

	function test()
	{
		return view('layouts.app');
	}

	public

	function edit_properti()
	{
		return view('edit_properti');
	}

	public

	function masuk_daftar()
	{
		return view('masuk_daftar');
	}

	public

	function sub_kursus()
	{
		$fasilitas = Fasilitas::all();
		return view('sub_kursus')->with('fasilitas', $fasilitas);
	}

	public

	function seemore_kursus()
	{
		return view('seemore_kursus');
	}

	public

	function seemore_tempat()
	{
		return view('seemore_tempat');
	}

	public

	function notif()
	{
		$data = array(
			'data' => Tempat::where('user_id',\Auth::user()->id)->with('pemesanan_tempat.user')->get()
		);
    // return $data;

		return view('notif')->with($data);
	}

	public

	function notif_kursus()
	{
    $data = array(
			'data' => Kursus::where('user_id',\Auth::user()->id)->with('pemesanan_kursus.user')->get(),
      'data2' => PemesananTempat::where('user_id',\Auth::user()->id)->with('user','tempat')->get()

    );

    // return $data;
		return view('notif_kursus')->with($data);
	}

  public

  function notif_pelajar()
  {
    $data = array(
      'data' => PemesananKursus::where('user_id',\Auth::user()->id)->with('user','kursus')->get(),
      'data2' => PemesananTempat::where('user_id',\Auth::user()->id)->with('user','tempat')->get()
    );
    // return $data;
    return view('notif_pelajar')->with($data);
  }

	public

	function daftar(Request $r)
	{
		$post = new User;
		$post->name = $r->input('name');
		$post->email = $r->input('email');
		$post->password = bcrypt($r->input('password'));
		$post->telepon = $r->input('telepon');
		$post->foto = "user.png";
		$post->save();
		$role = Role::where('name', $r->input('type'))->first();
		$post->attachRole($role);
		return redirect('masuk_daftar');
	}

	// -----------------------------------------------------------------------------

	public

	function tambahpropertisave(Request $r)
	{
		$post = new Tempat;
		$post->user_id = \Auth::user()->id;
		$post->nama = $r->input('nama');
		$post->luas = $r->input('luas');
		$post->tarif = $r->input('tarif');
		$post->waktu_tarif = $r->input('waktu_tarif');
		$photo = $r->file('photo');
		$filename = round(microtime(true));
		$ext = $photo->getClientOriginalExtension();
		$photo->move('picture',$filename.'.'.$ext);
		$post->foto = $filename.'.'.$ext;
		$post->lokasi = $r->input('lokasi');
		$post->alamat = $r->input('alamat');
		$post->deskripsi = $r->input('deskripsi');
		$post->waktu_pemakaian = $r->input('waktu_pemakaian');
		$post->max_waktupemakaian = $r->input('max_waktupemakaian');

		// $post->min_waktupemakaian = $r->input('min_waktupemakaian');

		$post->save();
		foreach($r->input('fasilitas') as $key => $value) {
			$ft = new FasilitasTempat;
			$ft->fasilitas_id = $value;
			$ft->tempat_id = $post->id;
			$ft->save();
		}

		return redirect(url('detailproperti/' . $post->id));
	}

	public

	function properti()
	{
			$data = array(
				'data' => Tempat::where('user_id',\Auth::user()->id)->get()
		);
		return view('properti')->with($data);
	}

	public

	function detailproperti($id)
	{
		$data = array(
			'data' => Tempat::find($id)
		);
		return view('seemore_tempat')->with($data);
	}

	public

	function detailtempat($id)
	{
		$data = array(
			'data' => Tempat::where('id', $id)->with('fasilitas_tempat.fasilitas')->first()
		);
		return view('detail_tempat')->with($data);
	}

	public

	function pesantempat(Request $r)
	{
		$post = new PemesananTempat;
		$post->tanggal = $r->input('tanggal');
		$post->waktu_mulai = $r->input('dari');
		$post->waktu_selesai = $r->input('sampai');
		$post->tempat_id = $r->input('tempat_id');
		$post->konfirmasi = 'pending';
		$post->user_id = \Auth::user()->id;
		$post->save();

		$penyedia = Tempat::find($r->input('tempat_id'));
		$user_tempat = User::find($penyedia->user_id);

		Mail::send('email_notif',[],function($m) use($user_tempat){
    		$m->from('alrifkitugas@gmail.com','TeBe');
    		$m->to($user_tempat->email,$user_tempat->name)->subject('Tempat Belajar');
    });

		return redirect('caritempat');
	}

	public

	function pesankursus(Request $r)
	{
		$post = new PemesananKursus;
		$post->tanggal = $r->input('tanggal');
		$post->jumlah_peserta = $r->input('jumlah');
		$post->kursus_id = $r->input('kursus_id');
		$post->konfirmasi = 'pending';
		$post->user_id = \Auth::user()->id;
		$post->save();


				$penyedia = Kursus::find($r->input('kursus_id'));
				$user_kursus = User::find($penyedia->user_id);

				Mail::send('email_notif',[],function($m) use($user_kursus){
		    		$m->from('alrifkitugas@gmail.com','TeBe');
		    		$m->to($user_kursus->email,$user_kursus->name)->subject('Tempat Belajar');
		    });

		return redirect('carikursus');
	}

	public

	function propertiedit($id)
	{
		$data = array(
			'data' => Tempat::find($id)
		);
		return view('edit_properti')->with($data);
	}

	public

	function propertiupdate(Request $r)
	{
		$data = array(
			'nama' => $r->input('nama') ,
			'luas' => $r->input('luas') ,
			'tarif' => $r->input('tarif') ,
			'waktu_tarif' => $r->input('waktu_tarif') ,
			'lokasi' => $r->input('lokasi') ,
			'alamat' => $r->input('alamat') ,
			'deskripsi' => $r->input('deskripsi') ,
			'waktu_tarif' => $r->input('waktu_tarif') ,
			'max_waktupemakaian' => $r->input('max_waktupemakaian') ,
		);
		DB::table('tempat')->where('id', $r->input('id'))->update($data);
		return redirect(url('/properti'));
	}

	public

	function propertihapus($id)
	{
		$data = array(
			'data' => Tempat::find($id)
		);
		Tempat::find($id)->delete();
		return redirect(url('/properti'));
	}

	// -----------------------------------------------------------------------

	public

	function tambahkursussave(Request $r)
	{
		$post = new Kursus;
		$post->user_id = \Auth::user()->id;
		$post->nama = $r->input('nama');
		$post->tarif_peserta = $r->input('tarif_peserta');
		$post->min_peserta = $r->input('min_peserta');
		$post->max_peserta = $r->input('max_peserta');
		$post->dari_jam = $r->input('dari_jam');
		$post->sampai_jam = $r->input('sampai_jam');
		$photo = $r->file('photo');
		$filename = round(microtime(true));
		$ext = $photo->getClientOriginalExtension();
		$photo->move('picture',$filename.'.'.$ext);
		$post->foto = $filename.'.'.$ext;
		$post->lokasi = $r->input('lokasi');
		$post->alamat = $r->input('alamat');
		$post->deskripsi = $r->input('deskripsi');
		$post->save();

		foreach($r->input('fasilitas') as $key => $value) {
			$ft = new FasilitasKursus;
			$ft->fasilitas_id = $value;
			$ft->kursus_id = $post->id;
			$ft->save();
		}


		return redirect(url('detailkursus/' . $post->id));
	}

	public

	function kursus()
	{
		$data = array(
			'data' => Kursus::where('user_id',\Auth::user()->id)->get()
	);
	return view('kursus')->with($data);
	}

	public

	function detailkursus($id)
	{
		$data = array(
			'data' => Kursus::where('id', $id)->with('user')->first()
		);
		return view('seemore_kursus')->with($data);
	}

	public

	function detail_kursus($id)
	{
		$data = array(
			'data' => Kursus::where('id', $id)->with('fasilitas_kursus.fasilitas')->first()
		);
		return view('detail_kursus')->with($data);
	}

	public

	function kursusedit($id)
	{
		$data = array(
			'data' => Kursus::find($id)
		);
		return view('edit_kursus')->with($data);
	}

	public

	function kursusupdate(Request $r)
	{
		$data = array(
			'nama' => $r->input('nama') ,
			'tarif_peserta' => $r->input('tarif_peserta') ,
			'min_peserta' => $r->input('min_peserta') ,
			'max_peserta' => $r->input('max_peserta') ,
			'dari_jam' => $r->input('dari_jam') ,
			'sampai_jam' => $r->input('sampai_jam') ,
			'lokasi' => $r->input('lokasi') ,
			'alamat' => $r->input('alamat') ,
			'deskripsi' => $r->input('deskripsi') ,
		);
		DB::table('kursus')->where('id', $r->input('id'))->update($data);
		return redirect(url('/kursus'));
	}

	public

	function kursushapus($id)
	{
		$data = array(
			'data' => Kursus::find($id)
		);
		Kursus::find($id)->delete();
		return redirect(url('/kursus'));
	}

  function setujutempat($id)
  {
    $pemesanantempat = PemesananTempat::find($id);
    $pemesanantempat->konfirmasi='setuju';
    $pemesanantempat->save();

		$user = User::find($pemesanantempat->user_id);

		Mail::send('email',[],function($m) use($user){
    		$m->from('alrifkitugas@gmail.com','TeBe');
    		$m->to($user->email,$user->name)->subject('Tempat Belajar');
    });

    return redirect(url('/notif'));
  }

    function tolaktempat($id)
    {
      $pemesanantempat = PemesananTempat::find($id);
      $pemesanantempat->konfirmasi='tolak';
      $pemesanantempat->save();

			$user = User::find($pemesanantempat->user_id);

			Mail::send('email_tolak',[],function($m) use($user){
	    		$m->from('alrifkitugas@gmail.com','TeBe');
	    		$m->to($user->email,$user->name)->subject('Tempat Belajar');
    	});


      return redirect(url('/notif'));
    }
    function setujukursus($id)
    {
      $pemesanantempat = PemesananKursus::find($id);
      $pemesanantempat->konfirmasi='setuju';
      $pemesanantempat->save();

			$user = User::find($pemesanantempat->user_id);

			Mail::send('email',[],function($m) use($user){
					$m->from('alrifkitugas@gmail.com','TeBe');
					$m->to($user->email,$user->name)->subject('Tempat Belajar');
    	});


      return redirect(url('/notif_kursus'));
    }

      function tolakkursus($id)
      {
        $pemesanantempat = PemesananKursus::find($id);
        $pemesanantempat->konfirmasi='tolak';
        $pemesanantempat->save();

				$user = User::find($pemesanantempat->user_id);

				Mail::send('email_tolak',[],function($m) use($user){
		    		$m->from('alrifkitugas@gmail.com','TeBe');
		    		$m->to($user->email,$user->name)->subject('Tempat Belajar');
    	});


        return redirect(url('/notif_kursus'));
      }
}
