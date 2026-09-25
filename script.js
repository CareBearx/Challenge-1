const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

const items = [
  { title: "Gaming laptop 1X", price: "€1499", img: "/img/laptop.webp", url: "/p/productPage?sneakers" },
  { title: "Custom Gaming PC", price: "€1999", img: "/img/pc.png", url: "/p/productPage?backpack" },
  { title: "Pro Gaming Headset", price: "€199", img: "/img/headset.webp",      url: "/p/productPage?cap" },
 
];

const container = document.getElementById("products");
const template = document.getElementById("product-template");

items.forEach((item) => {
  const block = template.content.cloneNode(true);
  block.querySelector(".product-img").src = item.img;
  block.querySelector(".product-img").alt = item.title;
  block.querySelector(".product-title").textContent = item.title;
  block.querySelector(".product-price").textContent = item.price;
  block.querySelector(".product-link").href = item.url;
  container.appendChild(block);
});