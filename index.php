<?php require('components/head.inc.php'); ?>
<?php require('components/header/header.inc.php'); ?>
<?php require('components/navbar/navbar.inc.php'); ?>


  <body>
    <form>  
          
          <div class="form-group">  
            <label>Brand Name:</label>  
            <input type="text" name="name" class="form-control" value="Iphone" required="">  
          </div>  
            
          <div class="form-group">  
            <label>Product Name:</label>  
            <input type="text" name="email" class="form-control" value="Iphone 14 Pro" required="">  
          </div>  

          <div class="form-group">  
            <label>Price:</label>  
            <input type="text" name="price" class="form-control" value="1000" required="">  
          </div>

          <div class="form-group">  
            <label>Stock Value:</label>  
            <input type="text" name="stock" class="form-control" value="2" required="">  
          </div>
           
          <button type="submit" class="btn btn-success save-btn">Save</button>  
            
    </form>  
    <br/>  
    <table class="table table-bordered data-table">  
      <thead>  
        <th>Brand Name</th>  
        <th>Product Name</th>  
        <th>Price</th>  
        <th>Stock Value</th>
        <th width="200px">Action</th>  
      </thead>  
      <tbody>  
        
      </tbody>  
    </table>  
  
  </body>




  <?php require('components/footer/footer.inc.php'); ?>
