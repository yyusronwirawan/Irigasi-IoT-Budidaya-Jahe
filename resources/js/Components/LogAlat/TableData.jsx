const TableData = ({ children }) => {
    return (
        <div className="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table className="border-collapse w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                {children}
            </table>
        </div>
    );
};

const SortedTitle = ({ children }) => {
    return (
        <div className="flex items-center">
            {children}
            <a href="#">
                <svg
                    className="w-3 h-3 ms-1.5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg>
            </a>
        </div>
    );
};

const TableHead = ({ children }) => {
    return (
        <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>{children}</tr>
        </thead>
    );
};

const TableHeadTitle = ({ children }) => {
    return (
        <th scope="col" className="px-6 py-3">
            {children}
        </th>
    );
};

const TableBody = ({ children }) => {
    return <tbody>{children}</tbody>;
};

const TableBodyRow = ({ children }) => {
    return <tr>{children}</tr>;
};

const TableBodyData = ({ children }) => {
    return (
        <td className="px-6 py-4">
            <div className="flex flex-wrap gap-y-5 md:gap-x-2">{children}</div>
        </td>
    );
};

TableData.SortedTitle = SortedTitle;
TableData.TableHead = TableHead;
TableData.TableHeadTitle = TableHeadTitle;
TableData.TableBody = TableBody;
TableData.TableBodyRow = TableBodyRow;
TableData.TableBodyData = TableBodyData;

export default TableData;
