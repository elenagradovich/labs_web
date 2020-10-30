
<?php
  echo'<div id="mySidenav" class="sidenav">
        <button class="closebtn">&#215;</button>
        <a href="#" style="color:#fff">ЛР1:</a>
        <a href="../../lab1/html/index1.php">часть 1</a>
        <a href="../../lab1/html/index2.php">часть 2</a>

        <a href="#" style="color:#fff">ЛР2:</a>
        <a href="../../lab2.1/html/index.php">часть 1</a>

        <a href="#" style="color:#fff">ЛР3:</a>
        <a href="../../lab3.1/html/index.php">часть 1</a>
        <a href="../../lab3.2/html/index.php">часть 2</a>

        <a href="#" style="color:#fff">ЛР4:</a>
        <a href="../../lab4.1/html/index.php">часть 1</a>
      </div>
      <header class="header">
        <button class="openbtn" style="font-size:30px;cursor:pointer"">&#9776;</button>
      </header>
      <script>
        const closebtn = document.querySelector(".closebtn");
        const openbtn = document.querySelector(".openbtn");
        const menu = document.querySelector(".sidenav")
        const openNav = () => {
          menu.classList.add("sidenav--open")
        }
      
        const closeNav = () => {
          menu.classList.remove("sidenav--open")
        }
      
        openbtn.addEventListener("click", openNav)
        closebtn.addEventListener("click", closeNav)
      </script>'
?>
