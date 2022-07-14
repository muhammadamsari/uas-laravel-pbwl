<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Loan::all();
        return view('pinjam.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Book::all();
        $data1 = Member::all();
        return view('pinjam.add', compact('data', 'data1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tgl = date('d-m-Y');
        Loan::create([
            'buku' => $request->buku,
            'nama' => $request->nama,
            'tgl' => $tgl
        ]);

        return redirect('/pinjam');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit($loan)
    {
        $pinjam = Loan::find($loan);
        $data = Book::all();
        $data1 = Member::all();
        return view('pinjam.edit', compact('data', 'data1', 'pinjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $loan)
    {
        $tgl = date('d-m-Y');
        $data = Loan::find($loan);
        $data->update([
            'buku' => $request->buku,
            'nama' => $request->nama,
            'tgl' => $tgl
        ]);

        return redirect('/pinjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy($loan)
    {
        $data = Loan::find($loan)->delete();
        return redirect('/pinjam');
    }
}
