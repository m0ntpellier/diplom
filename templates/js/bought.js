
//     var select = document.getElementById("rowSeat"); 
//     var options = ["А","Б","В","Г","Д","Е","Ж","З"]; 
// for(var i = 0; i < options.length; i++) {
//     var opt = options[i];
//     var el = document.createElement("option");
//     el.textContent = opt;
//     el.value = opt;
//     select.add(el);
// }​
// var selectRow = document.getElementById("rowSeat"); 
// var selectSeat = document.getElementById("placeSeat"); 
// var rows = ["А","Б","В","Г","Д","Е","Ж","З","И"];
// var numSeatOne = [1,2,3,4,5,6,7,8,9,10,11,12,13]; 
// var numSeatTwo = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]; 
// var numSeatThree = [1,2,3,4,5,6,7,8,9,10];  
// var numSeatFour = [1,2,3,4,5,6]; 
// for(var i = 0; i < rows.length; i++) {
//     var row = rows[i];
//     selectRow.innerHTML += "<option value=\"" + row + "\">" + row + "</option>";
// } 
// selectRow.addEventListener('change', () => {
//     var selectedRow= $('#rowSeat').val();
//     var selectedSeat= $('#placeSeat').val();
//     switch (selectedRow) {
//         case 'А':
//             selectSeat.innerHTML='';            
//             for(var i = 0; i < numSeatOne.length; i++) {
//                 var seat = numSeatOne[i];
//                 selectSeat.innerHTML += "<option value=\"" + seat + "\">" + seat + "</option>";
//             }
//             console.log(selectRow.value);
//             break;
//         case 'Б':
//         case 'В':
//         case 'Г':
//         case 'Д':
//             selectSeat.innerHTML='';
//             for(var i = 0; i < numSeatTwo.length; i++) {
//                 var seat = numSeatTwo[i];
//                 selectSeat.innerHTML += "<option value=\"" + seat + "\">" + seat + "</option>";
//             }
//             console.log(selectRow.value);
//             break;
//         case 'Е':
//         case 'Ж':
//         case 'З':
//             selectSeat.innerHTML='';  
//             for(var i = 0; i < numSeatThree.length; i++) {
//                 var seat = numSeatThree[i];
//                 selectSeat.innerHTML += "<option value=\"" + seat + "\">" + seat + "</option>";
//             }
//             console.log(selectRow.value);
//             break;
//         case 'И':
//             selectSeat.innerHTML='';  
//             for(var i = 0; i < numSeatFour.length; i++) {
//                 var seat = numSeatFour[i];
//                 selectSeat.innerHTML += "<option value=\"" + seat + "\">" + seat + "</option>";
//             }
//             console.log(selectRow.value);
//             break;
//     }
// });
function setCookie ( name, value, exp_y, exp_m, exp_d, path, domain, secure )
{
  var cookie_string = name + "=" + escape ( value );
 
  if ( exp_y )
  {
    var expires = new Date ( exp_y, exp_m, exp_d );
    cookie_string += "; expires=" + expires.toGMTString();
  }
 
  if ( path )
        cookie_string += "; path=" + escape ( path );
 
  if ( domain )
        cookie_string += "; domain=" + escape ( domain );
  
  if ( secure )
        cookie_string += "; secure";
  
  document.cookie = cookie_string;
}

function getCookie(name) {
  var r = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
  if (r) return r[2];
  else return "";
}

function deleteCookie(name) {
  var date = new Date(); // Берём текущую дату
  date.setTime(date.getTime() - 1); // Возвращаемся в "прошлое"
  document.cookie = name += "=; expires=" + date.toGMTString(); // Устанавливаем cookie пустое значение и срок действия до прошедшего уже времени
}

function OpenModal()
{
  $('.modal-wrapper').toggleClass('open');
  $('.page-wrapper').toggleClass('blur-it');
   return false;
}

function AddEvent()
{
  document.getElementById("filmName");
}

