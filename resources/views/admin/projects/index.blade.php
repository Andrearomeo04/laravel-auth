@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h2>I miei progetti</h2>
                <a href="" class="btn btn-success">Aggiungi</a>
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
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection