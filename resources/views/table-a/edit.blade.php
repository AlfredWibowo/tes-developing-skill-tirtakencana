@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Using Form
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('table-a.update', ['param' => $data['kode_toko_baru']]) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-md-4">
                        <label for="">Kode Toko Baru</label>
                        <input type="number" class="form-control" name="kode-toko-baru"
                            value="{{ $data['kode_toko_baru'] }}">
                    </div>
                    <div class="col-md-4">
                        <label for="">Kode Toko Lama</label>
                        <input type="number" class="form-control" name="kode-toko-lama"
                            value="{{ $data['kode_toko_lama'] }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">
                    Save
                </button>
            </form>
        </div>
    </div>
@endsection
