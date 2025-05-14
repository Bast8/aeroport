const menurideauButton = document.querySelector (".nav-toggler")

const navigation = document.querySelector("nav")

menurideauButton.addEventListener("click", toggleNav)

function toggleNav(){
    menurideauButton.classList.toggle("active")
    navigation.classList.toggle("active")
}