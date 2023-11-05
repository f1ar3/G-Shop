const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const photoLogin = document.querySelector('.nav__photo__1');
const iconClose = document.querySelector('.icon__close');


registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
})

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
})

photoLogin.addEventListener('click', ()=> {
    wrapper.classList.add('active-photo');
})
iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-photo');
})

