function toggleMenu() {
    var nav = document.getElementById("main-nav");
    nav.classList.toggle("active");
}
document.addEventListener('DOMContentLoaded', function() {
  const checkbox = document.querySelector('.theme-switch__checkbox');
  const body = document.body;
  const header = document.querySelector('header');
  const navList = document.querySelector('#main-nav');

  // Verifica se há uma preferência salva no armazenamento local
  const savedTheme = localStorage.getItem('theme');

  // Função para aplicar o tema
  function applyTheme(theme) {
    body.classList.toggle('dark-theme-body', theme === 'dark-theme');
    header.classList.toggle('dark-theme', theme === 'dark-theme');
    navList.classList.toggle('dark-theme', theme === 'dark-theme');
    checkbox.checked = theme === 'dark-theme';
  }

  // Se houver uma preferência salva, aplica-a
  if (savedTheme) {
    applyTheme(savedTheme);
  }

  // Evento de mudança do botão de alternância de tema
  checkbox.addEventListener('change', function() {
    const theme = this.checked ? 'dark-theme' : 'light-theme';
    // Aplica o tema e salva a preferência
    applyTheme(theme);
    localStorage.setItem('theme', theme);
  });
});
