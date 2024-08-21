import { Head, Link } from "@inertiajs/react";
import "/node_modules/flowbite/dist/flowbite.min.js";
import EditForm from "@/Components/Timer/EditForm";
import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import SidebarNew from "@/Components/Sidebar/SidebarNew";
import MenuList from "@/Components/Sidebar/MenuList";

export default function EditTimer(props) {
    const { title, timer, dataDevice } = props;
    const handleNotifUpdate = () => toast.success("Data berhasil diupdate");

    return (
        <div>
            <Head title={title} />

            {/* Sidebar Start */}
            <SidebarNew
                user={props.auth.user}
                location={props.ziggy.location}
                url={props.ziggy.url}
            />
            <aside className="fixed top-0 left-0 z-0 pt-20 w-64 duration-500 hidden sm:block h-screen transition-all bg-primary">
                <MenuList
                    user={props.auth.user}
                    location={props.ziggy.location}
                    url={props.ziggy.url}
                />
            </aside>
            {/* Sidebar End */}

            {/* Manual Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3 rounded-lg md:rounded-xl">
                        <div className="flex items-center justify-between">
                            <div className="w-full flex justify-start items-center space-x-3">
                                <Link
                                    href={route("index.timer")}
                                    as="button"
                                    method="get"
                                    className="px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-primary-hover"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22Z"
                                            stroke="white"
                                            strokeWidth="1.5"
                                            strokeMiterlimit="10"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                        />
                                        <path
                                            d="M13.26 15.53L9.74001 12L13.26 8.46997"
                                            stroke="white"
                                            strokeWidth="1.5"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                        />
                                    </svg>
                                </Link>
                                <div>
                                    <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                        Update Timer Setting
                                    </h1>
                                    <p className="text-start">
                                        <small className="text-[#A3A4A8]">
                                            Edit pengaturan yang diinginkan
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div className="my-4">
                            <EditForm dataDevice={dataDevice} timer={timer} />
                        </div>
                    </div>
                </div>
            </div>
            {/* Manual Content End */}
        </div>
    );
}
