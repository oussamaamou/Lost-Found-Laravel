   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Page</title>

    <!-- Lien du Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lien des Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

</head>
<body class="bg-orange-300">
    
    
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div id="postedit" class="z-30 fixed left-[32rem] top-[0rem] flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:pr-4 dark:bg-gray-800 dark:border-gray-700">
            <i id="xmarkedit" class="fa-solid fa-xmark ml-[26rem] text-2xl cursor-pointer mt-[1.2rem] text-white"></i>
            <div class="space-y-6 py-8 px-10">
                <h1 class="text-xl mt-[-2rem] font-bold leading-tight tracking-tight text-stone-700 md:text-2xl dark:text-white">
                    Modifier votre Poste 
                </h1>
                <form action="{{route('poste.editPoste', ['poste' => $poste])}}" class="space-y-1" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <input type="hidden" name="users_id" id="users_id" value="{{ Auth::user()->id }}">
                    
                    <div>
                        <label for="titre" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Titre</label>
                        <input value="{{ $poste->titre }}" type="text" name="titre" id="titre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Description</label>
                        <textarea value="{{ $poste->description }}" name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Écrivez votre biographie ici..."></textarea>
                    </div>
                    
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        
                        <div>
                            <label for="categorie_id" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Categorie </label>
                            <select id="categorie_id" name="categorie_id" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                
                                <option value="1">Téléphone</option>
                                <option value="2">Document</option>
                                <option value="3">Accessoire</option>
                                <option value="4">Vêtement</option>
                                
                            </select>
                        </div>
                        
                        <div>
                            <label for="telephone" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Téléphone</label>
                            <input value="{{ $poste->telephone }}" type="text" name="telephone" id="telephone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                        </div>
                        
                    </div>
                        
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Email</label>
                        <input value="{{ $poste->email }}" type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>

                    <div class="mb-5">
                        <label for="dateAction" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'Action</label>
                        <input value="{{ $poste->dateAction }}" type="datetime-local" id="dateAction" name="dateAction" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                    </div>

                    <div>
                        <label for="lieuAction" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Lieu d'Action</label>
                        <input value="{{ $poste->lieuAction }}" type="text" id="lieuAction" name="lieuAction" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>
                    
                    <button type="submit" class="ml-[7rem] mt-[5rem] w-[8rem] text-white bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Modifier</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->
    
    
    
    
    
</body>
</html>    