import { Link } from "@inertiajs/react";

const Paginator = ({ meta }) => {
    const prev = meta.links[0].url;
    const current = meta.current_page;
    const next = meta.links[meta.links.length - 1].url;

    return (
        <div className="flex flex-col items-center">
            <span className="text-sm text-gray-700 dark:text-gray-400">
                Showing{" "}
                <span className="font-semibold text-gray-900 dark:text-white">
                    {current}
                </span>{" "}
                to{" "}
                <span className="font-semibold text-gray-900 dark:text-white">
                    {meta.last_page}
                </span>{" "}
                of{" "}
                <span className="font-semibold text-gray-900 dark:text-white">
                    {meta.total}
                </span>{" "}
                Entries
            </span>
            <div className="inline-flex mt-2 xs:mt-0">
                {meta.links[0].url === null ? (
                    <button
                        type="button"
                        disabled
                        className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-600 rounded-s"
                    >
                        Prev
                    </button>
                ) : (
                    <Link
                        href={prev}
                        className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900"
                    >
                        Prev
                    </Link>
                )}
                {meta.links[meta.links.length - 1].url === null ? (
                    <button
                        type="button"
                        disabled
                        className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-600 border-0 border-s border-gray-700 rounded-e"
                    >
                        Next
                    </button>
                ) : (
                    <Link
                        href={next}
                        className="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                        Next
                    </Link>
                )}
            </div>
        </div>
    );
};
export default Paginator;
