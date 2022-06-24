import { Sidebar } from "./components/Sidebar";
import { useState } from "react";
import Block from "@/components/Block";
import Profile from "@/pages/Profile";
import Home from "./pages/Home";

export enum Pages {
    home,
    profile,
    works,
}

function App() {
    const [page, setPage] = useState<Pages>(Pages.home);

    const ShowPage = () => {
        switch (page) {
            case Pages.profile:
                return <Profile />;

            default:
                return <Home />;
        }
    };

    return (
        <div className="grid h-screen place-items-center">
            <div className="w-screen flex flex-col h-fit md:flex-row gap-5 p-5">
                <Sidebar setPage={setPage} />
                <ShowPage />
            </div>
        </div>
    );
}

export default App;
