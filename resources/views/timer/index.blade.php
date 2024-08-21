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
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Timer</h1>
                </div>
            </div>
        </div>
        {{-- Top Part End --}}

        @include('partials.alert')
    </div>

    {{-- Table --}}
    <div class="w-full bg-white p-3 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <div class="flex items-center justify-between">
            <div class="ml-2 flex flex-col justify-center items-start">
                <h1 class="text-2xl font-extrabold text-[#353535]">Timer Setting Lists</h1>
                <p><span class="font-bold text-[#353535]">{{ $schedules->count() }} total,</span> <small
                        class="text-[#A3A4A8]">proceed
                        to resolve them</small>
                </p>
            </div>

            @if (auth()->user()->role == 'admin')
                <div class="mr-2">
                    <a href="/admin/timer/create"
                        class="ds-btn ds-btn-sm ds-btn-primary border-none bg-[#AACA77] hover:bg-[#97bb60] text-[#353535] hover:text-[#EEEEEE]">New
                        setting</a>
                </div>
            @endif
        </div>

        <div class="mt-5">
            <table class="table-auto border-none text-xs md:text-[14px] w-full">
                <thead>
                    <tr class="border-t-2">
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Device</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Hari</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No. Jadwal</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Waktu Mulai
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Solenoid</th>
                        </th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Durasi</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Status</th>
                        @if (auth()->user()->role == 'admin')
                            <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if ($schedules->count())
                        @foreach ($schedules as $schedule)
                            <tr class="border-b-2">
                                <td class="text-center text-[#353535] font-semibold py-2">{{ $loop->iteration }}
                                </td>
                                <td class="text-center text-[#353535] py-2">{{ $schedule->device->name }}
                                </td>
                                <td class="text-center text-[#353535] py-2">{{ $schedule->hari }}
                                </td>
                                <td class="text-center text-[#353535] py-2">{{ $schedule->noJadwal }}
                                </td>
                                <td class="text-center text-[#353535] py-2">
                                    {{ "$schedule->jam : $schedule->menit WIB" }}
                                </td>
                                <td class="text-center text-[#353535] font-semibold py-2">
                                    <div class="flex justify-center items-center gap-2">
                                        @if ($schedule->sol_1 == 1)
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#b3d086]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#f5f8ed] bg-[#97bc5f]">
                                                    1
                                                </span>
                                                <p>
                                                    ON </p>
                                            </div>
                                        @else
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#fda4a6]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#fef2f2] bg-[#fa6f72]">
                                                    1
                                                </span>
                                                <p>
                                                    OFF </p>
                                            </div>
                                        @endif

                                        @if ($schedule->sol_2 == 1)
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#b3d086]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#f5f8ed] bg-[#97bc5f]">
                                                    2
                                                </span>
                                                <p>
                                                    ON </p>
                                            </div>
                                        @else
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#fda4a6]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#fef2f2] bg-[#fa6f72]">
                                                    2
                                                </span>
                                                <p>
                                                    OFF </p>
                                            </div>
                                        @endif

                                        @if ($schedule->sol_3 == 1)
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#b3d086]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#f5f8ed] bg-[#97bc5f]">
                                                    3
                                                </span>
                                                <p>
                                                    ON </p>
                                            </div>
                                        @else
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#fda4a6]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#fef2f2] bg-[#fa6f72]">
                                                    3
                                                </span>
                                                <p>
                                                    OFF </p>
                                            </div>
                                        @endif

                                        @if ($schedule->sol_4 == 1)
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#b3d086]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#f5f8ed] bg-[#97bc5f]">
                                                    4
                                                </span>
                                                <p>
                                                    ON </p>
                                            </div>
                                        @else
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-16 h-7 rounded-full bg-[#fda4a6]">
                                                <span class="text-xs rounded-full px-2 mr-1 text-[#fef2f2] bg-[#fa6f72]">
                                                    4
                                                </span>
                                                <p>
                                                    OFF </p>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center text-[#353535] py-2">
                                    {{ "$schedule->durasiMenit min $schedule->durasiDetik sec" }}
                                </td>
                                <td class="text-center text-[#353535] font-semibold py-2">
                                    <div class="flex justify-center items-center">
                                        @if ($schedule->status == 1)
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-20 h-7 rounded-full bg-[#b3d086]">
                                                <span class="mr-1 text-[#f5f8ed] stroke-current">
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
                                                <p>
                                                    ON </p>
                                            </div>
                                        @else
                                            <div
                                                class="flex justify-center items-center border-none my-1 w-20 h-7 rounded-full bg-[#fda4a6]">
                                                <span class="mr-1 text-[#fef2f2] stroke-current">
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 9V12.75M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12ZM12 15.75H12.008V15.758H12V15.75Z"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </span>
                                                <p>
                                                    OFF </p>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                @if (auth()->user()->role == 'admin')
                                    <td class="text-center">
                                        <div class="flex justify-center items-center">
                                            <div class="flex">
                                                {{-- Update --}}
                                                <div
                                                    class="flex justify-center items-center p-1 border-none rounded-md bg-[#b2ede5] mr-2">
                                                    <a href="/admin/timer/edit/{{ $schedule->device->id }}/{{ $schedule->id }}"
                                                        class="stroke-current text-[#01875d]">
                                                        <svg width="24" height="24" fill="none"
                                                            viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z">
                                                            </path>
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                d="M19.25 19.25H13.75"></path>
                                                        </svg>
                                                    </a>
                                                </div>

                                                {{-- Delete --}}
                                                <div
                                                    class="flex justify-center items-center p-1 border-none rounded-md bg-[#ffd6ed]">
                                                    <form action="/admin/timer/{{ $schedule->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="stroke-current text-[#bf3056]"
                                                            onclick="return confirm('Are you sure ?')">
                                                            <svg width="24" height="24" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="1.5"
                                                                    d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75">
                                                                </path>
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="1.5"
                                                                    d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5">
                                                                </path>
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="1.5"
                                                                    d="M5 7.75H19">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <td colspan="9" class="text-center p-2 border-b-2">
                            <p class="text-center text-lg">No data found.</p>
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
