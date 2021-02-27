<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-gray-200">
    <!-- nav -->
    @include('fimesznav')
    <h2
        class="flex justify-center font-sans text-3xl font-extrabold leading-none tracking-tight text-center text-gray-900 b-6 sm:text-5xl md:mx-auto my-14">
        <span class="relative font-extrabold "><u>Alkalmaink</u></span>
    </h2>
    <!-- endnav -->
    <div class="grid gap-10 md:grid-cols-3 px-48">
        <a href="{{ route('alkalom-1') }}">
            <div class="flex flex-col m-4 overflow-hidden rounded shadow-md hover:shadow-xl cursor-pointer bg-white "> <!--  Card -->
                <img class="object-cover w-full h-56 sm:h-48" src="https://images.unsplash.com/photo-1535016120720-40c646be5580?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="..." style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 80%);">

                <div class="p-4 -mt-6 overflow-y-visiblerflow-hidden md:-mt-8">
                    <div class="font-sans text-lg font-semibold text-gray-600 capitalize md:text-xl">Film</div>

                    <div class="md:mt-2">
                        <p class="font-sans text-base antialiased font-semibold leading-6 text-gray-800 md:text-lg">Az "1917" címû film levetítése, utána a film témájával kapcsolatos kibeszélö</p>
                    </div>

                    <div class="flex pt-1 md:pt-4">
                        <span class="font-sans text-xs text-gray-600 font-edium md:text-base">Március 21 | 18:00 - 22:00</span>
                        <span class="px-4 font-sans text-xs font-medium text-gray-600 md:text-base flex">
                            <svg class="w-4 h-4 mt-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g><path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                                    c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                                    C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                                    s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"/></g>
                            </svg>
                            Gyûlekezeti ház
                        </span>
                    </div>
                </div>

                <div class="flex p-4 align-middle border-t">
                    <div>
                        <img class="w-5 md:w-6" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwMSA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDAxIDUxMi4wMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTA5LjA3MSw4MC4yNjljLTMxLjkzMi0zMS45MzEtOTAuODEtNTYuMDAyLTEzMS41MjYtNjYuOTEyQzM0NS44NjksNC44NywzMTAuMjM4LDAuMDAxLDI3OS43ODgsMC4wMDENCgkJCWMtMTkuMTk0LDAtMzUuODgzLDEuODY0LTQ5LjYwNCw1LjU0Yy0zLjQ1MSwwLjkyNS02LjE0NiwzLjYyLTcuMDcxLDcuMDcxYy0yLjkzNiwxMC45NTktNS40NTYsMjIuNDA2LTcuNTU0LDM0LjE0NA0KCQkJYy0wLjA4LDAuMzQzLTAuMTM5LDAuNjkyLTAuMTgyLDEuMDQ2Yy04LjE0Niw0Ni4xODItOS43Myw5Ni43ODUtNC4wODksMTQwLjE2MmMtMjUuMjMxLDEuNjIzLTUyLjEwNiw2LjAyOS03Ni44MzMsMTIuNjU1DQoJCQlDOTMuNzQxLDIxMS41MjgsMzQuODY1LDIzNS41OTYsMi45MywyNjcuNTNjLTIuNTI2LDIuNTI2LTMuNTE0LDYuMjA4LTIuNTg5LDkuNjU5YzMuMTkyLDExLjkxMiw3LjA4NywyNC4wNjQsMTEuNTY5LDM2LjI0Mw0KCQkJYzAuMDA2LDAuMDE1LDAuMDExLDAuMDMsMC4wMTcsMC4wNDVjMTUuNDQ0LDQxLjk0MywzNy45MjMsODQuMTk0LDYzLjIyLDExOC4wMzJjMjcuNDUxLDM2LjcyLDcwLjY3OCw4MC40OSwxMjAuNzE2LDgwLjQ5DQoJCQljNy4xOSwwLDE0LjM1LTAuOTQxLDIxLjI3OC0yLjc5OGMzMC41MzgtOC4xODMsNTQuNTI0LTMzLjY4NSw2OS4zNjMtNzMuNzQ5YzExLjI5NC0zMC40OSwxNy4zMDctNjguODczLDE3LjU4My0xMTEuNjExDQoJCQljMy45ODQsMC41OSw4LjAxMiwwLjg5OCwxMi4wNSwwLjg5OGM1MC4wMzUsMCw5My4yNjItNDMuNzczLDEyMC43MTUtODAuNDkzYzMyLjY1NC00My42NzksNjAuNjE5LTEwMS4zNjcsNzQuODA4LTE1NC4zMTcNCgkJCUM1MTIuNTg0LDg2LjQ3OCw1MTEuNTk4LDgyLjc5NSw1MDkuMDcxLDgwLjI2OXogTTIxMS45NjUsNDg5Ljg4M2MtNS4yNDEsMS40MDQtMTAuNjU5LDIuMTE2LTE2LjEwMywyLjExNg0KCQkJYy0zMi41OCwwLTY5Ljc2Mi0yNS43MzUtMTA0LjY5Ny03Mi40NjVjLTIyLjg5OC0zMC42My00My4zNzktNjguNDcyLTU4LjAyNC0xMDYuNDVjNS4zOTItNC4xODMsMTQuMDA2LTEwLjY4NiwyMi45MzgtMTYuNzEyDQoJCQljNC41NzgtMy4wODksNS43ODYtOS4zMDQsMi42OTctMTMuODgzYy0zLjA4OS00LjU3OC05LjMwNC01Ljc4Ni0xMy44ODMtMi42OTdjLTYuOTI4LDQuNjc0LTEzLjU3LDkuNTM4LTE4Ljg0LDEzLjUyMg0KCQkJYy0xLjcyOS01LjIyMy0zLjM0MS0xMC40MjYtNC44MTQtMTUuNTg4YzI0LjkxOC0yMi4zODksNzEuNDU3LTQ1LjIxNSwxMTguMzkzLTU3Ljc4OWMyNC4xMTUtNi40NjIsNTAuMzYtMTAuNzAyLDc0LjgzNC0xMi4xMzYNCgkJCWMzLjIsMTYuNjg2LDcuNTEyLDMxLjc4NCwxMi44ODQsNDUuMTk1YzAuMDI0LDAuMDYxLDAuMDQ5LDAuMTIzLDAuMDc0LDAuMTg2YzAuNTE3LDEuMjg2LDEuMDQzLDIuNTU5LDEuNTc5LDMuODEzDQoJCQljMC4wMywwLjA2OSwwLjA2LDAuMTM4LDAuMDg5LDAuMjA2YzIuNzUsNi40MSw1Ljc1MywxMi40MDgsOS4wMSwxNy45NzljMC4wNDMsMC4wNzMsMC4wODUsMC4xNSwwLjEyOCwwLjIyNQ0KCQkJYzAuMDEyLDAuMDIsMC4wMjQsMC4wMzksMC4wMzYsMC4wNTljMC4xODgsMC4zMTksMC4zNjcsMC42NDksMC41NTcsMC45NjZjMC4zOTgsMC42NjYsMC44MTMsMS4zMDEsMS4yMTksMS45NTQNCgkJCWMwLjI2MiwwLjQyMSwwLjUyMywwLjg0NSwwLjc4NywxLjI2MWMwLjU2NCwwLjg4OCwxLjEzNywxLjc2LDEuNzE0LDIuNjIyYzAuMjgsMC40MTgsMC41NjEsMC44MzIsMC44NDUsMS4yNDQNCgkJCWMwLjU5MiwwLjg2MSwxLjE4OCwxLjcxNCwxLjc5MiwyLjU0OWMwLjI1MiwwLjM0OSwwLjUwOSwwLjY4OCwwLjc2MywxLjAzMmMwLjY1NCwwLjg4MywxLjMxLDEuNzYyLDEuOTc5LDIuNjE1DQoJCQljMC4wNzMsMC4wOTIsMC4xNDgsMC4xODEsMC4yMjEsMC4yNzNjMS4zMTYsMS42NjcsMi42NjMsMy4yNjgsNC4wMzYsNC44MThjLTYuMDIyLDcuNTY0LTE1LjI1NSwxMi4xMTgtMjUuMDczLDEyLjExOA0KCQkJYy0xMS40MDksMC0yMi4wNC02LjEzOC0yNy43NDQtMTYuMDE4Yy0yLjc2MS00Ljc4Mi04Ljg3NC02LjQyMS0xMy42Ni0zLjY2Yy00Ljc4MywyLjc2Mi02LjQyMiw4Ljg3Ny0zLjY2LDEzLjY2DQoJCQljOS4yNjYsMTYuMDQ4LDI2LjUzMywyNi4wMTgsNDUuMDY0LDI2LjAxOGMxNS40NDMsMCwzMC4wMDUtNi45MjksMzkuNzkzLTE4LjUyM2MzLjI2NSwyLjQxNSw2LjY1Nyw0LjU1NSwxMC4xNiw2LjQ0NQ0KCQkJYzAuMTQ2LDAuMDc5LDAuMjksMC4xNjEsMC40MzYsMC4yMzljMC45MTksMC40ODgsMS44NDgsMC45NTQsMi43ODIsMS40MDZjMC4yNiwwLjEyNiwwLjUyLDAuMjUyLDAuNzgsMC4zNzUNCgkJCWMwLjg5OSwwLjQyNCwxLjgwNiwwLjgzMywyLjcyLDEuMjI0YzAuMTExLDAuMDQ4LDAuMjIsMC4xMDMsMC4zMzIsMC4xNDlDMjg0LjQ0NSwzOTMuMDMxLDI2NS43ODEsNDc1LjQ2MywyMTEuOTY1LDQ4OS44ODN6DQoJCQkgTTQyMC44MzMsMjMyLjI3Yy0zNC45MzgsNDYuNzMyLTcyLjExOSw3Mi40NjktMTA0LjY5Niw3Mi40NjljLTUuNDQyLDAtMTAuODU5LTAuNzEyLTE2LjEtMi4xMTYNCgkJCWMtMC45NzEtMC4yNi0xLjkyMi0wLjU1LTIuODY2LTAuODUzYy0wLjAyOC0wLjAxLTAuMDU3LTAuMDIxLTAuMDg2LTAuMDMxYy00My4yNDctMTMuOTA2LTU4LjkzMi03Mi4zNDItNjQuNDMzLTEwNS45MzgNCgkJCWMtMC4wMTItMC4wNzQtMC4wMzItMC4xNDUtMC4wNDYtMC4yMmMtMC4wOTktMC42MDUtMC4xOTUtMS4yMDMtMC4yODgtMS43OTRjLTYuNDc3LTQxLjIyMi01LjY5OS05MC40ODMsMS42MzItMTM1LjkyOA0KCQkJYzYuNzUzLTAuOTI1LDE3LjQ2NC0yLjI1MSwyOC4yMzgtMy4wMDVjNS41MDktMC4zODYsOS42NjMtNS4xNjQsOS4yNzctMTAuNjc0Yy0wLjM4Ny01LjUwOS01LjE0LTkuNjc4LTEwLjY3NC05LjI3Nw0KCQkJYy04LjMsMC41OC0xNi40NSwxLjQ2Ny0yMi45OTEsMi4yNzljMC45NzktNC42MTgsMi4wMjQtOS4xODEsMy4xNDYtMTMuNjYxYzEwLjk2OS0yLjMzOCwyNC0zLjUyLDM4Ljg0Mi0zLjUyDQoJCQljMjguNzc3LDAsNjIuNTIxLDQuNjE5LDkyLjU4MSwxMi42NzRjNDYuOTM0LDEyLjU3Niw5My40NzQsMzUuNDA1LDExOC4zOTEsNTcuNzkxDQoJCQlDNDc2Ljc2NiwxMzkuNDkzLDQ1MC44NzUsMTkyLjA4NSw0MjAuODMzLDIzMi4yN3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ0Ni4xMDQsMTU1LjAyM2MtOS4yNjYtMTYuMDQ5LTI2LjUzMy0yNi4wMTktNDUuMDY0LTI2LjAxOXMtMzUuNzk5LDkuOTctNDUuMDY0LDI2LjAxOQ0KCQkJYy0yLjc2Miw0Ljc4My0xLjEyMywxMC44OTgsMy42NiwxMy42NmM0Ljc4NSwyLjc2MSwxMC45LDEuMTIzLDEzLjY2LTMuNjZjNS43MDQtOS44ODEsMTYuMzM1LTE2LjAxOSwyNy43NDQtMTYuMDE5DQoJCQlzMjIuMDQsNi4xMzgsMjcuNzQ0LDE2LjAxOWMxLjg1MywzLjIwOCw1LjIxMyw1LjAwMiw4LjY3LDUuMDAyYzEuNjk2LDAsMy40MTUtMC40MzMsNC45OS0xLjM0Mg0KCQkJQzQ0Ny4yMjcsMTY1LjkyMSw0NDguODY2LDE1OS44MDYsNDQ2LjEwNCwxNTUuMDIzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjk3LjYzNyw5OS42MzZjLTE2LjA1LTkuMjY3LTM1Ljk4OC05LjI2NS01Mi4wMzYsMGMtNC43ODMsMi43NjItNi40MjIsOC44NzctMy42NiwxMy42Ng0KCQkJYzIuNzYyLDQuNzgyLDguODc1LDYuNDIzLDEzLjY2LDMuNjZjOS44NzktNS43MDQsMjIuMTU1LTUuNzA0LDMyLjAzNiwwYzkuODgyLDUuNzA2LDE2LjAxOSwxNi4zMzcsMTYuMDE5LDI3Ljc0NQ0KCQkJYzAsNS41MjIsNC40NzgsMTAsMTAsMTBjNS41MjIsMCwxMC00LjQ3OCwxMC0xMEMzMjMuNjU2LDEyNi4xNzEsMzEzLjY4NiwxMDguOTAzLDI5Ny42MzcsOTkuNjM2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzYzLjE5LDIyNi45MDZjLTMuOTA3LTMuOTA1LTEwLjIzNy0zLjkwNS0xNC4xNDMsMGMtOC4wNjUsOC4wNjctMTkuOTI3LDExLjI0Ni0zMC45NDMsOC4yOTINCgkJCWMtMTEuMDIxLTIuOTUzLTE5LjcwMS0xMS42MzQtMjIuNjU0LTIyLjY1M2MtMS40MjktNS4zMzQtNi45MS04LjQ5OS0xMi4yNDgtNy4wN2MtNS4zMzQsMS40My04LjUsNi45MTMtNy4wNywxMi4yNDgNCgkJCWM0Ljc5NywxNy44OTgsMTguODk2LDMxLjk5NywzNi43OTYsMzYuNzk0YzQuNDIxLDEuMTg1LDguOTI2LDEuNzYyLDEzLjM5OSwxLjc2MmMxMy42NCwwLDI2Ljk5Ni01LjM2MywzNi44NjMtMTUuMjMNCgkJCUMzNjcuMDk1LDIzNy4xNDQsMzY3LjA5NSwyMzAuODEyLDM2My4xOSwyMjYuOTA2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMTMzLjM4OSwzMDEuMjU4aC0wLjAwMWMtNS41MjIsMC0xMCw0LjQ3Ny0xMCw5Ljk5OWMtMC4wMDEsMTEuNDA5LTYuMTM5LDIyLjA0LTE2LjAxOCwyNy43NDUNCgkJCWMtOS44ODEsNS43MDQtMjIuMTU1LDUuNzA1LTMyLjAzNiwwYy00Ljc4NC0yLjc2Mi0xMC44OTktMS4xMjItMTMuNjYsMy42NmMtMi43NjIsNC43ODMtMS4xMjMsMTAuODk4LDMuNjYsMTMuNjYNCgkJCWM4LjAyNCw0LjYzMywxNy4wMjEsNi45NDksMjYuMDE4LDYuOTQ5czE3Ljk5NC0yLjMxNiwyNi4wMTktNi45NDljMTYuMDQ4LTkuMjY3LDI2LjAxOC0yNi41MzMsMjYuMDE4LTQ1LjA2NA0KCQkJQzE0My4zODgsMzA1LjczNiwxMzguOTExLDMwMS4yNTgsMTMzLjM4OSwzMDEuMjU4eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjM4LjcyLDQxNS42MjVjLTEzLjEwNC0xMy4xMDMtMzIuMzYxLTE4LjI2My01MC4yNjItMTMuNDY4Yy0xNy45LDQuNzk2LTMyLDE4Ljg5NS0zNi43OTYsMzYuNzk2DQoJCQljLTEuNDMsNS4zMzUsMS43MzYsMTAuODE3LDcuMDcxLDEyLjI0N2MwLjg2NywwLjIzMywxLjczNywwLjM0NCwyLjU5NCwwLjM0M2M0LjQxNSwwLDguNDU2LTIuOTQ2LDkuNjUzLTcuNDE0DQoJCQljMi45NTMtMTEuMDIxLDExLjYzMy0xOS43MDEsMjIuNjUzLTIyLjY1M2MxMS4wMjEtMi45NTIsMjIuODc3LDAuMjI1LDMwLjk0NCw4LjI5MmMzLjkwNiwzLjkwNCwxMC4yMzYsMy45MDQsMTQuMTQzLDANCgkJCUMyNDIuNjI1LDQyNS44NjMsMjQyLjYyNSw0MTkuNTMxLDIzOC43Miw0MTUuNjI1eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjkxLjk3NywzNS4yNDhjLTAuMjQ2LTAuMDM5LTAuNDk2LTAuMDc4LTAuNzQ4LTAuMTE1Yy01LjQ2OC0wLjgwMy0xMC41NDIsMi45ODMtMTEuMzQyLDguNDQ3DQoJCQljLTAuNzk5LDUuNDY1LDIuOTgzLDEwLjU0Myw4LjQ0OCwxMS4zNDJsMC40NzgsMC4wNzRjMC41MzYsMC4wODYsMS4wNjgsMC4xMjgsMS41OTUsMC4xMjhjNC44MjUsMCw5LjA3My0zLjUwMyw5Ljg2MS04LjQyDQoJCQlDMzAxLjE0Myw0MS4yNTEsMjk3LjQzLDM2LjEyMSwyOTEuOTc3LDM1LjI0OHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTg0Ljk5OSwyNzAuMzA4Yy0xLjk1LTUuMTY2LTcuNzE5LTcuNzc1LTEyLjg4OC01LjgyM2MtMC4yNDksMC4wOTQtMC41LDAuMTkxLTAuNzUyLDAuMjkyDQoJCQljLTUuMTMsMi4wNDctNy42MjksNy44NjQtNS41ODIsMTIuOTk0YzEuNTYyLDMuOTE0LDUuMzIsNi4yOTcsOS4yOTIsNi4yOTdjMS4yMzMsMCwyLjQ4Ny0wLjIzLDMuNzAzLTAuNzE1bDAuNDA0LTAuMTU3DQoJCQlDODQuMzQzLDI4MS4yNDUsODYuOTUsMjc1LjQ3NSw4NC45OTksMjcwLjMwOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                    </div>

                    <div class="px-4">
                        <span class="font-sans text-xs font-medium text-gray-700 uppercase md:text-sm">Kultúra</span>
                    </div>
                </div>
            </div>
        </a>

        <div class="flex flex-col m-4 overflow-hidden rounded shadow-md hover:shadow-xl cursor-pointer bg-white "> <!--  Card -->
            <img class="object-cover w-full h-56 sm:h-48"
                 src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1300&q=80" alt="..." style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 80%);">

            <div class="p-4 -mt-6 overflow-y-visiblerflow-hidden md:-mt-8">
                <div class="font-sans text-lg font-semibold text-gray-600 capitalize md:text-xl">Elöadás</div>

                <div class="md:mt-2">
                    <p class="font-sans text-base antialiased font-semibold leading-6 text-gray-800 md:text-lg">Selyem Zorán tart elöadást az egészséges életmodrol</p>
                </div>

                <div class="flex pt-1 md:pt-4">
                    <span class="font-sans text-xs text-gray-600 font-edium md:text-base">Április 6 | 20:00 - 21:00</span>
                    <span class="px-4 font-sans text-xs font-medium text-gray-600 md:text-base flex">
                        <svg class="w-4 h-4 mt-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g><path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                                c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                                C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                                s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"/></g>
                        </svg>
                        Néptanács
                    </span>
                </div>
            </div>

            <div class="flex p-4 align-middle border-t">
                <div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>

                <div class="px-4 pt-1">
                    <span class="font-sans text-xs font-medium text-gray-700 uppercase md:text-sm">Egészség</span>
                </div>
            </div>
        </div>

        <div class="flex flex-col m-4 overflow-hidden rounded shadow-md hover:shadow-xl cursor-pointer bg-white "> <!--  Card -->
            <img class="object-cover w-full h-56 sm:h-48" src="https://images.unsplash.com/photo-1593786481097-cf281dd12e9e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="..." style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 80%);">

            <div class="p-4 -mt-6 overflow-y-visiblerflow-hidden md:-mt-8">
                <div class="font-sans text-lg font-semibold text-gray-600 capitalize md:text-xl">Vetélkedő</div>

                <div class="md:mt-2">
                    <p class="font-sans text-base antialiased font-semibold leading-6 text-gray-800 md:text-lg mb-7">Községi Pingpong bajnokság</p>
                </div>

                <div class="flex pt-1 md:pt-4">
                    <span class="font-sans text-xs text-gray-600 font-edium md:text-base">Április 18 | 16:00 - 21:00</span>
                    <span class="px-4 font-sans text-xs font-medium text-gray-600 md:text-base flex">
                        <svg class="w-4 h-4 mt-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g><path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                                c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                                C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                                s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"/></g>
                        </svg>
                        Iskolai sport terem
                    </span>
                </div>
            </div>

            <div class="flex p-4 align-middle border-t">
                <div>
                    <svg version="1.1" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="301.439px" height="301.439px" viewBox="0 0 301.439 301.439" style="enable-background:new 0 0 301.439 301.439;"
                         xml:space="preserve">
                    <g>
                            <path d="M150.72,0C67.611,0,0,67.61,0,150.725c0,83.109,67.61,150.715,150.72,150.715c83.113,0,150.719-67.605,150.719-150.715
                                C301.439,67.61,233.833,0,150.72,0z M53.936,251.89c-26.67-25.522-43.331-61.428-43.331-101.165c0-0.839,0.047-1.657,0.062-2.48
                                l39.027,13.438l27.307,70.392L53.936,251.89z M85.887,45.14l70.862-25.495l50.728,47.323l-41.684,59.68l-77.545-14.737
                                L85.887,45.14z M244.304,254.888c-2.931,2.641-5.976,5.152-9.113,7.539l-58.254,24.887l-38.158-39.769l49.529-55.742l66.166,8.14
                                L244.304,254.888z M262.966,66.942c17.502,23.385,27.879,52.393,27.879,83.782c0,0.839-0.052,1.673-0.067,2.506l-7.896-1.998
                                l-23.83-67.205L262.966,66.942z"/>
                    </g></svg>
                </div>

                <div class="px-4">
                    <span class="font-sans text-xs font-medium text-gray-700 uppercase md:text-sm">Sport</span>
                </div>
            </div>
        </div>

        <a href="{{ route('alkalom-2') }}">
            <div class="flex flex-col m-4 overflow-hidden rounded shadow-md hover:shadow-xl cursor-pointer bg-white "> <!--  Card -->
                <img class="object-cover w-full h-56 sm:h-48" src="https://images.unsplash.com/photo-1603139484774-805e6a3ab082?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80" alt="..." style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 80%);">

                <div class="p-4 -mt-6 overflow-y-visiblerflow-hidden md:-mt-8">
                    <div class="font-sans text-lg font-semibold text-gray-600 capitalize md:text-xl">Jótékonyság</div>

                    <div class="md:mt-2">
                        <p class="font-sans text-base antialiased font-semibold leading-6 text-gray-800 md:text-lg">Szemétszedés Mezöpanit határában, utána közös gulyásozás</p>
                    </div>

                    <div class="flex pt-1 md:pt-4">
                        <span class="font-sans text-xs text-gray-600 font-edium md:text-base">Május 5 | 12:00 - 20:00</span>
                        <span class="px-4 font-sans text-xs font-medium text-gray-600 md:text-base flex">
                            <svg class="w-4 h-4 mt-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g><path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                                    c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                                    C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                                    s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z"/></g>
                            </svg>
                            Mezöpanit
                        </span>
                    </div>
                </div>

                <div class="flex p-4 align-middle border-t">
                    <div>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                    </div>

                    <div class="px-4 pt-1">
                        <span class="font-sans text-xs font-medium text-gray-700 uppercase md:text-sm">Karitatív</span>
                    </div>
                </div>
            </div>
        </a>

        <div class="flex flex-col bg-white m-4 overflow-hidden rounded shadow-md hover:shadow-xl cursor-pointer"> <!--  Card -->
            <img class="object-cover w-full h-56 sm:h-48" src="./fim5.png" alt="..." style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 80%);">

            <div class="p-4 -mt-6 overflow-y-visiblerflow-hidden md:-mt-8">
                <div class="font-sans text-lg font-semibold text-gray-600 capitalize md:text-xl">Beszélgetés</div>

                <div class="md:mt-2">
                    <p class="font-sans text-base antialiased font-semibold leading-6 text-gray-800 md:text-lg">Közös beszélgetés a szociális média hatásairol a társadalomra, utána játék est.</p>
                </div>

                <div class="flex pt-1 md:pt-4">
                    <span class="font-sans text-xs text-gray-600 font-edium md:text-base">Junius 8 | 19:00 - 23:00</span>
                    <span class="px-4 font-sans text-xs font-medium text-gray-600 md:text-base flex">
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
            </div>

            <div class="flex p-4 align-middle border-t">
                <div>
                    <img class="w-5 md:w-6" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwMSA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDAxIDUxMi4wMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTA5LjA3MSw4MC4yNjljLTMxLjkzMi0zMS45MzEtOTAuODEtNTYuMDAyLTEzMS41MjYtNjYuOTEyQzM0NS44NjksNC44NywzMTAuMjM4LDAuMDAxLDI3OS43ODgsMC4wMDENCgkJCWMtMTkuMTk0LDAtMzUuODgzLDEuODY0LTQ5LjYwNCw1LjU0Yy0zLjQ1MSwwLjkyNS02LjE0NiwzLjYyLTcuMDcxLDcuMDcxYy0yLjkzNiwxMC45NTktNS40NTYsMjIuNDA2LTcuNTU0LDM0LjE0NA0KCQkJYy0wLjA4LDAuMzQzLTAuMTM5LDAuNjkyLTAuMTgyLDEuMDQ2Yy04LjE0Niw0Ni4xODItOS43Myw5Ni43ODUtNC4wODksMTQwLjE2MmMtMjUuMjMxLDEuNjIzLTUyLjEwNiw2LjAyOS03Ni44MzMsMTIuNjU1DQoJCQlDOTMuNzQxLDIxMS41MjgsMzQuODY1LDIzNS41OTYsMi45MywyNjcuNTNjLTIuNTI2LDIuNTI2LTMuNTE0LDYuMjA4LTIuNTg5LDkuNjU5YzMuMTkyLDExLjkxMiw3LjA4NywyNC4wNjQsMTEuNTY5LDM2LjI0Mw0KCQkJYzAuMDA2LDAuMDE1LDAuMDExLDAuMDMsMC4wMTcsMC4wNDVjMTUuNDQ0LDQxLjk0MywzNy45MjMsODQuMTk0LDYzLjIyLDExOC4wMzJjMjcuNDUxLDM2LjcyLDcwLjY3OCw4MC40OSwxMjAuNzE2LDgwLjQ5DQoJCQljNy4xOSwwLDE0LjM1LTAuOTQxLDIxLjI3OC0yLjc5OGMzMC41MzgtOC4xODMsNTQuNTI0LTMzLjY4NSw2OS4zNjMtNzMuNzQ5YzExLjI5NC0zMC40OSwxNy4zMDctNjguODczLDE3LjU4My0xMTEuNjExDQoJCQljMy45ODQsMC41OSw4LjAxMiwwLjg5OCwxMi4wNSwwLjg5OGM1MC4wMzUsMCw5My4yNjItNDMuNzczLDEyMC43MTUtODAuNDkzYzMyLjY1NC00My42NzksNjAuNjE5LTEwMS4zNjcsNzQuODA4LTE1NC4zMTcNCgkJCUM1MTIuNTg0LDg2LjQ3OCw1MTEuNTk4LDgyLjc5NSw1MDkuMDcxLDgwLjI2OXogTTIxMS45NjUsNDg5Ljg4M2MtNS4yNDEsMS40MDQtMTAuNjU5LDIuMTE2LTE2LjEwMywyLjExNg0KCQkJYy0zMi41OCwwLTY5Ljc2Mi0yNS43MzUtMTA0LjY5Ny03Mi40NjVjLTIyLjg5OC0zMC42My00My4zNzktNjguNDcyLTU4LjAyNC0xMDYuNDVjNS4zOTItNC4xODMsMTQuMDA2LTEwLjY4NiwyMi45MzgtMTYuNzEyDQoJCQljNC41NzgtMy4wODksNS43ODYtOS4zMDQsMi42OTctMTMuODgzYy0zLjA4OS00LjU3OC05LjMwNC01Ljc4Ni0xMy44ODMtMi42OTdjLTYuOTI4LDQuNjc0LTEzLjU3LDkuNTM4LTE4Ljg0LDEzLjUyMg0KCQkJYy0xLjcyOS01LjIyMy0zLjM0MS0xMC40MjYtNC44MTQtMTUuNTg4YzI0LjkxOC0yMi4zODksNzEuNDU3LTQ1LjIxNSwxMTguMzkzLTU3Ljc4OWMyNC4xMTUtNi40NjIsNTAuMzYtMTAuNzAyLDc0LjgzNC0xMi4xMzYNCgkJCWMzLjIsMTYuNjg2LDcuNTEyLDMxLjc4NCwxMi44ODQsNDUuMTk1YzAuMDI0LDAuMDYxLDAuMDQ5LDAuMTIzLDAuMDc0LDAuMTg2YzAuNTE3LDEuMjg2LDEuMDQzLDIuNTU5LDEuNTc5LDMuODEzDQoJCQljMC4wMywwLjA2OSwwLjA2LDAuMTM4LDAuMDg5LDAuMjA2YzIuNzUsNi40MSw1Ljc1MywxMi40MDgsOS4wMSwxNy45NzljMC4wNDMsMC4wNzMsMC4wODUsMC4xNSwwLjEyOCwwLjIyNQ0KCQkJYzAuMDEyLDAuMDIsMC4wMjQsMC4wMzksMC4wMzYsMC4wNTljMC4xODgsMC4zMTksMC4zNjcsMC42NDksMC41NTcsMC45NjZjMC4zOTgsMC42NjYsMC44MTMsMS4zMDEsMS4yMTksMS45NTQNCgkJCWMwLjI2MiwwLjQyMSwwLjUyMywwLjg0NSwwLjc4NywxLjI2MWMwLjU2NCwwLjg4OCwxLjEzNywxLjc2LDEuNzE0LDIuNjIyYzAuMjgsMC40MTgsMC41NjEsMC44MzIsMC44NDUsMS4yNDQNCgkJCWMwLjU5MiwwLjg2MSwxLjE4OCwxLjcxNCwxLjc5MiwyLjU0OWMwLjI1MiwwLjM0OSwwLjUwOSwwLjY4OCwwLjc2MywxLjAzMmMwLjY1NCwwLjg4MywxLjMxLDEuNzYyLDEuOTc5LDIuNjE1DQoJCQljMC4wNzMsMC4wOTIsMC4xNDgsMC4xODEsMC4yMjEsMC4yNzNjMS4zMTYsMS42NjcsMi42NjMsMy4yNjgsNC4wMzYsNC44MThjLTYuMDIyLDcuNTY0LTE1LjI1NSwxMi4xMTgtMjUuMDczLDEyLjExOA0KCQkJYy0xMS40MDksMC0yMi4wNC02LjEzOC0yNy43NDQtMTYuMDE4Yy0yLjc2MS00Ljc4Mi04Ljg3NC02LjQyMS0xMy42Ni0zLjY2Yy00Ljc4MywyLjc2Mi02LjQyMiw4Ljg3Ny0zLjY2LDEzLjY2DQoJCQljOS4yNjYsMTYuMDQ4LDI2LjUzMywyNi4wMTgsNDUuMDY0LDI2LjAxOGMxNS40NDMsMCwzMC4wMDUtNi45MjksMzkuNzkzLTE4LjUyM2MzLjI2NSwyLjQxNSw2LjY1Nyw0LjU1NSwxMC4xNiw2LjQ0NQ0KCQkJYzAuMTQ2LDAuMDc5LDAuMjksMC4xNjEsMC40MzYsMC4yMzljMC45MTksMC40ODgsMS44NDgsMC45NTQsMi43ODIsMS40MDZjMC4yNiwwLjEyNiwwLjUyLDAuMjUyLDAuNzgsMC4zNzUNCgkJCWMwLjg5OSwwLjQyNCwxLjgwNiwwLjgzMywyLjcyLDEuMjI0YzAuMTExLDAuMDQ4LDAuMjIsMC4xMDMsMC4zMzIsMC4xNDlDMjg0LjQ0NSwzOTMuMDMxLDI2NS43ODEsNDc1LjQ2MywyMTEuOTY1LDQ4OS44ODN6DQoJCQkgTTQyMC44MzMsMjMyLjI3Yy0zNC45MzgsNDYuNzMyLTcyLjExOSw3Mi40NjktMTA0LjY5Niw3Mi40NjljLTUuNDQyLDAtMTAuODU5LTAuNzEyLTE2LjEtMi4xMTYNCgkJCWMtMC45NzEtMC4yNi0xLjkyMi0wLjU1LTIuODY2LTAuODUzYy0wLjAyOC0wLjAxLTAuMDU3LTAuMDIxLTAuMDg2LTAuMDMxYy00My4yNDctMTMuOTA2LTU4LjkzMi03Mi4zNDItNjQuNDMzLTEwNS45MzgNCgkJCWMtMC4wMTItMC4wNzQtMC4wMzItMC4xNDUtMC4wNDYtMC4yMmMtMC4wOTktMC42MDUtMC4xOTUtMS4yMDMtMC4yODgtMS43OTRjLTYuNDc3LTQxLjIyMi01LjY5OS05MC40ODMsMS42MzItMTM1LjkyOA0KCQkJYzYuNzUzLTAuOTI1LDE3LjQ2NC0yLjI1MSwyOC4yMzgtMy4wMDVjNS41MDktMC4zODYsOS42NjMtNS4xNjQsOS4yNzctMTAuNjc0Yy0wLjM4Ny01LjUwOS01LjE0LTkuNjc4LTEwLjY3NC05LjI3Nw0KCQkJYy04LjMsMC41OC0xNi40NSwxLjQ2Ny0yMi45OTEsMi4yNzljMC45NzktNC42MTgsMi4wMjQtOS4xODEsMy4xNDYtMTMuNjYxYzEwLjk2OS0yLjMzOCwyNC0zLjUyLDM4Ljg0Mi0zLjUyDQoJCQljMjguNzc3LDAsNjIuNTIxLDQuNjE5LDkyLjU4MSwxMi42NzRjNDYuOTM0LDEyLjU3Niw5My40NzQsMzUuNDA1LDExOC4zOTEsNTcuNzkxDQoJCQlDNDc2Ljc2NiwxMzkuNDkzLDQ1MC44NzUsMTkyLjA4NSw0MjAuODMzLDIzMi4yN3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ0Ni4xMDQsMTU1LjAyM2MtOS4yNjYtMTYuMDQ5LTI2LjUzMy0yNi4wMTktNDUuMDY0LTI2LjAxOXMtMzUuNzk5LDkuOTctNDUuMDY0LDI2LjAxOQ0KCQkJYy0yLjc2Miw0Ljc4My0xLjEyMywxMC44OTgsMy42NiwxMy42NmM0Ljc4NSwyLjc2MSwxMC45LDEuMTIzLDEzLjY2LTMuNjZjNS43MDQtOS44ODEsMTYuMzM1LTE2LjAxOSwyNy43NDQtMTYuMDE5DQoJCQlzMjIuMDQsNi4xMzgsMjcuNzQ0LDE2LjAxOWMxLjg1MywzLjIwOCw1LjIxMyw1LjAwMiw4LjY3LDUuMDAyYzEuNjk2LDAsMy40MTUtMC40MzMsNC45OS0xLjM0Mg0KCQkJQzQ0Ny4yMjcsMTY1LjkyMSw0NDguODY2LDE1OS44MDYsNDQ2LjEwNCwxNTUuMDIzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjk3LjYzNyw5OS42MzZjLTE2LjA1LTkuMjY3LTM1Ljk4OC05LjI2NS01Mi4wMzYsMGMtNC43ODMsMi43NjItNi40MjIsOC44NzctMy42NiwxMy42Ng0KCQkJYzIuNzYyLDQuNzgyLDguODc1LDYuNDIzLDEzLjY2LDMuNjZjOS44NzktNS43MDQsMjIuMTU1LTUuNzA0LDMyLjAzNiwwYzkuODgyLDUuNzA2LDE2LjAxOSwxNi4zMzcsMTYuMDE5LDI3Ljc0NQ0KCQkJYzAsNS41MjIsNC40NzgsMTAsMTAsMTBjNS41MjIsMCwxMC00LjQ3OCwxMC0xMEMzMjMuNjU2LDEyNi4xNzEsMzEzLjY4NiwxMDguOTAzLDI5Ny42MzcsOTkuNjM2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzYzLjE5LDIyNi45MDZjLTMuOTA3LTMuOTA1LTEwLjIzNy0zLjkwNS0xNC4xNDMsMGMtOC4wNjUsOC4wNjctMTkuOTI3LDExLjI0Ni0zMC45NDMsOC4yOTINCgkJCWMtMTEuMDIxLTIuOTUzLTE5LjcwMS0xMS42MzQtMjIuNjU0LTIyLjY1M2MtMS40MjktNS4zMzQtNi45MS04LjQ5OS0xMi4yNDgtNy4wN2MtNS4zMzQsMS40My04LjUsNi45MTMtNy4wNywxMi4yNDgNCgkJCWM0Ljc5NywxNy44OTgsMTguODk2LDMxLjk5NywzNi43OTYsMzYuNzk0YzQuNDIxLDEuMTg1LDguOTI2LDEuNzYyLDEzLjM5OSwxLjc2MmMxMy42NCwwLDI2Ljk5Ni01LjM2MywzNi44NjMtMTUuMjMNCgkJCUMzNjcuMDk1LDIzNy4xNDQsMzY3LjA5NSwyMzAuODEyLDM2My4xOSwyMjYuOTA2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMTMzLjM4OSwzMDEuMjU4aC0wLjAwMWMtNS41MjIsMC0xMCw0LjQ3Ny0xMCw5Ljk5OWMtMC4wMDEsMTEuNDA5LTYuMTM5LDIyLjA0LTE2LjAxOCwyNy43NDUNCgkJCWMtOS44ODEsNS43MDQtMjIuMTU1LDUuNzA1LTMyLjAzNiwwYy00Ljc4NC0yLjc2Mi0xMC44OTktMS4xMjItMTMuNjYsMy42NmMtMi43NjIsNC43ODMtMS4xMjMsMTAuODk4LDMuNjYsMTMuNjYNCgkJCWM4LjAyNCw0LjYzMywxNy4wMjEsNi45NDksMjYuMDE4LDYuOTQ5czE3Ljk5NC0yLjMxNiwyNi4wMTktNi45NDljMTYuMDQ4LTkuMjY3LDI2LjAxOC0yNi41MzMsMjYuMDE4LTQ1LjA2NA0KCQkJQzE0My4zODgsMzA1LjczNiwxMzguOTExLDMwMS4yNTgsMTMzLjM4OSwzMDEuMjU4eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjM4LjcyLDQxNS42MjVjLTEzLjEwNC0xMy4xMDMtMzIuMzYxLTE4LjI2My01MC4yNjItMTMuNDY4Yy0xNy45LDQuNzk2LTMyLDE4Ljg5NS0zNi43OTYsMzYuNzk2DQoJCQljLTEuNDMsNS4zMzUsMS43MzYsMTAuODE3LDcuMDcxLDEyLjI0N2MwLjg2NywwLjIzMywxLjczNywwLjM0NCwyLjU5NCwwLjM0M2M0LjQxNSwwLDguNDU2LTIuOTQ2LDkuNjUzLTcuNDE0DQoJCQljMi45NTMtMTEuMDIxLDExLjYzMy0xOS43MDEsMjIuNjUzLTIyLjY1M2MxMS4wMjEtMi45NTIsMjIuODc3LDAuMjI1LDMwLjk0NCw4LjI5MmMzLjkwNiwzLjkwNCwxMC4yMzYsMy45MDQsMTQuMTQzLDANCgkJCUMyNDIuNjI1LDQyNS44NjMsMjQyLjYyNSw0MTkuNTMxLDIzOC43Miw0MTUuNjI1eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjkxLjk3NywzNS4yNDhjLTAuMjQ2LTAuMDM5LTAuNDk2LTAuMDc4LTAuNzQ4LTAuMTE1Yy01LjQ2OC0wLjgwMy0xMC41NDIsMi45ODMtMTEuMzQyLDguNDQ3DQoJCQljLTAuNzk5LDUuNDY1LDIuOTgzLDEwLjU0Myw4LjQ0OCwxMS4zNDJsMC40NzgsMC4wNzRjMC41MzYsMC4wODYsMS4wNjgsMC4xMjgsMS41OTUsMC4xMjhjNC44MjUsMCw5LjA3My0zLjUwMyw5Ljg2MS04LjQyDQoJCQlDMzAxLjE0Myw0MS4yNTEsMjk3LjQzLDM2LjEyMSwyOTEuOTc3LDM1LjI0OHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTg0Ljk5OSwyNzAuMzA4Yy0xLjk1LTUuMTY2LTcuNzE5LTcuNzc1LTEyLjg4OC01LjgyM2MtMC4yNDksMC4wOTQtMC41LDAuMTkxLTAuNzUyLDAuMjkyDQoJCQljLTUuMTMsMi4wNDctNy42MjksNy44NjQtNS41ODIsMTIuOTk0YzEuNTYyLDMuOTE0LDUuMzIsNi4yOTcsOS4yOTIsNi4yOTdjMS4yMzMsMCwyLjQ4Ny0wLjIzLDMuNzAzLTAuNzE1bDAuNDA0LTAuMTU3DQoJCQlDODQuMzQzLDI4MS4yNDUsODYuOTUsMjc1LjQ3NSw4NC45OTksMjcwLjMwOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                </div>

                <div class="px-4">
                    <span class="font-sans text-xs font-medium text-gray-700 uppercase md:text-sm">Kultúra</span>
                </div>
            </div>
        </div>
    </div>
    <!--footer -->
    @include('fimeszfooter')
</div>
</body>
</html>
