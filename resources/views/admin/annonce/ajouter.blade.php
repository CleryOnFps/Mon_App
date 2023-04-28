@extends('layouts.admin')



@section('main')
    <form action="{{route('admin.annonce.store')}}" method='post' enctype="multipart/form-data">


        @csrf


        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="fichier">Upload file</label>
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            aria-describedby="file_input_help" name="image" type="file">




        

            <div class="mb-6">
                <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre</label>
                <input type="text" name="titre"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>





        <div class="mb-6">

            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description </label>
            <textarea name="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment..."></textarea>



            




        </div>
        <div class="mb-6">
            <label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
            <input type="text" name="prix"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>


            





        <label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selectioner une Categorie</label>
        <select name="categorie"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>United States</option>
            <option>Canada</option>
            <option>France</option>
            <option>Germany</option>
        </select>


        </div>
        <button type="submit"
            class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter une annonce </button>








    </form>





    </form>
@endsection
