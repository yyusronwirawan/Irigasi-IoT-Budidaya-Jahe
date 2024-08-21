import React from 'react'
import MenuItem from './MenuItem';
import 'flowbite';

export default function MenuList({user, url, location}) {
    return (
        <div>
            <div className="h-full px-3 overflow-y-auto bg-primary">
                <ul className="space-y-2 font-medium">
                    {!user ? (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/device/guest`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/device/guest"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M5 9C5 6.191 5 4.787 5.674 3.778C5.96591 3.34106 6.34106 2.96591 6.778 2.674C7.787 2 9.19 2 12 2C14.809 2 16.213 2 17.222 2.674C17.6589 2.96591 18.0341 3.34106 18.326 3.778C19 4.787 19 6.19 19 9V15C19 17.809 19 19.213 18.326 20.222C18.034 20.6589 17.6589 21.034 17.222 21.326C16.213 22 14.81 22 12 22C9.191 22 7.787 22 6.778 21.326C6.34109 21.034 5.96595 20.6589 5.674 20.222C5 19.213 5 17.81 5 15V9Z"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                    <path
                                        d="M15 15.5C15 16.2956 14.6839 17.0587 14.1213 17.6213C13.5587 18.1839 12.7956 18.5 12 18.5C11.2044 18.5 10.4413 18.1839 9.87868 17.6213C9.31607 17.0587 9 16.2956 9 15.5C9 14.7044 9.31607 13.9413 9.87868 13.3787C10.4413 12.8161 11.2044 12.5 12 12.5C12.7956 12.5 13.5587 12.8161 14.1213 13.3787C14.6839 13.9413 15 14.7044 15 15.5Z"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                    <path
                                        d="M9 5.5H15"
                                        stroke="white"
                                        strokeWidth="1.5"
                                        strokeLinecap="round"
                                    />
                                    <path
                                        d="M9 10C9.55228 10 10 9.55228 10 9C10 8.44772 9.55228 8 9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M12 10C12.5523 10 13 9.55228 13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9C11 9.55228 11.4477 10 12 10Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M15 10C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8C14.4477 8 14 8.44772 14 9C14 9.55228 14.4477 10 15 10Z"
                                        fill="white"
                                    />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Device</MenuItem.MenuText>
                        </MenuItem>
                    ) : (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/device`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/device"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M5 9C5 6.191 5 4.787 5.674 3.778C5.96591 3.34106 6.34106 2.96591 6.778 2.674C7.787 2 9.19 2 12 2C14.809 2 16.213 2 17.222 2.674C17.6589 2.96591 18.0341 3.34106 18.326 3.778C19 4.787 19 6.19 19 9V15C19 17.809 19 19.213 18.326 20.222C18.034 20.6589 17.6589 21.034 17.222 21.326C16.213 22 14.81 22 12 22C9.191 22 7.787 22 6.778 21.326C6.34109 21.034 5.96595 20.6589 5.674 20.222C5 19.213 5 17.81 5 15V9Z"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                    <path
                                        d="M15 15.5C15 16.2956 14.6839 17.0587 14.1213 17.6213C13.5587 18.1839 12.7956 18.5 12 18.5C11.2044 18.5 10.4413 18.1839 9.87868 17.6213C9.31607 17.0587 9 16.2956 9 15.5C9 14.7044 9.31607 13.9413 9.87868 13.3787C10.4413 12.8161 11.2044 12.5 12 12.5C12.7956 12.5 13.5587 12.8161 14.1213 13.3787C14.6839 13.9413 15 14.7044 15 15.5Z"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                    <path
                                        d="M9 5.5H15"
                                        stroke="white"
                                        strokeWidth="1.5"
                                        strokeLinecap="round"
                                    />
                                    <path
                                        d="M9 10C9.55228 10 10 9.55228 10 9C10 8.44772 9.55228 8 9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M12 10C12.5523 10 13 9.55228 13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9C11 9.55228 11.4477 10 12 10Z"
                                        fill="white"
                                    />
                                    <path
                                        d="M15 10C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8C14.4477 8 14 8.44772 14 9C14 9.55228 14.4477 10 15 10Z"
                                        fill="white"
                                    />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Device</MenuItem.MenuText>
                        </MenuItem>
                    )}

                    {!user ? (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/manual/guest`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/manual/guest"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    className="w-5 h-5 text-white transition duration-75 fill-current"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                                    <path d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252V19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2V8.2Z" />
                                    <path d="M15.58 13.4C14.9174 13.4 14.2697 13.2035 13.7188 12.8354C13.1679 12.4673 12.7385 11.9441 12.485 11.332C12.2314 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9264 6.76437C15.5763 6.63511 16.2498 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.41998 19.25C8.00998 19.25 7.66998 18.91 7.66998 18.5V16.55C7.66998 16.14 8.00998 15.8 8.41998 15.8C8.82998 15.8 9.16998 16.14 9.16998 16.55V18.5C9.16998 18.91 8.83998 19.25 8.41998 19.25ZM8.41998 10.15C8.00998 10.15 7.66998 9.81 7.66998 9.4V5.5C7.66998 5.09 8.00998 4.75 8.41998 4.75C8.82998 4.75 9.16998 5.09 9.16998 5.5V9.4C9.16998 9.81 8.83998 10.15 8.41998 10.15Z" />
                                    <path d="M8.42001 17.302C7.98008 17.302 7.54446 17.2154 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8276 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0765 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6887 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Manual Mode</MenuItem.MenuText>
                        </MenuItem>
                    ) : (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/manual`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/manual"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    className="w-5 h-5 text-white transition duration-75 fill-current"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z" />
                                    <path d="M15.58 19.252C15.17 19.252 14.83 18.912 14.83 18.502V14.602C14.83 14.192 15.17 13.852 15.58 13.852C15.99 13.852 16.33 14.192 16.33 14.602V18.502C16.33 18.912 15.99 19.252 15.58 19.252V19.252ZM15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2V8.2Z" />
                                    <path d="M15.58 13.4C14.9174 13.4 14.2697 13.2035 13.7188 12.8354C13.1679 12.4673 12.7385 11.9441 12.485 11.332C12.2314 10.7199 12.1651 10.0463 12.2944 9.39645C12.4236 8.74661 12.7427 8.1497 13.2112 7.68119C13.6797 7.21269 14.2766 6.89363 14.9264 6.76437C15.5763 6.63511 16.2498 6.70145 16.862 6.955C17.4741 7.20856 17.9973 7.63794 18.3654 8.18884C18.7335 8.73974 18.93 9.38743 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.2C14.56 8.2 13.73 9.03 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.03 16.59 8.2 15.58 8.2ZM8.41998 19.25C8.00998 19.25 7.66998 18.91 7.66998 18.5V16.55C7.66998 16.14 8.00998 15.8 8.41998 15.8C8.82998 15.8 9.16998 16.14 9.16998 16.55V18.5C9.16998 18.91 8.83998 19.25 8.41998 19.25ZM8.41998 10.15C8.00998 10.15 7.66998 9.81 7.66998 9.4V5.5C7.66998 5.09 8.00998 4.75 8.41998 4.75C8.82998 4.75 9.16998 5.09 9.16998 5.5V9.4C9.16998 9.81 8.83998 10.15 8.41998 10.15Z" />
                                    <path d="M8.42001 17.302C7.98008 17.302 7.54446 17.2154 7.13802 17.047C6.73158 16.8786 6.36228 16.6319 6.0512 16.3208C5.74012 16.0097 5.49336 15.6404 5.32501 15.234C5.15666 14.8276 5.07001 14.3919 5.07001 13.952C5.07001 13.5121 5.15666 13.0765 5.32501 12.67C5.49336 12.2636 5.74012 11.8943 6.0512 11.5832C6.36228 11.2721 6.73158 11.0254 7.13802 10.857C7.54446 10.6887 7.98008 10.602 8.42001 10.602C9.30848 10.602 10.1606 10.9549 10.7888 11.5832C11.4171 12.2114 11.77 13.0635 11.77 13.952C11.77 14.8405 11.4171 15.6926 10.7888 16.3208C10.1606 16.9491 9.30848 17.302 8.42001 17.302ZM8.42001 12.102C7.40001 12.102 6.57001 12.932 6.57001 13.952C6.57001 14.972 7.40001 15.802 8.42001 15.802C9.44001 15.802 10.27 14.972 10.27 13.952C10.27 12.932 9.45001 12.102 8.42001 12.102Z" />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Manual Mode</MenuItem.MenuText>
                        </MenuItem>
                    )}

                    {!user ? (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/timer/guest`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/timer/guest"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12C4.75 16.0041 7.99594 19.25 12 19.25Z"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                    <path
                                        d="M12 8V12L14 14"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Timer Mode</MenuItem.MenuText>
                        </MenuItem>
                    ) : (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/timer` ||
                                location == route("edit.timer")
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/timer"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12 19.25C16.0041 19.25 19.25 16.0041 19.25 12C19.25 7.99594 16.0041 4.75 12 4.75C7.99594 4.75 4.75 7.99594 4.75 12C4.75 16.0041 7.99594 19.25 12 19.25Z"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                    <path
                                        d="M12 8V12L14 14"
                                        stroke="white"
                                        strokeWidth="1.5"
                                    />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Timer Mode</MenuItem.MenuText>
                        </MenuItem>
                    )}

                    {!user ? (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/soil/guest`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/soil/guest"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="32"
                                    height="32"
                                    className="w-5 h-5 text-white transition duration-75 fill-current"
                                    viewBox="0 0 32 32"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M24.5 28C23.0753 28.0309 21.6964 27.4957 20.6655 26.5119C19.6346 25.528 19.0357 24.1756 19 22.751C19.021 21.7445 19.3238 20.764 19.874 19.921L23.49 14.538C23.6013 14.3724 23.7517 14.2367 23.9278 14.1428C24.1039 14.049 24.3004 13.9999 24.5 13.9999C24.6996 13.9999 24.8961 14.049 25.0722 14.1428C25.2483 14.2367 25.3987 14.3724 25.51 14.538L29.06 19.815C29.6472 20.6838 29.9734 21.7026 30 22.751C29.9643 24.1756 29.3654 25.528 28.3345 26.5119C27.3036 27.4957 25.9247 28.0309 24.5 28ZM24.5 16.62L21.564 20.987C21.2144 21.5105 21.019 22.1217 21 22.751C21.0668 23.6335 21.4645 24.4583 22.1135 25.0601C22.7625 25.6618 23.6149 25.9962 24.5 25.9962C25.3851 25.9962 26.2375 25.6618 26.8865 25.0601C27.5355 24.4583 27.9332 23.6335 28 22.751C27.9768 22.0805 27.7578 21.4315 27.37 20.884L24.5 16.62Z" />
                                    <path d="M5 14C5.55228 14 6 13.5523 6 13C6 12.4477 5.55228 12 5 12C4.44772 12 4 12.4477 4 13C4 13.5523 4.44772 14 5 14Z" />
                                    <path d="M11 20C11.5523 20 12 19.5523 12 19C12 18.4477 11.5523 18 11 18C10.4477 18 10 18.4477 10 19C10 19.5523 10.4477 20 11 20Z" />
                                    <path d="M15 26C15.5523 26 16 25.5523 16 25C16 24.4477 15.5523 24 15 24C14.4477 24 14 24.4477 14 25C14 25.5523 14.4477 26 15 26Z" />
                                    <path d="M17 16C17.5523 16 18 15.5523 18 15C18 14.4477 17.5523 14 17 14C16.4477 14 16 14.4477 16 15C16 15.5523 16.4477 16 17 16Z" />
                                    <path d="M13 12C13.5523 12 14 11.5523 14 11C14 10.4477 13.5523 10 13 10C12.4477 10 12 10.4477 12 11C12 11.5523 12.4477 12 13 12Z" />
                                    <path d="M27 12C27.5523 12 28 11.5523 28 11C28 10.4477 27.5523 10 27 10C26.4477 10 26 10.4477 26 11C26 11.5523 26.4477 12 27 12Z" />
                                    <path d="M9 28C9.55228 28 10 27.5523 10 27C10 26.4477 9.55228 26 9 26C8.44772 26 8 26.4477 8 27C8 27.5523 8.44772 28 9 28Z" />
                                    <path d="M3 22C3.55228 22 4 21.5523 4 21C4 20.4477 3.55228 20 3 20C2.44772 20 2 20.4477 2 21C2 21.5523 2.44772 22 3 22Z" />
                                    <path d="M2 6H30V8H2V6Z" />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Soil</MenuItem.MenuText>
                        </MenuItem>
                    ) : (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/soil` ||
                                location == `${url}/soil/data`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/soil"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="32"
                                    height="32"
                                    className="w-5 h-5 text-white transition duration-75 fill-current"
                                    viewBox="0 0 32 32"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M24.5 28C23.0753 28.0309 21.6964 27.4957 20.6655 26.5119C19.6346 25.528 19.0357 24.1756 19 22.751C19.021 21.7445 19.3238 20.764 19.874 19.921L23.49 14.538C23.6013 14.3724 23.7517 14.2367 23.9278 14.1428C24.1039 14.049 24.3004 13.9999 24.5 13.9999C24.6996 13.9999 24.8961 14.049 25.0722 14.1428C25.2483 14.2367 25.3987 14.3724 25.51 14.538L29.06 19.815C29.6472 20.6838 29.9734 21.7026 30 22.751C29.9643 24.1756 29.3654 25.528 28.3345 26.5119C27.3036 27.4957 25.9247 28.0309 24.5 28ZM24.5 16.62L21.564 20.987C21.2144 21.5105 21.019 22.1217 21 22.751C21.0668 23.6335 21.4645 24.4583 22.1135 25.0601C22.7625 25.6618 23.6149 25.9962 24.5 25.9962C25.3851 25.9962 26.2375 25.6618 26.8865 25.0601C27.5355 24.4583 27.9332 23.6335 28 22.751C27.9768 22.0805 27.7578 21.4315 27.37 20.884L24.5 16.62Z" />
                                    <path d="M5 14C5.55228 14 6 13.5523 6 13C6 12.4477 5.55228 12 5 12C4.44772 12 4 12.4477 4 13C4 13.5523 4.44772 14 5 14Z" />
                                    <path d="M11 20C11.5523 20 12 19.5523 12 19C12 18.4477 11.5523 18 11 18C10.4477 18 10 18.4477 10 19C10 19.5523 10.4477 20 11 20Z" />
                                    <path d="M15 26C15.5523 26 16 25.5523 16 25C16 24.4477 15.5523 24 15 24C14.4477 24 14 24.4477 14 25C14 25.5523 14.4477 26 15 26Z" />
                                    <path d="M17 16C17.5523 16 18 15.5523 18 15C18 14.4477 17.5523 14 17 14C16.4477 14 16 14.4477 16 15C16 15.5523 16.4477 16 17 16Z" />
                                    <path d="M13 12C13.5523 12 14 11.5523 14 11C14 10.4477 13.5523 10 13 10C12.4477 10 12 10.4477 12 11C12 11.5523 12.4477 12 13 12Z" />
                                    <path d="M27 12C27.5523 12 28 11.5523 28 11C28 10.4477 27.5523 10 27 10C26.4477 10 26 10.4477 26 11C26 11.5523 26.4477 12 27 12Z" />
                                    <path d="M9 28C9.55228 28 10 27.5523 10 27C10 26.4477 9.55228 26 9 26C8.44772 26 8 26.4477 8 27C8 27.5523 8.44772 28 9 28Z" />
                                    <path d="M3 22C3.55228 22 4 21.5523 4 21C4 20.4477 3.55228 20 3 20C2.44772 20 2 20.4477 2 21C2 21.5523 2.44772 22 3 22Z" />
                                    <path d="M2 6H30V8H2V6Z" />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Soil</MenuItem.MenuText>
                        </MenuItem>
                    )}

                    {!user ? (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/weather/guest`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/weather/guest"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke="currentColor"
                                        className="stroke-current"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="1.5"
                                        d="M4.75 14C4.75 15.7949 6.20507 17.25 8 17.25H16C17.7949 17.25 19.25 15.7949 19.25 14C19.25 12.2869 17.9246 10.8834 16.2433 10.759C16.1183 8.5239 14.2663 6.75 12 6.75C9.73368 6.75 7.88168 8.5239 7.75672 10.759C6.07542 10.8834 4.75 12.2869 4.75 14Z"
                                    ></path>
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Weather</MenuItem.MenuText>
                        </MenuItem>
                    ) : (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/weather`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/weather"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke="currentColor"
                                        className="stroke-current"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="1.5"
                                        d="M4.75 14C4.75 15.7949 6.20507 17.25 8 17.25H16C17.7949 17.25 19.25 15.7949 19.25 14C19.25 12.2869 17.9246 10.8834 16.2433 10.759C16.1183 8.5239 14.2663 6.75 12 6.75C9.73368 6.75 7.88168 8.5239 7.75672 10.759C6.07542 10.8834 4.75 12.2869 4.75 14Z"
                                    ></path>
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Weather</MenuItem.MenuText>
                        </MenuItem>
                    )}

                    {!user ? (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/log-alat/guest`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/log-alat/guest"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    className="fill-current"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H14C14.41 1.25 14.75 1.59 14.75 2C14.75 2.41 14.41 2.75 14 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V10C21.25 9.59 21.59 9.25 22 9.25C22.41 9.25 22.75 9.59 22.75 10V15C22.75 20.43 20.43 22.75 15 22.75Z" />
                                    <path d="M22 10.748H18C14.58 10.748 13.25 9.41797 13.25 5.99797V1.99797C13.25 1.69797 13.43 1.41797 13.71 1.30797C13.99 1.18797 14.31 1.25797 14.53 1.46797L22.53 9.46797C22.6343 9.57305 22.7052 9.70659 22.7338 9.85183C22.7624 9.99706 22.7474 10.1475 22.6908 10.2843C22.6342 10.4211 22.5384 10.538 22.4155 10.6205C22.2926 10.703 22.148 10.7474 22 10.748ZM14.75 3.80797V5.99797C14.75 8.57797 15.42 9.24797 18 9.24797H20.19L14.75 3.80797Z" />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Log Alat</MenuItem.MenuText>
                        </MenuItem>
                    ) : (
                        <MenuItem
                            className={`w-full flex items-center p-2 text-white rounded-lg ${
                                location == `${url}/log-alat`
                                    ? "bg-primary-hover"
                                    : ""
                            } hover:bg-primary-hover dark:hover:bg-gray-700 group`}
                            menuLink="/log-alat"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    className="fill-current"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H14C14.41 1.25 14.75 1.59 14.75 2C14.75 2.41 14.41 2.75 14 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V10C21.25 9.59 21.59 9.25 22 9.25C22.41 9.25 22.75 9.59 22.75 10V15C22.75 20.43 20.43 22.75 15 22.75Z" />
                                    <path d="M22 10.748H18C14.58 10.748 13.25 9.41797 13.25 5.99797V1.99797C13.25 1.69797 13.43 1.41797 13.71 1.30797C13.99 1.18797 14.31 1.25797 14.53 1.46797L22.53 9.46797C22.6343 9.57305 22.7052 9.70659 22.7338 9.85183C22.7624 9.99706 22.7474 10.1475 22.6908 10.2843C22.6342 10.4211 22.5384 10.538 22.4155 10.6205C22.2926 10.703 22.148 10.7474 22 10.748ZM14.75 3.80797V5.99797C14.75 8.57797 15.42 9.24797 18 9.24797H20.19L14.75 3.80797Z" />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Log Alat</MenuItem.MenuText>
                        </MenuItem>
                    )}

                    {!user ? (
                        <MenuItem
                            className="w-full flex items-center p-2 text-white rounded-lg hover:bg-primary-hover dark:hover:bg-gray-700 group"
                            menuLink="/login"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    className="fill-current"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M12 21V19H19V5H12V3H19C19.55 3 20.021 3.196 20.413 3.588C20.805 3.98 21.0007 4.45067 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.0217 20.805 19.5507 21.0007 19 21H12ZM10 17L8.625 15.55L11.175 13H3V11H11.175L8.625 8.45L10 7L15 12L10 17Z" />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Login</MenuItem.MenuText>
                        </MenuItem>
                    ) : (
                        <MenuItem
                            className="w-full flex items-center p-2 text-white rounded-lg hover:bg-primary-hover dark:hover:bg-gray-700 group"
                            menuLink={route("logout")}
                            method="post"
                        >
                            <MenuItem.MenuIcon>
                                <svg
                                    width="24"
                                    height="24"
                                    className="stroke-current"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M15.75 8.75L19.25 12L15.75 15.25"
                                        strokeWidth="1.5"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                    />
                                    <path
                                        d="M19 12H10.75"
                                        strokeWidth="1.5"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                    />
                                    <path
                                        d="M15.25 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H15.25"
                                        strokeWidth="1.5"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                    />
                                </svg>
                            </MenuItem.MenuIcon>
                            <MenuItem.MenuText>Logout</MenuItem.MenuText>
                        </MenuItem>
                    )}
                </ul>
            </div>
        </div>
    );
}
