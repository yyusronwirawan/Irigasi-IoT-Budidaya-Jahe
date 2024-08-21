import ApplicationLogo from '@/Components/ApplicationLogo';
import FelovaLogo from '@/Components/FelovaLogo';
import { Link } from '@inertiajs/react';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center px-4 pt-6 sm:pt-2 bg-gray-100 bg-login-bg bg-cover bg-center bg-no-repeat">
            <div className="hidden absolute z-10 top-0 left-0 sm:flex items-center sm:gap-x-2 lg:gap-x-4 p-4">
            </div>

            <div>
                <Link href="/login">
                    {/* <ApplicationLogo className="w-20 h-20 fill-current text-gray-500" /> */}
                    <FelovaLogo className="w-28" />
                </Link>
            </div>

            <div className="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {children}
            </div>

            <div className="sm:hidden bottom-0 flex items-center gap-x-2 lg:gap-x-4 p-4">
            </div>
        </div>
    );
}
