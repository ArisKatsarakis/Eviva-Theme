if (document.getElementById('slider') != null) {
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
  let thumbsCount = 3;
  let activeThumb = 0;
  let slider2 = document.querySelector('.slider-thumb-2');
  let slider3 = document.querySelector('.mid-slider');

  function showThumb(slider) {
    let activeOld = slider.querySelector('.list .item.active');
    activeOld.classList.remove('active');
    slider.querySelectorAll('.list .item')[activeThumb].classList.add('active');
  }

  let thumbsInterval = setInterval(() => {
    activeThumb = activeThumb + 1;
    if (activeThumb >= thumbsCount) { activeThumb = 0; }
    showThumb(document.querySelector('.slider-thumb-1'));
    showThumb(slider2);
    showThumb(slider3);
  }, sliderRefreshInterval);
}
let activePackageItem = document.querySelector('.packages .package-item.active');
let packageItems = document.querySelectorAll('.packages .package-item');


let packagesLists = document.querySelectorAll('.packages-slider .packages-list');

let packagesListActive = document.querySelector('.packages-slider .packages-list.active');



packageItems.forEach(
  item => {
    item.onclick = function(event) {
      const index = parseInt(event.currentTarget.getAttribute('count'));
      activePackageItem.classList.remove('active');
      activePackageItem = packageItems[index];
      activePackageItem.classList.add('active');
      packagesListActive.classList.remove('active');
      packagesListActive = packagesLists[index];
      packagesListActive.classList.add('active');
    }
  }
)





