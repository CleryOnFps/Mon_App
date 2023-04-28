@extends('layouts.admin')



@section('main')


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    supp.
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($annonces as $itemAnnonce)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$itemAnnonce->name}}
                </th>
                <td class="px-6 py-4">
                    {{$itemAnnonce->categorie_id}}
                </td>
                <td class="px-6 py-4">
                    {{$itemAnnonce->user_id}}
                </td>
                <td class="px-6 py-4">
                    {{$itemAnnonce->price}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('admin.annonce.delete', ['id'=> $itemAnnonce->id])}}">Supprimer</a>    
                </td>
            </tr>  
            @empty
                
            @endforelse
        
            
           
        </tbody>
    </table>
</div>



@endsection