function Updatehall(){
  $('#list').empty();
  $('#summa').text('0');
  $sum=0;
  arr=[];
  arrPrice=[];
  if ($('.number_ind').hasClass("simple")) {
    $('.simple').css('background','#119639');          
  }
  if ($('.number_ind').hasClass("vip")) {
      $('.vip').css('background','#2f79e7');          
  }
  if ($('.number_ind').hasClass("love")) {
      $('.love').css('background','#c5402e');          
  }
  if ($('.numberSecond_ind').hasClass("simple")) {
    $('.simple').css('background','#119639');          
  }
  if ($('.numberSecond_ind').hasClass("vip")) {
      $('.vip').css('background','#2f79e7');          
  }
  if ($('.numberSecond_ind').hasClass("love")) {
      $('.love').css('background','#c5402e');          
  }
}
$('.timesea').on('click', function () {
  OpenModal();
  Updatehall();
  let bs = $(this).text();
  // console.log(bs);
  // -----------Подстановка значений сеанса--------------
  $.ajax({
    url:"test.php", 
    data: { "bs": bs },
    dataType: "json",
    async: false,
    success:function(result){
      $("#filmName").text(result.name);
      $("#Seans").text(result.seans);
      $("#filmTime").text(bs);
      var hall=result.hall;
      if (hall=='Большой'){
        document.getElementById('oneHall').style.display = 'none';
        document.getElementById('SecHall').style.display = 'block';
      }if(hall=='Малый'){
        document.getElementById('oneHall').style.display = 'block';
        document.getElementById('SecHall').style.display = 'none';
      }
    }
  });
  // -----------Подстановка значений билетов--------------
  $.ajax({
    url:"test1.php", 
    data: { "bs": bs },
    dataType: "json",
    success:function(result){
      for (var i = 0; i < result.length; i++) {
        $nameFromDB=result[i].filmName;    
        $sit=result[i].place;
        $timeBeginFromDB=result[i].timeBegin; 
        $name=$("#filmName").text();
        $timeBegin=$("#filmTime").text(); 
        $row = $('.number_ind,.numberSecond_ind').data('row');
        $numS = $('.number_ind,.numberSecond_ind').data('number');
        $letter=$sit.replace(/[^\W;]/g, '');
        $number=$sit.replace(/[^\d;]/g, '');
        // console.log($nameFromDB+'|'+$sit+'|'+$letter+'|'+$number+'|'+$timeBeginFromDB);
        if ($timeBeginFromDB==$timeBegin){
          if ($nameFromDB==$name) {
            $('.number_ind,.numberSecond_ind').filter(function() {
              for (var property in $(this).data()) {
                  if (property.indexOf('row') && property.indexOf('number') == 0) {
                  var row = $(this).data("row");
                  var sit = $(this).data("number");
                  if (row==$letter && sit==$number){
                    // console.log('yes');                   
                    $(this).css('background', '#c9c9c9');
                  }
                      return true;
                  }
              }
              return false;
            })
          }
        }
      }
    },
    error: function (request, status, error) {
              // console.log(request.responseText+ '|\n' + status + '|\n' +error);
    
          }
  });
})
  // ------------КУКИ-------------------
  // setCookie("test", "god", 2020, 6, 14); 
  // console.log(getCookie("test")); 
  // deleteCookie("test"); 
  // console.log(getCookie("test")); 
  // ------------КУКИ-------------------
arr=[];
arrPrice=[];
$sum=0;
var mainList = document.getElementById("list");
var newSeat = document.createElement('li');
// Проверка на наличие в массиве
function isInArray(array, search)
{
    return array.indexOf(search) >= 0;
}
//Удаление из списка
function del() {
  var elem = document.getElementById("list").lastChild;
  elem.parentNode.removeChild(elem);
}


