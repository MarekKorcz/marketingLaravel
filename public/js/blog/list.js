window.addEventListener('DOMContentLoaded', () => {

    const DOMAIN = "http://localhost:8000/blog"
    
    let tails = document.querySelectorAll('.tail')

    if(window.innerWidth >= 750) {
        for (let i = 0; i < tails.length; i++) {

            // add faded class to tail element when device is NOT mobile
            tails[i].classList.add('faded')

            // add event listener to remove faded class when hovering with mouse pointer
            tails[i].addEventListener("mouseenter", (element) => {
                if(element.target.classList.contains('tail') &&
                   element.target.classList.contains('faded')) {
                    element.target.classList.remove('faded')
                }
            })

            // add event listener to add faded class when leaving hovered tail with mouse pointer
            tails[i].addEventListener("mouseleave", (element) => {
                if(element.target.classList.contains('tail') &&
                   !element.target.classList.contains('faded')) {
                    element.target.classList.add('faded')
                }
            })

            // redirect when tail clicked
            tails[i].addEventListener("click", (event) => {
                window.location.href = `${DOMAIN}${event.target.parentElement.dataset.src}`
            })
        }
    }    

    for (let i = 0; i < tails.length; i++) {
        // redirect when tail taped
        tails[i].addEventListener("touchstart", (event) => {

            let windowTopWhenTaped = window.scrollY
            let canRedirect = true

            // console.log(`windowTopWhenTaped - ${windowTopWhenTaped}`)

            setTimeout(() => { 
                // console.log(`In timeout - ${window.scrollY}`)
                if (window.scrollY !== windowTopWhenTaped) {
                    canRedirect = false
                }

                if (canRedirect) {
                    // console.log('redirect!!')
                    window.location.href = `${DOMAIN}${event.target.parentElement.dataset.src}`
                }                
            }, 810)
        })
    }
})