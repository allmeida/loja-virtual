@extends('adminlte::page')

@section('title', 'Formulário de Usuário')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulário de Usuário</h3>
        </div>
        <div class="card-body">

            @if (isset($user))
                {!! Form::model($categoria, ['url' => route('admin.categoria.update', $categoria), 'method' => 'put']) !!}
            @else
                {!! Form::open(['url' => route('admin.categoria.store')]) !!}
            @endif
                <div class="form-group">
                    {!! Form::label('name', 'Categoria') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
