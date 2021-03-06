﻿

<?php $__env->startSection('content'); ?>
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
        <form action="<?php echo e(route('product.update', ['id' => $product['id']])); ?>" method="post" id="edit-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="title" class="form-control" required name="title" value="<?php echo e($product['title']); ?>">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="address">Description</label>
                <textarea id="description" class="form-control" name="description" rows="4" cols="50"><?php echo e($product['description']); ?></textarea>
              </div>              
            </div>            
          </div>           
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Sku</label>
                <input type="text" id="sku" class="form-control" required name="sku" value="<?php echo e($product['sku']); ?>">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Price</label>
                <input type="text" id="price" class="form-control" required name="price" value="<?php echo e($product['price']); ?>">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="name">Stock</label>
                <input type="text" id="quantity" class="form-control" required name="quantity" value="<?php echo e($product['quantity']); ?>">
              </div>              
            </div>            
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-number">Category</label>
                  <select id="categories_id" name="categories_id">
                    <?php foreach($categories as $category): ?>                     
                        <?php /* <!-- Mark Select if it's the same one -->   */ ?>
                        <?php if($product['categories_id'] == $category['id']): ?>
                          <option selected="selected" value="<?php echo e($category['id']); ?>"><?php echo e($category['name']); ?></option>
                        <?php else: ?>
                          <option value="<?php echo e($category['id']); ?>"><?php echo e($category['name']); ?></option>
                        <?php endif; ?>            

                    <?php endforeach; ?>
                  </select>                
              </div>              
            </div>            
          </div> 
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-number">Brand</label>
                  <select id="brand_id" name="brand_id">
                    <?php foreach($brands as $brand): ?>              
                       
                        <?php /* <!-- Mark Select if it's the same one --> */ ?>
                        <?php if($product['brand_id'] == $brand['id']): ?>
                          <option selected="selected" value="<?php echo e($brand['id']); ?>"><?php echo e($brand['name']); ?></option>
                        <?php else: ?>
                          <option value="<?php echo e($brand['id']); ?>"><?php echo e($brand['name']); ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>
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
                    <a target="_blank" href="<?php echo e(URL::to('images/template_products.psd')); ?>">Download PSD Template</a>
                  <br>
                
                <?php if($product['imagepath'] == ''): ?>
                  <img height="300px" width="300px" src="<?php echo e(URL::to('/')); ?>/images/no-image.jpg" alt="No Images">
                <?php else: ?>
                  <img height="300px" width="300px" src="<?php echo e(URL::to('/')); ?>/media/<?php echo e($product['imagepath']); ?>" alt="No Images">
                <?php endif; ?>
                <br><br>
                <label><input type="checkbox" id="cbox1" name="cbox1" value="1"></label>                                  
                <label for="card-name">Check If Want To Change Current Image Product</label>
                <input type="file" id="imagepath" name="imagepath" accept="image/*">
              </div>              
            </div>            
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-name"><h3><span>Attributes Product </span></h3></label>
                <br>   
                    <?php foreach($attributesproducts as $attributesproduct): ?>
                    <label>
                    <?php echo e($attributeName[$attributeId[$attributesproduct->attributes_values_id]]); ?>: 
                    <strong>
                      <h4>
                      <?php echo e($attributeValueName[$attributesproduct->attributes_values_id]); ?>

                      </h4>
                    </strong>
                    </label>
                    <br>
                    <?php endforeach; ?>
                <br><br>                              
                <a href="<?php echo e(URL::to('/')); ?>/showattributeproduct/<?php echo e($product['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;[Edit Attributes Product]</a>
              </div>              
            </div>            
          </div>
         <hr>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-name"><h3><span>Gallery Product Image </span></h3></label>
                <br>   
                    <?php foreach($imgproducts as $imgproduct): ?>
                      <img height="50px" width="50px" src="<?php echo e(URL::to('/')); ?>/media/<?php echo e($imgproduct['imagepath1']); ?>" alt="No Images"> 
                    <?php endforeach; ?>
                <br><br>                              
                <a target="_blank" href="<?php echo e(URL::to('/')); ?>/editgallery/<?php echo e($product['id']); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;[Edit Product Gallery Images]</a>
              </div>              
            </div>            
          </div>
           
          <hr>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label for="card-number">Status</label>
                  <select id="status" name="status">
                          <?php if($product['status'] == 1): ?>
                            <option selected="selected" value="1">Active</option>
                            <option value="2">Inactive</option>
                          <?php else: ?>
                            <option value="1">Active</option>
                            <option selected="selected" value="2">Inactive</option>
                          <?php endif; ?>
                  </select>                
              </div>              
            </div>            
          </div>                                    

          <?php echo e(method_field('PUT')); ?>

          <?php echo e(csrf_field()); ?>   
          <button type="submit" class="btn btn-success">Update Product</button>
        </form>
      </div>

    </div>
  </section> <!--/#cart_items-->                 <!-- /. ROW  -->           
</div>
<!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>