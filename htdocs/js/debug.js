// expand/collapse debug containers
document.addEventListener("DOMContentLoaded", () => { 
  document.querySelectorAll('#debug h3').forEach(el => {
    el.addEventListener('click', (e) => {
      e.currentTarget.classList.toggle('closed');
      e.currentTarget.classList.toggle('open');

      const debugId = e.currentTarget.id.replace(/debug_heading_/, '');
      const debugEl = document.getElementById(debugId);
      debugEl.classList.toggle('closed');
      debugEl.classList.toggle('open');
    });
  });
});
