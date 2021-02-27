<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-gray-200">
    <!-- nav -->
    @include('fimesznav')
    <!-- endnav -->

    <div class=" sm:max-w-xl md:max-w-full mt-24 px-56">
        <div
            class="flex flex-col  overflow-hidden bg-white border shadow-xl lg:flex-row sm:mx-auto  h-96 rounded-lg">
            <div class="relative lg:w-1/2">
                <img src="https://images.unsplash.com/photo-1592391821574-ecdeb4ce6779?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80"
                     alt="Persons talking in a work setting." class="object-cover w-full lg:absolute h-80 lg:h-full" />
                <svg class="absolute top-0 right-0 hidden h-full text-white lg:inline-block" viewBox="0 0 20 104"
                     fill="currentColor">
                    <polygon points="17.3036738 5.68434189e-14 20 5.68434189e-14 20 104 0.824555778 104"></polygon>
                </svg>
            </div>
            <div class="flex flex-col justify-center p-8 bg-white lg:p-16 lg:pl-10 lg:w-1/2">
                <div>
                    <p
                        class="inline-block px-3 py-1 mb-4 text-xs font-medium tracking-wider text-purple-600 uppercase bg-purple-200 rounded-full">
                        Formálunk és védûnk
                    </p>
                </div>
                <h5 class="mb-3 text-3xl font-extrabold leading-none sm:text-3xl">
                    Tanösvény az <span class="text-green-500">Oltványban</span>
                </h5>
                <p class="py-5 mb-5 text-gray-800">
                    <span class="font-bold">Kedves látogató, kedves tagok!</span> <br/>
                    Ezt a pályázatot azért hoztuk létre, hogy így is támogatni tudjuk egymást a mezőpaniti természet védelmében.
                    Elsőként az Oltványerdő kiírtásának megakadályozását szeretnénk elérni ezzel, és egy tanösvény kialakítását!
                </p>
                <div class="flex items-center">
                    <button type="submit"
                            onclick="location.href='http://panit.ro/hu/palyazat-mezopanit-kozseg-cimerenek-megtervezesere/';"
                            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 bg-purple-500 rounded-lg hover:bg-purple-700 focus:shadow-outline focus:outline-none">
                        Projekt Megtekintése
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- desc -->
    <div class="text-4xl font-extrabold text-center mt-20 mb-24">Tervûnk leírása</div>
    <section class="text-gray-700 body-font my-14">
        <div class="container px-8 pb-24 mx-auto lg:px-4">
            <div class="flex flex-wrap ">
                <div class="px-6 lg:w-1/3">
                    <div class="p-8 mx-auto mb-6  lg:mb-0 bg-white rounded-md">
                        <div class="h-full text-left">
                            <a class="inline-flex mt-2">
                                <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg> <span
                                    class="flex flex-col flex-grow pl-4">
                        <span class="text-xl text-gray-900 font-bold pt-4">Tervezés</span>
                    </span>
                            </a>
                            <p class="text-base font-medium leading-relaxed text-gray-700 mt-6">
                                Kezdjük az évet egy pályázati kiírással, amelyben Mezőpanit Önkormányzata a község címerének megtervezésére keres lelkes, kreatív jelentkezőket!
                                A pályázat célja egy olyan, nagy jelentőséggel bíró községi címer megtervezése, amely Mezőpanit Község összetartozását, egységét és erejét jelképezi, és amely zászlón, nyomtatványokon és egyéb hordozókon hivatalosan használható.
                                </p>
                        </div>
                    </div>
                </div>

                <div class="px-6 lg:w-1/3">
                    <div class="p-8 mx-auto mb-6 bg-white lg:mb-0 rounded-md">
                        <div class="h-full text-left">
                            <a class="inline-flex  mt-2">
                                <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg> <span
                                    class="flex flex-col flex-grow pl-4">
                        <span class="text-xl text-gray-900 font-bold pt-4">Leadás a hivatalban</span>
                    </span>
                            </a>
                            <p class="text-base font-medium leading-relaxed text-gray-700 mt-6">Skate ipsum dolor sit amet, slam
                                birdie wheels ollie darkslide egg plant. Baseplate 540 helipop flypaper feeble griptape.
                                Nollie deck street bluntslide half-cab yeah. Casper slide ollie north 540 Bill Danforth
                                slide cess slide nose blunt. Pressure flip Streetstyle in Tempe mute-air judo air backside
                                fastplant</p>
                        </div>
                    </div>
                </div>

                <div class="px-6 lg:w-1/3">
                    <div class="p-8 mx-auto mb-6 bg-white lg:mb-0 rounded-md">
                        <div class="h-full text-left">
                            <a class="inline-flex  mt-2">
                                <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg> <span
                                    class="flex flex-col flex-grow pl-4">
                                <span class="text-xl text-gray-900 font-bold pt-4">Kivitelezés</span>
                    </span>
                            </a>
                            <p class="text-base font-medium leading-relaxed text-gray-700 mt-6">Skate ipsum dolor sit amet, slam
                                birdie wheels ollie darkslide egg plant. Baseplate 540 helipop flypaper feeble griptape.
                                Nollie deck street bluntslide half-cab yeah. Casper slide ollie north 540 Bill Danforth
                                slide cess slide nose blunt. Pressure flip Streetstyle in Tempe mute-air judo air backside
                                fastplant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- maps -->
    <main class="container max-w-6xl mx-auto my-6">
        <section class="flex flex-wrap shadow-xl">
            <div class="w-full h-64 md:w-7/12 md:h-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2743.2981738449075!2d24.5712340158459!3d46.56156856757011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474bb615d2867099%3A0x1209c622bc029b0e!2zV2Vla2VuZCwgVMOicmd1IE11cmXImQ!5e0!3m2!1sro!2sro!4v1614445092933!5m2!1sro!2sro" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
{{--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5487.531956679303!2d24.47292567849648!3d46.55231599466044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474bc857c3ed51db%3A0xb07dde4d358e02c8!2zT2x0dsOhbnllcmTFkQ!5e0!3m2!1sro!2sro!4v1614443732591!5m2!1sro!2sro" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
            </div>
            <div class="w-full p-8 mx-auto overflow-hidden bg-white md:w-5/12 md:pt-12">
                <div class="flex items-center justify-center w-16 h-16 p-3 mb-8 rounded-full bg-gradient-to-b from-green-700 to-green-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full text-white">
                        <defs>
                            <style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round}</style>
                        </defs>
                        <path d="M19 12.42c0 4.41-3.12 6.72-7 6.72s-7-2.31-7-6.72S12 .63 12 .63 19 8 19 12.42zM12 5.1v18.27" class="a" />
                        <path d="M16.2 12.72l-4.2 4.2-4.2-4.2M14.7 8.55l-2.7 2.7-2.7-2.7" class="a" />
                    </svg>
                </div>
                <div class="mb-1 text-sm tracking-wider text-gray-700 uppercase">
                    Helyszín bemutatása
                </div>
                <h2 class="mb-3 text-2xl font-bold leading-tight text-gray-900">
                    Nyugati fekvésû tölgyerdö
                </h2>
                <p class="mb-5 leading-relaxed text-gray-600">
                    A tölgy vagy tölgyfa (Quercus) a bükkfafélék (Fagaceae) család nemzetsége mintegy ötszáz fajjal. Rendszertani nevét a kelta 'Quer' = szép és 'cuez' = fa szavakból eredeztetik.
                </p>
                <div class="flex flex-wrap -mx-1">
                    <div class="px-3 py-1 mx-1 my-1 text-xs text-gray-600 uppercase bg-gray-200 rounded-lg">
                        #Jelenleg zajlo projekt
                    </div>
                    <div class="px-3 py-1 mx-1 my-1 text-xs text-gray-600 uppercase bg-gray-200 rounded-lg">
                        #Termeszetbarat
                    </div>
                </div>
                <a href="#" class="inline-block px-6 py-3 mt-6 font-bold text-white duration-200 ease-in-out bg-blue-600 rounded hover:bg-blue-800 transition-color">
                    Tudj meg tobbet
                </a>
            </div>
        </section>
    </main>


    <!--footer -->
    @include('fimeszfooter')
</div>
</body>
</html>
