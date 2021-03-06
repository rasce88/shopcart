﻿@extends('admin.index')

@section('content')
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Product </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
  <section id="cart_items">
    <div class="container">
      <hr>
      <div class="table-responsive cart_info">
        <form action="{{ route('product.update', ['id' => $product['id']]) }}" method="post" id="edit-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="title" class="form-control" required name="title" value="{{ $product['title'] }}">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="address">Description</label>
                <textarea id="description" class="form-control" name="description" rows="4" cols="50">{{ $product['description'] }}</textarea>
              </div>              
            </div>            
          </div>           
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Sku</label>
                <input type="text" id="sku" class="form-control" required name="sku" value="{{ $product['sku'] }}">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Price</label>
                <input type="number" step="0.01" min="0" id="price" class="form-control" required name="price" value="{{ $product['price'] }}">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Stock</label>
                <input type="number" min="0" id="quantity"  class="form-control" required name="quantity" value="{{ $product['quantity'] }}">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-number">Category</label>
                  <select id="categories_id" name="categories_id">
                    @foreach($categories as $category)                     
                        {{-- <!-- Mark Select if it's the same one -->   --}}
                        @if($product['categories_id'] == $category['id'])
                          <option selected="selected" value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @else
                          <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endif            

                    @endforeach
                  </select>                
              </div>              
            </div>            
          </div> 
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-number">Brand</label>
                  <select id="brand_id" name="brand_id">
                    @foreach($brands as $brand)              
                       
                        {{-- <!-- Mark Select if it's the same one --> --}}
                        @if($product['brand_id'] == $brand['id'])
                          <option selected="selected" value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                        @else
                          <option value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                        @endif

                    @endforeach
                  </select>                
              </div>              
            </div>            
          </div>  
          <hr>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-name"><h3><span>Current Main Product Image (width=300px ; Height=300px)</span></h3></label>
                  <br> 
                    <a target="_blank" href="{{ URL::to('images/template_products.psd') }}">Download PSD Template</a>
                  <br>
                
                @if($product['imagepath'] == '')
                  <img height="300px" width="300px" src="{{ URL::to('/') }}/images/no-image.jpg" alt="No Images">
                @else
                  <img height="300px" width="300px" src="{{ URL::to('/') }}/media/{{ $product['imagepath'] }}" alt="No Images">
                @endif
                <br><br>                
                <input type="file" id="imagepath" name="imagepath" accept="image/*">
                <label><input type="checkbox" id="cbox1" name="cbox1" value="1"></label>                                  
                <label for="card-name">Check If Want To Change Current Image Product</label>
              </div>              
            </div>            
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-name"><h3><span>Attributes Product </span></h3></label>
                <br>   
                    @foreach($attributesproducts as $attributesproduct)
                    <label>
                    {{ $attributeName[$attributeId[$attributesproduct->attributes_values_id]] }}: 
                    <strong>
                      <h4>
                      {{ $attributeValueName[$attributesproduct->attributes_values_id] }}
                      </h4>
                    </strong>
                    </label>
                    <br>
                    @endforeach
                <br><br>                              
                <a href="{{ URL::to('/') }}/showattributeproduct/{{ $product['id'] }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;[Edit Attributes Product]</a>
              </div>              
            </div>            
          </div>
         <hr>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-name"><h3><span>Gallery Product Image </span></h3></label>
                <br>   
                    @foreach($imgproducts as $imgproduct)
                      <img height="50px" width="50px" src="{{ URL::to('/') }}/media/{{ $imgproduct['imagepath1'] }}" alt="No Images"> 
                    @endforeach
                <br><br>                              
                <a target="_blank" href="{{ URL::to('/') }}/editgallery/{{ $product['id'] }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;[Edit Product Gallery Images]</a>
              </div>              
            </div>            
          </div>
           
          <hr>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-number">Status</label>
                  <select id="status" name="status">
                          @if($product['status'] == 1)
                            <option selected="selected" value="1">Active</option>
                            <option value="2">Inactive</option>
                          @else
                            <option value="1">Active</option>
                            <option selected="selected" value="2">Inactive</option>
                          @endif
                  </select>                
              </div>              
            </div>            
          </div>                                    

          {{ method_field('PUT') }}
          {{ csrf_field() }}   
          <button type="submit" class="btn btn-success">Update Product</button>
        </form>
      </div>

    </div>
  </section> <!--/#cart_items-->                 <!-- /. ROW  -->           
</div>
<!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->

@endsection
