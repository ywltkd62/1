var Links={
  SetColor:function(color){
    // var alist=document.querySelectorAll('a');
    // var i=0;
    // while(i<alist.length){
    // alist[i].style.color=color;
    // i=i+1;
    //   }
    $('.side a').css('color',color);
    }
  }
  var Body={
    SetColor:function(color){
   // document.querySelector('body').style.color=color;
$('body').css('color',color);
  },
  SetBackgroundColor:function (color){
  // document.querySelector('body').style.backgroundColor=color;
  $('body').css('backgroundColor',color);
  }
}
function nightday(s){
var target=document.querySelector('body');
if (s.value==='night'){
Body.SetBackgroundColor('black');
Body.SetColor('white');
s.value='pink';

Links.SetColor('powderblue');
}


 else if(s.value==='pink'){
     Body.SetBackgroundColor('pink');
        s.value='day';
   Body.SetColor('black');
Links.SetColor('yellow');
   }
else {
  Body.SetBackgroundColor('white');
Body.SetColor('black');
s.value='night';
Links.SetColor('blue');

  }
}
