@extends ('templates.template')
@section ('content')
<section class="contact">
    <div class="container-contact">
        <div class="contactForm">
            <form action="{{url('/genero/inserir')}}" method="post">
                <h2>Inserir um Novo Gênero</h2>
                @csrf
                <div class="inputBox">
                    <input type="text" name="txGenero" required />
                    <span>Genero</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="txSugestao" required />
                    <span>Sugestão</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="txDiretor" required />
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