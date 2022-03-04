const slide = document.querySelectorAll(".slider-content-item ")
const neXt = document.querySelector(".fa-chevron-left")
const prev = document.querySelector(".fa-chevron-right")
let index = 0;

neXt.addEventListener("click",function(){
slide[index].classList.remove('active')
index = (index+1) % slide.length
slide[index].classList.add('active')
})
