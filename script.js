
console.log("hey ")

// --------navigator bar------//

let menuBtn = document.getElementById("menuBtn")
let sidenav = document.getElementById("sidenav")
let menu = document.getElementById("menu")
sidenav.style.right = "-250px"

menuBtn.onclick = function () {
  if (sidenav.style.right === "-250px") {
    sidenav.style.right = "0"
    menu.src = "close.png"
  }
  else {
    sidenav.style.right = "-250px"
    menu.src = "image/menu.png"
  }
}





// --------pricing section--------//



const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



const filterBtns = document.querySelectorAll("[ data-filter-btn]");
const filterItems = document.querySelectorAll("[data-filter]");

let lastClick = filterBtns[0];

const filter = function () {
  lastClick.classList.remove("active");
  this.classList.add("active");
  lastClick = this;


  for (let i = 0; i < filterItems.length; i++) {
    if (this.dataset.filterBtn === filterItems[i].dataset.filter ||
      this.dataset.filterBtn === "all") {

      filterItems[i].style.display = "block";

    } else {

      filterItems[i].style.display = "none";
      filterItems[i].classList.remove("active");

    }

  }
}
addEventOnElem(filterBtns, "click", filter);



// -----reviews-----//


let showin = document.getElementById("review-form");
showin.style.display = "none";
let isshow = false;
let ab = document.getElementById("add-review").onclick = function () {
  console.log("hiiii");
  if (isshow) {
    showin.style.display = "none";
    isshow = true;
  } else {
    showin.style.display = "block";
    isshow = false;
  }
};
// let cb = document.getElementsByClassName(".sub-btn");
// cb.addEventListener("click", () => {
//   showin.style.display = "none";
  
// });




// --------sending the mail-----------//

// document.getElementById("become").onclick=function(){
//       // let mail=document.getElementById("become").value;
// console.log("hiiiiiii");

// Email.send({
//   Host : "smtp.gmail.com",
//   Username : "hairstudio887@gmail.com",
//   Password : "CA8CA165170A14FCB5A1AD01D05411B3B6B3",
//   To : "niketnannaware703@gmail.com",
//   From : "hairstudio887@gmai.com",
//   Subject : "subject:- Becoming the member of the hair studio family",
//   Body : "hi thanks for become member"
// }).then(

// message => alert(message)


// );
// };

// document.getElementById("become").onclick=function()
// {


//   Email.send({
//     Host : "smtp.elasticemail.com",
//     Username : "hairstudio887@gmail.com",
//     Password : "CA8CA165170A14FCB5A1AD01D05411B3B6B3",
//     To : "niketnannaware703@gmail.com",
//     From : "hairstudio887@gmail.com",
//     Subject : "Becoming the member of the Hair Studio Barber Shop :-",
//     Body : "Hey, Conguraltion to become member of our family , Now you style our hair style your dream "
// }).then(
//   message => alert(message)
//   // console.log("heyyyyyyy");
// )

// };



let url = "https://script.google.com/macros/s/AKfycbwLQI4yolBlRyf31Snpbi-F27LsUrpOk_tqTrapXKsnQOOtU36bBfQCUxpM_moeq4z_/exec"
let form = document.querySelector("form");
let submit = document.querySelector(".btn");


form.addEventListener('btn', (e) => {
  e.preventDefault();
  btn.value = "submitting"
  fetch(url, { method: "POST", body: new FormData(form) })

})



document.getElementById("submit").onclick = function () {
  let nameValue = document.querySelector(".name").value;
  let dateValue = document.getElementById("date").value;

  
  let selectedDate = new Date(dateValue);


  let dayOfWeek = selectedDate.getDay();

  
  let appointmentTime = generateRandomTime(dayOfWeek);

  
  let daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  let dayName = daysOfWeek[dayOfWeek];

  alert("Hi " + nameValue + ", your appointment is confirmed on " + dayName + " at  date " + dateValue + " on time " + appointmentTime);
};

function generateRandomTime(dayOfWeek) {
 
  const appointmentTimes = [
      ["09:00 AM", "10:00 AM", "11:00 AM"],
      ["10:30 AM", "11:30 AM", "12:30 PM"],
      ["01:00 PM", "02:00 PM", "03:00 PM"],
      ["03:30 PM", "04:30 PM", "05:30 PM"],
      ["10:00 AM", "11:00 AM", "12:00 PM"],
      ["02:30 PM", "03:30 PM", "04:30 PM"],
      ["11:30 AM", "12:30 PM", "01:30 PM"]
  ];

  
  let randomIndex = Math.floor(Math.random() * appointmentTimes[dayOfWeek].length);

  
  let randomTime = appointmentTimes[dayOfWeek][randomIndex];

  return randomTime;
}


document.querySelector(".sub-btn").onclick=function(){
  alert("Thanks for the review");
};



