const pageContent = document.getElementById("l-page_content");
const navButton = document.getElementById("js-nav_button");
const closeButton = document.getElementById("js-button_close");
const navContent = document.getElementById("navContent");

navButton.addEventListener("click",function(){
  navContent.classList.toggle("panelactive");
  pageContent.classList.toggle("blur");
})
closeButton.addEventListener("click", function(){
  navContent.classList.remove("panelactive");
  pageContent.classList.remove("blur");
})
