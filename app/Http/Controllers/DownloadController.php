<?php

namespace App\Http\Controllers;

use App\Models\TableA;
use App\Models\TableB;
use App\Models\TableC;
use App\Models\TableD;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function getData($title)
    {
        $data = [];

        switch (substr($title, -1)) {
            case 'A':
                $data = TableA::all();
                break;
            case 'B':
                $data = TableB::all();
                break;
            case 'C':
                $data = TableC::all();
                break;
            default:
                $data = TableD::all();
                break;
        }

        return $data->toArray();
    }

    public function downloadCSV($title)
    {
        $data = $this->getData($title);

        //generate csv
        $output = fopen('php://temp', 'w');

        $header = collect($data[0])->keys()->map(function ($item) {
            return ucwords(str_replace('_', ' ', $item));
        })->toArray();

        fputcsv($output, $header);

        foreach ($data as $row) {
            fputcsv($output, $row);
        }

        rewind($output);

        $csvData = stream_get_contents($output);

        fclose($output);

        //download csv
        $fileName = $title . '.csv';
        $mimeType = 'text/csv';

        return response($csvData)
            ->header('Content-Type', $mimeType)
            ->header('Content-Disposition', 'attachment' . '; filename="' . $fileName . '"');
    }

    public function downloadPDF($title)
    {
        $dictView = [
            'A' => 'table-a.pdf',
            'B' => 'table-b.pdf',
            'C' => 'table-c.pdf',
            'D' => 'table-d.pdf',
        ];

        $data = $this->getData($title);
        $pdf = FacadePdf::loadView($dictView[substr($title, -1)], [
            'data' => $data,
            'title' => $title
        ]);

        return $pdf->download($title . '.pdf');
    }
}
