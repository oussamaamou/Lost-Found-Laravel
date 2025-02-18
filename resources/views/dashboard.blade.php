<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mes Postes
        </h2>
    </x-slot>

    

    <!-- ///////////////////////////////////////////////////////////////////////////// -->

    <div id="postform" class="hidden z-30 fixed left-[32rem] top-[0rem] flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:pr-4 dark:bg-gray-800 dark:border-gray-700">
            <i id="xmarkcsltion2" class="fa-solid fa-xmark ml-[26rem] text-2xl cursor-pointer mt-[1.2rem] text-black"></i>
            <div class="space-y-6 py-8 px-10">
                <h1 class="text-xl mt-[-2rem] font-bold leading-tight tracking-tight text-stone-700 md:text-2xl dark:text-white">
                    Publier votre Cours 
                </h1>
                <form class="space-y-1" method="POST" enctype="multipart/form-data">
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
                            <label for="type" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Categorie </label>
                            <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Téléphone</option>
                                <option value="2">Document</option>
                            </select>
                        </div>

                        <div>
                            <label for="titre" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Téléphone</label>
                            <input type="text" name="titre" id="titre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                        </div>

                    </div>
                        
                    <div>
                        <label for="titre" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Email</label>
                        <input type="text" name="titre" id="titre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>

                    <div class="mb-5">
                        <label for="date_reservation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'Action</label>
                        <input type="datetime-local" id="date_reservation" name="date_reservation" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>

                    <div>
                        <label for="contenu" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Lieu d'Action</label>
                        <input type="text" id="contenu" name="contenu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
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
            
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <div class="mt-[4rem] ml-[10.5rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://st5.depositphotos.com/17433220/73304/i/450/depositphotos_733041078-stock-photo-silhouette-adult-man-male-avatar.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-orange-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-2xl font-bold text-orange-500 dark:text-white mb-2"></h1>
                        <p class="text-stone-700 font-semibold">Ahmed </p>
                

                        <h2 class="text-xl font-semibold text-orange-500 mb-4  mt-[3rem]">Catégorie</h2>
                        <p class="text-stone-700 font-semibold">Ahmed</p>

                
                        <button class="ml-[5.7rem] mt-[5rem] flex items-center rounded-md border border-orange-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg text-orange-600 hover:text-white hover:bg-orange-800 hover:border-orange-800 focus:text-white focus:bg-orange-800 focus:border-orange-800 active:border-orange-800 active:text-white active:bg-orange-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                            Details
                            
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-1.5">
                                <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                

                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <p class="text-gray-700 font-semibold text-2xl dark:text-gray-300 mb-6"> Ahmed</p>
                        <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg lg:overflow-visible">
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 mt-6">
                        </p>
                    </div>
                </div>

            </div>
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            
                
        </div>
    </div>

    <script>
        const ctnr2 = document.getElementById("postform");
        const xmark2 = document.getElementById("xmarkcsltion2");
        const ajtpost = document.getElementById("ajtpost");

        xmark2?.addEventListener('click', function(){
            ctnr2.classList.add('hidden');
        });


        ajtpost?.addEventListener('click', function(){
            ctnr2.classList.remove('hidden');
        });

    </script>
</x-app-layout>
