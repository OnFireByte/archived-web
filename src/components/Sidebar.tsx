import Contract from "@/components/Contract";
import Block from "@/components/Block";
import { Pages } from "@/App";
export function Sidebar({
    setPage,
    page: curPage,
}: {
    setPage: React.Dispatch<React.SetStateAction<Pages>>;
    page: Pages;
}) {
    const pages = [Pages.home, Pages.about, Pages.works];

    function capitalize(str: string) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
    return (
        <div className="lg:w-56 flex flex-col">
            <Block title="Navigation" className="grow" titleCenter>
                <div className="flex flex-col justify-items-start">
                    {pages.map((p) => (
                        <button
                            onClick={() => {
                                setPage(p);
                            }}
                            key={p.valueOf()}
                            style={{
                                backgroundColor: curPage === p ? "rgb(248 250 252)" : "transparent",
                                color: curPage === p ? "rgb(30 41 59)" : "rgb(248 250 252)",
                                fontWeight: curPage === p ? "bold" : "normal",
                            }}
                        >
                            {capitalize(p.valueOf())}
                        </button>
                    ))}
                </div>
            </Block>
            <Contract className="hidden md:block"/>
        </div>
    );
}
