@extends('layout')
@section('content')

<div class="container-md">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">LastName</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $id)
        <tr>
            @foreach($id as $forms => $item)
                <td  scope="row">{{$item}}</td>
            @endforeach  
        </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection