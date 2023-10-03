@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Using Form
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('table-b.update', ['param' => $data['kode_toko']]) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-md-4">
                        <label for="">Kode Toko</label>
                        <input type="number" class="form-control" name="kode-toko" value="{{ $data['kode_toko'] }}">
                    </div>
                    <div class="col-md-4">
                        <label for="">Area Sales</label>
                        <input type="text" class="form-control" name="area-sales" value="{{ $data['area_sales'] }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">
                    Save
                </button>
            </form>
        </div>
    </div>
@endsection
