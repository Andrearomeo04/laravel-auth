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
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection