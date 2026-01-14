<h1>Bem vindo a pagina inicial</h1>

<p>Ola, {{ $name }}!</p>

<p>Seus hábitos:</p>
<ul>
    @foreach($habits as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@auth
    <p>Voce esta logado</p>
@endauth

@guest
    <p>Voce nao esta logado</p>
@endguest