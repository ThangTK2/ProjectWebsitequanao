// quantity product
const quantityPlus = document.querySelector('.ri-add-line')
const quantityMinus = document.querySelector('.ri-subtract-line')
const quantityInput = document.querySelector('.quantity-input')
let quantity = 1

if(quantityPlus != null && quantityMinus != null){
  quantityPlus.addEventListener('click', () =>{
    quantity ++
    quantityInput.value = quantity
  })
  quantityMinus.addEventListener('click', () =>{
    if (quantity <= 1){
      return false
    }else{
      quantity --
      quantityInput.value = quantity
    }
  })
}
