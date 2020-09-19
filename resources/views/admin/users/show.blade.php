@extends('admin.layouts.app')
@section('content')
    @component('admin.components.show')
        @slot('title', $user->name)
        @slot('content')
            @include('admin.users.form')
        @endslot
        @slot('back')
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('users.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection
