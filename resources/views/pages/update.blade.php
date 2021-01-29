@extends('layouts.app')
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
</script>

@section('title')
    Update Record   
@endsection

@section('content')
    <div>
        <form method="POST" action="{{route('students.update',$student->id)}}" enctype="multipart/form-data">
        {{method_field('PATCH')}}
        {{csrf_field()}}
        <div class="row my-2 g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Roll Number</label>
            </div>
            <div class="col-auto">
              <input type="number" id="roll" name="up_roll" class="form-control" aria-describedby="passwordHelpInline" value="{{$student->student_roll}}">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>

          <div class="row my-2 g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Name</label>
            </div>
            <div class="col-auto">
              <input type="text" id="name" name="up_name" class="form-control" aria-describedby="passwordHelpInline" value="{{$student->student_name}}">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>

          <div class="row my-2 g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">State</label>
            </div>
            <div class="col-auto">
                {{-- state  starts here --}}
                    
                        <select id="state" name="up_state">
                            @foreach ($states_data as $item)
                            <option value="<?php echo $item->id ?>" <?php if($student->student_state==$item->id){ echo 'selected';}?> ><?php echo $item->name; ?></option>
                            @endforeach
                        </select>
                    
                {{-- state ends here --}}
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>

          <div class="row my-2 g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">City</label>
            </div>
            <div class="col-auto">
                {{-- city  starts here --}}
                    
                        <select id="city" name="up_city">
                            @foreach ($city_data as $item)
                            <option value="<?php echo $item->id ?>" <?php if($student->student_city==$item->id){ echo 'selected';}?> ><?php echo $item->city; ?></option>
                            @endforeach
                        </select>
                    
                {{-- city ends here --}}
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>


          <div class="row my-2 g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Old Image</label>
            </div>
            <div class="col-auto">
                <img src="{{url('/uploads/emp_img/'.$student->student_img)}}" alt="studen_image" style="height:100px;width:100px "/>
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>


          <div class="row my-2 g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Image</label>
            </div>
            <div class="col-auto">
              <input type="file" name="up_img" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>
        <button type="submit" class="btn btn-dark my-2">Update</button>
        </form>
    </div>
@endsection

<script>
 $(document).ready(function(){
        
        $('#state').change(function(){
            // alert($('#state').val());
            const selected = $('#state').val();
            $.ajax({
                url:"{{route('students.cities')}}",
                type:"get",
                data:{state:selected},
                success:function(cities){
                    $('#city').html(cities)
                }
            });
        });
    });
</script>