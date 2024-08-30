const wrapper = document.getElementById('wrapper')
const registerBtn = document.getElementById('register')
const loginBtn = document.getElementById('login') 

registerBtn.addEventListener('click', () => {
    wrapper.classList.add("active")
})

loginBtn.addEventListener('click', () => {
    wrapper.classList.remove("active")
})

