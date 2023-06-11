@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Movies
@endsection

@section( 'content' )

<h1>Pagina Movies</h1>


@foreach( $movies as $elem )
    <h2>{{ $elem['title'] }}</h2>
@endforeach

@endsection