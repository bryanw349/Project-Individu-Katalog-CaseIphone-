<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Caseip;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function caseip()
    {
        $caseip = Caseip::orderBy('id', 'desc')->get();
        return view("caseip", ["key" => "caseip", "cs" => $caseip]);
    }

    public function message()
    {
        $message = caseip::orderBy('id', 'desc')->get();
        return view("message", ["key" => "message", "mv" => $message]);
    }
    public function setting()
    {
        return view("setting", ["key" => "setting"]);
    }
    public function formaddcaseip()
    {
        return view("formadd", ["key" => "caseip"]);
    }
    public function savedata(Request $request)
    {
        $file_name = time() . '-' . $request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');
        Caseip::create([
            'id' => $request->id,
            'tipeiphone' => $request->tipeiphone,
            'warna' => $request->warna,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $path
        ]);

        return redirect("caseip")->with('alert', 'Berhasil disimpan');
    }
    public function editcaseip($id)
    {
        $caseip = Caseip::find($id);
        return view("editcaseip", ["key" => "caseip", "caseip" => $caseip]);
    }

    public function updatecaseip(Request $request, $id)
    {
        $caseip = Caseip::find($id);
        if ($request->hasFile('gambar')) {
            $file_name = time() . '-' . $request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');
            $caseip->gambar = $path;
        }
        $caseip->tipeiphone = $request->tipeiphone;
        $caseip->warna = $request->warna;
        $caseip->stok = $request->stok;
        $caseip->harga = $request->harga;
        $caseip->save();

        return redirect("caseip")->with('alert', 'Berhasil diedit');
    }

    public function deletecaseip($id)
    {
        $caseip = Caseip::find($id);
        $caseip->delete();
        return redirect("caseip")->with('alert', 'Berhasil dihapus');
    }

    public function login()
    {
        return view("login");
    }

    public function edituser()
    {
        return view("edituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if ($request->password_baru == $request->konfirmasi_baru) {
            Auth::user()->password = bcrypt($request->password_baru);
            Auth::user()->save();

            return redirect("/user")->with("info", "Password has been changed");
        } else {
            return redirect("/user")->with("info", "Password has not been changed");
        }
    }

    public function catalog()
    {
        $caseip = \App\Caseip::all();
        return view('catalog', ['cs' => $caseip]);
    }

    public function searchCatalog(Request $request)
    {
        $keyword = $request->input('q');
        $result = \App\Caseip::where('tipeiphone', 'like', "%{$keyword}%")
            ->orWhere('warna', 'like', "%{$keyword}%")
            ->get();

        return view('catalog', ['cs' => $result]);
    }
}
