@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Aggiungi</h2>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.project.store') }}" method="post">
                @csrf 
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label">Nome del Progetto</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="Nome del Progetto">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Descrizione</label>
                        <textarea name="description" id="" cols="25" row="10" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection