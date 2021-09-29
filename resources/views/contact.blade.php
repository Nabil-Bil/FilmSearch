@extends('layouts.app')
@section('title')
    Contact Us
@endsection

@section('body')
<section class="flex justify-center mt-10">
<form action="" method="POST" class="flex flex-col items-center border-2 border-blue-500 border-solid rounded-xl w-max px-52 py-10 font-bold text-2xl justify-between my-5">
    <label for="name" class="flex flex-col w-96 my-4">Name : <input type="text" name="name" id="name" class="px-2 rounded-full h-10" placeholder="Name"></label>
    <label for="email" class="flex flex-col w-96 my-4">Email : <input type="email" name="email" id="email" class="px-2 rounded-full h-10" placeholder="Email"></label>
    <label for="message" class="flex flex-col w-96 my-4">Message : <textarea name="message" id="message" class="resize-none h-36 rounded-xl px-2" placeholder="Message ..."></textarea></label>
    <label for="submit" class="my-4"><input type="submit" value="Send" class="cursor-pointer px-24 py-2 bg-blue-600 text-white rounded-full"></label>
</form>
</section>


@endsection
