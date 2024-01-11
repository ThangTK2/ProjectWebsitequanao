// slider
const sliderItem = document.querySelectorAll('.slider-item')
for (let index = 0; index < sliderItem.length; index++) {
  sliderItem[index].style.left = index * 100 + '%'
}

const sliderItems = document.querySelector('.slider-items')
const arrowRight = document.querySelector('.ri-arrow-right-circle-line')
const arrowLeft = document.querySelector('.ri-arrow-left-circle-line')
let i = 0
if (arrowLeft != null && arrowRight != null) {
  arrowRight.addEventListener('click', () => {
    if(i < sliderItem.length - 1){
      i++;
      sliderItems.style.left = -i * 100 +'%';
    }else{
      return false;
    }
  })
  arrowLeft.addEventListener('click', () => {
    if(i <= 0){
      return false;
    }else{
      i--;
      sliderItems.style.left = -i * 100 +'%';
    }
  })
} 


function autoSlider(){
  if(i < sliderItem.length - 1){
    i++
    sliderItems.style.left = -i * 100 +'%';
  }else{
    i = 0
    sliderItems.style.left = -i * 100 +'%';
  }
}
setInterval(autoSlider, 5000)


// menu-bar responsive
const menuBar = document.querySelector('.header-bar-icon')
const headerNav = document.querySelector('.header-nav')
menuBar.addEventListener('click', () =>{
  headerNav.classList.toggle('active')
})

//sticky header
window.addEventListener('scroll', () =>{
  if (scrollY > 50){
    document.querySelector('#header').classList.add('active')
  }else{
    document.querySelector('#header').classList.remove('active')
  }
})


