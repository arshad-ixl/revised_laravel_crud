@extends('layouts.app')
@section('title')
    All Students Details   
@endsection

@section('content')
<table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Roll No.</th>
        <th scope="col">Name</th>
        <th scope="col">State</th>
        <th scope="col">City</th>
        <th scope="col">Image</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_student_details as $item)
            <tr>
                <th scope="row">{{$item->student_roll}}</th>
                <td>{{$item->student_name}}</td>
                <!-- // displaying state -->
                @foreach ($state_data as $state)
                    @if($item->student_state == $state->id)
                    <td>{{$state->name}}</td>  
                    @endif 
                @endforeach
                <!-- // displaying city -->
                @foreach ($city_data as $city)
                    @if($item->student_city == $city->id)
                    <td>{{$city->city}}</td>  
                    @endif 
                @endforeach
                <td><img src="{{url('/uploads/emp_img/'.$item->student_img)}}" alt="studen_image" style="height:100px;width:100px "/></td>
                <td><a class="btn btn-outline-dark" href="{{route('students.edit',$item->id)}}">Update</a></td>
                <form action="{{route('students.destroy',$item->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <td><input class="btn btn-outline-dark" type="submit" value="Delete"></button><td></form>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection