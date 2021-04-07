@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row">
        <div class="col-md-3">
            <h2>Empresas</h2>
        </div>
        <div class="col-md-2">
            <a href="" class="btn btn-dark mt-2"><i class="fas fa-plus"></i>&nbsp;&nbsp; Adicionar</a>
        </div>
        <div class="col-md-offset-2 col-md-7">

        </div>
    </div>
@stop

@section('content')
    @if ($companies->count())
        <div class="w3-card-4">
            <div class="table-resposive">
                <table class="table table-striped table-hover">
                    <thead class="w3-dark-gray w3-center">
                        <tr>
                            <th width="60%">Empresa</th>
                            <th width="20%">Logo</th>
                            <th width="60%">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->logo }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-default-dark">Nenhum registro encontrado.</div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
