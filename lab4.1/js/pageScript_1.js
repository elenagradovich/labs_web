window.onload = function() {
let value;
    const valueInput = document.querySelector('#value');
    const submitInput = document.querySelector('#submitInput');
    const result = document.querySelector('.result');
    valueInput.addEventListener('change', (e) => {
      value = e.target.value;
    });

  const getResult = (e, number) => {
    result.innerHTML=`Результат => `;
    e.preventDefault();
    if(number) {
      const xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange=function() {
        if (xhttp.readyState==4 && xhttp.status==200) {
          result.innerHTML=`Результат => ${xhttp.responseText}`;
        }
      }
      xhttp.open('get', `../php/lab4_1.php?numberValue=${number}`, true);
      xhttp.send();
    }
  }
  submitInput.addEventListener('click', (e) => getResult(e, value));
}