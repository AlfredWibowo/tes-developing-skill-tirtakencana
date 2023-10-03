<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div
            class="row mb-2 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0 page-title fw-bold">{{ $title ?? '' }}</h1>
            </div><!-- /.col -->
            {{-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @isset($breadcrumbs)
                        @foreach ($breadcrumbs as $breadcrum)
                            @if ($breadcrum['active'])
                                <li class="breadcrumb-item"><a href="{{ $breadcrum['route'] }}">{{ $breadcrum['name'] }}</a>
                                </li>
                            @else
                                <li class="breadcrumb-item active">{{ $breadcrum['name'] }}</li>
                            @endif
                        @endforeach
                    @endisset
                </ol>
            </div><!-- /.col --> --}}
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
