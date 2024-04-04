document.addEventListener('DOMContentLoaded', function() {
    // Obtener el enlace activo almacenado en localStorage, si existe
    var activeLink = localStorage.getItem('activeLink');
  
    // Si hay un enlace activo almacenado, agregar la clase 'active' a ese enlace
    if (activeLink) {
      document.querySelector(activeLink).classList.add('active');
    }
  
    // Escuchar clics en los enlaces
    var links = document.querySelectorAll('a');
    links.forEach(function(link) {
      link.addEventListener('click', function() {
        // Eliminar la clase 'active' de todos los enlaces
        links.forEach(function(el) {
          el.classList.remove('active');
        });
  
        // Agregar la clase 'active' al enlace clickeado
        this.classList.add('active');
  
        // Almacenar el selector del enlace clickeado en localStorage
        localStorage.setItem('activeLink', '#' + this.getAttribute('id'));
      });
    });
  });
  