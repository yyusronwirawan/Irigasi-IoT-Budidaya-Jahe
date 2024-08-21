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
                    <h1 class="font-extrabold text-[#353535] text-lg lg:text-[32px]">Log Data Manual Setting</h1>
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
                <h1 class="lg:text-2xl font-extrabold text-[#353535]">Log Data Manual Setting Lists</h1>
                <p><span class="font-bold text-[#353535]">{{ $data_pesan->count() }} total,</span> <small
                        class="text-[#A3A4A8]">proceed
                        to resolve them</small>
                </p>
            </div>
        </div>

        <div class="mt-5">
            <table class="table-auto border-none text-xs md:text-[14px] w-full">
                <thead>
                    <tr class="border-t-2">
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">No</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Pesan</th>
                        <th class="p-2 border-b-2 border-[#EEEEEE] text-slate-700">Waktu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data_pesan->count())
                        @foreach ($data_pesan as $pesan)
                            <tr class="border-b-2">
                                <td class="text-[#353535] font-semibold py-2">{{ $loop->iteration }}
                                </td>
                                <td class="text-[#353535] py-2 font-semibold">{{ $pesan->pesan }}
                                </td>
                                <td class="text-[#353535] font-semibold py-2">
                                    {{ $pesan->created_at }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="5" class="text-center p-2 border-b-2">
                            <p class="text-center text-lg">No data found.</p>
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
