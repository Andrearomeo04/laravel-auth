@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h2>I miei progetti</h2>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-success">Aggiungi</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titolo</th>
                        <th>Slug</th>
                        <th>Descrizione</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        +<td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection