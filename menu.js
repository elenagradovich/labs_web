window.onload = function (){
  const closebtn = document.querySelector('.closebtn');
  const openbtn = document.querySelector('.openbtn');
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  openbtn.addEventListener('click', openNav);
  closebtn.addEventListener('click', closeNav)
  
}