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
        <section class="h-[417px] || relative overflow-hidden || before:contents-[''] before:w-[50rem] before:h-[10rem] before:bg-white before:absolute before:rounded-[50%] before:top-[-6rem] before:left-[-38%] z-10 || after:contents-[''] after:w-[50rem] after:h-[10rem] after:bg-white after:absolute after:rounded-[50%] after:bottom-[-6rem] after:left-[-38%]">
            <div class="flex items-center justify-center gap-10 || w-[80rem] h-full || absolute -z-10 || duration-700 transition-all translate-x-[-11%]" id="slider">
                <div class="w-[15rem] h-[20rem] || bg-slate-400"></div>
                <div class="w-[15rem] h-[20rem] || bg-slate-400"></div>
                <div class="w-[15rem] h-[20rem] || bg-slate-400"></div>
                <div class="w-[15rem] h-[20rem] || bg-slate-400"></div>
                <div class="w-[15rem] h-[20rem] || bg-slate-400"></div>
            </div>
        </section>
    </main>
    <footer></footer>

    <script src="js/slider.js"></script>
</body>
</html>