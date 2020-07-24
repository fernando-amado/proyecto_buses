var notasMenu = document.getElementById('notas-menu');
var show = document.getElementById('menu');

notasMenu.addEventListener('click', function(){
    this.classList.toggle("close");
    show.classList.toggle("show");
})