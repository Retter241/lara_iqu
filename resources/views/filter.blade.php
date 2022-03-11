<div class="form-row">

@php
$price_min = $filters_range['min_price'];
if(isset(request()->price_min)){
$price_min = request()->price_min;
}

$price_max = $filters_range['max_price'];
if(isset(request()->price_max)){
$price_max = request()->price_max;
}
@endphp

<div class="form-group sliderId">
    <label for="exampleInputEmail1" style="width: 100%;text-align: left;">Price</label>
      <input name="price_min" value="{{$price_min}}" min="{{$filters_range['min_price']}}" max="{{$filters_range['max_price']}}" step="10" type="range" />
      <input name="price_max" value="{{$price_max}}" min="{{$filters_range['min_price']}}" max="{{$filters_range['max_price']}}" step="10" type="range" />

        <span>from
    <input type="number" value="{{$price_min}}" min="{{$filters_range['min_price']}}" max="{{$filters_range['max_price']}}"/>    to
    <input type="number" value="{{$price_max}}" min="{{$filters_range['min_price']}}" max="{{$filters_range['max_price']}}"/>
    </span>
    </div>
</div>
 




<div class="form-row">
 
@php
$weight_min = $filters_range['min_weight'];
if(isset(request()->weight_min)){
$weight_min = request()->weight_min;
}

$weight_max = $filters_range['max_weight'];
if(isset(request()->weight_max)){
$weight_max = request()->weight_max;
}
@endphp

<div class="form-group sliderId sliderIdWeight" style="margin-top: 25px;">
    <label for="exampleInputEmail1" style="width: 100%;text-align: left;">Weight</label>
      <input name="weight_min" value="{{$weight_min}}" min="{{$filters_range['min_weight']}}" max="{{$filters_range['max_weight']}}" step="10" type="range" />
      <input name="weight_max" value="{{$weight_max}}" min="{{$filters_range['min_weight']}}" max="{{$filters_range['max_weight']}}" step="10" type="range" />

        <span>from
    <input type="number" value="{{$weight_min}}" min="{{$filters_range['min_weight']}}" max="{{$filters_range['max_weight']}}"/>    to
    <input type="number" value="{{$weight_max}}" min="{{$filters_range['min_weight']}}" max="{{$filters_range['max_weight']}}"/>
    </span>
    
</div>


<div class="form-group" style="margin-top: 25px;">
    <label for="exampleInputEmail1" style="width: 100%;text-align: left;">Categories</label>
  
   @foreach ($categories as $element) 



  <label for="category[]" style="width: 100%;">{{$element->name}}
    <input type="checkbox" name="category[]"  value="{{$element->id}}"@if(!empty(request()->category) && in_array($element->id, $filter_current_values['categories'])) checked @endif>

</label>
  @endforeach
  
     
 
 
   
</div>

<div class="form-group" style="margin-top: 25px;">
    <label for="exampleInputEmail1" style="width: 100%;text-align: left;">Manufacturers</label>
  



    @foreach ($manufacturers as $element) 

      <label for="manufacturer[]" style="width: 100%;">{{$element->name}}
    <input type="checkbox" name="manufacturer[]"  value="{{$element->id}}"@if(!empty(request()->manufacturer) && in_array($element->id,  $filter_current_values['manufacturers'])) checked @endif>
</label>
  @endforeach
 
  

 
 
</div>

  <div class="form-row" style="margin-top: 25px;">
 <button type="submit" class="btn btn-primary">Go</button>

 <a type="reset" href="/shop" class="btn btn-danger float-end">Clear</a>
</div>
