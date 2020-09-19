<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.includes.navbar')
        @include('admin.includes.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                @yield('titulo')
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                    <button class="btn btn-danger" data-toggle="control-sidebar">Toggle Right Sidebar</button>
                </div>
            </div>
        </div>

        @include('admin.includes.footer')
        @include('admin.includes.success')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var errors = {!! $errors !!}
    </script>
    <script src="{{ asset('js/components/error.js')  }}"></script>
    @stack('scripts')
</body>
</html>
