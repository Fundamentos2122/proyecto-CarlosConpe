function classToggle() {
    const navs = document.querySelectorAll('.Navbar_Items')
    
    navs.forEach(nav => nav.classList.toggle('Navbar_Toggle_Show'));
  }
  
  document.querySelector('.Navbar_Link_Toggle')
    .addEventListener('click', classToggle);