@extends('layouts.master')

@section('conteudo')
    <div class="row mt-2">
        <div class="card-body">
        <div class="col-md-3">
            <img src="{{ asset('/imagens/' . $produto->imagem) }}" class="card-img-top mb-2" alt="...">

            {!! Form::open(['url' => route('publico.carrinho.store')]) !!}
                {!! Form::hidden('produto', $produto->id) !!}
                {!! Form::number('quantidade', 1, ['class' => 'form-control text-center mb-1']) !!}
                {!! Form::submit('Adicionar ao Carrinho', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-9">
            <h2 class="card-title text-primary">{{ $produto->nome }}</h2>
            <h3 class="text-danger">R$ {{ number_format($produto->preco, 2, ',', '.') }}</h3>

            <h5 class="text-primary mt-3">Descrição</h5>
            <p>{{ $produto->descricao }}</p>
        </div>
        </div>
    </div>
@endsection