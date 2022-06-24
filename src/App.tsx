import { Sidebar } from "@/components/Sidebar";
import { useState } from "react";
import About from "@/pages/About";
import Home from "@/pages/Home";

export enum Pages {
    home = "home",
    about = "about",
    works = "works",
}

function App() {
    const [page, setPage] = useState<Pages>(Pages.home);

    const ShowPage = () => {
        switch (page) {
            case Pages.about:
                return <About />;

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
