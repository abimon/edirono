@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('storage/css/adminator.css')}}">
<link rel="stylesheet" href="{{asset('storage/css/app.css')}}">
<link rel="stylesheet" href="{{asset('storage/css/themify_icons.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<!-- @App Content -->
<!-- =================================================== -->
<div class="row">
  <!-- #Left Sidebar ==================== -->
  <div class="col-md-2" id="">
    <ul class="nav flex-row">
      <li class="nav-item">
        <a class="nav-link" href="/">
          <span class="icon-holder">
            <i class="c-green-500 bi bi-house mR-10"></i>
          </span>
          <span class="title">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <span class="icon-holder">
            <i class="c-deep-purple-500 bi bi-speedometer mR-10"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/calendar">
          <span class="icon-holder">
            <i class="c-deep-orange-500 bi bi-calendar mR-10"></i>
          </span>
          <span class="title">Calendar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#category">
          <span class="icon-holder">
            <i class="c-deep-orange-500 bi bi-share mR-10"></i>
          </span>
          <span class="title">Add Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#resources">
          <span class="icon-holder">
            <i class="c-deep-orange-500 bi bi-building-gear mR-10"></i>
          </span>
          <span class="title">Add Project</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#files">
          <span class="icon-holder">
            <i class="c-deep-orange-500 bi bi-files mR-10"></i>
          </span>
          <span class="title">Project Photos</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-danger" href="/logout">
          <span class="icon-holder ">
            <i class="bi bi-power mR-10"></i>
          </span>
          <span>Logout</span>
        </a>
      </li>
      <hr>
    </ul>
  </div>

  <!-- #Main ============================ -->
  <div class="col-md-10">
    <!-- ### $Topbar ### -->

    <div>
      @yield('dashboard')
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="category" tabindex="-1" aria-labelledby="category" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="category">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/addCategory" method="post">
        <div class="modal-body text-black">
          @csrf
          <select name="category" class="form-control mb-2">
            <option value="">Arch or Knit?</option>
            <option value="Arch">Arch</option>
            <option value="Knit">Knit</option>
          </select>
          <div class="form-floating">
            <input type="text" name="sub_category" class="form-control mb-2" placeholder=" ">
            <label for="subcategory">Category</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" >Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="resources" tabindex="-1" aria-labelledby="resources" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resources">Add Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-black">
        <h2 class="" id="flush-headingOne">
          <div class="collapsed" type="button" data-bs-toggle="modal" data-bs-target="#archs">
            Archtectural
          </div>
        </h2>
        <hr>
        <h2 class="" id="flush-headingOne">
          <div class="collapsed" type="button" data-bs-toggle="modal" data-bs-target="#knits">
            Knits
          </div>
        </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="archs" tabindex="-1" aria-labelledby="archs" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="/addProject" enctype="multipart/form-data">
        <div class="modal-body text-black">
          @csrf
          <div class="mb-3">
            <select class="form-select" name="category_id">
              <option selected>Select Category</option>
              @foreach($categories->where('category', 'Arch') as $category)
              <option class="form-control" value="{{$category->id}}">{{$category->subcategory}}</option>
              @endforeach
            </select>
            @error('category')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="title" placeholder=" ">
            <label for="floatingInput">Project Title</label>
            @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="location" placeholder=" ">
            <label for="floatingInput">Project Location</label>
            @error('location')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
           <textarea name="description" class="form-control" placeholder=" "></textarea>
            <label for="floatingInput">Project Description</label>
            @error('location')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="row mb-3">
            <label for="file" class="">{{ __('File') }}</label>

            <div class="">
              <input id="file" type="file" accept="image/*" class="form-control @error('file') is-invalid @enderror" name="file" required autocomplete="">

              @error('file')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="isOngoing" value="1" checked>
                <label class="form-check-label" for="remember">
                  {{ __('Project Ongoing') }}
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="files" tabindex="-1" aria-labelledby="files" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Project Photos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="/addFiles" enctype="multipart/form-data">
        <div class="modal-body text-black">
          @csrf
          <div class="mb-3">
            <select class="form-select" name="project_id">
              <option selected>Select Project</option>
              @foreach($projects as $project)
              <option class="form-control" value="{{$project->id}}">{{$project->title}}</option>
              @endforeach
            </select>
            @error('project')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="row mb-3">
            <label for="file" class="">{{ __('File') }}</label>

            <div class="">
              <input type="file" multiple accept="image/*" class="form-control @error('file') is-invalid @enderror" name="files[]" required>

              @error('file')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="knits" tabindex="-1" aria-labelledby="knits" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Knitting Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="/uploadresource" enctype="multipart/form-data">
        <div class="modal-body text-black">
          @csrf
          <div class="mb-3">
            <select class="form-select" name="category">
              <option selected>Select Category</option>
              <option class="form-control" value="">Clothing</option>
              <option class="form-control" value="">Decoration</option>
              <option class="form-control" value="">Others</option>
            </select>
            @error('category')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="title" placeholder=" ">
            <label for="floatingInput">Project Title</label>
            @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="location" placeholder=" ">
            <label for="floatingInput">Project Location</label>
            @error('location')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="row mb-3">
            <label for="file" class="">{{ __('File') }}</label>

            <div class="">
              <input id="file" type="file" accept="image/*" class="form-control @error('file') is-invalid @enderror" name="file" required autocomplete="">

              @error('file')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="isOngoing" value="1" checked>
                <label class="form-check-label" for="remember">
                  {{ __('Project Ongoing') }}
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{asset('storage/js/adminator.js')}}"></script>
<script src="{{asset('storage/js/imageUpload.js')}}"></script>
<script src="{{asset('storage/js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection