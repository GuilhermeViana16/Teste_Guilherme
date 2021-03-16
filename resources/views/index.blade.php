@extends('templates.template')

@section('content')

    <div class="col-8 m-auto table-responsive">
        @csrf
        <table class="table table-hover text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Tipo</th>
                <th scope="col">Arquivo</th>
                <th scope="col">Visualizar</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
            </thead>
            <tbody>
                @foreach($documento as $documentos)
                    @php
                        $tipo = $documentos -> find($documentos -> id) -> relTipos;
                    @endphp            
                    <tr>
                        <th scope="row">{{ $documentos->id }}</th>
                        <td>{{ $documentos -> titulo }}</td>
                        <td>{{ $tipo -> nome_tipo }}</td>
                        <td>{{ $documentos -> nome_arquivo }}</td>
                        <td>
                            <a href="{{url("documentos/$documentos->id")}}">
                                <button class="btn btn-dark"><i class="fa fa-eye"></i></button>
                            </a>
                        </td>
                        <td>
                            <a href="{{url("documentos/$documentos->id/edit")}}">
                                <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            </a>
                        </td>
                        <td>
                            <a href="{{url("documentos/$documentos->id")}}" class="js-del">
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
        </div> 
    </div>
@endsection