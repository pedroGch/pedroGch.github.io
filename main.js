let menutoggle = document.querySelector('.toggle');
let menu = document.querySelector('.menu');
menutoggle.onclick =  function(){
  menutoggle.classList.toggle('active');
  menu.classList.toggle('mostrar');
  
}