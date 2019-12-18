//let botonComprar =  document.querySelector('#botonComprar')
//console.log(botonComprar)




//botonComprar.addEventListener('mouseover',function(){
//    this.classList.add('animated', 'swing')
//})

//botonComprar.addEventListener('mouseout',function(){
//    this.classList.remove('animated', 'swing')
//})


//Lo programo con jquery
$('.botonComprar').mouseover(function(){
    $(this).addClass('animated swing')
});

$('.botonComprar').mouseout(function(){
    $(this).removeClass('animated swing')
});


