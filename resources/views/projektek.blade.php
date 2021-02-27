<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-gray-200">
    <!-- nav -->
    @include('fimesznav')
    <!-- endnav -->
    <div class="text-center font-extrabold text-5xl my-16">Projektjeink</div>

    <div class="flex flex-col items-center justify-center gap-10 p-4 antialiased md:p-0">
        <div class="flex w-full overflow-hidden text-gray-900 bg-white rounded-lg shadow-lg md:max-w-4xl">
            <img src="https://images.unsplash.com/photo-1421789665209-c9b2a435e3dc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80"
                 alt="Computer with GitHub page opened in browser"
                 class="hidden object-cover w-2/6 select-none sm:block">
            <div class="flex flex-col justify-between w-full p-5">
                <div class="mb-10 break-all">
                    <h2 class="mb-3 text-xl font-black leading-tight md:text-2xl md:leading-none">
                        Tanösvény az oltványban
                    </h2>
                    <p class="leading-relaxed text-gray-700 lg:max-w-md md:truncate">
                        Az oltvany erdoben szeretnenk kialakitani egy turisztikai osvenyt
                    </p>
                </div>

                <div class="grid w-full grid-flow-row-dense grid-cols-2 gap-3 md:grid-cols-3">
                        <button
                            onclick="location.href='http://training.test/projekt';"
                            class="col-start-2 col-end-4 py-1 font-bold text-white bg-green-500 rounded-lg md:col-start-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
                            Megtekintés
                        </button>
                    <span class="self-end font-semibold leading-none text-gray-500">4800 lei / 5000 lei</span><br />
                    <span class="self-end font-semibold leading-none text-gray-500">86 / 100 jelentkezo</span>
                    <progress value="90" max="100" class="w-full h-2 col-span-3">0% watched</progress>
                </div>
            </div>
        </div>

        <div class="flex w-full overflow-hidden text-gray-900 bg-white rounded-lg shadow-lg md:max-w-4xl">
            <img src="https://images.unsplash.com/photo-1542089363-bba089ffaa25?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                 alt="Computer with a open browser displaying authentication error"
                 class="hidden object-cover w-2/6 select-none sm:block">
            <div class="flex flex-col justify-between w-full p-5">
                <div class="mb-10 break-all">
                    <h2 class="mb-3 text-xl font-black leading-tight md:text-2xl md:leading-none">
                        Gyûlés terem létrehozása
                    </h2>
                    <p class="leading-relaxed text-gray-700 lg:max-w-md md:truncate">
                        Jelentkezoket varunk akik segitenenek egy gyûlésterem létrehozásában
                    </p>
                </div>

                <div class="grid w-full grid-flow-row-dense grid-cols-2 gap-3 md:grid-cols-3">
                    <button
                        class="col-start-2 col-end-4 py-1 font-bold text-white bg-green-500 rounded-lg md:col-start-3 hover:bg-green-700 focus:bg-green-700 focus:outline-none focus:shadow-outline">
                        Megtekintes
                    </button>
                    <span class="self-end font-semibold leading-none text-gray-500">16 / 30 jelentkezo</span>
                    <progress value="50" max="100" class="w-full h-2 col-span-3">70% watched</progress>
                </div>
            </div>
        </div>

        <div class="flex w-full overflow-hidden text-gray-900 bg-white rounded-lg shadow-lg md:max-w-4xl">
            <img src="https://images.unsplash.com/photo-1440404653325-ab127d49abc1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                 alt="Computer with GitHub page opened in browser"
                 class="hidden object-cover w-2/6 select-none sm:block">
            <div class="flex flex-col justify-between w-full p-5">
                <div class="mb-10 break-all">
                    <h2 class="mb-3 text-xl font-black leading-tight md:text-2xl md:leading-none">
                        Filmvetítö vásárlás
                    </h2>
                    <p class="leading-relaxed text-gray-700 lg:max-w-md md:truncate">
                        Csapatunk szeretne egy közös projektort beszerezni ami a filmvetítések, elöadások és bemutatoink elengedhetetlen kelléke lenne.
                    </p>
                </div>

                <div class="grid w-full grid-flow-row-dense grid-cols-2 gap-3 md:grid-cols-3">
                    <button
                        class="col-start-2 col-end-4 py-1 font-bold text-white bg-green-500 rounded-lg md:col-start-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
                        Megtekintés
                    </button>
                    <span class="self-end font-semibold leading-none text-gray-500">270 ron / 600 ron</span>
                    <progress value="40" max="100" class="w-full h-2 col-span-3">0% watched</progress>
                </div>
            </div>
        </div>

        <div class="flex w-full overflow-hidden text-gray-900 bg-white rounded-lg shadow-lg md:max-w-4xl">
            <img src="./polo2.png"
                 alt="Computer with a open browser displaying authentication error"
                 class="hidden object-cover w-2/6 select-none sm:block">
            <div class="flex flex-col justify-between w-full p-5">
                <div class="mb-10 break-all">
                    <h2 class="mb-3 text-xl font-black leading-tight md:text-2xl md:leading-none">
                        Kozos fimeszes polok beszerzese
                    </h2>
                    <p class="leading-relaxed text-gray-700 lg:max-w-md md:truncate">
                        Szeretnenk csapatunk tagjait egyedi szinekben feltuntetni hogy ezzel is nyilvanvalobba valjon jelenletunk a kozeletben
                    </p>
                </div>

                <div class="grid w-full grid-flow-row-dense grid-cols-2 gap-3 md:grid-cols-3">
                    <button
                        class="col-start-2 col-end-4 py-1 font-bold text-white bg-green-500 rounded-lg md:col-start-3 hover:bg-green-700 focus:bg-green-700 focus:outline-none focus:shadow-outline">
                        Megtekintes
                    </button>
                    <span class="self-end font-semibold leading-none text-gray-500">270 ron / 380 ron</span>
                    <progress value="70" max="100" class="w-full h-2 col-span-3">70% watched</progress>
                </div>
            </div>
        </div>
    </div>
    <div class="justify-center">
        <div class="py-12 my-14 w-full">
            <section class="mx-48 bg-white py-14 rounded-lg">
                <h2 class="text-4xl font-extrabold text-center text-gray-700">Projektjeink tervezése</h2>
                <p class="text-center text-gray-600 text-md">Ezeket a lépéseket tesszûk meg egy-egy projekt létrejötte miatt</p>
                <div class="content-center lg:flex lg:justify-center lg:items-center">

                    <div class="flex justify-center pt-10 m-auto lg:w-1/4 lg:mx-6 lg:my-8">
                        <div class="relative w-64 h-48">
                            <div
                                class="absolute top-0 left-0 flex items-center w-64 h-40 mt-6 ml-6 bg-white border-8 border-gray-700 border-solid rounded-lg">
                                <div class="w-1/3 h-40"></div>
                                <div class="w-2/3 h-32 pr-4">
                                    <h3 class="pt-1 text-xl font-semibold text-gray-700">Tervezés</h3>
                                    <p class="pt-1 text-sm text-gray-600">Közösen dokumentálodunk a tema kapcsan, majd kitûzûnk egy célt</p>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 z-20 w-12 h-12 mt-6 ml-6 bg-white rounded-full">
                                <svg class="mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#e53e3e"
                                     width="32px" height="32px">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 left-0 z-10 w-24 h-40 py-20 text-5xl font-bold text-center text-white bg-red-600 rounded-lg">
                                01</div>
                            <div class="absolute top-0 left-0 z-30 w-24 h-2 mt-40 ml-48 bg-red-600"></div>
                        </div>
                    </div>
                    <div class="flex justify-center pt-10 m-auto lg:w-1/4 lg:mx-6 lg:my-8">
                        <div class="relative w-64 h-48">
                            <div
                                class="absolute top-0 left-0 flex items-center w-64 h-40 mt-6 ml-6 bg-white border-8 border-gray-700 border-solid rounded-lg">
                                <div class="w-1/3 h-40"></div>
                                <div class="w-2/3 h-32 pr-4">
                                    <h3 class="pt-1 text-xl font-semibold text-gray-700">Leadás</h3>
                                    <p class="pt-1 text-sm text-gray-600">Ha már tiszta a cél, és meg tudjuk írni a pályázatot, akkor ez leadásra kerûl</p>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 z-20 w-12 h-12 mt-6 ml-6 bg-white rounded-full">
                                <svg class="mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                     viewBox="0 0 24 24" fill="#38a169" width="32px" height="32px">
                                    <g>
                                        <rect fill="none" height="24" width="24" />
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M6.36,18.78L6.61,21l1.62-1.54l2.77-7.6c-0.68-0.17-1.28-0.51-1.77-0.98L6.36,18.78z" />
                                            <path
                                                d="M14.77,10.88c-0.49,0.47-1.1,0.81-1.77,0.98l2.77,7.6L17.39,21l0.26-2.22L14.77,10.88z" />
                                            <path
                                                d="M15,8c0-1.3-0.84-2.4-2-2.82V3h-2v2.18C9.84,5.6,9,6.7,9,8c0,1.66,1.34,3,3,3S15,9.66,15,8z M12,9c-0.55,0-1-0.45-1-1 c0-0.55,0.45-1,1-1s1,0.45,1,1C13,8.55,12.55,9,12,9z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 left-0 z-10 w-24 h-40 py-20 text-5xl font-bold text-center text-white bg-green-600 rounded-lg">
                                02</div>
                            <div class="absolute top-0 left-0 z-30 w-24 h-2 mt-40 ml-48 bg-green-600"></div>
                        </div>
                    </div>
                    <div class="flex justify-center pt-10 m-auto lg:w-1/4 lg:mx-6 lg:my-8">
                        <div class="relative w-64 h-48">
                            <div
                                class="absolute top-0 left-0 flex items-center w-64 h-40 mt-6 ml-6 bg-white border-8 border-gray-700 border-solid rounded-lg">
                                <div class="w-1/3 h-40"></div>
                                <div class="w-2/3 h-32 pr-4">
                                    <h3 class="pt-1 text-xl font-semibold text-gray-700">Visszajelzés</h3>
                                    <p class="pt-1 text-sm text-gray-600">Minden pályázatunk után kötelességûnknek érezzûk hogy felmutassunk valamit.</p>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 z-20 w-12 h-12 mt-6 ml-6 bg-white rounded-full">
                                <svg class="mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3182ce"
                                     width="32px" height="32px">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z" />
                                </svg>
                            </div>
                            <div
                                class="absolute top-0 left-0 z-10 w-24 h-40 py-20 text-5xl font-bold text-center text-white bg-blue-600 rounded-lg">
                                03</div>
                            <div class="absolute top-0 left-0 z-30 w-24 h-2 mt-40 ml-48 bg-blue-600"></div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>


    <!--footer -->
    @include('fimeszfooter')
</div>
</body>
</html>
