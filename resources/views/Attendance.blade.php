@extends('layouts.app1')
@section('content')
<h1 class="text-center" style="background-color: #1d8b37;">Attendance Table</h1></br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Date</th>
      <th scope="col">Attendance Marking</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2024-09-25</td>
      <td><input type="checkbox" name="attendance1"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>2024-09-25</td>
      <td><input type="checkbox" name="attendance2"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>2024-09-25</td>
      <td><input type="checkbox" name="attendance3"></td>
    </tr>
  </tbody>
</table>
@endsection