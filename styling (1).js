// JavaScript code for filtering

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
};

const filterBtns = document.querySelectorAll(".filter-btn");
const dataitem = document.querySelectorAll(".card");

let last = filterBtns[0];

const filter = function () {
  last.classList.remove("active");
  this.classList.add("active");
  last = this;

  const filterValue = this.getAttribute("data-filter-btn");
  
  for (let i = 0; i < dataitem.length; i++) {
    if (filterValue === "all" || filterValue === dataitem[i].getAttribute("data-item")) {
      dataitem[i].style.display = "block";
    } else {
      dataitem[i].style.display = "none";
    }
  }
};

addEventOnElem(filterBtns, "click", filter);
