@extends('layouts.index2',['title'=>'Dashboard'])
@section('dashboard')
<!-- ### $App Screen Content ### -->
<main class='main-content bgc-grey-100 p-5'>
    <div id='mainContent'>
        <div class="row ">
            <div class="w-100">
                <div class="row gap-20">
                    <!-- #Toatl Visits ==================== -->
                    <div class='col-md-3 col-6 p-2'>
                        <a href="#members" class="card p-2">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1"><i class="bi bi-people"></i> Clients</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash"></span>
                                        </div>
                                        <div class="peer">
                                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{$users->count()}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- #Total Projects Views ==================== -->
                    <div class='col-md-3 col-6 p-2'>
                        <a href="#projects" class="card p-2">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1"><i class="bi bi-files"></i> Projects</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash2"></span>
                                        </div>
                                        <div class="peer">
                                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{$projects->count()}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <!-- #Sales Report ==================== -->
                <div class="bd bgc-white">
                    <div id="projects">
                        <div class="w-100 p-2">
                            <h2 class="text-center">Projects</h2>
                        </div>
                        <div class="w-100">
                            <div class="bg-info text-white p-2">
                                <div class="peers ai-c jc-sb gap-40">
                                    <div class="text-center">
                                        <h3 class="text-danger">{{date('F Y')}}</h3>
                                        <h5 class="text-danger">Projects Report</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive p-20">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class=" bdwT-0">#</th>
                                            <th class=" bdwT-0">Title</th>
                                            <th class=" bdwT-0">Location</th>
                                            <th class=" bdwT-0">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($projects as $key=>$project)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td>{{$project->title}}</td>
                                            <td>{{$project->project_location}}</td>
                                            <td type='button' data-bs-toggle="modal" data-bs-target="#project{{$project->id}}">More...</td>
                                        </tr>
                                        <div class="modal fade" id="project{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">{{$project->Title}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST" action="/editProject/{{$project->id}}" enctype="multipart/form-data">
                                                        <div class="modal-body text-black">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <select class="form-select" name="category_id">
                                                                    <option value="{{$project->subcategory}}" >{{$project->subcategory}}</option>
                                                                    @foreach($categories->where('',) as $category)
                                                                    <option class="form-control" value="{{$category->subcategory}}">{{$category->subcategory}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('category')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="title" value="{{$project->title}}">
                                                                <label for="floatingInput">Project Title</label>
                                                                @error('title')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" name="location" value={{$project->project_location}}>
                                                                <label for="floatingInput">Project Location</label>
                                                                @error('location')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <textarea name="description" class="form-control" >{{$project->description}}</textarea>
                                                                <label for="floatingInput">Project Description</label>
                                                                @error('location')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                            
                                                            <div class="row mb-3">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <div class="form-check">
                                                                        @if($project->isOngoing==1)
                                                                        <input class="form-check-input" type="checkbox" name="isOngoing" value="1" checked>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="isOngoing" value="0">
                                                                        @endif
                                                                        <label class="form-check-label" for="remember">
                                                                            {{ __('Project Ongoing') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a href="/deleteProject/{{$project->id}}">
                                                                <button class="btn btn-danger mt-1">Discard</button>
                                                            </a>
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection