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
            <Block title="Contract" className="mt-5 grow" insideClassName="flex flex-col">
                {/* <div className="text-[1rem]">
                    bright.pakin
                    <br />
                    @hotmail.com
                </div> */}
                <a href="http://github.com/onfirebyte" target="_blank">
                    <p>Github</p>
                </a>
                <a href="https://www.facebook.com/0nfirebyte/" target="_blank">
                    <p>Facebook</p>
                </a>
            </Block>
        </div>
    );
}
