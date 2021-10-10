@extends ('templates.template')
@section ('content')
<section class="tabelas">
    <div class="container-tabelas">
        <div class="tabelasForm">
            <h1>Gêneros de Filmes</h1>

            <div class="tabela">
                <table>
                    <tr>
                        <td class="titleTable">
                            ID
                        </td>

                        <td class="titleTable">
                            Gênero
                        </td>

                        <td class="titleTable">
                            Sugestão de Filme
                        </td>

                        <td class="titleTable">
                            Diretor
                        </td>
                    </tr>
                    @foreach($generos as $gen)
                    <tr>
                        <td>
                            {{$gen->idGenero}}
                        </td>

                        <td>
                            {{$gen->genero}}
                        </td>

                        <td>
                            {{$gen->sugestao}}
                        </td>

                        <td>
                            {{$gen->diretor}}
                        </td>

                        <td>
                            <a href="/generos/{{$gen->idGenero}}">
                                Excluir
                            </a>
                        </td>

                        <td>
                            <a href="/genero-editar/{{$gen->idGenero}}/editar">
                                Alterar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection