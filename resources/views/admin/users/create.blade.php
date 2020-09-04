@extends('admin.layouts.app')
@section('content')
    @component('admin.components.create')
        @slot('title', 'Cadastrar um usuário')
        @slot('url', route('users.store'))
        @slot('form')
            @include('admin.users.form')
        @endslot
    @endcomponent
@endsection
