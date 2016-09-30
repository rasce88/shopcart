﻿

<?php $__env->startSection('content'); ?>

<div id="page-wrapper" >
            <div id="page-inner">
                  <?php if(Session::has('message')): ?>
                      <div class="alert alert-success">
                          <?php echo e(Session::get('message')); ?>

                      </div>
                  <?php endif; ?>             
                <div class="row">
                    <div class="col-md-12">
                     <h2>List Categories </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  

  <section id="cart_items">
  


    <div class="col-md-12">
<hr>
      <div class="table-responsive cart_info">

       


        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">Imagen</td>
              <td class="image">Category ID</td>
              <td class="description">Name</td>
              <td class="price">Description</td>
              <td class="price">Parent Category</td>
              <td class="quantity">Edit</td>
              <td class="total">Delete</td>
            </tr>
          </thead>
          <tbody>
         <?php echo $tree; ?>


          <?php /* 
            <?php foreach($categories as $category): ?>
            <tr>
              <td class="cart_product">
                <img height="50px" width="50px" src="media/<?php echo e($category['imagepath']); ?>" alt="No Images">
              </td>
              <td class="cart_description">
                <h4><a href=""><?php echo e($category['id']); ?></a></h4>
              </td>
              <td class="cart_description">
                <h4><a href=""><?php echo e($category['name']); ?></a></h4>
              </td>
              <td class="cart_price">
                <p><?php echo e($category['description']); ?></p>
              </td>

              <td class="cart_price">
                <p><?php echo e($category['parentcategory']); ?></p>
              </td>
              <td class="cart_delete">
                <a class="cart_quantity_delete" href="<?php echo e(route('product.removeItem', ['id' => $category['id']])); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              </td>
              <td class="cart_delete">
                <a class="cart_quantity_delete" href="<?php echo e(route('product.removeItem', ['id' => $category['id']])); ?>"><i class="fa fa-times"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>  
            */ ?>        
          </tbody>
          <tfoot>
            <tr class="cart_menu">
              <td class="image"></td>
              <td class="description"></td>
              <td class="price"></td>
              <td class="price"></td>
              <td class="quantity"><a class="btn btn-success" href="<?php echo e(route('categories.create')); ?>">Create Category</a></td>
              <td class="total"></td>
              <td class="total"></td>
            </tr>            
          </tfoot>
        </table>

      </div>





    </div>
  </section> <!--/#cart_items-->                 <!-- /. ROW  -->           
                </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>