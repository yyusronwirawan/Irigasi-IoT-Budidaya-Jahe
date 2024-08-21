import MenuList from "@/Components/Sidebar/MenuList";
import SidebarNew from "@/Components/Sidebar/SidebarNew";
import Paginator from "@/Components/Soil/Paginator";
import SearchBar from "@/Components/Soil/SearchBar";
import Sorted from "@/Components/Soil/Sorted";
import TableData from "@/Components/Soil/TableData";
import { Head, Link } from "@inertiajs/react";
import { useState } from "react";
import { ToastContainer } from "react-toastify";

export default function Data(props) {
    const { title, dataSoil } = props;
    const [search, setSearch] = useState("");
    console.info(dataSoil);

    const myDate = (date) => {
        return new Date(date);
    };
    const formatterTime = new Intl.DateTimeFormat("en-US", {
        hour: "2-digit",
        minute: "2-digit",
        hour12: false,
    });

    return (
        <div>
            <Head title={title} />
            <ToastContainer
                position="top-right"
                autoClose={3000}
                closeOnClick
                hideProgressBar={false}
                newestOnTop={false}
                rtl={false}
                pauseOnFocusLoss={false}
                draggable={false}
                pauseOnHover={false}
                theme="light"
            />

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

            {/* Soil Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex items-center space-x-3">
                                <Link
                                    href={route("index.soil")}
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

                                <div className="flex flex-col justify-center">
                                    <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                        Menu Data Soil Station
                                    </h1>
                                    <p className="text-start">
                                        <span className="text-sm font-bold text-primary-text">
                                            {dataSoil.meta.total > 0
                                                ? dataSoil.meta.total
                                                : "0"}{" "}
                                            data,
                                        </span>{" "}
                                        <small className="text-[#A3A4A8]">
                                            hasil monitoring kualitas tanah
                                        </small>
                                    </p>
                                </div>
                            </div>

                            {props.auth.user && (
                                <a
                                    href={route("export.soil")}
                                    className="flex justify-center items-center gap-x-1 text-white bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg px-4 py-2 text-sm"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        className="fill-current"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path d="M12 16L7 11L8.4 9.55L11 12.15V4H13V12.15L15.6 9.55L17 11L12 16ZM6 20C5.45 20 4.97933 19.8043 4.588 19.413C4.19667 19.0217 4.00067 18.5507 4 18V15H6V18H18V15H20V18C20 18.55 19.8043 19.021 19.413 19.413C19.0217 19.805 18.5507 20.0007 18 20H6Z" />
                                    </svg>
                                    Data
                                </a>
                            )}
                        </div>

                        <div className="my-5">
                            <SearchBar search={search} setSearch={setSearch} />
                            <Sorted />

                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        Waktu
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu 1
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan 1
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu 2
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan 2
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>
                                <TableData.TableBody>
                                    {dataSoil.data.length > 0 ? (
                                        dataSoil.data.map((soil, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {myDate(
                                                        soil.created_at
                                                    ).getMonth() < 10
                                                        ? `0${
                                                              myDate(
                                                                  soil.created_at
                                                              ).getMonth() + 1
                                                          }-`
                                                        : `${
                                                              myDate(
                                                                  soil.created_at
                                                              ).getMonth() + 1
                                                          }`}
                                                    {myDate(
                                                        soil.created_at
                                                    ).getDate() < 10
                                                        ? `0${myDate(
                                                              soil.created_at
                                                          ).getDate()}-`
                                                        : `${myDate(
                                                              soil.created_at
                                                          ).getDate()}-`}
                                                    {myDate(
                                                        soil.created_at
                                                    ).getFullYear()}{" "}
                                                    {formatterTime.format(
                                                        myDate(soil.created_at)
                                                    )}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${soil.temp_1}°C`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${soil.hum_1} %`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${soil.temp_2}°C`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${soil.hum_2} %`}
                                                </TableData.TableBodyData>
                                            </TableData.TableBodyRow>
                                        ))
                                    ) : (
                                        <TableData.TableBodyRow>
                                            <TableData.TableBodyData>
                                                <p className="text-primary-text">
                                                    Data tidak ditemukan
                                                </p>
                                            </TableData.TableBodyData>
                                        </TableData.TableBodyRow>
                                    )}
                                </TableData.TableBody>
                            </TableData>

                            <div className="flex justify-center items-center my-4">
                                <Paginator meta={dataSoil.meta} />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/* Soil Content End */}
        </div>
    );
}
