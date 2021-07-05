
const menuBtn = document.querySelector(".menu");
const navigation = document.querySelector(".navlinks");

menuBtn.addEventListener("click" ,() => {
menuBtn.classList.toggle("active");
navigation.classList.toggle("active");
});