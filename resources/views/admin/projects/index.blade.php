@extends('layouts.app')

@section('content')
    <table class="table p-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Data D'inizio</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td><a class="btn btn-warning"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a></td>
                    <td><a class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
