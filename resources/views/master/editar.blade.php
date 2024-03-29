@extends('adminlte::page')

@section('title', 'GoControle')

@section('content_header')
    <h1><i class="fas fa-edit"></i> Editando endereço {{ $endereco->endereco }}</h1>
@stop

@section('content')

    <style>
        .msg {
                background-color: #D4EDDA;
                color: #155724;
                border: 1px solid #C3E6CB;
                width: 100%;
                margin-bottom: 15px;
                text-align: center;
                padding: 10px;
        }
        #msg2 {
            background-color: #edd4d4;
            color: #ff0000;
            border: 1px solid #ffebeb;
            width: 100%;
            margin-bottom: 15px;
            text-align: center;
            padding: 10px;
        }
    

    </style>

@if(session('msg'))
<p class="msg">{{ session('msg') }}</p>
@endif
@if(session('msg2'))
<p class="msg" id="msg2">{{ session('msg2') }}</p>
@endif

<div class="card card-primary" style="max-width:50%;">
    <div class="card-body">
        <form style="display:inline;" action="/estoque/endereco/update/{{ $endereco->id }}" method="POST">
            @method('POST')
            @csrf

            <label for="Nome">Endereço</label>
            <input value="{{ $endereco->endereco }}" name="endereco" class="form-control form-control" type="text" placeholder="Digite o Endereço" required>
            <br>
            <label for="Nome">Descrição Breve</label>
            <input value="{{ $endereco->descricao }}" name="descricao" class="form-control form-control" type="text" placeholder="Digita algo a mais sobre o endereço" required>
            <br>
            <label for="Nome">Status</label>
            <select class="form-control" name="bloqueio">
                <option value="0" @php if($endereco->bloqueio == 0){ echo "selected=''";} @endphp>Desbloqueado</option>
                <option value="1" @php if($endereco->bloqueio == 1){ echo "selected=''";} @endphp>Inativo</option>
                <option value="2" @php if($endereco->bloqueio == 2){ echo "selected=''";} @endphp>Bloqueado</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <form style="display:inline;" action="/estoque/endereco/delete/{{$endereco->id}}" method="POST">
            @method('POST')
            @csrf
            <button type="submit" class="btn btn-danger" style="float:right;">Deletar Endereço Permanentemente</button>
        </form>
    </div>

</div>

@stop

@section('footer')      
    <strong>Copyright © 2014-2022 <a href="https://goeyewear.com.br/">GO Eyewear</a>.</strong>
    Todos direitos reservados.
    <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop