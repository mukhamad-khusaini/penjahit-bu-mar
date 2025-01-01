<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penjahit Bu Mar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="w-full h-[70px] || flex items-center justify-center || relative z-40 ">
        <h1 class="text-xl">Penjahit Bu Mar</h1>
    </header>
    <main>
        <section
            class="h-[417px] || relative overflow-hidden || before:contents-[''] before:w-[50rem] before:h-[10rem] before:bg-white before:absolute before:rounded-[50%] before:top-[-6rem] before:left-[-38%] z-10 || after:contents-[''] after:w-[50rem] after:h-[10rem] after:bg-white after:absolute after:rounded-[50%] after:bottom-[-6rem] after:left-[-38%]">
            <div class="flex items-center justify-center gap-10 || w-[80rem] h-full || absolute -z-10 || duration-700 transition-all translate-x-[-11%]"
                id="slider">
                <div class="w-[15rem] h-[20rem] || bg-mainblue"></div>
                <div class="w-[15rem] h-[20rem] || bg-mainblue"></div>
                <div class="w-[15rem] h-[20rem] || bg-mainblue"></div>
                <div class="w-[15rem] h-[20rem] || bg-mainblue"></div>
                <div class="w-[15rem] h-[20rem] || bg-mainblue"></div>
            </div>
        </section>
        <section class="h-[41rem] || flex flex-col items-center">
            <h2 class="text-xl font-serif italic text-subhead">Menerima Jasa</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="255" height="12" viewBox="0 0 255 12">
                <g id="Group_6" data-name="Group 6" transform="translate(-88 -573)">
                    <rect id="Rectangle_13" data-name="Rectangle 13" width="255" height="4" rx="2"
                        transform="translate(88 573)" fill="#4a90df" />
                    <rect id="Rectangle_14" data-name="Rectangle 14" width="49" height="4" rx="2"
                        transform="translate(111 581)" fill="#4aa8df" />
                    <rect id="Rectangle_15" data-name="Rectangle 15" width="49" height="4" rx="2"
                        transform="translate(164 581)" fill="#4aa8df" />
                    <rect id="Rectangle_16" data-name="Rectangle 16" width="49" height="4" rx="2"
                        transform="translate(217 581)" fill="#4aa8df" />
                    <rect id="Rectangle_17" data-name="Rectangle 17" width="49" height="4" rx="2"
                        transform="translate(270 581)" fill="#4aa8df" />
                </g>
            </svg>
            <div class="w-full h-full || mt-10 || flex flex-col items-center justify-between">
                <div
                    class="w-[90%] h-[129px] p-4 || flex flex-row items-center justify-between || bg-mainblue || rounded-lg">
                    <div class="w-[5rem] h-[100%] || rounded-lg || bg-white"></div>
                    <p class="w-[15.5rem] text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dignissimos dolorem
                        perspiciatis, atque
                        iure hic autem!</p>
                </div>
                <div
                    class="w-[90%] h-[129px] p-4 || flex flex-row-reverse items-center justify-between || bg-white border-[1px] border-mainblue || rounded-lg">
                    <div class="w-[5rem] h-[100%] || rounded-lg || bg-mainblue"></div>
                    <p class="w-[15.5rem] text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                        dolorem
                        perspiciatis, atque
                        iure hic autem!</p>
                </div>
                <div
                    class="w-[90%] h-[129px] p-4 || flex flex-row items-center justify-between || bg-mainblue || rounded-lg">
                    <div class="w-[5rem] h-[100%] || rounded-lg || bg-white"></div>
                    <p class="w-[15.5rem] text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dignissimos dolorem
                        perspiciatis, atque
                        iure hic autem!</p>
                </div>
                <div
                    class="w-[90%] h-[129px] p-4 || flex flex-row-reverse items-center justify-between || bg-white border-[1px] border-mainblue || rounded-lg">
                    <div class="w-[5rem] h-[100%] || rounded-lg || bg-mainblue"></div>
                    <p class="w-[15.5rem] text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                        dolorem
                        perspiciatis, atque
                        iure hic autem!</p>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>

    <script src="js/slider.js"></script>
</body>

</html>
