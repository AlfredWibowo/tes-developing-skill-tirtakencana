<?php

namespace App\Http\Controllers;

use App\Models\TableA;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TableAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('table-a.index', [
            'title' => 'Table A',
            'data' => TableA::all(),
            'columns' => [
                [
                    'label' => 'Kode Toko Baru',
                    'field' => 'kode_toko_baru',
                ],
                [
                    'label' => 'Kode Toko Lama',
                    'field' => 'kode_toko_lama',
                ]
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table-a.create', [
            'title' => 'Create Table A'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kode_toko_baru = '';
        $kode_toko_lama = '';

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

                $kode_toko_baru = $data[1][0];
                $kode_toko_lama = $data[1][1];
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        } else {
            $kode_toko_baru = $request->input('kode-toko-baru');
            $kode_toko_lama = $request->input('kode-toko-lama');
        }

        TableA::create([
            'kode_toko_baru' => $kode_toko_baru,
            'kode_toko_lama' => $kode_toko_lama,
        ]);

        return redirect()->route('table-a.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TableA $tableA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableA $tableA, string $param)
    {
        return view('table-a.edit', [
            'title' => 'Edit Table A',
            'data' => TableA::where('kode_toko_baru', $param)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableA $tableA, string $param)
    {
        TableA::where('kode_toko_baru', $param)->update([
            'kode_toko_baru' => $request->input('kode-toko-baru'),
            'kode_toko_lama' => $request->input('kode-toko-lama'),
        ]);

        return redirect()->route('table-a.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableA $tableA, string $param)
    {
        TableA::where('kode_toko_baru', $param)->delete();

        return redirect()->route('table-a.index');
    }
}
