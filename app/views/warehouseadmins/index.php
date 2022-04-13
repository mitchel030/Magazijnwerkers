<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-2 p-0">
         <!-- Sidebar -->
         <?php require_once APPROOT . '\views\warehouseadmins\sidebar.php'; ?>
      </div>
      <!-- Page Content -->
      <div class="container">
         <h1 class="text-center">Index</h1>
         <div class="jumbotron mt-4">
            <h1 class="display-4"><?= $data['judul']; ?></h1>
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
                        <th scope="col">Action</th>
                     </tr> 
                  </thead>
                  <tbody>
                     <?php foreach ($data['warehouseadmins'] as $key => $value): ?>
                     <tr>
                        <th scope="row"><?= ++$key; ?></th>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['total']; ?></td>
                        <td><?= $value['outstanding']; ?></td>
                        <td><?= $value['available']; ?></td>
                        <td>
                           <a href="<?= URLROOT; ?>/warehouseadmins/edit/<?= $value['id']; ?>" class="btn btn-xs btn-info">Edit</a>
                           <form action="<?= URLROOT; ?>/warehouseadmins/destroy/<?= $value['id'] ?>" method="post">
                              <button class="btn btn-xs btn-danger">Delete</button>
                           </form>
                        </td>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>