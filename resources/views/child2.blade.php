@extends('layouts.parent')

@section('title')

<title>Child 2</title>  

@endsection

@section('content')
<h1 class="text-6xl text-center font-bold text-[#F53003]">Child 2 Page</h1>

<a href="{{ route('books.index') }}">open book index</a>
@endsection