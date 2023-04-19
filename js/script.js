
const buttonLogin = document.querySelector('#login')
const buttonSignIn = document.querySelector('#signIn')
const promoSection = document.querySelector('#promoSection')
const loginSection = document.querySelector('#loginSection')
const signInSection = document.querySelector('#signInSection')
const loginBack = document.querySelector('#loginBack')
const signInBack = document.querySelector('#signInBack')


buttonLogin.addEventListener('click', loginDisplay)


function loginDisplay(){
   promoSection.style.display = 'none'
   loginSection.style.display = 'flex'
}


loginBack.addEventListener('click', loginButton)
signInBack.addEventListener('click', signInButton) 

function loginButton(){
   promoSection.style.display = 'flex'
   loginSection.style.display = 'none'
}
function signInButton(){
   promoSection.style.display = 'flex'
   signInSection.style.display = 'none'
}



buttonSignIn.addEventListener('click', signInDisplay)

function signInDisplay(){
   promoSection.style.display = 'none'
   signInSection.style.display = 'flex'
}