$('.number_ind').click(function () {
  $row = $(this).data('row');
  $numS = $(this).data('number');
  $price = $(this).data('price');
  $timeBeg = $("#filmTime").text();
  $StrSeat = $row+$numS;
  if(isInArray(arr, $StrSeat)){
    $ind=arr.indexOf($StrSeat);
    $indPr=arrPrice.indexOf($price);
    arr.splice($ind, 1);
    arrPrice.splice($indPr,1);
    $sum=$sum-$price;
    del();
    document.getElementById('summa').innerText = $sum;
    // console.log(arr);
    // console.log('Удален');

    if ($(this).hasClass("simple")) {
      $(this).css('background','#119639');          
    }
    if ($(this).hasClass("vip")) {
        $(this).css('background','#2f79e7');          
    }
    if ($(this).hasClass("love")) {
        $(this).css('background','#c5402e');          
    }

  }else{
    arr.unshift($StrSeat);
    arrPrice.unshift($price);
    $sum=$sum+$price;
    // console.log('Добавлен');
    $(this).css('background','#feffd7');
    document.getElementById('summa').innerText = $sum;
      var item = $StrSeat;
      var elem = document.createElement("li");
      elem.value=item;
      elem.innerHTML= 'Ряд '+$row+' | Место '+ $numS;
      mainList.appendChild(elem);
      
    if (arr.length>5){
      swal.fire("Внимание!", "Вы можете выбрать только 5 мест!", "warning");
      del();
      if ($(this).hasClass("simple")) {
        $(this).css('background','#119639');          
      }
      if ($(this).hasClass("vip")) {
          $(this).css('background','#2f79e7');          
      }
      if ($(this).hasClass("love")) {
          $(this).css('background','#c5402e');          
      }

      $sum=$sum-$price;
      arr.shift();
      arrPrice.shift();
      document.getElementById('summa').innerText = $sum;    
    }
  }
  // console.log($sum);
  // console.log(arrPrice);
  // console.log('Ряд:',$row,'Место: ',$numS,'Цена: ',$price,'.руб');
});

$('.numberSecond_ind').click(function  () {
  $row = $(this).data('row');
  $numS = $(this).data('number');
  $price = $(this).data('price');
  $timeBeg = $("#filmTime").text();
  $StrSeat = $row+$numS;
  if(isInArray(arr, $StrSeat)){
    $ind=arr.indexOf($StrSeat);
    $indPr=arrPrice.indexOf($price);
    arr.splice($ind, 1);
    arrPrice.splice($indPr,1);
    $sum=$sum-$price;
    del();
    document.getElementById('summa').innerText = $sum;
    // console.log(arr);
    // console.log('Удален');

    if ($(this).hasClass("simple")) {
      $(this).css('background','#119639');          
    }
    if ($(this).hasClass("vip")) {
        $(this).css('background','#2f79e7');          
    }
    if ($(this).hasClass("love")) {
        $(this).css('background','#c5402e');          
    }

  }else{
    arr.unshift($StrSeat);
    arrPrice.unshift($price);
    $sum=$sum+$price;
    // console.log('Добавлен');
    $(this).css('background','#c9c9c9');
    document.getElementById('summa').innerText = $sum;
      var item = $StrSeat;
      var elem = document.createElement("li");
      elem.value=item;
      elem.innerHTML= 'Ряд '+$row+' | Место '+ $numS;
      mainList.appendChild(elem);
      
    if (arr.length>5){
      swal.fire("Внимание!", "Вы можете выбрать только 5 мест!", "warning");
      del();
      if ($(this).hasClass("simple")) {
        $(this).css('background','#119639');          
      }
      if ($(this).hasClass("vip")) {
          $(this).css('background','#2f79e7');          
      }
      if ($(this).hasClass("love")) {
          $(this).css('background','#c5402e');          
      }

      $sum=$sum-$price;
      arr.shift();
      arrPrice.shift();
      document.getElementById('summa').innerText = $sum;    
    }
  }
  // console.log($sum);
  // console.log(arr);
  // console.log('Ряд:',$row,'Место: ',$numS,'Цена: ',$price,'.руб');
});

