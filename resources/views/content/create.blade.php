@extends('layouts.master')

@section('content')
<div class="content">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <div class="container-fluid py-3 mb-4">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card card-body custom-card">
              <form method="POST" action="{{ route('contents.store') }}" enctype="multipart/form-data">

                @csrf

                <select class="custom-select mb-5"  name="course_id">
                  <option selected="true" disabled="disabled">Seclect Course</option> 
                  <option value="CSE351"{{ old('course_id') == "CSE351" ? 'selected' : '' }} >Computer Graphics</option>
                  <option value="CSE352"{{ old('course_id') == "CSE352" ? 'selected' : '' }}>Computer Graphics Lab</option>
                  <option value="CSE353"{{ old('course_id') == "CSE353" ? 'selected' : '' }}>Computer Networks</option>
                  <option value="CSE354"{{ old('course_id') == "CSE354" ? 'selected' : '' }}>Computer Networks Lab</option>
                  <option value="CSE355"{{ old('course_id') == "CSE355" ? 'selected' : '' }}>Numerical Method</option>
                  <option value="CSE356"{{ old('course_id') == "CSE356" ? 'selected' : '' }}>Numerical Method Lab</option>
                  <option value="CSE359"{{ old('course_id') == "CSE359" ? 'selected' : '' }}>Software Engineering</option>
                  <option value="CSE360"{{ old('course_id') == "CSE360" ? 'selected' : '' }}>Software Engineering Lab</option>
                  <option value="CSE357"{{ old('course_id') == "CSE357" ? 'selected' : '' }}>Microprocessor and Micorcontroller</option>
                  <option value="CSE358"{{ old('course_id') == "CSE358" ? 'selected' : '' }}>Microprocessor and Micorcontroller Lab</option>
                </select>

                <select class="custom-select mb-5" name="category">
                    <option selected="true" disabled="disabled">Seclect Category</option> 
                    <option value="Slides"{{ old('category') == "Slides" ? 'selected' : '' }}>Slides</option>
                    <option value="Notes"{{ old('category') == "Notes" ? 'selected' : '' }}>Notes</option>
                    <option value="Books"{{ old('category') == "Books" ? 'selected' : '' }}>Books</option>
                </select>
  
                <div class="form-group mb-5">
                  <label for="file">File input</label>
                  <input class="form-control-file" type="file" name="file" id="f" />
                  <small class="form-text text-muted" id="fileHelp"
                    >Max 10mb size</small
                  >
                </div>
                <button class="btn btn-dark btn-block mb-5" type="submit">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection