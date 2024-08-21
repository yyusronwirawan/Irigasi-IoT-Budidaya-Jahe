@extends('layouts.main')

@section('container')
    <div class="flex flex-col text-start">
        <div class="w-full flex justify-center items-center mt-4 mb-4">
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
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Soil</h1>
                </div>
            </div>
        </div>
        {{-- Top Part End --}}
    </div>

    <div class="w-full bg-white p-3 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <div class="flex items-center justify-between">
            <div class="ml-2 flex flex-col justify-center items-start">
                <h1 class="text-2xl font-extrabold text-[#353535]">Soil Menu</h1>
                <p><small class="text-[#A3A4A8]">Block tanaman yang
                        akan dipantau.</small>
                </p>
            </div>

            @if (auth()->user()->role == 'admin')
                <div class="mr-2">
                    <a href="/admin/soil/create-block"
                        class="ds-btn ds-btn-sm ds-btn-primary border-none font-bold hidden lg:flex bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE]">Tambah
                        <span>
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M12 5.75V18.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M18.25 12L5.75 12"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="/admin/soil"
                        class="ds-btn ds-btn-sm ds-btn-primary border-none font-bold flex lg:hidden bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE]">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 5.75V18.25"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M18.25 12L5.75 12"></path>
                        </svg>
                    </a>
                </div>
            @endif
        </div>

        <div class="mt-5">
            @foreach ($blocks as $block)
                <a href="/admin/soil/block-{{ strtolower($block->block) }}"
                    class="flex flex-col justify-center text-start bg-white border border-gray-200 rounded-lg shadow max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-3">
                    <div class="flex justify-between items-center p-4 leading-normal">
                        <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">Block
                            {{ $block->block }}</h5>

                        <div
                            class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                            <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg width="800px" height="800px" class="fill-current" viewBox="0 0 32 32" id="Layer_1"
                                data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                        }
                                    </style>
                                </defs>
                                <path
                                    d="M24.5,28A5.385,5.385,0,0,1,19,22.751a5.3837,5.3837,0,0,1,.874-2.8308L23.49,14.5383a1.217,1.217,0,0,1,2.02,0L29.06,19.8154A5.4923,5.4923,0,0,1,30,22.751,5.385,5.385,0,0,1,24.5,28Zm0-11.38-2.9356,4.3672A3.3586,3.3586,0,0,0,21,22.751a3.51,3.51,0,0,0,7,0,3.4356,3.4356,0,0,0-.63-1.867Z"
                                    transform="translate(0 0)" />
                                <circle cx="5" cy="13" r="1" />
                                <circle cx="11" cy="19" r="1" />
                                <circle cx="15" cy="25" r="1" />
                                <circle cx="17" cy="15" r="1" />
                                <circle cx="13" cy="11" r="1" />
                                <circle cx="27" cy="11" r="1" />
                                <circle cx="9" cy="27" r="1" />
                                <circle cx="3" cy="21" r="1" />
                                <rect x="2" y="6" width="28" height="2" />
                                <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1"
                                    width="32" height="32" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex justify-start items-center pl-4 pb-4">
                        @foreach ($block->tanamans as $tanaman)
                            <span
                                class="text-white text-xs bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full px-3 py-2 text-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                ({{ $tanaman->kodeTanaman }})
                                {{ $tanaman->tanaman }}
                            </span>
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
