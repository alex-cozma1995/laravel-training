<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-gray-200">
    <!-- nav -->
    @include('fimesznav')
    <h2
        class="flex justify-center font-sans text-2xl font-extrabold leading-none tracking-tight text-center text-gray-900 b-6 sm:text-5xl md:mx-auto mt-16">
        <span class="relative font-extrabold">Filmvetítés - Tizenkét dûhös ember</span>
    </h2>
    <div class="flex pt-1 md:pt-4 justify-center mb-24">
        <span class="font-sans text-xs font-medium md:text-base flex">
            <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Március 21 | 18:00 - 22:00
        </span>
        <span class="px-4 font-sans text-xs font-medium md:text-base flex">
                <svg class="w-4 h-4 mt-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g><path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                        c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                        C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                        s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"/></g>
                </svg>
            Kulturotthon
        </span>
    </div>
    <!-- endnav -->
<!-- beta -->
    <div class="flex flex-col w-full bg-black md:flex-row">
        <div class="flex flex-col items-center justify-center w-full p-5 md:w-1/2 lg:p-16 xl:p-16">
            <div class="max-w-lg text-5xl font-light font-extrabold leading-tight text-white md:text-4xl lg:text-5xl mb-8">Filmezzünk
                <span class="text-pink-600">Együtt</span></div>
            <div class="max-w-lg ext-xl text-white md:text-base lg:text-xl xl:text-2xl ">Jo tarsasag, popcorn es filmvetites - egy igeretes pentek esti program, melyet március 21 - este 18 oratol szeretnenk megtartani.<br /><br />
                <div class="font-bold">A filmrol:</div>
                <div>A Tizenkét dühös ember 1957-ben bemutatott amerikai filmdráma, amely Reginald Rose azonos című tévéjátékán alapszik. A film jellegzetessége, hogy szinte csak egyetlen helyszínt használ: kivéve azt a három percet, amit a film
                    eleje és vége tesz ki.
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2">
            <img src="https://i2.wp.com/wingsart.studio/wp-content/uploads/2020/11/12-Angry-Men-Featured.jpg?w=1290&ssl=1"
                 class="inset-0 object-cover">
        </div>
    </div>

    <div class="flex flex-col flex-col-reverse w-full bg-black md:flex-row">
        <div class="w-full md:w-1/2">
            <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1225&q=80"
                 class="inset-0 object-cover">
        </div>
        <div class="flex flex-col items-start justify-center w-full p-5 md:w-1/2 lg:p-16 xl:p-24">
            <h2 class="max-w-lg text-5xl font-extrabold leading-tight text-white md:text-5xl lg:text-5xl">A film témáit <span class="text-pink-500">megbeszéljûk</span></h2>
            <p class="mt-5 text-xl text-white md:text-base lg:text-xl xl:text-2xl">
                A film komolyabb temakat is bemutat melyek nyoman mindannyiunkban velemenyek fogalmazodnak meg. A filmben egy bunozo halalra iteleserol van szo akire nem lehet 100%-ban rabizonyitani a vadat. Tobb gondolatmenet es szemszog is bemutatasra kerul a film soran de hogy a fiu elitelesre melto-e azt mindenki maga kell hogy eldontse.
                Ezert is gondoltuk hogy erdekes lenne a film utan ha utkoztetnenk gondolatainkat melyeket tamasztott.
            </p>
            <div class="font-bold mt-10 mb-2 text-white">Linkek<span class="font-normal">(IMDB, Youtube...):</span></div>
            <div class="flex">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
                <svg class="w-8 h-8 ml-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <svg class="w-8 h-8 ml-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
        </div>
    </div>

    <!-- bottom block -->
    <section class="relative bg-white bg-gray-200 rounded-lg min-w-screen animation-fade animation-delay my-8">
        <div class="container px-1 mx-auto sm:px-10 md:px-0">
            <div class="flex flex-col items-center justify-center w-full md:flex-row">
                <div class="flex justify-center w-full md:max-w-md md:mr-8 lg:mr-12">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_1H7IW0.json"  background="transparent" class="max-w-md min-w-sm" speed="1" loop autoplay></lottie-player>
                </div>

                <div class="w-full max-w-md px-4 pb-10 text-xs text-center md:pb-0 sm:text-sm lg:text-base md:max-w-lg md:w-full md:text-left">
                    <h2 class="text-2xl font-bold leading-snug sm:text-3xl md:text-4xl lg:text-5xl md:leading-tight md:mt-10">
                        Jelezz nekünk ha részt <span class="text-green-500">vennél</span>
                    </h2>

                    <p class="mt-4 sm:mt-6 md:max-w-sm">
                        A részvétel ingyenes, de szeretnénk tudni hogy hány emberre számítsunk. Ezért kérjük hogy részvételi szándékod tudasd velünk akár telefonon/facebook üzenetben vagy az alábbi e-mail címen:
                    </p>
                    <div class="w-8/12 pt-1 pt-3 text-xssm:flex sm:flex-row-reverse">
                        <div
                            class="w-full p-4 my-3 font-mono text-lg text-center text-gray-600 border-4 border-green-400 border-dashed rounded select-all">
                            fimesz@gmail.com</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--footer -->
    @include('fimeszfooter')
</div>
</body>
</html>
