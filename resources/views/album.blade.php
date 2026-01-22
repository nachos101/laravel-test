@extends('layout.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Artista</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
            @foreach($albums as $album)
            <tr>
                <td>{{ $album->id }}</td>
                <td>{{ $album->name }}</td>
                <td>{{ $album->artist }}</td>
                <td>{{ $album->genre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
