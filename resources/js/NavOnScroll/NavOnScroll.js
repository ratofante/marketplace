class NavOnScroll {
  constructor() {

    this.lastY = 0;
    this.size = window.innerWidth;

    this.navMain = document.querySelector('.nav-main');
    this.navCategories = document.querySelector('.nav-categories');
    this.searchBtn = document.querySelector('.box-user-menu .search');
    this.boxSearch = document.querySelector('.nav-main .box-search');

    document.addEventListener('scroll' , () => {
      if(this.size < 2000 && this.isMenuActive()) {
        this.barHandle()
      }
    });

    this.resize();
  }

  resize() {
    window.addEventListener('resize', () => {
        this.size = window.innerWidth;
    })
  }

  isMenuActive() {
    let response = document.querySelector('.nav-menu').classList.contains('visible') || 
    document.querySelector('.mobile-nav-menu').classList.contains('visible')
    ? false
    : true;
    return response;
  }

  barHandle() {
    this.toggleNav();
    this.showIfTop();
    this.lastY = window.scrollY;
  }

  toggleNav() {
    if (this.lastY < window.scrollY ) {
      //Scroll down
      this.hideNav();

    } else if (this.lastY > window.scrollY) {
        //Scroll Up
        this.showNav();
    }
  }

  showIfTop() {
    window.scrollY < 50 && this.showNav();
  }

  hideNav() {
    this.navMain.classList.add('hide');
    this.navCategories.classList.add('hide');
    this.searchBtn.classList.remove('search-active');
    document.querySelector('.nav-mobile-bg').classList.remove('search-active');
    document.querySelector('.mobile-nav-menu-menu').classList.remove('search-active');
    $('.navigation-select').select2('close');
    this.boxSearch.classList.remove('show');
  }

  showNav() {
    this.navMain.classList.remove('hide');
    this.navCategories.classList.remove('hide');
  }
}

export default NavOnScroll;