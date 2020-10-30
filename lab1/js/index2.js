
jQuery(document).ready(function($){

  //task 1
  const result1 = document.querySelector('.task1_result');
  txt=' yandex.ru example.com www.yandex.ru example.ru yandex http://example.com http://www.yandex.ru wiisdomweb.ru YANDEX.RU ';
  regex1=/([^\s]*)yandex([^\s]*)/gi;
  result1.innerHTML = '<b>'+ txt.match(regex1).join(', ') +'</b>';

  //task 2
  function Automobile(color, model, year, manufact) {
    this.color = color;
    this.model = model;
    this.year = year;
    this.manufact = manufact;

    this.whatColor = function () {
      return this.color;
    }

    this.autoInfo = function () {
      return `${this.manufact} ${this.model} ${this.year}`;
    }
  }

  const getResult = (...data) => {
    let result = [];
    for(item of data) {
      result.push(`${item.driverInfo ? item.driverInfo() : ''} ${item.autoInfo()} ${item.whatColor()}`);
      
    }
    return result.join(', ');
  }

  const nissan = new Automobile('красный', 'Skyline', 2007, 'Nissan');
  const corolla = new Automobile('черный', 'Corolla',  2009, 'Toyota');
  const volkswagen = new Automobile('синий', 'Golf',  2009, 'Volkswagen');
  $(".task2_result1").html(`<b>${getResult(nissan, corolla, volkswagen)}</b>`);


  function Driver(color, model, year, manufact, name, experience) {
    this.base = Automobile;
    this.base(color, model, year, manufact);
    this.name = name;
    this.experience = experience;
    
    this.driverInfo = function () {
      return `${this.name} ${this.experience}`;
    }
  }

  const fordDriver = new Driver('белый', 'Focus', 2010, 'Ford', 'Дмитрий', 3);
  $(".task2_result2").html(`<b>${getResult(fordDriver)}</b>`);


  //Task 3
  $(".task3__button").click(function(e){
    alert("Поздравляем! Вы починили код!");
  });

  //Task 4
  $("p").css({
    "font-size":"20px"
  });
  $("#el2").css({
    "color":"green"
  });
  $(".el3").css({
    "color":"red"
  });
  $(".el3, #el2").css({
    "font-weight":"bold"
  });
  $("input[type='button']").css({
    "color":"blue"
  });
  $("[href]").css({
    "font-size":"20px"
  });
  $("[href='http://www.google.com/']").css({
    "color":"green"
  });
  
  //Task 5
  $("#meadow, .rainbow").css({
    "color":"red",
    "font-size":"50px"
  });
  $("#fut").css({
    "color":"red",
    "font-size":"30px"
  });
  $("#fut #future").css({
    "color":"blue",
    "font-size":"50px"
  });
  $("[set]").css({
    "color":"green",
    "font-size":"50px"
  });
  $("[last='code']").css({
    "color":"red",
    "font-size":"50px"
  });
  $("[style='display:inline']").css({
    "color":"red",
    "font-size":"50px"
  });
});
