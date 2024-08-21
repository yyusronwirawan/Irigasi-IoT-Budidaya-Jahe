import React from 'react'
import { Link } from "@inertiajs/react";
import 'flowbite';

export default function MenuItem({ children, menuLink, method = "get", className }) {
    return (
        <div>
            <li>
                <Link
                    href={menuLink}
                    as="button"
                    method={method}
                    className={className}
                >
                    {children}
                </Link>
            </li>
        </div>
    );
}

const MenuText = ({children}) => {
    return (
        <div>
            <span className="ms-3">{children}</span>
        </div>
    );
};

const MenuIcon = ({ children }) => {
    return (
        <div>
            {children}
        </div>
    );
};

MenuItem.MenuText = MenuText;
MenuItem.MenuIcon = MenuIcon;