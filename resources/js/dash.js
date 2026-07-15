document.querySelectorAll('.range-tab').forEach(tab=>{
  tab.addEventListener('click', ()=>{
    const parent = tab.closest('.range-tabs');
    parent.querySelectorAll('.range-tab').forEach(t=>t.classList.remove('active'));
    tab.classList.add('active');
  });
});