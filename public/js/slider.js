const slider = document.querySelector("#slider");

counter = 0;
setInterval(() => {
    switch (counter) {
        case 0:
            slider.style.transform = "translateX(-11%)";
            counter = 1;
            break;
        case 1:
            slider.style.transform = "translateX(-33%)";
            counter = 2;
            break;
        case 2:
            slider.style.transform = "translateX(-55%)";
            counter = 0;
            break;
    }
}, 3000);
