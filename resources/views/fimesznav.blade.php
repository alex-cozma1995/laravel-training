<div class="bg-green-500 shadow-xl text-gray-700 bg-white body-font pl-40 pr-40 mr-1">
    <div class="flex justify-between p-5 mx-auto md:items-center md:flex-row">
        <a href="{{ route('fimesz') }}">
            <img src="./logo.png" class="w-44 h-24" />
        </a>
        <nav class="flex flex-wrap items-center text-base text-black float-right mt-1">
            <a href="{{ route('alkalmaink') }}" class="flex mr-5 text-white hover:text-green-500 hover:bg-white p-3 rounded-md font-bold">
                Alkalmaink
            </a>
            <a href="{{ route('projektek') }}" class="flex mr-5 text-white hover:text-green-500 hover:bg-white p-3 rounded-md font-bold">
                Projektek
            </a>
            <a href="{{ route('rolunk') }}" class="flex mr-5 text-white hover:text-green-500 hover:bg-white p-3 rounded-md font-bold">
                Rolunk
            </a>
            <a href="{{ route('kontakt') }}" class="flex mr-5 text-white hover:text-green-500 hover:bg-white p-3 rounded-md font-bold">
                Kapcsolat
            </a>
        </nav>
    </div>
</div>
