//Erroubaai Aya

let index = 0;
const slides = document.querySelectorAll(".slide");
slides[0].classList.add('active');

function changerSlide(direction) {
  const currentAudio = slides[index].querySelector("audio");
  currentAudio.pause();

  slides[index].classList.remove("active");
  index = (index + direction + slides.length) % slides.length;
  slides[index].classList.add("active");
  
  
}
