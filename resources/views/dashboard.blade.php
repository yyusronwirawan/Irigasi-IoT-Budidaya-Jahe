@extends('layouts.main')

@section('container')
    {{-- Top Part Start --}}
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
                <div class="flex flex-col justify-center items-start">
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Dashboard</h1>
                    <p class="text-secondary text-xs lg:text-base">Good to see you, {{ auth()->user()->name }} !</p>
                </div>
            </div>

            {{-- Date and Profil --}}
            <div class="flex lg:justify-center items-center">
                <p class="lg:mr-[34px] text-[#353535] text-xs lg:text-base">
                    {{ \Carbon\Carbon::now()->format('d F Y') }}
                </p>
                <img src="{{ asset('img/profile.png') }}" class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-full"
                    alt="Profil">
            </div>
        </div>
    </div>
    {{-- Top Part End --}}

    {{-- Last Task Box Start --}}
    <div class="bg-white mb-4 p-3 md:p-6 rounded-lg md:rounded-xl shadow-md md:shadow-md flex flex-col justify-center">
        {{-- Title --}}
        <div class="flex justify-between items-center">
            <div class="flex flex-col justify-center items-start">
                <h1 class="text-lg lg:text-2xl font-extrabold text-[#353535]">Latest Task</h1>
                <p class="text-xs lg:text-base"><span class="font-bold text-[#353535]">{{ $manuals_all->count() }}
                        total,</span>
                    <small class="text-[#A3A4A8] text-xs lg:text-base">proceed
                        to resolve them</small>
                </p>
            </div>

            {{-- Search Bar --}}
            <div class="flex justify-center">
                <form action=""
                    class="hidden lg:flex justify-center items-center w-[100px] lg:w-[360px] lg:h-[52px] border border-[#353535] rounded-2xl">
                    <label for="search">
                        <div class="px-2">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.6667 25.6667L20.6667 20.6667M6.33337 14.6667C6.33337 10.0643 10.0643 6.33334 14.6667 6.33334C19.2691 6.33334 23 10.0643 23 14.6667C23 19.2691 19.2691 23 14.6667 23C10.0643 23 6.33337 19.2691 6.33337 14.6667Z"
                                    stroke="#353535" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </label>
                    <input type="text" name="search" id="search" placeholder="Track data"
                        class="w-full block py-[13px] pl-2 pr-[48px] text-[#353535] bg-white rounded-2xl placeholder:text-secondary focus:outline-none">
                </form>
            </div>

            <div class="flex">
                <div class="flex flex-col items-center mr-2 lg:mr-4">
                    <h1 class="text-lg lg:text-2xl font-extrabold lg:mb-1 text-[#353535]">94</h1>
                    <p class="text-[#A3A4A8] text-xs lg:text-base">Done</p>
                </div>
                <div class="border-l-2 border-slate-100"></div>
                <div class="flex flex-col items-center ml-2 lg:ml-4">
                    <h1 class="text-lg lg:text-2xl font-extrabold lg:mb-1 text-[#353535]">23
                    </h1>
                    <p class="text-[#A3A4A8] text-xs lg:text-base">In Progress</p>
                </div>
            </div>
        </div>
        {{-- Title --}}

        {{-- Table --}}
        <div class="mt-5 w-full">
            <table class="table-auto border-none text-xs md:text-[14px] w-full">
                <thead>
                    <tr class="border-t-2">
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Device</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status Pompa
                        </th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status Selenoid
                        </th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($manuals->count())
                        @foreach ($manuals as $manual)
                            <tr class="border-b-2">
                                <td class="text-center text-[#353535] font-semibold">
                                    {{ $manual->device }}</td>
                                <td class="text-center text-[#353535] font-semibold">
                                    <div class="flex justify-center items-center">
                                        @if ($manual->pompa == 1)
                                            <div
                                                class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-on-button hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                                <span class="hidden lg:block text-[#f5f8ed] stroke-current">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75C16.0041 4.75 19.25 7.99594 19.25 12C19.25 16.0041 16.0041 19.25 12 19.25C7.99594 19.25 4.75 16.0041 4.75 12Z"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.75 12.75L10.1837 13.6744C10.5275 14.407 11.5536 14.4492 11.9564 13.7473L14.25 9.75"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                ON
                                            </div>
                                        @else
                                            <div
                                                class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-off-button hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                                <span class="hidden lg:block text-[#fef2f2] stroke-current">
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 9V12.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12ZM12 15.75H12.008V15.758H12V15.75Z"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </span>
                                                OFF
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td
                                    class="text-center flex justify-center gap-2 items-center py-2 text-[#353535] font-semibold">
                                    @if ($manual->sol_1 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-on-button hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                1
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-off-button hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                1
                                            </span>
                                            OFF
                                        </div>
                                    @endif

                                    @if ($manual->sol_2 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-on-button hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                2
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-off-button hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                2
                                            </span>
                                            OFF
                                        </div>
                                    @endif

                                    @if ($manual->sol_3 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-on-button hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                3
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-off-button hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                3
                                            </span>
                                            OFF
                                        </div>
                                    @endif

                                    @if ($manual->sol_4 == 1)
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-on-button hover:bg-[#97bc5f] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full px-2 hidden lg:block text-[#f5f8ed] bg-[#97bc5f]">
                                                4
                                            </span>
                                            ON
                                        </div>
                                    @else
                                        <div
                                            class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-full text-xs lg:text-[14px] bg-off-button hover:bg-[#fa6f72] cursor-default hover:shadow-md border-none">
                                            <span
                                                class="text-xs rounded-full hidden lg:block px-2 text-[#fef2f2] bg-[#fa6f72]">
                                                4
                                            </span>
                                            OFF
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div
                                        class="ds-btn ds-btn-xs lg:ds-btn-sm ds-btn-success rounded-lg text-xs lg:text-[14px] bg-[#EFFDFF] hover:bg-[#cff7fe] cursor-default hover:shadow-md border-none">
                                        <div class="stroke-current text-[#4F8A90]">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12C4.75 16.0041 7.99594 19.25 12 19.25Z"
                                                    stroke-width="1.5" />
                                                <path d="M12 8V12L14 14" stroke-width="1.5" />
                                            </svg>
                                        </div>
                                        <p class="hidden lg:block text-xs lg:text-[14px] text-[#4F8A90] font-semibold">
                                            In
                                            Progress</p>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="4" class="text-center p-2 border-b-2">
                            <p class="text-center text-lg">No data found.</p>
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        {{-- Table --}}
    </div>
    {{-- Last Task Box Start --}}
@endsection
