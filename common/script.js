var url = new URL(window.location.href);
var nav = document.getElementsByClassName("nav-item");
var navActive = document.querySelector(".active");
var navCabinet = nav[4];


var page = url.pathname.split("/")[1];

navActive.classList.remove("active");

switch(page)
{
    case "votre-osteopathe":nav[1].classList.add("active");break;
    case "osteopathie":nav[2].classList.add("active");break;
    case "perinatalite":nav[3].classList.add("active");break;
    case "cabinet":nav[4].classList.add("active");break;
    default :nav[0].classList.add("active");break;
    
    
}

window.addEventListener("scroll",function()
{
    if(page == "")
    {

        var cabinet = document.getElementById("cabinet");
        var cabinetY = cabinet.offsetTop;
        
        if(window.scrollY >= cabinetY-150)
        {
            navActive.classList.remove("active");
            nav[4].classList.add("active");
        } 
        else
        {
            nav[4].classList.remove("active");
            nav[0].classList.add("active");
        }
    }
});



