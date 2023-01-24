var menuChambre=document.getElementsByClassName("header")[0];//récupère le menu

const rubriquesDeroulantes=menuChambre.getElementsByClassName("menu__list")[0].getElementsByClassName("menu-item-has-children"); 
console.log(rubriquesDeroulantes);

for(i=0;i<rubriquesDeroulantes.length;i++)
{


    rubriquesDeroulantes[i].addEventListener("mouseover",function(){
        this.getElementsByClassName("sub-menu")[0].style.display="block";
    });

    rubriquesDeroulantes[i].addEventListener("mouseout",function(){
        this.getElementsByClassName("sub-menu")[0].style.display="none";
    });
};

const hamburger = document.querySelector(".menuBurger");
const menu = document.querySelector(".menu");
const page = document.documentElement;

// La fonction permettant de basculer l'affichage en ajoutant/supprimant des classes
function doToggle() {
  this.classList.toggle('-open');
  menu.classList.toggle('-open');
  page.classList.toggle('noscroll');
}

// La fonction doToggle() est appelé lorsqu'on clique sur l'icone de menu
hamburger.addEventListener('click', doToggle);
