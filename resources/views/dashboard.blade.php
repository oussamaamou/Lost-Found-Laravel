<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mes Postes
        </h2>
    </x-slot>

    <!-- Lien du Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lien des Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    

    <!-- ///////////////////////////////////////////////////////////////////////////// -->

    <div id="postform" class="hidden z-30 fixed left-[32rem] top-[0rem] flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:pr-4 dark:bg-gray-800 dark:border-gray-700">
            <i id="xmarkcsltion2" class="fa-solid fa-xmark ml-[26rem] text-2xl cursor-pointer mt-[1.2rem] text-black"></i>
            <div class="space-y-6 py-8 px-10">
                <h1 class="text-xl mt-[-2rem] font-bold leading-tight tracking-tight text-stone-700 md:text-2xl dark:text-white">
                    Publier votre Cours 
                </h1>
                <form action="{{route('dashboard.create')}}" class="space-y-1" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <input type="hidden" name="users_id" id="users_id" value="{{ Auth::user()->id }}">

                    <div>
                        <label for="titre" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Titre</label>
                        <input type="text" name="titre" id="titre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Description</label>
                        <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Écrivez votre biographie ici..."></textarea>
                    </div>

                    <div class="grid gap-6 mb-6 md:grid-cols-2">

                        <div>
                            <label for="categorie_id" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Categorie </label>
                            <select id="categorie_id" name="categorie_id" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="telephone" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Téléphone</label>
                            <input type="text" name="telephone" id="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                        </div>

                    </div>
                        
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Email</label>
                        <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>

                    <div class="mb-5">
                        <label for="dateAction" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'Action</label>
                        <input type="datetime-local" id="dateAction" name="dateAction" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>

                    <div>
                        <label for="lieuAction" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Lieu d'Action</label>
                        <input type="text" id="lieuAction" name="lieuAction" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>
                    
                    <button type="submit" class="ml-[7rem] mt-[5rem] w-[8rem] text-white bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Creer</button>
                </form>
            </div>
        </div>
    </div>
        
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    
    <div class="py-12">


        <div class="pl-[20rem] pr-[19rem]">
            <button id="ajtpost" class="w-full rounded-md bg-gradient-to-r from-orange-400 via-orange-600 to-orange-700 hover:bg-gradient-to-br py-4 px-4 font-bold text-center text-xl text-white transition-all shadow-md hover:shadow-lg active:bg-orange-700 hover:bg-orange-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none mb-[2rem]" type="button">
                Publier un Poste <span class="ml-[0.7rem]"><i class="fa-solid fa-paper-plane" style="color: #ffffff;"></i></span>
            </button>
        </div>


        
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">   



        @foreach ($postes as $poste)    
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <div class="mt-[4rem] ml-[10.5rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://st5.depositphotos.com/17433220/73304/i/450/depositphotos_733041078-stock-photo-silhouette-adult-man-male-avatar.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-orange-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-2xl font-bold text-orange-500 dark:text-white mb-2"></h1>
                        <p class="text-stone-700 font-semibold">{{ Auth::user()->name }}</p>
                

                        <h2 class="text-xl font-bold text-orange-500 mb-4  mt-[3rem]">Contact</h2>
                        <p class="text-stone-700 mb-4 text-left font-semibold"> <span class="text-orange-500 font-bold">Email</span> : {{ $poste->email }} </p>
                        <p class="text-stone-700 text-left font-semibold"> <span  class="text-orange-500 font-bold">Téléphone</span> : {{ $poste->telephone }} </p>

                        <div class="grid mt-8 grid-cols-2">
                            <div>
                                <a href="{{route('poste.edit', ['poste' => $poste])}}">
                                <button id="" type="button" class="ml-[0rem] text-white bg-yellow-300 hover:bg-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>

                                </button>
                                </a>
                            </div>
                        
                            <form id="" method="POST" action="{{route('poste.deletePoste', ['poste' => $poste])}}">
                                @csrf

                                <input type="hidden" name="supprimer_cours" value="1">

                                <button class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-red-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>


                                </button>
                            </form>
                        </div>

                    </div>

                    <div class="md:w-2/3 md:pl-8">
                        <p class="text-gray-700 font-semibold text-2xl dark:text-gray-300 mb-6"> {{ $poste->titre }}</p>
                        <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg lg:overflow-visible">
                        <img class="object-fit object-center w-full h-96" src="https://d2u4q3iydaupsp.cloudfront.net/k5GdinclmQaklFxCIZxP3piLQokCg87uXpmu5bs4MjIdbJno9lYsI2gvqJJKb0seEq5mqhstxZCKennqUdTKgdzlULeXRsEKDNVE5JgKvcN3DqcCQneLY1b213iaBNM8" alt="nature image"/>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 mt-6">
                            {{ $poste->description }}
                        </p>
                    </div>
                </div>

                <!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
                @php
                    $comments = \App\Models\Commentaire::where('poste_id', $poste->id)->with('user')->get();
                @endphp

                <div class="w-full relative flex justify-between gap-2">
                    <form action="{{route('dashboard.createComment')}}" method="POST" class="w-full">
                        @csrf

                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="poste_id" value="{{ $poste->id }}">
                        <input type="text" name="contenue"
                            class="w-full py-3 px-5 rounded-lg border border-gray-300 bg-white shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] focus:outline-none text-gray-900 placeholder-gray-400 text-sm font-normal leading-relaxed"
                            placeholder="Write comments here....">
                        <button type="submit" class="absolute right-6 top-[18px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M11.3011 8.69906L8.17808 11.8221M8.62402 12.5909L8.79264 12.8821C10.3882 15.638 11.1859 17.016 12.2575 16.9068C13.3291 16.7977 13.8326 15.2871 14.8397 12.2661L16.2842 7.93238C17.2041 5.17273 17.6641 3.79291 16.9357 3.06455C16.2073 2.33619 14.8275 2.79613 12.0679 3.71601L7.73416 5.16058C4.71311 6.16759 3.20259 6.6711 3.09342 7.7427C2.98425 8.81431 4.36221 9.61207 7.11813 11.2076L7.40938 11.3762C7.79182 11.5976 7.98303 11.7083 8.13747 11.8628C8.29191 12.0172 8.40261 12.2084 8.62402 12.5909Z"
                                    stroke="#111827" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </button>
                    </form>
                
                </div>

                <div>
                    <hr class="h-px w-[50rem] my-4 bg-gray-200 border-0 dark:bg-gray-700">

                    <svg id="morecmnt" class="w-4 h-4 text-orange-700 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 10">
                        <path d="M15.434 1.235A2 2 0 0 0 13.586 0H2.414A2 2 0 0 0 1 3.414L6.586 9a2 2 0 0 0 2.828 0L15 3.414a2 2 0 0 0 .434-2.179Z"/>
                    </svg>
                    <svg id="lesscmnt" class="w-4 h-4 text-orange-700 cursor-pointer hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 16">
                        <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z"/>
                    </svg>
                </div>

                <div id="cmntsction" class="w-full flex-col justify-start items-start gap-8 flex hidden">
                    
                    @if($comments->count() > 0)
                        @foreach ($comments as $comment)
                        <div class="w-full flex-col justify-start items-end gap-5 flex">
                            <div
                                class="w-full p-6 bg-white rounded-2xl border border-gray-200 flex-col justify-start items-start gap-8 flex">
                                <div class="w-full flex-col justify-center items-start gap-3.5 flex">
                                    <div class="w-full justify-between items-center inline-flex">
                                        <div class="justify-start items-center gap-2.5 flex">
                                            <div
                                                class="w-10 h-10 bg-gray-300 rounded-full justify-start items-start gap-2.5 flex">
                                                <img class="rounded-full object-cover" src="https://st5.depositphotos.com/17433220/73304/i/450/depositphotos_733041078-stock-photo-silhouette-adult-man-male-avatar.jpg"
                                                    alt="Lecteur image" />
                                            </div>
                                            <div class="flex-col justify-start items-start gap-1 inline-flex">
                                                <h5 class="text-gray-900 text-sm font-semibold leading-snug">
                                                {{ $comment->user->name }}
                                                </h5>
                                                <h6 class="text-gray-500 text-xs font-normal leading-5">12-02-2025</h6>
                                            </div>
                                        </div>
                                        <div class="w-6 h-6 relative">
                                            <div class="w-full h-fit flex">
                                                <div class="relative w-full">
                                                    <div class="absolute left-0 top-0 py-2.5 px-4 text-gray-300"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-800 text-sm font-normal leading-snug">{{ $comment->contenue }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    
                </div>

                <!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->

            </div>

        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        @endforeach
            
                
        </div>
    </div>

    <script>
        const ctnr2 = document.getElementById("postform");
        const xmark2 = document.getElementById("xmarkcsltion2");
        const ajtpost = document.getElementById("ajtpost");
        const postedit = document.getElementById("postedit");

        xmark2?.addEventListener('click', function(){
            ctnr2.classList.add('hidden');
        });

        ajtpost?.addEventListener('click', function(){
            ctnr2.classList.remove('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
            
            const morecmntButtons = document.querySelectorAll("#morecmnt");
            const lesscmntButtons = document.querySelectorAll("#lesscmnt");
            const cmntSections = document.querySelectorAll("#cmntsction");

            morecmntButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    cmntSections[index].classList.remove('hidden');
                    button.classList.add('hidden'); 
                    lesscmntButtons[index].classList.remove('hidden');
                });
            });

            lesscmntButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    cmntSections[index].classList.add('hidden');
                    button.classList.add('hidden'); 
                    morecmntButtons[index].classList.remove('hidden');
                });
            });
        });

    </script>
</x-app-layout>
