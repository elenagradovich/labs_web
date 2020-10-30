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
            const jsonResponse = JSON.parse(xhttp.responseText);
            if(jsonResponse.arr.length > 0) {
              result.innerHTML=`Числа <b>${jsonResponse.arr.join(', ')}</b> делятся без остатка на <b>${value3}</b> и в сумме составляют <b>${jsonResponse.sum}</b>`;
            } else {
              result.innerHTML='Подходящих чисел нет!'
            }
          }
        }
        xhttp.open('get', `../php/lab4_3.php?numberValue1=${number1}&numberValue2=${number2}$&numberValue3=${number3}`, true);
        xhttp.send();
      }
    }
    submitInput.addEventListener('click', (e) => getResult(e, value1, value2, value3));
  }