const searchForm = document.querySelector(".search-form");
const navbar = document.querySelector(".navbar");

/* buttons*/
const searchBtn = document.querySelector("#search-btn");
const menuBtn = document.querySelector("#menu-btn");

searchBtn.addEventListener("click", function(){
    searchForm.classList.toggle("active");
    document.addEventListener("click", function(e){
        if(!e.composedPath().includes(searchBtn) &&
           !e.composedPath().includes(searchForm))
        {
            searchForm.classList.remove("active") 
        } 
            
        
        
    });
});

menuBtn.addEventListener("click", function(){
    navbar.classList.toggle("active");
    document.addEventListener("click", function(e){
        if(!e.composedPath().includes(menuBtn) &&
           !e.composedPath().includes(navbar))
        {
            navbar.classList.remove("active") 
        }      
        
    });
});
const images = document.querySelectorAll('.hover-to-zoom'); // Bütün resimler için ortak bir class adı

images.forEach(image => {
  let timer;

  image.addEventListener('mouseenter', () => {
    timer = setTimeout(() => {
      image.style.transform = 'scale(1.17)';
    }, 2000);
  });

  image.addEventListener('mouseleave', () => {
    clearTimeout(timer);
    image.style.transform = 'scale(1)';
  });
});