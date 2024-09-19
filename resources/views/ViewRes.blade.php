@extends('layouts.app1')
@section('content')
<div >
&nbsp;<br/>
<h1 class="text-center " style="background-color: #1d8b37; ">Reservation Table</h1>
&nbsp;<br/>
<table class="table table-hover">
    <thead>
      <tr style="background-color:rgb(188, 121, 121);">
        <th scope="col">User_Id</th>
        <th scope="col">Name</th>
        <th scope="col">Seat_Number</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>1</td>
        <td>2024/09/26</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>2</td>
        <td>2024/09/26</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Jackson</td>
        <td>3</td>
        <td>2024/09/26</td>
      </tr>
    </tbody>
  </table>
  &nbsp;<br/>
  &nbsp;<br/>
</div>
 @endsection
