@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1><hr>
    <div class="col-8 m-auto">

        @php
            $tipo = $documento -> find($documento -> id) -> relTipos;
        @endphp            
        Título: {{ $documento -> titulo }}</br>
        Tipo: {{ $tipo -> nome_tipo }}</br>
        Nome do Arquivo: {{ $documento -> nome_arquivo }}

        <div>
            <a class="btn btn-primary float-right mt-3" href="{{ route('documentos.index') }}" title="Voltar"> <i class="fas fa-backward "></i> Voltar </a>
        </div>

    </div>
@endsection