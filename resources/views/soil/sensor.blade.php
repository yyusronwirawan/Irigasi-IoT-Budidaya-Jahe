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

    <div class="max-w-full bg-white p-3 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <div class="flex flex-col justify-center">
            <div class="flex justify-between items-center mb-4">
                <div class="ml-2 flex flex-col justify-center items-start">
                    <h1 class="text-2xl font-extrabold text-[#353535]">Sensor 1</h1>
                    <p><small class="text-[#A3A4A8]">Monitoring tanaman menggunakan sensor.</small>
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M12 5.75V18.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M18.25 12L5.75 12"></path>
                            </svg>
                        </a>
                    </div>
                @endif
            </div>

            <div class="ml-2 text-start">
                <form action="/admin/soil/create-block" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Block</label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="ds-btn ds-btn-sm ds-btn-primary flex border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE] mt-4">Create
                        block</button>
                </form>
            </div>
        </div>

        <div class="mt-5">
            <table class="table-auto border-none text-xs md:text-[14px] w-full">
                <thead>
                    <tr class="border-t-2">
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">asd</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b-2">
                        <td class="text-center text-[#353535] font-semibold py-2">asd</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
