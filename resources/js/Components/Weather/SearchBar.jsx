import { router } from "@inertiajs/react";
import { useState } from "react";

const SearchBar = () => {
    const [search, setSearch] = useState("");

    const handleSearch = () => {
        const data = {
            search,
        };
        router.get(route("index.weather"), data);
    };

    return (
        <div className="mb-4">
            <label
                htmlFor="search"
                className="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
            >
                Search
            </label>
            <div className="relative">
                <div className="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg
                        className="w-4 h-4 text-gray-500 dark:text-gray-400"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 20 20"
                    >
                        <path
                            stroke="currentColor"
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                        />
                    </svg>
                </div>
                <input
                    type="text"
                    id="search"
                    name="search"
                    value={search}
                    onChange={(search) => {
                        setSearch(search.target.value);
                    }}
                    className="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-focus focus:border-primary-focus"
                    placeholder="Cari berdasarkan tanggal"
                />
                <button
                    onClick={() => handleSearch()}
                    className="text-white absolute end-2.5 bottom-2.5 bg-primary hover:bg-primary-hover focus:ring-4 focus:outline-none focus:ring-primary-focus font-medium rounded-lg text-sm px-4 py-2"
                >
                    Cari
                </button>
            </div>
        </div>
    );
};
export default SearchBar;
