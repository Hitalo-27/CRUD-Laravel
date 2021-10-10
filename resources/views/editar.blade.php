@extends ('templates.template')
@section ('content')
<section class="contact">
    <div class="container-contact">
        <div class="contactForm">
            <form action="{{url('/genero-alterar/'.$generos->idGenero)}}" method="post">
            <h2>Alterar Gênero</h2>
                {{@csrf_field()}}
                <div class="inputBox">
                    <input type="text" name="txGenero" value="{{$generos->genero}}" required />
                    <span>Genero</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="txSugestao" value="{{$generos->sugestao}}" required />
                    <span>Sugestão</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="txDiretor" value="{{$generos->diretor}}" required />
                    <span>Diretor</span>
                </div>

                <div class="inputBox">
                    <input type="submit" value="Salvar" />
                </div>
            </form>
        </div>
    </div>
</section>
@endsection