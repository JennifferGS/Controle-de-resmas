@extends('layouts.main')
@section('title', 'Novacap - Histórico')
@section('content')

    <br><br>


    <div class="container">

        <a class="btn btn-outline-primary" href="/cadastro" role="button">NOVA SOLICITAÇÃO</a>
        <br><br>


        @if (session('msg'))
            <div class="alert alert-success" role="alert"style="width: 1200px;">
                <p class="msg">
                    {{ session('msg') }}
                </p>
            </div>
        @endif
        {{-- dd($solicitacao) --}}
        <div class="mh-100" style="width: 1200px; height: 1000px;">
            <div class="card border-dark" style="max-width: 700rem;">
                <div class="card-header text-white" style="background-color: #044f84;">Histórico de solicitação de resmas
                </div>
                <div class="card-body text-dark">
                    <p class="card-text">

                        {{-- <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                          </form> --}}

                        {{--  @if ($search)     
                  <h1>Buscando por: {{ $search }}</h1>
                    @endif --}}
                    <form class="d-flex" role="search"  method="ANY">
                        <select class="form-control" name="id_setor" id="id_setor">
                            <option>Selecione um setor</option>

                            @foreach ($setores as $setor)
                                <option value="{{ $setor->id }}">{{ $setor->Nome }} - {{ $setor->Sigla }}
                                </option>
                            @endforeach
                        </select>
                        
                        <button class="btn btn-outline-success justify-content-md-end" type="submit"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form
                    
                     {{--  <form action="{{route('historico')}}" method="GET">
                        <div class="form-group">
                            <select class="form-control" name="id_setor" id="id_setor">
                                <option>Selecione um setor</option>

                                @foreach ($setores as $setor)
                            <option value="{{ $setor->id }}">{{ $setor->Nome }} - {{ $setor->Sigla }}
                            </option>
                            @endforeach
                            </select>
                            <div class="justify-content-md-end"><button type="submit"
                                    class="btn btn-outline-success ">Buscar</button>
                            </div>
                        </div>
                    </form> --}} <br>
                    <br>
                    <table class="table table-hover">
                        <thead class="table-primary" style="background-color: 	#E1F5FE;">
                            <tr>
                                <th scope="col">Número de solicitação</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Matrícula</th>
                                <th scope="col">Setor</th>
                                <th scope="col">Quantidade de resmas</th>
                                <th scope="col">Data da solicitação</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($solicitacao as $solic)
                                <tr>
                                    <th value="{{ $solic->id }}">{{ $solic->id }}</th>
                                    <th value="{{ $solic->id }}">{{ $solic->nome }}</th>
                                    <th value="{{ $solic->id }}">{{ $solic->matricula }}</th>
                                    <td value="{{ $solic->id }}">{{ $solic->setores->Nome }} -
                                        {{ $solic->setores->Sigla }}</td>
                                    <td value="{{ $solic->id }}">{{ $solic->quant_resmas }}</td>
                                    <td value="{{ $solic->id }}">{{ $solic->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                    <div>
                        {{ $solicitacao->links() }}
                    </div>
                    </p>
                </div>


            @endsection
