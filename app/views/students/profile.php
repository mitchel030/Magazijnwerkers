<!-- // Require head include -->
<?php
require_once APPROOT . '\views\includes\head.php';
$user = $data["userData"];
// var_dump($user);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 p-0">
            <!-- Sidebar -->
            <?php require_once APPROOT . '\views\students\sidebar.php'; ?>
        </div>
        <!-- Page Content -->


        <div class="content col-10">
            <br>
            <!-- The Modal -->
            <div id="editModal" class="editModal hidden ">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form class="form-editPersonalInfo">
                        <div class="row">
                            <div class="col-6 edit">
                                <label for="firstNamevalue">Change firstname</label>
                                <input type="firstName" class="form-control" id="firstNamevalue" value="Firstname" required>
                            </div>
                            <div class="col-6 edit">
                                <label for="lastNamevalue">Change lastname</label>
                                <input type="lastName" class="form-control" id="lastNamevalue" value="Lastname">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-12 edit">
                                <label for="DateOfBirthvalue">Change date of birth</label>
                                <input type="DateOfBirth" class="form-control" id="DateOfBirthvalue" value="DateOfBirth">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 edit">
                                <label for="Emailvalue">Change email</label>
                                <input type="Email" class="form-control" id="Emailvalue" value="Email">
                                <small id="emailHelp" class="form-text ">Don't forget to use your new Email while logging in next time</small>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4 edit">
                                <label for="Zipcodevalue">Change zipcode</label>
                                <input type="Zipcode" class="form-control" id="Zipcodevalue" value="Zipcode">
                            </div>

                            <br>

                            <div class="col-8 edit">
                                <label for="houseNumbervalue">Change house number</label>
                                <input type="houseNumber" class="form-control" id="houseNumbervalue" value="houseNumber">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 edit">
                                <label for="streetNamevalue">Change street name</label>
                                <input type="streetName" class="form-control" id="streetNamevalue" value="streetName">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 edit">
                                <label for="phoneNumbervalue">Change phone number</label>
                                <input type="phoneNumber" class="form-control" id="phoneNumbervalue" value="phoneNumber">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="modalBtn">Confirm changes</button>
                    </form>
                </div>

            </div>
            <div class="editOverlay hidden"></div>


            <div class="card mt-3">

                <div class="card-body P-background">
                    <h3>Personal information</h3>


                    <!-- Trigger/Open The Modal -->

                    <p class="card-text">
                        <!-- Personal infomation form -->
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

                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="staticfirstName" class="col-sm-2 col-form-label">First name</label>
                                    <div class="">
                                        <input type="text" readonly class="form-control-plaintext" id="staticfirstName" value="<?= $user->FirstName ?>">
                                    </div>
                                </div>
                                <div class="mb-3 col-5">
                                    <label for="staticlastName" class="col-sm-2 col-form-label">Last name</label>
                                    <div class="">
                                        <input type="text" readonly class="form-control-plaintext" id="staticlastName" value="<?= $user->LastName ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="staticDate" class="col-sm-2 col-form-label">Birthday</label>
                                    <div class="">
                                        <input type="text" readonly class="form-control-plaintext" id="staticDate" value="<?= $user->BirthDate ?>">
                                    </div>
                                </div>
                                <div class="mb-3 col-5">
                                    <label for="staticgender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="">
                                        <input type="text" readonly class="form-control-plaintext" id="staticgender" value="<?= $user->Gender ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="staticnickname" class="col-sm-2 col-form-label">Nick name</label>
                                    <div class="">
                                        <input type="text" readonly class="form-control-plaintext" id="staticnickName" value="<?= $user->NickName ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <!-- Contact information form -->
            <div class="card">
                <div class="card-body P-background">
                    <h3>Contact information</h3>
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
                        <div class="row">
                            <div class="col-7">
                                <label for="staticPhone" class="col-sm-2 col-form-label">Phone number</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticPhone" value="0610101010">
                                </div>
                            </div>
                            <div class="mb-3 col-5">
                                <label for="staticemail" class="col-sm-2 col-form-label">Email</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticemail" value="dafdsgfd@fgdsgrf.nl">
                                </div>
                            </div>
                        </div>
                        </p>
                        <button id="editBtn" class="modalBtn">Open Modal</button>
                    </div>
                </div>

                <!-- // Require end include -->
                <?php require_once APPROOT . '\views\includes\end.php'; ?>