
window.onload = () => {
    let links = document.querySelectorAll('.link')
    
    let evento = links[0]
    evento.addEventListener('click', () => {
      document.getElementById("evento").style.display = "block";
      scrollSuave('#evento', 800, 20)
    })

    let subte = links[1]
    subte.addEventListener('click', () => {
      document.getElementById("subte").style.display = "block";
      scrollSuave('#subte', 800, 20)      
    })

    let ecobici = links[2]
    ecobici.addEventListener('click', () => {
      document.getElementById("ecobici").style.display = "block";
      scrollSuave('#ecobici', 800, 20)
    })
  
  }
  
  
  
  const scrollSuave = (objetivo, duracion, compensacion) => {
    let elemObj = document.querySelector(objetivo)
    let elemPos = elemObj.getBoundingClientRect().top - compensacion
    let posInicial = window.pageYOffset
    let tiempoInicial = null
  
    const animacion = tiempoAhora => {
      if (tiempoInicial === null) tiempoInicial = tiempoAhora
      tiempoPasado = tiempoAhora - tiempoInicial
      let auxAnimacion = easeInOutQuad(tiempoPasado, posInicial, elemPos, duracion)
      window.scrollTo(0, auxAnimacion)
      if (tiempoPasado < duracion) requestAnimationFrame(animacion)
    }
    requestAnimationFrame(animacion)
  }
  
  const easeInOutQuad = (t, b, c, d) => {
    t /= d / 2
    if (t < 1) return c / 2 * t * t + b
    t--
    return - c / 2 * (t * (t - 2) - 1) + b
  }