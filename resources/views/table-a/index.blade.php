@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="{{ route('download.csv', ['title' => $title]) }}" class="btn btn-outline-success btn-lg"
                    target="_blank">
                    <i class="fas fa-file-csv"></i> Download CSV
                </a>
                <a href="{{ route('download.pdf', ['title' => $title]) }}" class="btn btn-outline-danger btn-lg"
                    target="_blank">
                    <i class="fas fa-file-pdf"></i> Download PDF
                </a>
            </div>
            <div class="card-tools">
                <a href="{{ route('table-a.create') }}" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-plus-square me-2"></i> Insert New Data
                </a>
            </div>
        </div>

        <div class="card-body">
            <x-table :rows="$data" :columns="$columns" route="table-a." />
        </div>
    </div>
@endsection
