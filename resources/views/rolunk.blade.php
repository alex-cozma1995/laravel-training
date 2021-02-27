<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-gray-200">
    <!-- nav -->
    @include('fimesznav')
    <!-- endnav -->

    <div class="flex items-center justify-center mt-20 min-w-screen mx-10">
        <div class="flex flex-col bg-white rounded-md flex-col-reverse items-center justify-center mx-auto lg:flex-row lg:max-w-6xl lg:p-0">
            <div class="container flex flex-col w-full px-5 pr-12 mb-16 text-2xl text-gray-700 lg:w-1/2 sm:px-0 md:px-10 sm:items-center lg:items-start lg:mb-0">
                <h1 class="font-sans text-4xl font-extrabold leading-none text-black sm:text-5xl xl:text-6xl sm:text-center lg:text-left">
                    <span class="text-gray-800">érdekesnek talalod</span>
                    <span class="block text-blue-400">csapatunkat?</span>
                </h1>
                <p class="mt-6 text-base text-gray-600 xl:text-lg s">Nyitottak vagyunk, bennunket konnyen megismerhetsz!<br /> Fö tulajdonsagunk az hogy minden resztvenni vagyo szemely eseteben <u>tiszta lappal</u> kezdunk mindket reszrol.</p>
            </div>
            <div class="px-5 md:w-2/3 lg:w-1/2">
                <img src="https://ouch-cdn.icons8.com/preview/123/00b6b699-606c-42b1-ba42-20f17872a135.png"
                     alt="Illustration of person meditating" class="object-cover w-full h-50">
            </div>
        </div>
    </div>
    <h2
        class="flex justify-center font-sans text-2xl font-extrabold leading-none tracking-tight text-center text-gray-900 b-6 sm:text-5xl md:mx-auto mt-20">
        <span class="relative font-extrabold">Alapíto <span class="text-blue-500">tagok:</span></span>
    </h2>
    <div class="flex px-96 space-x-24 mt-10">
        <div class="pb-5 mt-4 bg-white overflow-hidden rounded-lg shadow-lg w-80 ml-2">
            <div class="h-40 bg-gradient-to-br from-blue-400 via-indigo-500 to-purple-600">
                <div class="flex justify-center">
                    <span class="mt-10 text-3xl font-extrabold text-white">Lukács Oszkár</span>
                </div>
                <div class="flex justify-center">
                    <img class="object-cover w-24 h-24 mt-4 border-4 border-blue-600 rounded-full" src="https://scontent.fomr1-1.fna.fbcdn.net/v/t1.0-1/p160x160/121129935_222701172519263_2764186408345163451_n.jpg?_nc_cat=109&ccb=3&_nc_sid=dbb9e7&_nc_ohc=vjTHXg_XJqQAX_oCYFn&_nc_ht=scontent.fomr1-1.fna&tp=6&oh=24edac229deafa5c31dc024999d1621d&oe=605D78A8">
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="flex justify-center mt-10 mb-4 text-xl font-medium">Aszisztens, UMFC korhaz</div>
                <div class="flex w-full text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Kis utca - 512</span>
                </div>

                <div class="flex my-1 text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span>lukacsoszkar@yahoo.com</span>
                </div>

                <div class="flex text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>+061259532</span>
                </div>
            </div>
            <div class="flex justify-center mt-2">
                <button type="button" class="inline-flex items-center px-6 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                    Kapcsolatfelvétel
                </button>
            </div>
        </div>

        <div class="pb-5 mt-4 bg-white overflow-hidden rounded-lg shadow-lg w-80">
            <div class="h-40 bg-gradient-to-br from-blue-400 via-indigo-500 to-purple-600">
                <div class="flex justify-center">
                    <span class="mt-10 text-3xl font-extrabold text-white">Tony Stark</span>
                </div>
                <div class="flex justify-center">
                    <img class="object-cover w-24 h-24 mt-4 border-4 border-blue-600 rounded-full" src="https://im.indiatimes.in/content/2019/Jun/marvel_fans_start_a_petition_to_demand_robert_downey_jr_aka_tony_stark_aka_iron_man_back_1559715390_725x725.jpg">
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="flex justify-center mt-10 mb-4 text-xl font-medium">CEO, Stark Industries</div>
                <div class="flex w-full text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>A-123, This is my office address</span>
                </div>

                <div class="flex my-1 text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span>email@email.com</span>
                </div>

                <div class="flex text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>+91 1234567890</span>
                </div>
            </div>
            <div class="flex justify-center mt-2">
                <button type="button" class="inline-flex items-center px-6 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                    Kapcsolatfelvétel
                </button>
            </div>
        </div>

        <div class="pb-5 mt-4 bg-white overflow-hidden rounded-lg shadow-lg w-80 ml-10">
            <div class="h-40 bg-gradient-to-br from-blue-400 via-indigo-500 to-purple-600">
                <div class="flex justify-center">
                    <span class="mt-10 text-3xl font-extrabold text-white">Bartha Ord</span>
                </div>
                <div class="flex justify-center">
                    <img class="object-cover w-24 h-24 mt-4 border-4 border-blue-600 rounded-full" src="https://scontent.fomr1-1.fna.fbcdn.net/v/t1.0-1/p160x160/42331129_2341737079387063_8079578643421986816_o.jpg?_nc_cat=107&ccb=3&_nc_sid=dbb9e7&_nc_ohc=oBmiVu3DhyMAX9zPlVa&_nc_ht=scontent.fomr1-1.fna&tp=6&oh=2cf108117ce3aed6383359bdd942d6a5&oe=605FBCC6">
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="flex justify-center mt-10 mb-4 text-xl font-medium">Admin, Kaptán csoport</div>
                <div class="flex w-full text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Nagy utca 16</span>
                </div>

                <div class="flex my-1 text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span>bartha@ord.com</span>
                </div>

                <div class="flex text-gray-600">
                    <svg class="h-5 mt-1 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>+4073218612</span>
                </div>
            </div>
            <div class="flex justify-center mt-2">
                <button type="button" class="inline-flex items-center px-6 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                    Kapcsolatfelvétel
                </button>
            </div>
        </div>
    </div>

    <!--footer -->
    @include('fimeszfooter')
</div>
</body>
</html>
