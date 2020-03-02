@extends('layouts.master')
@section('content')

<div class="content">
 
  @if (session('status')) 
    <div class="card-body">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
  @endif


  <h2 class="ml-2"><u>Recent Uploads</u></h2>
  <!-- TABLE HEAD INVERSE -->
  <table class="table table-bordered table-hover ml-2">
    <thead class="thead-dark">
        <tr>
            <th>Course Code</th>
            <th>File Name</th>
            <th>File Type</th>
            <th>Download</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

      @foreach ($data as $file)
          @php
              $fileName=$file->file_name;
          @endphp
          <tr>
            <th scope="row">{{$file->course_id}}</th>
            <td>{{$file->file_name}}</td>
            <td>{{$file->file_type}}</td>
            <td><a href="{{ route('download',$file->id) }}"><i class="fa fa-download"></i></a></td>
            <td><a href="{{route('contents.show',$file->id) }}"><i class="fab fa-app-store-ios"></i></a></td>

            <td>

              <form method="POST" action="{{route('contents.destroy',$file->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
              </form>
              <!--a href="{{--route('contents.destroy',$file->id) --}}"></a>
              <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="far fa-trash-alt"></i>
              </button-->

              <!-- Modal ->
              <div class="modal fade" style="position:fixed" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Wait</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete<p>
                        <b>{{-- $fileName --}}  ???</b>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      
                      
                    </div>
                  </div>
                </div>
              </div-->
            </td>
        </tr>
      @endforeach
        
    </tbody>
</table>
</div>   
@endsection



