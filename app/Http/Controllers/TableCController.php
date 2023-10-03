<?php

namespace App\Http\Controllers;

use App\Models\TableC;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TableCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('table-c.index', [
            'title' => 'Table C',
            'data' => TableC::all(),
            'columns' => [
                [
                    'label' => 'Kode Toko',
                    'field' => 'kode_toko',
                ],
                [
                    'label' => 'Area Sales',
                    'field' => 'area_sales',
                ]
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table-c.create', [
            'title' => 'Create Table C'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kode_toko = '';
        $area_sales = '';

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
                $area_sales = $data[1][1];
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        } else {
            $kode_toko = $request->input('kode-toko');
            $area_sales = $request->input('area-sales');
        }

        TableC::create([
            'kode_toko' => $kode_toko,
            'area_sales' => $area_sales,
        ]);

        return redirect()->route('table-c.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TableC $tableC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableC $tableC, string $param)
    {
        return view('table-c.edit', [
            'title' => 'Edit Table C',
            'data' => TableC::where('kode_toko', $param)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableC $tableC, string $param)
    {
        TableC::where('kode_toko', $param)->update([
            'kode_toko' => $request->input('kode-toko'),
            'area_sales' => $request->input('area-sales'),
        ]);

        return redirect()->route('table-c.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableC $tableC, string $param)
    {
        TableC::where('kode_toko', $param)->delete();

        return redirect()->route('table-c.index');
    }
}
