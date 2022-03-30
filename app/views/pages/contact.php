<!-- // Require head include -->
<?php require_once APPROOT . '\views\includes\head.php'; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- <header>
        <ul>
          <li><img src="./image/download.png" alt="logo 2"></li>
          <li id="MBO"><a href="#">MBO UTRECHT</a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li id="contact"><a href="#"></a></li>
        </ul>
      </header> -->
    </div>
  </div>
  <div class="row">
    <div class="col-2 p-0">
      <!-- Sidebar -->
      <?php require_once APPROOT . '\views\pages\sidemenu.php'; ?>
    </div>
    <!-- Page Content -->
    <div class="content col-10">
      <h1 class="text-center">About Page</h1>
      <button data-modal-target="#modal" id="test">Contact us!</button>
    </div>
  </div>
</div>

<div class="modal" id="modal">
  <div class="modal-header">
    <div class="title">Info page!</div>
    <button data-close-button class="close-button">&times;</button>
  </div>
  <div class="modal-body">
    <h2>Netherlands</h2>
    <br>
    3584 BK , Daltonlaan 300, Utrecht
    <br>
    030 – 28 15 100
    <br>
    info@mboutrecht.nl
    <br> <br> <br> <br>
    <h2>Openingtijden</h2>
    <br>
    Ma 09:00 - 17:00
    <hr>
    Di 09:00 - 18:00
    <hr>
    Wo 09:00 - 17:00
    <hr>
    Do 09:00 - 18:00
    <hr>
    Vr 09:00 - 17:00
    <hr>
    Za 10:00 - 14:00
    <hr>
    Zo gesloten
    <hr>

  </div>
</div>
<div id="overlay"></div>

<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>