//document.addEventListener("DOMContentLoaded", () => {});
window.onload = function() {
  let value1, value2, value3;
  const value1Input = document.querySelector('#value1');
  const value2Input = document.querySelector('#value2');
  const value3Input = document.querySelector('#value3');
  value1Input.addEventListener('change', (e) => {
    value1 = e.target.value;
  });
  value2Input.addEventListener('change', (e) => {
    value2 = e.target.value;
  });
  value3Input.addEventListener('change', (e) => {
    value3 = e.target.value;
  });
  
  const getResult = () => {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
      if (xhttp.readyState==4 && xhttp.status==200) {
        console.log(xhttp.responseText);
        document.querySelector('.res').innerHTML=xhttp.responseText;
      }
    }
    xhttp.open("GET", `testfile.php?var1=${value1}&var2=${value2}&var3=${value3}`, true);
    xhttp.send();
  }
  const result = document.querySelector('.result');
  result.addEventListener("click", getResult);
}
