<?php

namespace App\Http\Controllers;

use App\Models\Pemilih;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PemilihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Siswa = Pemilih::all();
        return view('siswa.index',compact('Siswa'));
    }

    public function basket()
    {
        $Siswa = Pemilih::where('exschool','basket')->get();
        return view('admin.basket',compact('Siswa'));
    }
    public function sbasket()
    {
        $Siswa = Pemilih::where('exschool','basket')->get();
        return view('users.basket',compact('Siswa'));
    }

    public function tenis()
    {
        $Siswa = Pemilih::where('exschool','tenis')->get();
        return view('admin.tenis',compact('Siswa'));
    }
    public function stenis()
    {
        $Siswa = Pemilih::where('exschool','tenis')->get();
        return view('users.tenis',compact('Siswa'));
    }

    public function bola()
    {
        $Siswa = Pemilih::where('exschool','bola')->get();
        return view('admin.bola',compact('Siswa'));
    }

    public function sbola()
    {
        $Siswa = Pemilih::where('exschool','bola')->get();
        return view('users.bola',compact('Siswa'));
    }

    public function voli()
    {
        $Siswa = Pemilih::where('exschool','voli')->get();
        return view('admin.voli',compact('Siswa'));
    }
    public function svoli()
    {
        $Siswa = Pemilih::where('exschool','voli')->get();
        return view('users.voli',compact('Siswa'));
    }

    public function estafet()
    {
        $Siswa = Pemilih::where('exschool','estafet')->get();
        return view('admin.estafet',compact('Siswa'));
    }
    public function sestafet()
    {
        $Siswa = Pemilih::where('exschool','estafet')->get();
        return view('users.estafet',compact('Siswa'));
    }

    public function renang()
    {
        $Siswa = Pemilih::where('exschool','renang')->get();
        return view('admin.renang',compact('Siswa'));
    }
    public function srenang()
    {
        $Siswa = Pemilih::where('exschool','renang')->get();
        return view('users.renang',compact('Siswa'));
    }

    public function bahasajerman()
    {
        $Siswa = Pemilih::where('exschool','bahasa jerman')->get();
        return view('admin.bahasa-jerman',compact('Siswa'));
    }
    public function sbahasajerman()
    {
        $Siswa = Pemilih::where('exschool','bahasa jerman')->get();
        return view('users.bahasa-jerman',compact('Siswa'));
    }
    public function exportpdf(){
        $pemilih = Pemilih::all();

        view()->share('pemilih', $pemilih);
        $pdf = PDF::loadView('siswa.data-pdf');
        return $pdf-> download('index.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemilih = Pemilih::all();
        return view('siswa.input',compact('pemilih'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'exschool' => 'required',
            'alamat' => 'required',
        ]);
    
        $pemilih = Pemilih::create([
            'name' => $request->name,
            'kelas' => $request->kelas,
            'exschool' => $request->exschool,
            'status' => 0,
            'alamat' => $request->alamat,
        ]);

        $user = Auth::user();
        $newStatus=1;

        $user = User::find($user->id);
        if($user) {
        $user->status = $newStatus;
        $user->save();
        }
    
        if ($request->exschool === 'bola') {
            return redirect()->route('users.bola')->with('success', 'Created successfully.');
        } elseif ($request->exschool === 'voli') {
            return redirect()->route('users.voli')->with('success', 'Created successfully.');
        } elseif ($request->exschool === 'basket') {
            return redirect()->route('users.basket')->with('success', 'Created successfully.');
        } elseif ($request->exschool === 'tenis') {
            return redirect()->route('users.tenis')->with('success', 'Created successfully.');  
        } elseif ($request->exschool === 'renang') {
            return redirect()->route('users.renang')->with('success', 'Created successfully.');  
        } elseif ($request->exschool === 'estafet') {
            return redirect()->route('users.estafet')->with('success', 'Created successfully.');  
        } elseif ($request->exschool === 'bahasa jerman') {
            return redirect()->route('users.bahasajerman')->with('success', 'Created successfully.');  
        } else {
            return redirect()->route('user.create')->with('success', 'Created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemilih $pemilih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Pemilih::findOrFail($id);

        return view('layouts.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $pemilih = Pemilih::findOrFail($id);
        // Update the data with the new values
        $pemilih->name = $request->input('name');
        $pemilih->kelas = $request->input('kelas');
        $pemilih->exschool = $request->input('exschool');
        $pemilih->alamat = $request->input('alamat');
        // Save the changes to the database
        $pemilih->save();

        // Redirect back to the view or a different page
        return redirect()->route('user.index')->with('success', 'Data updated successfully');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pemilih = Pemilih::findOrFail($id);
        $pemilih->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}
