'use strict';

//task 1
const showSquare = (color) => {
  switch (color) {
    case 'red': 
      alert('Вы нажали на красный квадрат');
      break;
    case 'green': 
      alert('Вы нажали на зеленый квадрат');
      break;
    case 'yellow': 
      alert('Вы нажали на желтый квадрат');
      break;
    default: alert('Цвет не определен');
  }
}

//task 2
const dataString = 'В тайге и горах можно увидеть <b>марала, лося, белку</b>, бурундука, зайца.';
const firstIndex = dataString.indexOf('<b>');
const lastIndex = dataString.lastIndexOf('</b>');;
const resultPlace1 = document.querySelector('.task2_result1');
const resultPlace2 = document.querySelector('.task2_result2');
if(firstIndex && lastIndex) {
  //substr - указать первый индекс и длину
  resultPlace1.innerHTML = dataString.substr(firstIndex, lastIndex-firstIndex);
  //substring - указать первый индекс и последний
  resultPlace2.innerHTML = dataString.substring(firstIndex, lastIndex);
}

//task3
const resultPlace3_1 = document.querySelector('.task3_result1');
const resultPlace3_2 = document.querySelector('.task3_result2');
const dataString3 = '(1052)(1086)(1089)(1082)(1074)(1072)';
let result1 = '';
let result2 = '';
let newDataArray = dataString3.split(')');
for(let i=0; i<newDataArray.length; i++) {
  result1 +=String.fromCharCode(newDataArray[i].substr(1));
}
resultPlace3_1.innerHTML = result1;
newDataArray = result1.split('');
for(let i=0; i<newDataArray.length-1; i++) {
  result2 += `(${newDataArray[i].charCodeAt(0)})`;
}
resultPlace3_2.innerHTML = result2;

//task4
const resultPlace4 = document.querySelector('.task4_result1');
const innerContentPrev = resultPlace4.textContent;
const dataString4 = '<b>Алтайские горы</b> - представляют сложную систему самых высоких в <b>Сибири</b> хребтов, разделённых глубокими долинами рек и обширными внутригорными и межгорными котловинами. Горная система расположена там, где сходятся границы России, Монголии, Китая и Казахстана. Она делится на <b>Южный Алтай</b> (Юго-Западный), Юго-Восточный Алтай и Восточный Алтай, Центральный Алтай, Северный и Северо-Восточный Алтай, Северо-Западный Алтай. Алтайский, Катунский заповедники и плоскогорье Укок в совокупности образуют объект Всемирного наследия <b>ЮНЕСКО</b>, именуемый «<b>Алтай — Золотые горы</b>».</p>';
const getListIdx = (str, substr) => {
  let listIdx = [];
  let x=-1;
  for(let i=0; i<str.length; i++) {
    x = str.indexOf(substr, i);
    let a = listIdx[listIdx.length-1];
    
    if(listIdx[listIdx.length-1] !== x && x!== -1) {
      listIdx.push(x);
    }
  }
  return listIdx;
}
const result = getListIdx(dataString4, '<b>');
resultPlace4.innerHTML = result.length !== 0 ? `${innerContentPrev} ${result.join(' ')}` : 'Ничего не найдено!';

//task5
const resultPlace5_1 = document.querySelector('.task5_result1');
const resultPlace5_2 = document.querySelector('.task5_result2');
const resultPlace5_3 = document.querySelector('.task5_result3');
//Зададим первую дату
const date1=new Date(388048292221);
resultPlace5_1.innerHTML = `${date1.getDate()}.${date1.getMonth()}.${date1.getFullYear()}`
//Зададим вторую дату
const date2=new Date(734019522932);
resultPlace5_2.innerHTML = `${date2.getDate()}.${date2.getMonth()}.${date2.getFullYear()}`
//Зададим третью дату
const date3=new Date(983283741123);
resultPlace5_3.innerHTML = `${date3.getDate()}.${date3.getMonth()}.${date3.getFullYear()}`

//task6
const resultPlace6_1 = document.querySelector('.task6_result1');
const resultPlace6_2 = document.querySelector('.task6_result2');
const resultPlace6_3 = document.querySelector('.task6_result3');
let resultPlace6 = document.querySelector('.task6_result');
const result6_1 = Math.round(Math.pow((48/3*Math.PI+308/4*Math.E), 2)-203*Math.sin(5)+Math.pow((10*Math.PI-3*Math.E),3));
const result6_2 = Math.round(Math.pow((Math.cos(20)-Math.cos(3)+Math.tan(5))*(-1), 0.5)*(-1)-203/Math.sin(2));
const result6_3 = Math.round(Math.pow((22*Math.PI/22*Math.E-Math.sin(3)*Math.tan(4)-34) ,10));
const arrResults = [result6_1, result6_2, result6_3].sort();
resultPlace6_1.innerHTML = result6_1;
resultPlace6_2.innerHTML = result6_2;
resultPlace6_3.innerHTML = result6_3;
resultPlace6.innerHTML = resultPlace6.textContent + arrResults[0];

//Task7
const getTask7Result = () => {
  let x, y;
  // метод parseInt() переводит строку в целое число
  x=parseInt(prompt("Введите значение х",''));
  y=parseInt(prompt("Введите значение у",''));
  if(x<y){
    alert(`Максимальное число: ${y}`);
  } else if (x>y) {
    alert(`Максимальное число: ${x}`)
  }
  else {
    alert("Введенные числа равны!")
  }
}

//task8
function line() {document.writeln("<hr align='center' width='100'>");}
for (var i=1; i<10; i++) line();

const drawLine = (length) => document.writeln(`<hr align='center' width=${length}>`);
let length = 0;
for (var i=0; i<10; i++) drawLine(length+=10);

//task9
const numberField = document.querySelector('.task9_number');
const powField = document.querySelector('.task9_pow');
const resultPlace = document.querySelector('.task9_result');
const buttonResult = document.querySelector('.task9_button-result'); 
let numberValue, powValue;

numberField.addEventListener("change", (e) => {
  numberValue = e.target.value;
});

powField.addEventListener("change", (e) => {
  powValue = e.target.value;
});

buttonResult.addEventListener("click", () => {
  resultPlace.innerHTML = '';
  if(numberValue && powValue && powValue >= 0) {
    let fragment = new DocumentFragment();
    const table = document.createElement('table');
    table.classList.add('task9_table');
    let tableHeader = document.createElement('tr');
    tableHeader.classList.add('task9_table-header');
    tableHeader.innerHTML = '<th>Степень</th><th>Результат</th>';
    table.append(tableHeader);
    for(let i=0; i<=powValue; i++) {
      let tableRow = document.createElement('tr');
      tableRow.classList.add('task9_table-row');
      tableRow.innerHTML = `<td>${numberValue}<sup>${i}</sup></td><td>${Math.pow(numberValue, i)}</td>`;
      fragment.append(tableRow);
    }
    table.append(fragment);
    resultPlace.insertAdjacentElement('afterbegin', table);
  }
});




  