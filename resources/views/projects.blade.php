@extends('layouts.app')
@section('content')
<div id="fh5co-portfolio">
    <div class="row nopadding">
        @foreach($projects as $project)
        <div class="col-md-6 animate-box">
            <a href="/projects/{{$project->title}}" class="portfolio-grid">
                <img src="{{asset('storage/projects/'.$project->file_path)}}" class="img-responsive">
                <div class="desc">
                    <h3>{{$project->title}} Project</h3>
                    <span>{{$project->project_location}}</span>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection