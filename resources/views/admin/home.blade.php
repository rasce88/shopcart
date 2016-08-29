﻿@extends('admin.index')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row text-center pad-top">

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="{{ url('/admin') }}" >
                                <i class="fa fa-desktop fa-5x"></i>
                                <h4>DashBoard</h4>
                              </a>
                        </div>              
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="{{ url('/categories') }}" >
                                <i class="fa fa-qrcode fa-5x"></i>
                                <h4>Categories</h4>
                              </a>
                        </div>              
                    </div>                     
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="{{ url('/brands') }}" >
                                <i class="fa fa-rocket fa-5x"></i>
                                <h4>Brands</h4>
                              </a>
                        </div>              
                    </div> 
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="{{ url('/product') }}" >
                                <i class="fa fa-tags fa-5x"></i>
                                <h4>Products</h4>
                              </a>
                        </div>              
                    </div>
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="{{ url('/banners') }}" >
                                <i class="fa fa-film fa-5x"></i>
                                <h4>Banner Home</h4>
                              </a>
                        </div>              
                    </div>                                          
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                             <a href="#" >
                                <i class="fa fa-cog fa-5x"></i>
                                <h4>Settings</h4>
                              </a>
                        </div>              
                    </div> 
                      
                </div>   
                  <!-- /. ROW  -->
                <div class="row text-center pad-top">
                   
                 

                  <!-- 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>See Users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Check Data</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Mail Box</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              
                    -->


 </div>
                 <!-- /. ROW  -->   
          <div class="row">
                    <div class="col-lg-12 ">
          <br/>

                      {{--


                        <div class="alert alert-danger">
                             <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                        </div>
                <div class="row">

                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Jhon Doe ! </strong> You Have No pending Task For Today.
                        </div>
                       
                    </div>
                    </div>

                       
                    </div>
                    </div>
                    --}}
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>

@endsection
