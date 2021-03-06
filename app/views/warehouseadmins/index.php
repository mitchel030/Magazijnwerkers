<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php';?>
<div class="container-fluid">
   <div class="row">
      <div class="col-2 p-0">
         <!-- Sidebar -->
         <?php require_once APPROOT . '\views\warehouseadmins\sidebar.php'; ?>
      </div>
      <!-- Page Content -->
      <div class="col-10">
         <div class="jumbotron mt-4">
            <h1 class="display-4">Non-lended Assortment Items</h1>
            <a href="<?= URLROOT ?>/warehouseadmins/create" class="btn btn-sm btn-primary">
            Create
            </a>
            <div class="table-responsive mt-5">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total</th>
                        <th scope="col">Outstanding</th>
                        <th scope="col">Available</th>
                        <th scope="col">Lended</th>
                        <th scope="col">Lend amount</th>
                        <th scope="col">L.Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Lend</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php echo $data["assortment"]; ?>
                  </tbody>
               </table>
            </div>
            <h1 class="display-4">Lended Assortment Items</h1>
            <div class="table-responsive mt-5">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total</th>
                        <th scope="col">Outstanding</th>
                        <th scope="col">Available</th>
                        <th scope="col">Lended</th>
                        <th scope="col">Lend amount</th>
                        <th scope="col">L.Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Lend</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php echo $data["lended"]; ?>
                  </tbody>
               </table>
            </div>
            <!-- Modal content -->
            <div class="modal-content">
               <span class="close">&times;</span>
               <div class="container">
                  <div class="jumbotron">
                     <form action="<?= URLROOT ?>/warehouseadmins/store" method="post">
                        <div class="form-group">
                           <label>Name</label>
                           <input type="text" class="form-control" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                           <label>Total</label>
                           <input type="text" class="form-control" name="total" placeholder="Enter total">
                        </div>
                        <div class="form-group">
                           <label>Outstanding</label>
                           <input type="text" class="form-control" name="outstanding" placeholder="Enter outstanding">
                        </div>
                        <div class="form-group">
                           <label>Available</label>
                           <input type="text" class="form-control" name="available" placeholder="Enter available">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>