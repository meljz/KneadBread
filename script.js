// Start hero section: For the hero section
const hero_elements = document.querySelectorAll (".hero_image1, .Hero_text, .Products_text, .About_image, .Recipe_flexitem, .Story_image img");
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting){
      entry.target.classList.add("show");
      
    }else{
      entry.target.classList.remove("show");
    } 
  });
}, {
  threshold: 0.1,
});
hero_elements.forEach(item => observer.observe(item));


// End hero section: For the hero section




const track = document.querySelector('.Products_track');
const dots = document.querySelectorAll('.dot');
const itemWidth = 320; // width of each item + gap

track.style.cursor = 'grab';

let isDragging = false;
let startX = 0;
let currentTranslate = 0;
let prevTranslate = 0;

// Calculate boundaries
const maxTranslate = 0;
const minTranslate = -(track.scrollWidth - track.offsetWidth);

// Function to update active dot
function updateActiveDot() {
  const index = Math.round(Math.abs(currentTranslate) / itemWidth);
  dots.forEach(dot => dot.classList.remove('active'));
  if (dots[index]) dots[index].classList.add('active');
}

// Mouse events
track.addEventListener('mousedown', (e) => {
  isDragging = true;
  startX = e.pageX;
  track.style.cursor = 'grabbing';
});

track.addEventListener('mousemove', (e) => {
  if (!isDragging) return;
  const deltaX = e.pageX - startX;
  currentTranslate = prevTranslate + deltaX;
  currentTranslate = Math.max(minTranslate, Math.min(maxTranslate, currentTranslate));
  track.style.transform = `translateX(${currentTranslate}px)`;
  updateActiveDot();
});

track.addEventListener('mouseup', () => {
  isDragging = false;
  prevTranslate = currentTranslate;
  track.style.cursor = 'grab';
});

track.addEventListener('mouseleave', () => {
  isDragging = false;
  prevTranslate = currentTranslate;
  track.style.cursor = 'grab';
});

// Touch events
track.addEventListener('touchstart', (e) => {
  isDragging = true;
  startX = e.touches[0].pageX;
});

track.addEventListener('touchmove', (e) => {
  if (!isDragging) return;
  e.preventDefault();
  const deltaX = e.touches[0].pageX - startX;
  currentTranslate = prevTranslate + deltaX;
  currentTranslate = Math.max(minTranslate, Math.min(maxTranslate, currentTranslate));
  track.style.transform = `translateX(${currentTranslate}px)`;
  updateActiveDot();
}, { passive: false });

track.addEventListener('touchend', () => {
  isDragging = false;
  prevTranslate = currentTranslate;
});
