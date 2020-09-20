<?php
    include('header.php');?>
<html>

     <main class="d-flex align-items-center justify-content-center height-100">
          <div class="content">
               <header class="text-center">
                    <h2>Add Beer</h2>
               </header>
               <form action="process-beer.php" method="POST" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">Code</label>
                         <input type="text" name="code" class="form-control form-control-lg" placeholder="enter Code">
                    </div>
                    <div class="form-group">
                         <label for="">Name</label>
                         <input type="text" name="name" class="form-control form-control-lg" placeholder="enter Name">
                    </div>
                    <div class="form-group">
                         <label for="">Description</label>
                         <input type="text" name="description" class="form-control form-control-lg" placeholder="enter Description">
                    </div>
                    <div class="form-group">
                         <label for="">Type</label>
                         <input type="text" name="type" class="form-control form-control-lg" placeholder="enter Type">
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Add Beer</button>
               </form>
          </div>
     </main>

<?php
include('footer.php');?>