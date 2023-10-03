<?php

namespace App\Http\Controllers;

use App\Models\TableB;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TableBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('table-b.index', [
            'title' => 'Table B',
            'data' => TableB::all(),
            'columns' => [
                [
                    'label' => 'Kode Toko',
                    'field' => 'kode_toko',
                ],
                [
                    'label' => 'Nominal Transaksi',
                    'field' => 'nominal_transaksi',
                ]
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table-b.create', [
            'title' => 'Create Table B'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kode_toko = '';
        $nominal_transaksi = '';

        if ($request->has('file')) {
            $file = $request->file('file');
            $filePath = $file->getRealPath();

            try {
                $spreadsheet = IOFactory::load($filePath);
                $worksheet = $spreadsheet->getActiveSheet();
                $data = [];

                foreach ($worksheet->getRowIterator() as $row) {
                    $rowData = [];

                    foreach ($row->getCellIterator() as $cell) {
                        $rowData[] = $cell->getValue();
                    }

                    $data[] = $rowData;
                }

                $kode_toko = $data[1][0];
                $nominal_transaksi = $data[1][1];
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        } else {
            $kode_toko = $request->input('kode-toko');
            $nominal_transaksi = $request->input('nominal-transaksi');
        }

        TableB::create([
            'kode_toko' => $kode_toko,
            'nominal_transaksi' => $nominal_transaksi,
        ]);

        return redirect()->route('table-b.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TableB $tableB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableB $tableB, string $param)
    {
        return view('table-b.edit', [
            'title' => 'Edit Table B',
            'data' => TableB::where('kode_toko', $param)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableB $tableB, string $param)
    {
        TableB::where('kode_toko', $param)->update([
            'kode_toko' => $request->input('kode-toko'),
            'nominal_transaksi' => $request->input('nominal-transaksi'),
        ]);

        return redirect()->route('table-b.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableB $tableB, string $param)
    {
        TableB::where('kode_toko', $param)->delete();

        return redirect()->route('table-b.index');
    }
}
