@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>
        </div>
    </div>
</div>
@endsection