
//click product image detail
const imageSmall = document.querySelectorAll('.product-images-items img')
const imageMain = document.querySelector('.main-image')
for (let index = 0; index < imageSmall.length; index++) {
  imageSmall[index].addEventListener('click', () => {
    imageMain.src = imageSmall[index].src

    for (let index = 0; index < imageSmall.length; index++) {
      imageSmall[index].classList.remove('active')
    }
    imageSmall[index].classList.add('active')
  })
}