$('#buyTicket').click(function () {
  $nameF=$("#filmName").text();
  $seans=$("#Seans").text();
  $timeB=$("#filmTime").text();
  $sits= arr;
  $StringArr=arr.toString();
  Swal.fire({
    title: 'Введите свои данные',
    html:
    '<input class="form-control" placeholder="Введите ваше Имя" type="text" id="nameBuy" name="nameBuy" autocomplete="off">'+
    '<input class="form-control" placeholder="Введите ваш E-mail" type="text" id="emailBuy" name="emailBuy" autocomplete="off">',
    focusConfirm: false,
    showCancelButton: true,
    cancelButtonText: 'Закрыть',
    confirmButtonText: 'Купить билет',
    footer: 'На почту будут высланы данные о купленных билетах!'
  }).then(function (result) { 
    $nb=document.getElementById("nameBuy").value;
    $eb=document.getElementById("emailBuy").value;
    if ($eb.match(/[0-9a-z_]+@[0-9a-z_]+\.[a-z]{2,5}/i)) {
        if (result.value) {
          for (var i = 0; i < arr.length; i++){
            $mas=arr[i];
            $masPr=arrPrice[i];
            // console.log($mas);
            // console.log($nameF+'|'+$seans+'|'+$timeB+'|'+$mas+'|'+$nb+'|'+$eb);
            $.ajax({
            url:"insertDBSits.php", 
            data: "name=" + $nameF+"&seans="+$seans+"&filmTime="+$timeB+"&mas="+$mas+"&masPr="+$masPr+"&nameBuy="+$nb+"&emailBuy="+$eb,
            dataType: "json",
            success:function(){
            }
          });
        }
        $.ajax({
          url:"sendTick.php", 
          data: "name=" + $nameF+"&seans="+$seans+"&filmTime="+$timeB+"&sum="+$sum+"&nameBuy="+$nb+"&emailBuy="+$eb+"&StringArr="+$StringArr,
          dataType: "json",
          success:function(){
            
          }
        });
        swal.fire("Успешно!", "Покупка успешно завершена, спасибо за пользование нашими услугами. Приятного просмотра!","success");
        $('#list').empty();
        $('#summa').text('0');
        $sum=0;
        arr=[];
        arrPrice=[];
        } else if (result.dismiss === Swal.DismissReason.cancel) {
        }
      } else{
        swal.fire('Вы ввели некорректный e-mail!');
      }
})
  




  // for (var i = 0; i < arr.length; i++){
  //   $mas=arr[i];
  //   console.log($mas);
  //   console.log($nameF+'|'+$seans+'|'+$timeB+'|'+$mas);
  //   $.ajax({
  //   url:"insertDBSits.php", 
  //   data: "name=" + $nameF+"&seans="+$seans+"&filmTime="+$timeB+"&mas="+$mas,
  //   dataType: "json",
  //   success:function(){
  //   }
  // });
  // swal.fire("Успешно!", "Покупка успешно завершена, спасибо за пользование нашими услугами. Приятного просмотра!","success");
  // }
  // arrSave.push(...arr);
  // console.log(arrSave);
  // $.ajax({
  //   type: "POST",
  //   url:"cookie.php", 
  //   data: "arr=" + JSON.stringify(arr)+"&name="+name,
  //   dataType: "json",
  //   success:function(data){
  //   }
  // });

  // ---------Пример дял куки-----
  // $json = json_encode($arr);
  // setCookie ("tick", $json);
  // console.log(getCookie("tick")); 
});

  $('#perehod').click(function () {
    Swal.fire({
      type: 'info',
      title: 'Как купить билеты?',
      html: '<div class="contentModalBuy">'+
            '<ul id="listBuy">'+
            '<li> - Выберите предпочитаемый фильм</li>'+
            '<li> - Нажмите на интересуемое время</li>'+
            '<li> - Выберите место</li>'+
            '<li> - Нажмите на кнопку "Приобрести"</li>'+
            '<li> - Пройдите процедуру оплаты</li>'+
            '<li> - Наслаждайтесь просмотром!</li>'+
            '</ul>'+
            '</div>',
    })
    // alert( 'А12'.replace(/[^\W;]/g, '') );
    // alert( 'А12'.replace(/[^\d;]/g, '') );
    // $.ajax({
    //   type: "POST", 
    //   url: "data.json",
    //   success: function (data, text) {
    //       alert('HERE');
    //       console.log(JSON.stringify(data.tickets.row));
    //       $.each(data.tickets, function(k,v){
    //           console.log(k + "/" + v);
  
    //       });
    //   },
    //  //add this error handler you'll get alert
    //   error: function (request, status, error) {
    //       console.log(request.responseText+ '|\n' + status + '|\n' +error);

    //   }
    // });
   });


