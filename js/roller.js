// Obtém todos os itens de menu
var menuItems = document.querySelectorAll('#menu li a');

// Adiciona um evento de clique para cada item de menu
menuItems.forEach(function(item) {
  item.addEventListener('click', function(e) {
    var sectionId = this.getAttribute('href'); // Obtém o valor do atributo href
    
    // Verifica se o link é externo ou interno
    if(sectionId.startsWith("http")) {
      e.preventDefault(); // Previne o comportamento padrão do link
      window.open(sectionId, '_blank'); // Abre o link externo em uma nova aba
    } else {
      e.preventDefault(); // Previne o comportamento padrão do link
      var section = document.querySelector(sectionId); // Obtém a seção correspondente
      section.scrollIntoView({ behavior: 'smooth' }); // Rola para a seção de forma suave
    }
  });
});