const sections = document.querySelectorAll("section");
const observer = new IntersectionObserver(entries =>{
  entries.forEach(entry =>{
    if(entry.isIntersecting){
      entry.target.classList.toggle("observer", entry.isIntersecting);
      observer.unobserve(entry.target);
    }
    
    
  })
})

sections.forEach(section =>{
  observer.observe(section);
})
