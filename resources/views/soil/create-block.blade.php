@extends('layouts.main')

@section('container')
    <div class="flex flex-col text-start">
        <div class="w-full flex justify-center items-center mt-4 mb-5 md:mb-7">
            <div class="w-full flex justify-between items-center">
                <div class="flex justify-center items-center">
                    <!-- Toggler -->
                    <button data-te-sidenav-toggle-ref data-te-target="#sidenav-1"
                        class="block ds-btn ds-btn-sm ds-btn-accent border-none mr-4 px-2.5 text-gray-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 xl:hidden"
                        aria-controls="#sidenav-1" aria-haspopup="true">
                        <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>

                    <!-- Judul Section -->
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Create New Block</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-white p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <form action="/admin/soil/create-block" method="post">
            @csrf
            <div class="mb-4">
                <div class="flex flex-col justify-center items-start">
                    <label for="block" class="text-[#353535] font-semibold">Block</label>
                    <input type="text" placeholder="Type block" name="block" id="block" value="{{ old('block') }}"
                        autofocus required
                        class="ds-input ds-input-bordered bg-white w-full max-w-full block text-[#353535] mt-1" />
                </div>
                @error('block')
                    <small class="text-[#FF5789] mt-2 flex">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit"
                class="ds-btn ds-btn-sm ds-btn-primary flex border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE] mt-4">Create
                block</button>
        </form>
    </div>
@endsection
