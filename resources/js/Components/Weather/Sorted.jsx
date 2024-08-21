import { useState } from "react";
import { router } from "@inertiajs/react";

const Sorted = ({user}) => {
    const [sort, setSort] = useState();
    const [kondisi, setKondisi] = useState();

    const handleSort = () => {
        const data = {
            sort,
            kondisi,
        };
        if (!user) {
            router.get(route("index.weather.guest"), data);
        } else {
            router.get(route("index.weather"), data);
        }
        setSort(data.sort);
    };

    return (
        <div className="mb-4 flex flex-wrap items-center gap-2">
            <h2 className="font-semibold">Sortir : </h2>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setSort("asc")}
                name="sort"
                value={sort}
                className="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Terlama
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setSort("desc")}
                name="sort"
                value={sort}
                className="bg-green-100 hover:bg-green-200 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Terbaru
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setKondisi("Berawan")}
                name="kondisi"
                value={kondisi}
                className="bg-indigo-100 hover:bg-indigo-200 text-indigo-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Berawan
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setKondisi("Hujan Ringan")}
                name="kondisi"
                value={kondisi}
                className="bg-yellow-100 text-yellow-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Ringan
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setKondisi("Hujan Sedang")}
                name="kondisi"
                value={kondisi}
                className="bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Sedang
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setKondisi("Hujan Lebat")}
                name="kondisi"
                value={kondisi}
                className="bg-purple-100 text-purple-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Lebat
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setKondisi("Hujan Sangat Lebat")}
                name="kondisi"
                value={kondisi}
                className="bg-pink-100 text-pink-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Sangat Lebat
            </button>

            <button
                onClick={() => handleSort()}
                onMouseDown={() => setKondisi("Hujan Ekstrem")}
                name="kondisi"
                value={kondisi}
                className="bg-red-100 text-red-800 text-sm font-medium px-2.5 py-0.5 rounded"
            >
                Hujan Ekstrem
            </button>
        </div>
    );
};
export default Sorted;
