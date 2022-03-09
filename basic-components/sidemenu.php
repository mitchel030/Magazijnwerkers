<?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>

<div class="side-menu">
  <ul>
    <li></li>
    <li><a href="#">Artikelen</a></li>
    <li><a href="#">Get in touch</a></li>
    <li><a href="#">About us</a></li>
    <span class="copyright">Copyright &copy; 2022</span>
    <?php
      if (isset($_SESSION["email"])){
          echo '<li class="nav-item nav_padding">
          <a class="" href="./index.php?content=logout">Logout</a>
      </li>';
      } else {
          echo '<li class="nav-item nav_padding">
          <a class="" href="index.php?content=login">Login</a>
      </li>';
      }
      ?>
  </ul>
</div>