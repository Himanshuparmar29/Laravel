
  @foreach ($data as $key => $student) 
    {{$student->name}}{{"|"}}{{$student->age}}<br/>
   
  @endforeach
