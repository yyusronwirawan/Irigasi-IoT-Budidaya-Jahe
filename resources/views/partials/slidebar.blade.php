<!--Main Navigation-->
<header>
    <!-- Sidenav -->
    <nav id="sidenav-1"
        class="fixed left-0 top-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-[#434738] shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800 xl:data-[te-sidenav-hidden='false']:translate-x-0"
        data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-mode-breakpoint-over="0"
        data-te-sidenav-mode-breakpoint-side="xl" data-te-sidenav-content="#content" data-te-sidenav-accordion="true">
        <a class="flex items-center justify-center py-3 outline-none" href="#!" data-te-ripple-init
            data-te-ripple-color="primary">
            <img src="{{ asset('img/morf-vanili.png') }}" alt="Logo Vanili" class="w-12">
            <span class="ml-2 font-bold text-white text-[18px] md:text-[20px] 2xl:text-2xl">Bethaponik</span>
        </a>

        <div class="flex justify-center align-items-center">
            <div class="w-[220px] border-t-2 border-[#F7F7F7]"></div>
        </div>

        <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('admin/dashboard') || Request::is('dashboard') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="{{ auth()->user()->role == 'admin' ? '/admin/dashboard' : '/dashboard' }}"
                    data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.75024 19.2502H17.2502C18.3548 19.2502 19.2502 18.3548 19.2502 17.2502V9.75025L12.0002 4.75024L4.75024 9.75025V17.2502C4.75024 18.3548 5.64568 19.2502 6.75024 19.2502Z"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M9.74963 15.7493C9.74963 14.6447 10.6451 13.7493 11.7496 13.7493H12.2496C13.3542 13.7493 14.2496 14.6447 14.2496 15.7493V19.2493H9.74963V15.7493Z"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <span
                        class="font-medium {{ Request::is('admin/dashboard') || Request::is('dashboard') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Dashboard</span>
                </a>
            </li>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('data*') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M7.75 19.25H16.25C17.3546 19.25 18.25 18.3546 18.25 17.25V9L14 4.75H7.75C6.64543 4.75 5.75 5.64543 5.75 6.75V17.25C5.75 18.3546 6.64543 19.25 7.75 19.25Z">
                            </path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M18 9.25H13.75V5"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M9.75 15.25H14.25"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M9.75 12.25H14.25"></path>
                        </svg>

                    </span>
                    <span
                        class="font-medium {{ Request::is('data*') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Log
                        Data</span>
                    <span
                        class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none {{ Request::is('data*') ? '[&>svg]:text-white' : '[&>svg]:text-[#B4B990]' }} group-hover:[&>svg]:text-white dark:[&>svg]:text-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                    data-te-sidenav-collapse-ref>
                    <li class="relative">
                        <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] {{ Request::is('data-manual*') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            href="/data-manual" data-te-sidenav-link-ref>Data Manual</a>
                    </li>
                    <li class="relative">
                        <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-[#B4B990] outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            href="/" data-te-sidenav-link-ref>Data Weather</a>
                    </li>
                </ul>
            </li>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('admin/manual*') || Request::is('manual') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="{{ auth()->user()->role == 'admin' ? '/admin/manual' : '/manual' }}" data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg width="24" height="24" class="fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                            <path
                                d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252V19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2V8.2Z" />
                            <path
                                d="M15.58 13.4C14.9174 13.4 14.2697 13.2035 13.7188 12.8354C13.1679 12.4673 12.7385 11.9441 12.485 11.332C12.2314 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9264 6.76437C15.5763 6.63511 16.2498 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.41998 19.25C8.00998 19.25 7.66998 18.91 7.66998 18.5V16.55C7.66998 16.14 8.00998 15.8 8.41998 15.8C8.82998 15.8 9.16998 16.14 9.16998 16.55V18.5C9.16998 18.91 8.83998 19.25 8.41998 19.25ZM8.41998 10.15C8.00998 10.15 7.66998 9.81 7.66998 9.4V5.5C7.66998 5.09 8.00998 4.75 8.41998 4.75C8.82998 4.75 9.16998 5.09 9.16998 5.5V9.4C9.16998 9.81 8.83998 10.15 8.41998 10.15Z" />
                            <path
                                d="M8.42001 17.302C7.98008 17.302 7.54446 17.2154 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8276 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0765 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6887 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                        </svg>
                    </span>
                    <span
                        class="font-medium {{ Request::is('admin/manual*') || Request::is('manual') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Manual</span>
                </a>
            </li>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('admin/timer*') || Request::is('timer*') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="{{ auth()->user()->role == 'admin' ? '/admin/timer' : '/timer' }}" data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg width="24" height="24" class="stroke-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12C4.75 16.0041 7.99594 19.25 12 19.25Z"
                                stroke-width="1.5" />
                            <path d="M12 8V12L14 14" stroke-width="1.5" />
                        </svg>
                    </span>
                    <span
                        class="font-medium {{ Request::is('admin/timer*') || Request::is('timer*') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Timer</span>
                </a>
            </li>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('soil*') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="{{ auth()->user()->role == 'admin' ? '/admin/soil' : '/soil' }}" data-te-sidenav-link-ref>
                    <span
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
                            <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;"
                                class="cls-1" width="32" height="32" />
                        </svg>
                    </span>
                    <span
                        class="font-medium {{ Request::is('soil*') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Soil</span>
                </a>
            </li>
            <li class="relative py-2">
                <a class="group flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] {{ Request::is('weather*') ? 'text-white' : 'text-[#B4B990]' }} outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    href="/weather" data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" class="stroke-current" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5"
                                d="M4.75 14C4.75 15.7949 6.20507 17.25 8 17.25H16C17.7949 17.25 19.25 15.7949 19.25 14C19.25 12.2869 17.9246 10.8834 16.2433 10.759C16.1183 8.5239 14.2663 6.75 12 6.75C9.73368 6.75 7.88168 8.5239 7.75672 10.759C6.07542 10.8834 4.75 12.2869 4.75 14Z">
                            </path>
                        </svg>
                    </span>
                    <span
                        class="font-medium {{ Request::is('weather*') ? 'text-white' : 'text-[#B4B990]' }} group-hover:text-white text-[14px] 2xl:text-base">Weather</span>
                </a>
            </li>
            <li class="relative py-2">
                <form action="/logout" method="post" href="/logout">
                    @csrf
                    <button type="submit"
                        class="group w-full flex items-center cursor-pointer truncate py-4 pl-7 rounded-[5px] text-[0.875rem] text-[#B4B990] outline-none transition duration-300 ease-linear hover:bg-[#b2b79f] hover:text-white hover:outline-none focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <div class="flex justify-center items-center">
                            <span
                                class="mr-4 [&>svg]:h-[26px] [&>svg]:w-[26px] [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none dark:[&>svg]:fill-gray-300 dark:group-hover:[&>svg]:fill-gray-300 ">
                                <svg width="24" height="24" class="stroke-current" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M15.75 8.75L19.25 12L15.75 15.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M19 12H10.75"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M15.25 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H15.25">
                                    </path>
                                </svg>
                            </span>
                            <p class="font-medium group-hover:text-white text-[14px] 2xl:text-base">Logout</p>
                        </div>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- Sidenav -->
</header>
<!--Main Navigation-->
