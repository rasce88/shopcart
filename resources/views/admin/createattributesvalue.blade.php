﻿@extends('admin.index')

@section('content')
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Attribute: {{ $attribute->name }} </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
  <section id="cart_items">
    <div class="container">
      <hr>
      <div class="table-responsive cart_info">
        <form action="{{ route('attributesvalue.store', ['id' => $attribute['id']]) }}" method="post" id="create-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Name Value</label>
                <input type="text" id="att_value" class="form-control" required name="att_value">
              </div>              
            </div>            
          </div>          
          </div>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success">Create New Value</button>
          &nbsp;
          <a class="btn btn-warning" href="{{ URL::route('attributes.index', $attribute['id']) }}"> Back </a>
        </form>
      </div>
    </div>
  </section> <!--/#cart_items-->                 <!-- /. ROW  -->           
</div>
<!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->

@endsection
