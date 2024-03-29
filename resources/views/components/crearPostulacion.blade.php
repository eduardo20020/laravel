<div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-">
                <div class="p-6 text-gray-900 flex flex-row px-12">
                    <div class="container">
                    Crea una nueva oferta!
                    <p>{{ Auth::user()->name }} </p>
                    </div>
                    <button class=" bg-green-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"><a href="{{route('crearOferta')}}">crear</a></button>
                </div>
            </div>
        </div>
</div>