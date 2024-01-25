



// sidebar section
function opensidebar() {
  document.querySelector('.sideManu').style.cssText += "opacity: 1; z-index: 999;";
  document.querySelector('.sideBarSection').style.cssText += 'transform: translate(0, 0);';
}
function closesidebar() {
  document.querySelector('.sideManu').style.cssText += "opacity: 0; z-index: -1;";
  document.querySelector('.sideBarSection').style.cssText += 'transform: translate(-300px, 0);';
}


// banner slider
var swiper = new Swiper(".myHomeSwiper", {
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// client Review
var swiper = new Swiper(".myReviewSwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {

    500: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
  },
});


// New Collection
var swiper = new Swiper(".newCollectionSwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {

    320: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
  },
});



// FAQ Accodian

document.addEventListener("DOMContentLoaded", function () {
  const accordionItems = document.querySelectorAll(".acc-item");

  accordionItems.forEach((item) => {
    const title = item.querySelector(".acc-item h3");
    const content = item.querySelector(".acc-item p");
    const chevron = item.querySelector(".acc-chevron");

    title.addEventListener("click", () => {
      const isExpanded = content.style.display === "block";

      // Close all accordion items
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem.querySelector(".acc-item p").style.display = "none";
          otherItem.querySelector(".acc-chevron").style.transform =
            "rotate(180deg)";
        }
      });

      // Toggle the clicked accordion item

      content.style.display = isExpanded ? "none" : "block";
      chevron.style.transform = isExpanded ? "rotate(180deg)" : "rotate(0deg)";
    });
  });
});



// Header Sharch Bar

const searchBtn = document.getElementById("search-btn");
const searchInput = document.querySelector(".search-input");

searchBtn.addEventListener("click", function () {
  // searchInput.classList.add('active-search');
  searchInput.classList.toggle("active-search");
  console.log(searchInput);
});

document.querySelector("main").addEventListener("click", () => {
  searchInput.classList.remove("active-search");
});

console.log(searchBtn, searchInput);




// Enquiry From

function onenFron() {
  document.getElementById('addSection1').classList.add('openfrom');
}
function closeBtn() {
  document.getElementById('addSection1').classList.remove('openfrom');
}
