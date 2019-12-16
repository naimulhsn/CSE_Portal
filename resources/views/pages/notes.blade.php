@extends('layouts.master')

@section('content')
<div class="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fa fa-align-justify"></i> <span></span>
      </button>

      <!--<a class="navbar-brand" href="#">Navbar</a> -->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      ></button>
    </nav>
    <div class="container-fluid">

    <h1 style="margin-left : 16px"><u>All Notes For CSE-351</u></h1>
   <!-- TABLE HEAD INVERSE -->
  <table class="table ml-3">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>File Name</th>
            <th>File Type</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><a href="">Numerical Methods For Engineers.pdf</a></td>
            <td>PDF</td>
            <td>14/12/19</td>
            <td>12:15pm</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a href="">Graphics Lab Assesment Tasks.docx</a></td>
            <td>Word Document</td>
            <td>15/12/19</td>
            <td>9:00am</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><a href="">Computer Network Lec3.pptx</a></td>
            <td>PowerPoint Slide</td>
            <td>16/12/19</td>
            <td>5:00pm</td>
        </tr>
    </tbody>
</table>
    </div>
  </div>
@endsection