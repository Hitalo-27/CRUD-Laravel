@extends ('templates.template')
@section ('content')
<section>
    <div class="home">
        <img class="logo" src="{{url('assets/img/logo.png')}}" alt="Logo">
        <h1 class="h1home">Bem Vindo!</h1>
        <h1 class="h1home2">Faça a Sua consulta no banco de dados!</h1>

        <a class="button" href="/generos">
            Consulta no Banco de Dados
        </a>
    </div>

</section>
@endsection