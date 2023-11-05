const editProfileBtn = document.querySelector('.edit');
const editProfile = document.querySelector('.profile__update');


editProfileBtn.addEventListener('click', ()=> {
    editProfile.classList.add('active-profile');
})
