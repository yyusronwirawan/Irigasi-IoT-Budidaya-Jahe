@extends('layouts.main')

@section('container')
    <div class="flex flex-col text-start">
        <div class="w-full flex justify-center items-center mt-4 mb-4">
            <div class="w-full flex justify-between items-center">
                <div class="flex justify-center items-center">
                    <!-- Toggler -->
                    <button data-te-sidenav-toggle-ref data-te-target="#sidenav-1"
                        class="block ds-btn ds-btn-sm ds-btn-accent border-none bg-primary hover:bg-hover-primary mr-4 px-2.5 text-gray-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 xl:hidden"
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
                    <h1 class="font-extrabold text-[#353535] text-xl lg:text-[32px]">Manual</h1>
                </div>
            </div>
        </div>
        {{-- Top Part End --}}

        @include('partials.alert')
    </div>

    {{-- Table --}}
    <div class="w-full bg-white p-3 rounded-lg md:rounded-xl shadow-md md:shadow-md">
        <div class="flex items-center justify-between">
            <div class="flex flex-col justify-center items-start">
                <h1 class="text-xl lg:text-2xl font-extrabold text-primary-text text-start">Manual Setting Lists</h1>
                <p class="text-start"><span class="font-bold text-primary-text">{{ $manuals->count() }} total,</span> <small
                        class="text-[#A3A4A8]">proceed
                        to resolve them</small>
                </p>
            </div>

            @if (auth()->user()->role == 'admin')
                <div class="mr-2">
                    <a href="/admin/manual/create"
                        class="text-white bg-primary hover:bg-hover-primary font-medium rounded-xl text-sm px-5 py-2.5 me-2 mb-2">Tambah</a>
                </div>
            @endif
        </div>

        <div id="manual-data-container" class="my-5">
            {{-- Manual Data Mobile Breakpoint Start --}}
            @foreach ($manuals as $manual)
                <div class="flex flex-col items-start md:hidden p-6 bg-white border border-gray-200 rounded-lg shadow mb-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-primary-text">{{ $manual->device }}</h5>
                    <div class="flex items-center mb-2">
                        <p class="font-normal text-start text-primary-text">Pompa :</p>
                        @if ($manual->pompa == 1)
                            <span
                                class="ml-2 px-3 py-2 text-xs font-medium text-center text-white bg-on-button rounded-lg hover:bg-on-hover-button">ON</span>
                        @else
                            <span
                                class="ml-2 px-3 py-2 text-xs font-medium text-center text-white bg-off-button rounded-lg hover:bg-off-hover-button">OFF</span>
                        @endif
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="font-normal text-start text-primary-text">Solenoid :</p>
                        <div class="flex items-center gap-x-2 mt-2">
                            @if ($manual->sol_1 == 1)
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-on-button rounded-lg hover:bg-on-hover-button">1.
                                    ON</span>
                            @else
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-off-button rounded-lg hover:bg-off-hover-button">1.
                                    OFF</span>
                            @endif

                            @if ($manual->sol_2 == 1)
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-on-button rounded-lg hover:bg-on-hover-button">2.
                                    ON</span>
                            @else
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-off-button rounded-lg hover:bg-off-hover-button">2.
                                    OFF</span>
                            @endif

                            @if ($manual->sol_3 == 1)
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-on-button rounded-lg hover:bg-on-hover-button">3.
                                    ON</span>
                            @else
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-off-button rounded-lg hover:bg-off-hover-button">3.
                                    OFF</span>
                            @endif

                            @if ($manual->sol_4 == 1)
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-on-button rounded-lg hover:bg-on-hover-button">4.
                                    ON</span>
                            @else
                                <span
                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-off-button rounded-lg hover:bg-off-hover-button">4.
                                    OFF</span>
                            @endif
                        </div>
                    </div>
                    <div class="w-full flex justify-end items-center gap-x-2 mt-5">
                        {{-- Update --}}
                        <a href="/admin/manual/{{ $manual->id }}/edit"
                            class="px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-hover-primary">Edit</a>

                        {{-- Delete --}}
                        <div
                            class="px-3 py-2 text-sm font-medium text-center text-white bg-red-primary rounded-lg hover:bg-red-hover">
                            <form action="/admin/manual/{{ $manual->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('Are you sure ?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Manual Data Mobile Breakpoint End --}}

            {{-- Table md Breakpoint --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg hidden md:block">
                <table class="border-collapse w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Device
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pompa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Solenoid
                            </th>
                            @if (auth()->user()->role == 'admin')
                                <th scope="col" class="px-6 py-3">
                                    <p class="hidden md:block">
                                        Action
                                    </p>
                                </th>
                            @endif
                            <th scope="col" class="flex md:hidden px-6 py-3">
                                Detail
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($manuals->count())
                            @foreach ($manuals as $manual)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $manual->device }}
                                    </th>
                                    <td class="px-6 py-4">
                                        @if ($manual->pompa == 1)
                                            <button type="button"
                                                class="text-white bg-[#b3d086] hover:bg-[#97bc5f] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">ON</button>
                                        @else
                                            <button type="button"
                                                class="text-white bg-[#fda4a6] hover:bg-[#fa6f72] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">OFF</button>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($manual->sol_1 == 1)
                                            <button type="button"
                                                class="text-white bg-[#b3d086] hover:bg-[#97bc5f] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">1.
                                                ON
                                            </button>
                                        @else
                                            <button type="button"
                                                class="text-white bg-[#fda4a6] hover:bg-[#fa6f72] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">1.
                                                OFF</button>
                                        @endif

                                        @if ($manual->sol_2 == 1)
                                            <button type="button"
                                                class="text-white bg-[#b3d086] hover:bg-[#97bc5f] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">2.
                                                ON
                                            </button>
                                        @else
                                            <button type="button"
                                                class="text-white bg-[#fda4a6] hover:bg-[#fa6f72] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">2.
                                                OFF</button>
                                        @endif

                                        @if ($manual->sol_3 == 1)
                                            <button type="button"
                                                class="text-white bg-[#b3d086] hover:bg-[#97bc5f] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">3.
                                                ON
                                            </button>
                                        @else
                                            <button type="button"
                                                class="text-white bg-[#fda4a6] hover:bg-[#fa6f72] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">3.
                                                OFF</button>
                                        @endif

                                        @if ($manual->sol_4 == 1)
                                            <button type="button"
                                                class="text-white bg-[#b3d086] hover:bg-[#97bc5f] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">4.
                                                ON
                                            </button>
                                        @else
                                            <button type="button"
                                                class="text-white bg-[#fda4a6] hover:bg-[#fa6f72] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2">4.
                                                OFF</button>
                                        @endif
                                    </td>
                                    @if (auth()->user()->role == 'admin')
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                {{-- Update --}}
                                                <a href="/admin/manual/{{ $manual->id }}/edit"
                                                    class="bg-[#b2ede5] hover:bg-[#70d8ce] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2 text-[#01875d]">
                                                    <svg width="24" height="24" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z">
                                                        </path>
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M19.25 19.25H13.75">
                                                        </path>
                                                    </svg>
                                                </a>

                                                {{-- Delete --}}
                                                <div
                                                    class="bg-[#ffd6ed] hover:bg-[#ffa1d4] font-medium rounded-full text-sm px-3 py-2 text-center me-2 mb-2 text-[#bf3056]">
                                                    <form action="/admin/manual/{{ $manual->id }}" method="post">
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
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <th colspan="5" scope="row"
                                class="px-6 py-4 text-lg font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                No Data Found
                            </th>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
