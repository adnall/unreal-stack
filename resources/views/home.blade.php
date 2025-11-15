@extends('components.layout')

@section('title', 'Unreal Stack')

@section('content')
    <main class="flex flex-col gap-5 h-screen items-center justify-center">
        <a href="#" class="btn">
            Get Started @icon('arrow-right')
        </a>

        <x-counter />
    </main>
@endsection()
