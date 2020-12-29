<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\Control;
use App\Blog;
use App\Vendor;
use App\Categorie;
use App\Kota;
use App\Customer;
use App\Transaction;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data['testimonial'] = Testimonial::all();
        return view('frontend.home', $data);
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_lengkap'        => 'required|min:3',
            'telepon'             => 'required|numeric|min:10',
            'email'               => 'required|email',
            'username'            => 'required|unique:customers,username',
            'password'            => 'required|min:4',
            'password_konfirmasi' => 'required|min:4|same:password'
        ]);

        $datanya = array(
            'nama_lengkap' => $request->nama_lengkap,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password_konfirmasi
        );
        Customer::create($datanya);
        return back()->with('success', 'Akun telah tersimpan, silahkan login.');
    }

    public function authenticate_login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $data = Customer::where(["username" => $username, "password" => $password])->first();
        if ($data) {
            session(['id_customer' => $data->id]);
            return redirect('/')->with('login_status', "Anda berhasil login.");
        } else {
            return redirect('/')->with('login_status', "Maaf. Gagal login, mohon periksa username dan password anda.");
        }
    }

    public function authenticate_logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/')->with('login_status', "Anda berhasil logout.");
    }

    public function vendor($id, Request $request)
    {
        $data['kota'] = Kota::all();
        if ($request->kota) {
            if ($request->kota != "-") {
                $data['kota_select'] = $request->kota;
                $data['categorie'] = Categorie::where(['id' => $id])->first();
                $data['vendor'] = Vendor::where(['categorie_id' => $id, 'kota_id' => $request->kota])->get();
            } else {
                $data['kota_select'] = "-";
                $data['categorie'] = Categorie::where(['id' => $id])->first();
                $data['vendor'] = Vendor::where(['categorie_id' => $id])->get();
            }
        } else {
            $data['kota_select'] = "-";
            $data['categorie'] = Categorie::where(['id' => $id])->first();
            $data['vendor'] = Vendor::where(['categorie_id' => $id])->get();
        }
        return view('frontend.vendor', $data);
    }

    public function vendor_detail($id)
    {
        $data['vendor'] = Vendor::where(['id' => $id])->first();
        return view('frontend.vendor_detail', $data);
    }

    public function help()
    {
        $data['help'] = Control::where(['id' => '1'])->first();
        return view('frontend.help', $data);
    }

    public function blog()
    {
        $data['blog'] = Blog::all();
        return view('frontend.blog', $data);
    }

    public function blog_detail($id)
    {
        $data['blog'] = Blog::where(['id' => $id])->first();
        return view('frontend.blog_detail', $data);
    }

    public function tambah_booking_data(Request $request)
    {
        $id_vendor = $request->id_vendor;
        $data_vendor = Vendor::find($id_vendor);
        $id_customer = session('id_customer');
        $datanya = array(
            'customer_id' => $id_customer,
            'vendor_id' => $id_vendor,
            'total_harga' => $data_vendor->harga,
            'checkout_status' => '0',
            'admin_check_status' => '0',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        );
        Transaction::create($datanya);
        return back()->with('success_add_vendor', 'Berhasil menambahkan vendor ke data booking.');
    }

    public function apply_booking_customer()
    {
        $id_customer = session('id_customer');
        $datanya = array(
            "checkout_status" => '1'
        );
        Transaction::where(['customer_id' => $id_customer])->update($datanya);
        return redirect('booking-customer')->with('success_booking_data', 'Data Booking berhasil di apply, silahkan menunggu balasan dari admin melalu telepon atau email, serta anda bisa melihat apakah data booking anda sudah di cek atau belum pada menu riwayat booking.');
    }

    public function data_booking_customer()
    {
        $id_customer = session('id_customer');
        $data['booking'] = Transaction::where(['customer_id' => $id_customer, 'checkout_status' => '0'])->get();
        return view('frontend.booking_data_customer', $data);
    }

    public function data_booking_hapus($id)
    {
        $company = Transaction::find($id);
        $company->delete();
        return redirect('booking-customer')->with('success_booking_data', 'Berhasil menghapus data booking.');
    }

    public function riwayat_booking_customer()
    {
        $id_customer = session('id_customer');
        $data['booking'] = Transaction::where(['customer_id' => $id_customer])->get();
        return view('frontend.booking_riwayat_customer', $data);
    }
}
