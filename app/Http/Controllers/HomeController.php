<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Control;
use App\Transaction;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        session(['menu' => 'home']);
        return view('home');
    }

    public function booking_data()
    {
        session(['menu' => 'order']);
        $data['booking_baru'] = Transaction::where(["checkout_status" => '1', "admin_check_status" => '0'])->get();
        $data['booking_sudah'] = Transaction::where(["checkout_status" => '1', "admin_check_status" => '1'])->get();
        return view('booking', $data);
    }

    public function booking_edit($id)
    {
        $data['booking'] = Transaction::find($id);
        return view('booking_edit', $data);
    }

    public function booking_detail($id)
    {
        $data['booking'] = Transaction::find($id);
        return view('booking_detail', $data);
    }

    public function booking_update(Request $request)
    {
        $datanya = array(
            'admin_check_status' => 1
        );
        $id = $request->id;
        Transaction::whereId($id)->update($datanya);
        return redirect('/booking')->with('success_admin', 'Data telah berubah.');
    }

    public function testimonial()
    {
        session(['menu' => 'testi']);
        $data['testi'] = Testimonial::all();
        return view('testimonial', $data);
    }

    public function create_testimonial()
    {
        return view('testimonial_create');
    }

    public function store_testimonial(Request $request)
    {
        request()->validate([
            'nama'      => 'required|min:3',
            'file'      => 'required|file|image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required|min:10',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'image/testi/';
        $file->move($tujuan_upload, $nama_file);

        $datanya = array(
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_file
        );
        Testimonial::create($datanya);
        return redirect('/testimonial')->with('success_admin', 'Data telah tersimpan.');
    }

    public function detail_testimonial($id)
    {
        $data['testi'] = Testimonial::find($id);
        return view('testimonial_detail', $data);
    }

    public function edit_testimonial($id)
    {
        $data['testi'] = Testimonial::find($id);
        return view('testimonial_edit', $data);
    }

    public function update_testimonial(Request $request)
    {
        $id = $request->id;
        if ($request->file) {
            request()->validate([
                'nama'      => 'required|min:3',
                'file'      => 'file|image|mimes:jpeg,png,jpg',
                'deskripsi' => 'required|min:10',
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'image/testi/';
            $file->move($tujuan_upload, $nama_file);

            $datanya = array(
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'gambar' => $nama_file
            );
            Testimonial::whereId($id)->update($datanya);
            return redirect('/testimonial')->with('success_admin', 'Data telah berubah.');
        } else {
            request()->validate([
                'nama'      => 'required|min:3',
                'deskripsi' => 'required|min:10',
            ]);

            $datanya = array(
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi
            );
            Testimonial::whereId($id)->update($datanya);
            return redirect('/testimonial')->with('success_admin', 'Data telah berubah.');
        }
    }

    public function delete_testimonial($id)
    {
        $testi = Testimonial::find($id);
        if (file_exists("./image/testi/" . $testi->gambar)) {
            unlink("./image/testi/" . $testi->gambar);
            $company = Testimonial::find($id);
            $company->delete();
        } else {
            $company = Testimonial::find($id);
            $company->delete();
        }
        return redirect('/testimonial')->with('success_admin', 'Data telah terhapus.');
    }

    public function setting_view()
    {
        session(['menu' => 'setting']);
        $data['setting'] = Control::where(["id" => "1"])->first();
        return view('setting', $data);
    }

    public function setting_edit()
    {
        $data['setting'] = Control::where(["id" => "1"])->first();
        return view('setting_edit', $data);
    }

    public function setting_update(Request $request)
    {
        request()->validate([
            'help_text'             => 'required|min:10',
            'address'               => 'required|min:10',
            'email'                 => 'required|email',
            'telephone_number'      => 'required|min:10|numeric',
            'whatsapp_phone_number' => 'required|min:10|numeric'
        ]);

        $datanya = array(
            'help_text'             => $request->help_text,
            'address'               => $request->address,
            'email'                 => $request->email,
            'telephone_number'      => $request->telephone_number,
            'whatsapp_phone_number' => $request->whatsapp_phone_number
        );
        $id = 1;
        Control::whereId($id)->update($datanya);
        return redirect('/setting')->with('success_admin', 'Data telah berubah.');
    }
}
