@if (isset($breadcrumbs))
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @foreach ($breadcrumbs as $key => $breadcrumb)
                            <li class="breadcrumb-item active">
                                <a href="{{ $breadcrumb['url'] }}">{{ $key }}</a>
                            </li>
                        @endforeach
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endif