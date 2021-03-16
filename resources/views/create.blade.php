@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($documento)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($documento))
            <form name="formEdit" id="formEdit" method="post" action="{{url("documentos/$documento->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('documentos')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título:" value="{{$documento->titulo ?? ''}}" required><br>
                <select class="form-select" name="tipo_id" id="tipo_id" required>
                    <option value="{{$documento->relTipos->id ?? ''}}">{{$documento->relTipos->nome_tipo ?? 'Tipo do documento'}}</option>
                    @foreach($tipos as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->nome_tipo}}</option>
                    @endforeach
                </select><br>
                <input class="form-control" type="text" name="nome_arquivo" id="nome_arquivo" placeholder="Nome do Arquivo:" value="{{$documento->nome_arquivo ?? ''}}" required><br>
                <input class="btn btn-primary" type="submit" value="@if(isset($documento)) Editar @else Cadastrar @endif">
            </form>
    </div>
@endsection