@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Using Form
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('table-d.update', ['param' => $data['kode_sales']]) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-md-4">
                        <label for="">Kode Sales</label>
                        <input type="text" class="form-control" name="kode-sales" value="{{ $data['kode_sales'] }}">
                    </div>
                    <div class="col-md-4">
                        <label for="">Nama Sales</label>
                        <input type="text" class="form-control" name="nama-sales" value="{{ $data['nama_sales'] }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">
                    Save
                </button>
            </form>
        </div>
    </div>
@endsection
