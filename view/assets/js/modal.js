
const btnNewUser = document.querySelector('#btn_new_user');
const modalNewUser = document.querySelector('#modal_new_user');
const modalClose = document.querySelector('#modal_close');
btnNewUser.onclick = function() {
  modalNewUser.showModal();
}
modalClose.onclick = function() {
  modalNewUser.close();
}
