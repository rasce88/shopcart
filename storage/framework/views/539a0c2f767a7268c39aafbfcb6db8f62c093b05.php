﻿

<?php $__env->startSection('content'); ?>

<div id="page-wrapper" >

 
            <div id="page-inner">
                  <?php if(Session::has('message')): ?>
                      <div class="alert alert-success">
                          <?php echo e(Session::get('message')); ?>

                      </div>
                  <?php endif; ?>
                  
                <div class="flash-message">
                  <?php foreach(['danger', 'warning', 'success', 'info'] as $msg): ?>
                    <?php if(Session::has('alert-' . $msg)): ?>
                    <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?></p>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>           
                                  
                  
                  <div class="row">
                    <div class="col-md-12">
                      <h2>List Products </h2>  
                      <fieldset class="fsStyle" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;">
                        <legend class="legendStyle">

                        <a data-toggle="collapse" data-target="#demo" href="#">&nbsp;Filter by </a>

                        </legend>
                        <form action="<?php echo e(route('productFilter')); ?>" method="get" id="filter-form" enctype="multipart/form-data">
                        <div class="row collapse in" id="demo">


                          <div class="col-md-2">
                            <div class="form-group">
                            <label for="card-number">Category</label>
                            <select id="categories_id" name="categories_id">
                              <option value="0">All Categories</option>
                              <?php foreach($categories1 as $category): ?>                     
                                <option value="<?php echo e($category['id']); ?>"><?php echo e($category['name']); ?></option>
                              <?php endforeach; ?>
                            </select>                
                            </div>              
                          </div>  

                          <div class="col-md-2">
                            <div class="form-group">
                            <label for="card-number">Brand</label>
                            <select id="brand_id" name="brand_id">
                              <option value="0">All Brands</option>
                              <?php foreach($brands1 as $brand): ?>              
                                <option value="<?php echo e($brand['id']); ?>"><?php echo e($brand['name']); ?></option>
                              <?php endforeach; ?>
                            </select>                
                            </div>              
                          </div> 

                          <div class="col-md-2">
                            <div class="form-group">
                            <label for="card-number">Show Entries</label>
                            <select id="ShowEntries" name="ShowEntries">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                              <option value="1000">All</option>
                            </select>                
                            </div>              
                          </div> 

                          <?php echo e(csrf_field()); ?>   
                          <button type="submit" class="btn btn-warning">Filter</button>


                        </div>
                        </form>
                      </fieldset>
                    </div> 
                  </div>
                  
                           
                 <!-- /. ROW  -->
                  

  <section id="cart_items">
  


    <div class="col-md-12">
<hr>
      <div class="table-responsive cart_info">
      <form action="<?php echo e(route('product.multipleactions')); ?>" method="post" id="edit-form" enctype="multipart/form-data">
        <table class="table table-condensed" id="products">
          <thead>
            <tr class="cart_menu">
              <td class="image" colspan="11">
                <label for="card-number">Bulks Actions</label>
                <select id="bulks_id" name="bulks_id">
                  <option value="1">Edit Products</option>
                  <option value="2">Delete Products</option>
                </select> 
                <button type="submit" class="btn btn-primary">Apply</button>  
                <a class="btn btn-success" href="<?php echo e(route('product.create')); ?>">Create New Product</a>
                <a class="btn btn-warning" href="<?php echo e(route('import.form')); ?>">CSV Import Products</a>                
              </td>
            </tr>
            <tr class="cart_menu">
              <td class="description"><font size="2">
                <label><input type="checkbox" id="checkAll"/> Check all</label>
              </td>
              <td class="image">Image</td>
              <td class="description">Sku</td>
              <td class="quantity">Name</td>
              <td class="quantity">Price</td>
              <td class="quantity">Stock</td>
              <td class="quantity">Brand</td>
              <td class="quantity">Category</td>            
              <td class="quantity">Status</td>
              <td class="quantity">Edit</td>
              <td class="total">Delete</td>
            </tr>

          </thead>
          <tbody>
         <?php echo $tree; ?>      
          </tbody>


        </table>
        <?php echo e(csrf_field()); ?>   
        </form>
      </div>
      <?php echo e($products->links()); ?>

      
      <br>




    </div>


  </section> <!--/#cart_items-->                 <!-- /. ROW  -->           
                </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>