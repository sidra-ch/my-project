let list_btn = document.querySelector(".bi-list-nested");
let underlay = document.querySelector(".underlay");
let sidebar = document.querySelector(".sidebar");
let cross = document.querySelector(".bi-x");
let category_overlay = document.querySelector(".category-overlay");
let list = document.querySelector(".our-list");
let category_list = document.querySelector(".category-list");
let img_text = document.querySelector(".img-text");
let change_image = document.querySelector(".change-image img");
let img_para = document.querySelector(".img-para");

const randomImages = [
  {
    image: "image-left-2.avif",
    text: "Gift for her",
    subtext: "shop Now ",
  },
  {
    image: "img-left-1.webp",
    text: "Clothing",
    subtext: "Shop Now",
  },
  {
    image: "image10.avif",
    text: "Linen Bedding",
    subtext: "Shop Now",
  },
];

const generateRandomImage = () => {
  const randomNum = Math.random() * randomImages.length;
  const floorNum = Math.floor(randomNum);
  return floorNum;
};

window.addEventListener("DOMContentLoaded", () => {
  let random = generateRandomImage();
  change_image.src = `/images/${randomImages[random].image}`;
  img_text.innerHTML = randomImages[random].text;
  img_para.innerHTML = randomImages[random].subtext;
});

list_btn.addEventListener("click", () => {
  underlay.style.visibility = "visible";
  setTimeout(() => {
    sidebar.style.transform = "translateX(0)";
  }, 100);
});
underlay.addEventListener("click", (e) => {
  underlay.style.visibility = "hidden";
  sidebar.style.transform = "translateX(-100%)";
});
cross.addEventListener("click", (e) => {
  underlay.style.visibility = "hidden";
  sidebar.style.transform = "translateX(-100%)";
});

sidebar.addEventListener("click", (e) => {
  e.stopPropagation();
});

list.addEventListener("click", (e) => {
  e.stopPropagation();
  category_overlay.style.visibility = "visible";
  setTimeout(() => {
    category_list.style.transform = "translateY(0) scale(1)";
    category_list.style.opacity = "1";
  }, 50);
});
category_overlay.addEventListener("click", (e) => {
  e.stopPropagation();

  category_overlay.style.visibility = "hidden";

  category_list.style.transform = "translateY(-100px) scale(.7)";
  category_list.style.opacity = "0";
});
