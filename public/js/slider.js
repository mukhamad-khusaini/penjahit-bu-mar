// const slider = document.querySelector("#slider");

// counter = 0;
// setInterval(() => {
//     switch (counter) {
//         case 0:
//             slider.style.transform = "translateX(8%)";
//             counter = 1;
//             break;
//         case 1:
//             slider.style.transform = "translateX(-13%)";
//             counter = 2;
//             break;
//         case 2:
//             slider.style.transform = "translateX(-33%)";
//             counter = 3;
//             break;
//         case 3:
//             slider.style.transform = "translateX(-54%)";
//             counter = 4;
//             break;
//         case 4:
//             slider.style.transform = "translateX(-74%)";
//             counter = 0;
//             break;
//     }
// }, 3000);

// let indexReferer = 0;
// const CarouselInner = document.querySelector(".carousel-inner");
// const CarouselItems = document.querySelectorAll(".carousel-item");

// function carouselUpdate() {
//     const Offset = -indexReferer * (15 + 2.5) + (window.innerWidth / 2 - 7.5); // 15rem item width + 2.5rem gap
//     CarouselInner.style.transform = `translateX(${Offset}rem)`;
// }

// function nextItem() {
//     indexReferer = (indexReferer + 1) % CarouselItems.length;
//     carouselUpdate();
// }

// setInterval(nextItem, 3000);

let indexReferer = 1;
let carouselInner = document.querySelector(".carousel-inner");
let carouselItems = document.querySelectorAll(".carousel-item");
let carouselInnerRect = carouselInner.getBoundingClientRect();

carouselInner.style.transform = `translateX(${
    innerWidth / 2 -
    (carouselInner.clientWidth / carouselItems.length / 2) * indexReferer
}px)`;

function slider() {
    let whichCenter =
        (carouselInner.clientWidth / carouselItems.length / 2) * indexReferer;

    if (indexReferer == carouselItems.length * 2 + 1) {
        indexReferer = 1;
    } else {
        carouselInner.style.transform = `translateX(${
            innerWidth / 2 - whichCenter
        }px)`;
        indexReferer += 2;
    }
}

setInterval(slider, 3000);
