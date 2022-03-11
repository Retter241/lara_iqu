@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('sidebar')

            <div class="col-md-9">
                
                <div class="row">
                    
 
@foreach($parts as $item)

<div class="card col-md-4"  >
  <div class="card-body">
    <h5 class="card-title mb-4">{{$item->name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted"><strong>Weight: </strong>{{$item->weight}}</h6>
    <p class="card-text text-muted"><strong>Price: </strong>{{$item->price}}</p>
    <p class="card-text text-muted"><strong>Manufacturer: </strong>{{$item->manufacturer->name}}</p>
    <p class="card-text text-muted"><strong>Category: </strong>{{$item->category->name}}</p>
    <!-- <a href="#" class="card-link">Card link</a> -->
  </div>
</div>

@endforeach

{{-- $parts->links() --}}
{{ $parts->links() }}

 

                </div>
            </div>
        </div>
    </div>
@endsection