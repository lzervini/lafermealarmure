const menu=document.getElementsByClassName("header")[0];//récupère le menu

const rubriquesDeroulantes=menu.getElementsByClassName("menu__list")[0].getElementsByClassName("menu-item-has-children"); 
console.log(rubriquesDeroulantes);

for(i=0;i<rubriquesDeroulantes.length;i++)
{


    rubriquesDeroulantes[i].addEventListener("mouseover",function(){
        this.getElementsByClassName("sub-menu")[0].style.display="block";
    });

    rubriquesDeroulantes[i].addEventListener("mouseout",function(){
        this.getElementsByClassName("sub-menu")[0].style.display="none";
    });
}