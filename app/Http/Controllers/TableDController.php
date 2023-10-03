<?php

namespace App\Http\Controllers;

use App\Models\TableD;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TableDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('table-d.index', [
            'title' => 'Table D',
            'data' => TableD::all(),
            'columns' => [
                [
                    'label' => 'Kode Sales',
                    'field' => 'kode_sales',
                ],
                [
                    'label' => 'Nama Sales',
                    'field' => 'nama_sales',
                ]
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table-d.create', [
            'title' => 'Create Table D'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kode_sales = '';
        $nama_sales = '';

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

                $kode_sales = $data[1][0];
                $nama_sales = $data[1][1];
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        } else {
            $kode_sales = $request->input('kode-sales');
            $nama_sales = $request->input('nama-sales');
        }

        TableD::create([
            'kode_sales' => $kode_sales,
            'nama_sales' => $nama_sales,
        ]);

        return redirect()->route('table-d.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TableD $tableD)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableD $tableD, string $param)
    {
        return view('table-d.edit', [
            'title' => 'Edit Table D',
            'data' => TableD::where('kode_sales', $param)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableD $tableD, string $param)
    {
        TableD::where('kode_sales', $param)->update([
            'kode_sales' => $request->input('kode-sales'),
            'nama_sales' => $request->input('nama-sales'),
        ]);

        return redirect()->route('table-d.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableD $tableD, string $param)
    {
        TableD::where('kode_sales', $param)->delete();

        return redirect()->route('table-d.index');
    }
}
