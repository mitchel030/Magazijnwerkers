// Steven JS
// Hide order message after clicking on it
if (document.querySelector('.superuser--order')) {
  const orderMessage = document.querySelector('.superuser--order')
  orderMessage.addEventListener('click', function() {
    orderMessage.classList.add('hidden')
  })
}

// const openModalButtons = document.querySelectorAll('[data-modal-target]')
// const closeModalButtons = document.querySelectorAll('[data-close-button]')
// const overlay = document.getElementById('overlay')

// openModalButtons.forEach(button => {
//   button.addEventListener('click', () => {
//     const modal = document.querySelector(button.dataset.modalTarget)
//     openModal(modal)
//   })
// })

// overlay.addEventListener('click', () => {
//   const modals = document.querySelectorAll('.modal.active')
//   modals.forEach(modal => {
//     closeModal(modal)
//   })
// })

// closeModalButtons.forEach(button => {
//   button.addEventListener('click', () => {
//     const modal = button.closest('.modal')
//     closeModal(modal)
//   })
// })

// function openModal(modal) {
//   if (modal == null) return
//   modal.classList.add('active')
//   overlay.classList.add('active')
// }

// function closeModal(modal) {
//   if (modal == null) return
//   modal.classList.remove('active')
//   overlay.classList.remove('active')
// }

// Damiën's JS
if (document.querySelector('#editBtn')) {
  //Get the modal
  var editModal = document.getElementById("editModal");
  
  var overlay = document.querySelector('.editOverlay');
  // Get the button that opens the modal
  var editBtn = document.getElementById("editBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  editBtn.addEventListener('click', function() {
    editModal.classList.remove("hidden");
  })
  // When the user clicks on <span> (x), close the modal
span.addEventListener('click', function() {
  editModal.classList.add("hidden");
})


// When the user clicks anywhere outside of the modal, close it
overlay.addEventListener('click', function(){
  editModal.classList.add("hidden");
})
// this will make it that if escape is pressed the popup closes
document.addEventListener("keydown", function(Event){
    if(Event.key === 'Escape' && !editModal.classList.contains('hidden')){
      editModal.classList.add("hidden");
    }
})

  
 
}









// function Editfunction() {
  
// }