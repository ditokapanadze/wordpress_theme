const subMenu = document.querySelector(".sub-menu");
const subMenuItem = document.querySelector("#menu-item-132");
const dropDown = document.querySelector(".menu-item-has-children");

dropDown.addEventListener("click", () => {
  subMenu.classList.toggle("visible");
});

const blockImage = document.querySelectorAll(".wp-block-image");

blockImage.forEach((element) => {
  let imgSrc = element["children"][0].src;
  var children = element.innerHTML;
  var newContent = `<a  data-fancybox="gallery"  href=${imgSrc}>${children}</a>`;
  element.innerHTML = newContent;
});

const recentPosts = document.querySelector(".rpwwt-widget");

// console.log(recentPosts);

const recentPosrtArray = recentPosts?.children[0]?.children;

recentPosrtArray &&
  [...recentPosrtArray].forEach((element) => {
    let button = document.createElement("a");
    button.type = "button";
    button.href = element.children[0].href;

    button.innerHTML = `Continue Reading<i
  class="bi bi-chevron-double-right" style="font-size: 10px; margin-left: 5px"></i>`;
    button.className = "widget-btn";
    element.appendChild(button);
  });
