const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', () =>{
        nav.classList.add('active');
    })
}
if(close){
    close.addEventListener('click', () =>{
        nav.classList.remove('active');
    })
}

const wrapper = document.querySelector('#wrapper');
const loginlink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnlogin = document.querySelector('.btnlogin-popup');
const closelogin = document.querySelector('.close');

registerLink.addEventListener('click', () => {
    wrapper.classList.add('active_login');
});

loginlink.addEventListener('click', () => {
    wrapper.classList.remove('active_login');
});

btnlogin.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});
closelogin.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup')
});

