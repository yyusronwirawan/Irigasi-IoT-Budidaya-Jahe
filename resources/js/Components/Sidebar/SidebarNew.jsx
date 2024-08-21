"use client";

import { Navbar } from "flowbite-react";
import { Link } from "@inertiajs/react";
import MenuList from "./MenuList";

function SidebarNew({user, url, location}) {
    return (
        <Navbar fluid rounded className="fixed z-50 w-full bg-nav-bg border-b">
            <Navbar.Toggle className="sm:hidden" />
            <Navbar.Brand as={Link} href="/device">
                <img
                    src="/img/logo-felova.png"
                    className="mr-3 h-9"
                    alt="Logo Felova"
                />
                <span className="self-center whitespace-nowrap text-xl font-semibold">
                   Smart Farming
                </span>
            </Navbar.Brand>

            <Navbar.Collapse className="md:hidden">
                <aside className="fixed top-0 left-0 z-0 w-64 h-screen transition-transform bg-primary sm:translate-x-0">
                    <div className="p-4">
                        <Navbar.Toggle className="bg-nav-bg" />
                    </div>
                    <MenuList user={user} url={url} location={location} />
                </aside>
            </Navbar.Collapse>
        </Navbar>
    );
}
export default SidebarNew;
