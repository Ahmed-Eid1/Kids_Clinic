function selectType(btn){
  document.querySelectorAll('.type-btn').forEach(b => b.classList.remove('selected'));
  btn.classList.add('selected');
}
document.querySelectorAll('.day-pill').forEach(p=>{
  p.addEventListener('click', ()=>{
    document.querySelectorAll('.day-pill').forEach(x=>x.classList.remove('active'));
    p.classList.add('active');
  });
});
document.querySelectorAll('.mini-doc').forEach(d=>{
  d.addEventListener('click', ()=>{
    document.querySelectorAll('.mini-doc').forEach(x=>x.classList.remove('active'));
    d.classList.add('active');
  });
});
document.querySelectorAll('.slot.free').forEach(slot=>{
  slot.addEventListener('click', ()=>{
    document.querySelectorAll('.slot.free').forEach(s=>{s.style.background='#fff'; s.style.color='var(--ink)'; s.style.borderColor='var(--line)';});
    slot.style.background='var(--teal)'; slot.style.color='#fff'; slot.style.borderColor='var(--teal)';
  });
});