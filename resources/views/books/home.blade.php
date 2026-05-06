@extends('layouts.parent')


@section('title')
<title>Books Data</title>
@endsection

@section('content')

<div class="max-w-6xl mx-auto mt-10 px-4">
    <h1 class="text-5xl text-center font-bold text-[#F53003] mb-10">
        Books
    </h1>

    <div class="overflow-x-auto bg-white shadow-lg rounded-2xl">
        <table class="min-w-full text-sm text-left text-gray-600">
            
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-6 py-4">Title</th>
                    <th class="px-6 py-4">Description</th>
                    <th class="px-6 py-4">Author</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                @foreach ($books as $book)
                <tr class="hover:bg-gray-50 transition duration-200">
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        {{ $book->title }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $book->description }}
                    </td>

                    <td class="px-6 py-4 text-blue-600 font-medium">
                        {{ $book->author->name }}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection