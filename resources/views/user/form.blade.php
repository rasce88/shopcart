@extends('layouts.form')

@section('content')

	<section id="cart_items">
		<div class="container">

			@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif
			
			@if(Session::has('message'))
			    <div class="alert alert-success">
			        {{ Session::get('message') }}
			    </div>
			@endif		
				
			<div class="step-one">
				<h2 class="heading">Account</h2>
			</div>	

          <div class="col-sm-8">
            <div class="contact-form">

              <form action="{{ route('userupdate', $user->id) }}" id="upd-form-user" class="contact-form row" name="upd-form-user" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                    	<label for="address">Email:</label>
                    	<input type="text" id="email" class="form-control" placeholder="{{ $user['email'] }}" readonly>	
                    </div>
                    <div class="form-group col-md-6">
                    	<label for="address">Name:</label>
                    @if($user['name'] != '')
                    	<input type="text" id="name" class="form-control" name="name" placeholder="{{ $user['name'] }}">
                    @else
                    	<input type="text" id="name" class="form-control" name="name" placeholder="Full Name">
                    @endif
                        
                    </div>
                    <div class="form-group col-md-6">
                    	<label for="address">Password:</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Password : Leave Blank if Don't Want to Change">
                    </div><br>
					<div class="bill-to col-md-12">
						<p>Bill To</p>
					</div>
                    <div class="form-group col-md-6">
                    	<label for="address">Address:</label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="{{ $user['address'] }}"">
                    </div>
                    <div class="form-group col-md-6">
						<label for="city">City:</label>                    
                        <input type="text" id="city" class="form-control" name="city" placeholder="{{ $user['city'] }}">                      
                    </div>
                    <div class="form-group col-md-6">
                        <label for="state">State:</label>
	                      <select id="state" class="form-control" name="state">
	                          @foreach($states as $state)            
	                              @if( $user['state'] == $state->code)
	                                    <option value="{{ $state->code }}" selected>{{ $state->name }}</option>                                
	                              @else
	                                    <option value="{{ $state->code }}">{{ $state->name }}</option>                                
	                              @endif
	                          @endforeach
	                      </select>                            
							{{-- 
							<!--

		                <input type="text" id="state" class="form-control" name="state" placeholder="{{ $user['state'] }}">
							-->
							--}}
                    </div>
                    <div class="form-group col-md-6">
		                <label for="zip">Zip Code:</label>
		                <input type="number" id="zip" class="form-control" name="zip" placeholder="{{ $user['zip'] }}">             
                    </div>
                    <div class="form-group col-md-6">
		                <label for="country">Country:</label>
		                <input type="text" id="country" class="form-control" name="country" placeholder="{{ $user['country'] }}">
                    </div>
                    <div class="form-group col-md-6">
		                <label for="phone">Telephone:</label>
		                <input type="number" id="phone" class="form-control" name="phone" placeholder="{{ $user['phone'] }}">	      
                    </div>   
                    <div class="form-group col-md-12">
	                <hr>
                	<label for="zip">Company Information:</label>
                    </div>
                    <div class="form-group col-md-6">
		                <label for="phone">Company Name:</label>
		                <input type="text" id="companyname" class="form-control" name="companyname" placeholder="{{ $user['companyname'] }}">	      
                    </div>    
                    <div class="form-group col-md-6">
		                <label for="phone">Website:</label>
		                <input type="text" id="website" class="form-control" name="website" placeholder="{{ $user['website'] }}">	      
                    </div>                    
                     <div class="form-group col-md-6">
		                <label for="phone">Current -  Sales Tax*:</label>   <br>  
	                              @if( $user['salestax'] != "")
	                                    <label for="phone">-- {{ $user['salestax'] }} </label>                               
	                              @else
	                                    <label for="phone"><i>-- No File</i></label>                                
	                              @endif
                    </div>  
                     <div class="form-group col-md-12">
                     	<label><input type="checkbox" id="cbox1" name="cbox1" value="1"></label>
                		<label for="card-name">Check If Want To Change Current Sales Tax File </label><br>
		                <label for="phone">Upload - Resale Certificate for Sales Tax copy*:</label>
		                <input type="file" id="salestax" class="form-control" name="salestax">	      
                    </div>                                                                                                 
                    <div class="form-group col-md-12" align="center">
				          <button type="submit" class="btn btn-success">Update Info</button>       
                    </div>       
                  {{ csrf_field() }}                                                           
                </form>
            </div>
          </div>



          {{-- 
          <!--           


			<div class="shopper-informations">
				<div class="row">
				<div class="col-sm-3"></div>
					<div class="col-sm-5">
						<div class="shopper-info">
							<p>Personal Information</p>
								<form action="{{ route('userupdate', $user->id) }}"  method="post" id="upd-form-user"> 
									<div class="form-group">
						                <label for="email">Email:</label>
						                <input type="text" id="email" class="form-control" placeholder="{{ $user['email'] }}" readonly>										
									</div>
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" id="name" class="form-control" name="name" placeholder="{{ $user['name'] }}">
									</div>   															
									<div class="form-group">
										<label for="name">Password</label>
										<input type="password" id="password" class="form-control" name="password" placeholder="Leave Password blank if don't want to change">
									</div>   																				
									<div class="bill-to">
										<p>Bill To</p>
									</div>
									<div class="form-group">
						                <label for="address">Address:</label>
						                <input type="text" id="address" class="form-control" name="address" placeholder="{{ $user['address'] }}">
									</div>
									<div class="form-group">
						                <label for="city">City:</label>
						                <input type="text" id="city" class="form-control" name="city" placeholder="{{ $user['city'] }}">
									</div>
									<div class="form-group">
						                <label for="state">State:</label>
						                <input type="text" id="state" class="form-control" name="state" placeholder="{{ $user['state'] }}">
									</div>
									<div class="form-group">
						                <label for="zip">Zip Code:</label>
						                <input type="text" id="zip" class="form-control" name="zip" placeholder="{{ $user['zip'] }}">
									</div>
									<div class="form-group">
						                <label for="country">Country:</label>
						                <input type="text" id="country" class="form-control" name="country" placeholder="{{ $user['country'] }}">
									</div>
									<div class="form-group">
						                <label for="phone">Telephone:</label>
						                <input type="text" id="phone" class="form-control" name="phone" placeholder="{{ $user['phone'] }}">		
									</div>
						
						          {{ csrf_field() }}
						          <button type="submit" class="btn btn-success">Update Info</button>
						        </form>
						</div>
					</div>						
				</div>
			</div>

-->
          --}}

			
			
		</div>

	</section> <!--/#cart_items-->


@endsection