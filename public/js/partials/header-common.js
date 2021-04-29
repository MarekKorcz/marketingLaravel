document.addEventListener('DOMContentLoaded', (event) => {

    // >> nav bar animation
    function navSlide() {
      const burger = document.querySelector(".burger");
      const nav = document.querySelector(".nav-links");
      const navLinks = document.querySelectorAll(".nav-links li");
      
      burger.addEventListener("click", () => {
          //Toggle Nav
          nav.classList.toggle("nav-active");
          
          //Animate Links
          navLinks.forEach((link, index) => {
              if (link.style.animation) {
                  link.style.animation = ""
              } else {
                  link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
              }
          });
          //Burger Animation
          burger.classList.toggle("toggle");
      });
      
    }
  
    navSlide();
    // << nav bar animation

    // >> footer copyright info
    let today = new Date().getFullYear() 
    document.getElementById('copyright').innerHTML = `&copy; ${today} Mark MEDIA. Wszelkie prawa zastrzeżone`
    // << footer copyright info

    // >> gdpr info banner  
    let allCookiesObj = document.cookie
        .split(';')
        .map(cookie => cookie.split('='))
        .reduce((accumulator, [key, value]) =>
            ({...accumulator, [key.trim()]: decodeURIComponent(value) }),
    {})    
    
    if (allCookiesObj.banner) {
        setBannerCookie()
    } else {
        let bannerElement = document.getElementById("banner")
        bannerElement.innerHTML = `
            <div id="banner-text">
                <p>
                    Korzystając z naszej witryny, potwierdzasz, że przeczytałeś i rozumiesz naszą
                    <a target="_blank" href="/private-policy">
                        Politykę prywatności
                    </a>
                    oraz
                    <a target="_blank" href="/regulations">
                        Regulamin
                    </a>
                    .
                </p>
            </div>
            <div id="banner-button">
                <a id="understand" class="btn btn-primary btn-sm">
                    Rozumiem
                </a>
            </div>
        `

        bannerElement.classList.add('banner')

        document.getElementById("understand").addEventListener("click", () => {
            bannerElement.classList.remove('banner')
        })
    }

    function setBannerCookie () {
        Date.prototype.addHours= function(h){
            this.setHours(this.getHours()+h);
            return this;
        }
        document.cookie = `banner=123; expires=${new Date().addHours(1)}`
    }
    // << gdpr info banner
})