<!-- // Require head include -->
<?php
require_once APPROOT . '\views\includes\head.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 p-0">
            <!-- Sidebar -->
            <?php require_once APPROOT . '\views\students\sidebar.php'; ?>
        </div>
        <!-- Page Content -->

        
        <div class="content col-10">
      
        <h1>pro</h1>
            <div class="card">
                <div class="card-body P-background">
                    <p class="card-text">
                    
                    <div class="container">
                    <div class="Profile-Picture">
                            <div class="circle">
                                <img class="profile-pic" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">

                            </div>
                            <div class="p-image">
                                <i class="fa fa-camera upload-button"></i>
                                <input class="file-upload" type="file" accept="image/*" />
                            </div>
                        </div>
                    
                        <div class="row">
                        <div class="mb-3 col-8">
                            <label for="staticfirstName" class="col-sm-2 col-form-label">First name</label>
                            <div class="">
                                <input type="text" readonly class="form-control-plaintext" id="staticfirstName" value="Example">
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="mb-3 col-8">
                            <label for="staticlastName" class="col-sm-2 col-form-label">Last name</label>
                            <div class="">
                                <input type="text" readonly class="form-control-plaintext" id="staticlastName" value="Example">
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="staticDate" class="col-sm-2 col-form-label">Date of birth</label>
                            <div class="">
                                <input type="text" readonly class="form-control-plaintext" id="staticDate" value="01-01-2001">
                            </div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                            </div>

                        </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body P-background">
                    <p class="card-text">

                    <div class="row">

                        <div class="col-4 mb-3">
                            <label for="staticAdres" class=" col-form-label">Zip code</label>
                            <div class="">
                                <input type="text" readonly class="form-control-plaintext" id="staticAdres" value="1010AB">
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="staticAdres" class=" col-form-label">House number</label>
                            <div class="">
                                <input type="text" readonly class="form-control-plaintext" id="staticAdres" value="01">
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="staticAdres" class=" col-form-label">Street name</label>
                            <div class="">
                                <input type="text" readonly class="form-control-plaintext" id="staticAdres" value="Streetname">
                            </div>
                        </div>
                        <label for="staticPhone" class="col-sm-2 col-form-label">Phone number</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticPhone" value="0610101010">
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <!-- // Require end include -->
            <?php require_once APPROOT . '\views\includes\end.php'; ?>