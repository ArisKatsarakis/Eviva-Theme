let items = document.getElementById('slider').querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let sliderRefreshInterval = 6000;
// config param
let countItem = items.length;
let itemActive = 0;
// event next click
next.onclick = function() {
  itemActive = itemActive + 1;
  if (itemActive >= countItem) {
    itemActive = 0;
  }
  showSlider();
}
//event prev click
prev.onclick = function() {
  itemActive = itemActive - 1;
  if (itemActive < 0) {
    itemActive = countItem - 1;
  }
  showSlider();
};
// auto run slider
let refreshInterval = setInterval(() => {
  next.click();
}, sliderRefreshInterval);
function showSlider() {
  // TODO make this function chooseNextActive
  // remove item active old
  let itemActiveOld = document.querySelector('.slider .list .item.active');
  itemActiveOld.classList.remove('active');

  // active new item
  items[itemActive].classList.add('active');

  // clear auto time run slider
  clearInterval(refreshInterval);
  refreshInterval = setInterval(() => {
    next.click();
  }, sliderRefreshInterval)
}
let thumbnailsWedding1 = document.querySelector('.slider-thumb-1').querySelectorAll(' .list .item');
let thumbsCount = thumbnailsWedding1.length;
let activeThumb = 0;

function nextThumb(slider) {
  activeThumb = activeThumb + 1;
  if (activeThumb >= thumbsCount) { activeThumb = 0; }
  showThumb(slider);
};

function showThumb(slider) {
  let activeOld = slider.querySelector('.list .item.active');
  console.log(slider);
  activeOld.classList.remove('active');
  thumbnailsWedding1[activeThumb].classList.add('active');
  clearInterval(thumbsInterval);
  thumbsInterval = setInterval(() => {
    nextThumb(document.querySelector('.slider-thumb-1'));
  }, sliderRefreshInterval);
}

let thumbsInterval = setInterval(() => {
  nextThumb(document.querySelector('.slider-thumb-1'));
}, sliderRefreshInterval);

