document.querySelector("#show-login-two").addEventListener("click",function(){
  document.querySelector(".popup-two").classList.add("active");
});
document.querySelector(".popup-two .close-btn-two").addEventListener("click",function(){
  document.querySelector(".popup-two").classList.remove("active");
});