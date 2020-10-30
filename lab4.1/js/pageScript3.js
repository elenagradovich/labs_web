window.onload = function() {
  let value1, value2, value3;
    const valueInput1 = document.querySelector('#value1');
    const valueInput2 = document.querySelector('#value2');
    const valueInput3 = document.querySelector('#value3');
    const submitInput = document.querySelector('#submitInput');
    const result = document.querySelector('.result');

    valueInput1.addEventListener('change', (e) => {
      value1 = e.target.value;
    });

    valueInput2.addEventListener('change', (e) => {
      value2 = e.target.value;
    });

    valueInput3.addEventListener('change', (e) => {
      value3 = e.target.value;
    });
  
    const getResult = (e, number1, number2, number3) => {
      result.innerHTML=`Результат => `;
      e.preventDefault();
      if(number1, number2, number3 != 0) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function() {
          if (xhttp.readyState==4 && xhttp.status==200) {
            console.log(xhttp.responseText)
            //result.innerHTML=`Результат => ${xhttp.responseText}`;
          }
        }
        xhttp.open('get', `../php/lab4_3.php?numberValue1=${number1}&numberValue2=${number2}$&numberValue3=${number3}`, true);
        xhttp.send();
      }
    }
    submitInput.addEventListener('click', (e) => getResult(e, value1, value2, value3));
  }