const btnLogin = document.getElementById('btn-login');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('RegisterForm');
const overlay = document.getElementById('overlay');
const closeLogin = document.getElementById('closeLogin');
const closeRegister = document.getElementById('closeRegister');
const btnRegister = document.getElementById('btn-register'); // novo

btnLogin.addEventListener('click', () => {
    loginForm.style.display = 'block';
    overlay.style.display = 'block';
});

btnRegister.addEventListener('click', () => {
    registerForm.style.display = 'block';
    overlay.style.display = 'block';
});

closeLogin.addEventListener('click', () => {
    loginForm.style.display = 'none';
    overlay.style.display = 'none';
});

closeRegister.addEventListener('click', () => {
    registerForm.style.display = 'none';
    overlay.style.display = 'none';
});

overlay.addEventListener('click', () => {
    loginForm.style.display = 'none';
    registerForm.style.display = 'none';
    overlay.style.display = 'none';
});