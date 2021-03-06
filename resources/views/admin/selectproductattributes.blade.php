﻿@extends('admin.index')

@section('content')
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Select Attribute </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->

  <section id="cart_items">
    <div class="container">
      <hr>
      <div class="table-responsive cart_info">
        <form action="{{ route('addattributeproduct', ['id' => $product_id]) }}" method="get" id="edit-form" enctype="multipart/form-data">
        <input type="hidden" id="product_id" name="product_id" value="{{ $product_id }}">
            <div class="form-group">
              <label for="card-number">Attribute</label>
                <select id="attributes_id" name="attributes_id">
                  @foreach($attributes as $attribute)              
                      <option value="{{ $attribute['id'] }}">{{ $attribute['name'] }}</option>
                  @endforeach
                </select>                
            </div> 

          <hr>                
          {{ csrf_field() }}          
          <button type="submit" class="btn btn-success">Select Attribute</button>
        </form>&nbsp;<a class="cart_quantity_delete" href="{{ URL::to('/showattributeproduct/') }}/{{ $product_id }}"><button class="btn btn-warning"> Back </button></a>
          
      </div>
    </div>
  </section> <!--/#cart_items-->                 <!-- /. ROW  -->           
</div>
<!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->

@endsection
