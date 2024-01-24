<?php 

include('authentication.php');
include('includes/header.php');

?>


<div class="container-fluid px-4">
 <h1 class="mt-4">Innisfree Admin</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
      </ol>
     <div class="row">
          <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">CATEGORY</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="category-view.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
     </div>
         <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">POST</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="post-view.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
     </div>
         <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Data Pesanan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dataPemesan.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
      </div>
         <div class="col-xl-3 col-md-6">

     </div>
   </div>


   </div>
<?php 
include('includes/footer.php');
include('includes/scripts.php');

?>