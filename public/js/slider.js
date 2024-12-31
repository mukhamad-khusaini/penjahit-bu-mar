const slider = document.querySelector("#slider");

counter = 0;
setInterval(() => {
    switch (counter) {
        case 0:
            slider.style.transform = "translateX(8%)";
            counter = 1;
            break;
        case 1:
            slider.style.transform = "translateX(-13%)";
            counter = 2;
            break;
        case 2:
            slider.style.transform = "translateX(-33%)";
            counter = 3;
            break;
        case 3:
            slider.style.transform = "translateX(-54%)";
            counter = 4;
            break;
        case 4:
            slider.style.transform = "translateX(-74%)";
            counter = 0;
            break;
    }
}, 3000);
