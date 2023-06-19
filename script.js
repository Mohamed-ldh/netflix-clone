function signup(){
    open("signup.php","_self")
}
function login(){
    open("login.php","_self")
}
function shows(){
    open("shows.php","_self")
}
function movies(){
  open("movies.php","_self")
}
function soon(){
  open("soon.php","_self")
}
function home(){
  open("Accueil.php","_self")
}

function movie_sport(){
  open("m_sport.php","_self")
}

function movie_action(){
  open("m_action.php","_self")
}
function movie_horror(){
  open("m_horror.php","_self")
}
function tv_sci(){
  open("tv_sci.php","_self")
}
function tv_action(){
  open("tv_action.php","_self")
}

function tv_crime(){
  open("tv_crime.php","_self")
}

function video(){
  open("video.php","_self")
}

function video2(){
  open("video2.php","_self")
}

document.addEventListener("click", e => {
    const isDropdownButton = e.target.matches("[data-dropdown-button]")
    if (!isDropdownButton && e.target.closest("[data-dropdown]") != null) return
  
    let currentDropdown
    if (isDropdownButton) {
      currentDropdown = e.target.closest("[data-dropdown]")
      currentDropdown.classList.toggle("active")
    }
  
    document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
      if (dropdown === currentDropdown) return
      dropdown.classList.remove("active")
    })
  })

  const swiper = new Swiper(".swiper-container", {
    slidesPerView: 2,
    slidesPerGroup: 1,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev' },
  
    breakpoints: {
      // when window width is >= 600px
      600: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 5,
        centeredSlides: true },
  
  
      // when window width is >= 900px
      900: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 5,
        centeredSlides: false },
  
  
      // when window width is >= 1200px
      1200: {
        slidesPerView: 4,
        slidesPerGroup: 4,
        spaceBetween: 5,
        centeredSlides: false },
  
  
      // when window width is >= 1500px
      1500: {
        slidesPerView: 5,
        slidesPerGroup: 5,
        spaceBetween: 5,
        centeredSlides: false },
  
  
      // when window width is >= 1800px
      1800: {
        slidesPerView: 6,
        slidesPerGroup: 6,
        spaceBetween: 5,
        centeredSlides: false } } });
  //# sourceURL=pen.js