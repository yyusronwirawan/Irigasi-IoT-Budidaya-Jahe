import { useState } from "react";
import { router } from "@inertiajs/react";

const Sorted = () => {
    const [sort, setSort] = useState();

    const handleSort = () => {
        const data = {
            sort
        };
        router.get(route("indexData.soil"), data);
        setSort(data.sort);
    }

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
        </div>
    );
}
export default Sorted;