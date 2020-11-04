window.onload = function() {
  const valueInput = document.querySelector('#value');
  const submitInput = document.querySelector('#submitInput');
  const result = document.querySelector('.result');

  let value;
  valueInput.addEventListener('change', (e) => {
    value = e.target.value;
  });
    
  const getResult = (e, number) => {
    result.innerHTML=`Результат => `;
    e.preventDefault();
    if(number) {
      const xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange= () => {
        if (xhttp.readyState==4 && xhttp.status==200) {
          result.textContent=xhttp.response;
        }
      }
      xhttp.open('get', `../php/lab4_6.php?numberValue=${value}`, true);
      xhttp.send();
    }
  }
    submitInput.addEventListener('click', (e) => getResult(e, value));
  }