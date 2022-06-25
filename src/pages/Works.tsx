import Block from "@/components/Block";
import { useEffect, useState } from "react";
import ReactMarkdown from "react-markdown";
const Works = () => {
    const [workFile, setWorkFile] = useState("m609osk139.md");

    const workList = [
        { title: "m609 osk139", file: "m609osk139.md" },
        { title: "Covid stat website", file: "covidWeb.md" },
        { title: "Covid Stat Discord Bot", file: "covidBot.md" },
        { title: "Simple Tier List", file: "tierList.md" },
        { title: "Snip Websocket Addon", file: "snip.md" },
    ];
    const [md, setMd] = useState("test");

    useEffect(() => {
        const fetcher = async () => {
            const raw = await fetch(`md/${workFile}`);
            const text = await raw.text();

            setMd(text);
        };
        fetcher();
    }, [workFile]);

    return (
        <div className="flex flex-col md:flex-row gap-5 w-full md:h-[45rem]">
            <Block
                title="Works"
                className="md:w-80 md:h-full border-yellow-500 shrink-0"
                titleClassName="text-yellow-500"
                center
                titleCenter
            >
                <div className="flex md:flex-col gap-3 w-full overflow-scroll scrollbar-hide">
                    {workList.map((w) => (
                        <button
                            onClick={() => {
                                setWorkFile(w.file);
                            }}
                            className="md:w-full text-sm md:text-base"
                            style={{
                                backgroundColor:
                                    workFile === w.file ? "rgb(234 179 8)" : "transparent",
                                color: workFile === w.file ? "rgb(30 41 59)" : "rgb(248 250 252)",
                            }}
                        >
                            {w.title}
                        </button>
                    ))}
                    <a
                        href="https://github.com/OnFireByte?tab=repositories"
                        target="_blank"
                        className="grid place-items-center break-normal"
                    >
                        <button>
                            and more
                            <wbr />
                            ...
                        </button>
                    </a>
                </div>
            </Block>
            {workFile != "" && (
                <Block
                    title="Work's Info"
                    titleClassName="text-yellow-500"
                    className="w-full border-yellow-500"
                >
                    {md != "" ? (
                        <ReactMarkdown
                            children={md}
                            linkTarget="_blank"
                            components={{
                                img: ({ node, ...props }) => (
                                    <img
                                        style={{
                                            maxHeight: "450px",
                                            marginLeft: "auto",
                                            marginRight: "auto",
                                        }}
                                        {...props}
                                    />
                                ),
                            }}
                        />
                    ) : (
                        <div>Nothing to show here right now...</div>
                    )}
                </Block>
            )}
        </div>
    );
};

export default Works;
