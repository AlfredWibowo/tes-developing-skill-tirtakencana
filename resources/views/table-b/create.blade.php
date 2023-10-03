@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Using Form
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('table-b.store') }}" method="post">
                @csrf
                @method('post')

                <div class="row">
                    <div class="col-md-4">
                        <label for="">Kode Toko</label>
                        <input type="number" class="form-control" name="kode-toko">
                    </div>
                    <div class="col-md-4">
                        <label for="">Nominal Transaksi</label>
                        <input type="number" class="form-control" name="nominal-transaksi">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">
                    Save
                </button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Using Excel File
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('table-b.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="row">
                    <div class="col-md-4">
                        <label for="">File</label>
                        <input type="file" class="form-control" name="file" accept=".xlsx">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">
                    Save
                </button>
            </form>
        </div>
    </div>
@endsection
