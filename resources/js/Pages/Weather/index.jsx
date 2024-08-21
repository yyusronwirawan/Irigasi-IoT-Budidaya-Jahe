import MenuList from "@/Components/Sidebar/MenuList";
import SidebarNew from "@/Components/Sidebar/SidebarNew";
import Paginator from "@/Components/Weather/Paginator";
import SearchBar from "@/Components/Weather/SearchBar";
import Sorted from "@/Components/Weather/Sorted";
import TableData from "@/Components/Weather/TableData";
import { Head } from "@inertiajs/react";
import { ToastContainer } from "react-toastify";

export default function Weather(props) {
    const { title, dataWeather } = props;
    
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

            {/* weather Content Start */}
            <div className="p-2 sm:ml-64">
                <div className="p-1 mt-14">
                    <div className="w-full bg-white p-3">
                        <div className="flex items-center justify-between">
                            <div className="flex flex-col justify-center items-start">
                                <h1 className="text-lg md:text-2xl font-extrabold text-primary-text text-start">
                                    Menu Weather Station
                                </h1>
                                <p className="text-start">
                                    <span className="text-sm font-bold text-primary-text">
                                        {dataWeather.meta.total} data,
                                    </span>{" "}
                                    <small className="text-[#A3A4A8]">
                                        hasil monitoring cuaca
                                    </small>
                                </p>
                            </div>
                            {props.auth.user && (
                                <a
                                    href="/weather/export"
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
                            <SearchBar />
                            <Sorted user={props.auth.user} />

                            {/* Table md Breakpoint Start */}
                            <TableData>
                                <TableData.TableHead>
                                    <TableData.TableHeadTitle>
                                        Waktu
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Curah Hujan
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kondisi
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kecepatan Angin
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Suhu
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Kelembapan
                                    </TableData.TableHeadTitle>
                                    <TableData.TableHeadTitle>
                                        Intensitas Cahaya
                                    </TableData.TableHeadTitle>
                                </TableData.TableHead>

                                <TableData.TableBody>
                                    {dataWeather.data &&
                                    dataWeather.data.length > 0 ? (
                                        dataWeather.data.map((weather, id) => (
                                            <TableData.TableBodyRow key={id}>
                                                <TableData.TableBodyData>
                                                    {myDate(
                                                        weather.created_at
                                                    ).getMonth() < 10
                                                        ? `0${
                                                              myDate(
                                                                  weather.created_at
                                                              ).getMonth() + 1
                                                          }-`
                                                        : `${
                                                              myDate(
                                                                  weather.created_at
                                                              ).getMonth() + 1
                                                          }`}
                                                    {myDate(
                                                        weather.created_at
                                                    ).getDate() < 10
                                                        ? `0${myDate(
                                                              weather.created_at
                                                          ).getDate()}-`
                                                        : `${myDate(
                                                              weather.created_at
                                                          ).getDate()}-`}
                                                    {myDate(
                                                        weather.created_at
                                                    ).getFullYear()}{" "}
                                                    {formatterTime.format(
                                                        myDate(
                                                            weather.created_at
                                                        )
                                                    )}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {weather.curahHujan &&
                                                    weather.curahHujan > 0
                                                        ? `${weather.curahHujan} mm`
                                                        : "-"}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {weather.probabilitas}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.kecepatanAngin} m/s`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.suhuUdara}°C`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.kelembapanUdara}%`}
                                                </TableData.TableBodyData>
                                                <TableData.TableBodyData>
                                                    {`${weather.intensitasCahaya} lux`}
                                                </TableData.TableBodyData>
                                            </TableData.TableBodyRow>
                                        ))
                                    ) : (
                                        <TableData.TableBodyRow>
                                            <TableData.TableBodyData>
                                                <p className="text-red-primary">
                                                    Data tidak ditemukan
                                                </p>
                                            </TableData.TableBodyData>
                                        </TableData.TableBodyRow>
                                    )}
                                </TableData.TableBody>
                            </TableData>

                            <div className="flex justify-center items-center my-4">
                                <Paginator meta={dataWeather.meta} />
                            </div>
                            {/* Table md Breakpoint End */}
                        </div>
                    </div>
                </div>
            </div>
            {/* weather Content End */}
        </div>
    );
}
