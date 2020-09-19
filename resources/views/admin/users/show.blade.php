@extends('admin.layouts.app')
@section('content')
    @component('admin.components.show')
        @slot('title', $user->name)
        @slot('form')
            @include('admin.users.form')
        @endslot
    @endcomponent
@endsection
