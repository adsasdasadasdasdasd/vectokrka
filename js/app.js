const popupBtn = document.querySelector('.popup-helper');
const popupWindow = document.querySelector('.popup');

function openPopup(){
    popupWindow.classList.toggle('active-popup');
    popupBtn.classList.toggle('active-helper');
}
popupBtn.addEventListener('click', openPopup);

// Burger

const burgerBtn = document.querySelector('.burger-menu');
const burgerList = document.querySelector('.burger-list');


burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('active-burger');
    burgerList.classList.toggle('active-list');
})
