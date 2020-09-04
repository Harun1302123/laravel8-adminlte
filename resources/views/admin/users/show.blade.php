@extends('admin.layouts.app')
@section('content')
    @component('admin.components.show')
        @slot('title', $user->name)
        @slot('form')
            @include('admin.users.form', ['show' => true])
        @endslot
    @endcomponent
@endsection


@push('scripts')
    <script>
        $('.form-control').attr('readonly',true);
    </script>
@endpush