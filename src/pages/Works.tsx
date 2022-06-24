import Block from "@/components/Block";
import { useEffect, useState } from "react";
import ReactMarkdown from "react-markdown";
import "@/md.css";
const Works = () => {
    const [workFile, setWorkFile] = useState("m609osk139.md");

    const workList = [
        { title: "m609osk139", file: "m609osk139.md" },
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
            console.log(text);

            setMd(text);
        };
        fetcher();
    }, [workFile]);

    return (
        <div className="flex gap-5 w-full h-[45rem]">
            <Block
                title="Works"
                className="w-96 h-full border-yellow-500"
                titleClassName="text-yellow-500"
                center
                titleCenter
            >
                <div className="flex flex-col gap-3 w-full">
                    {workList.map((w) => (
                        <button
                            onClick={() => {
                                setWorkFile(w.file);
                            }}
                            className="w-full"
                            style={{
                                backgroundColor:
                                    workFile === w.file ? "rgb(234 179 8)" : "transparent",
                                color: workFile === w.file ? "rgb(30 41 59)" : "rgb(248 250 252)",
                            }}
                        >
                            {w.title}
                        </button>
                    ))}
                    <a href="https://github.com/OnFireByte?tab=repositories" target="_blank">
                        <button>and more...</button>
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
                        <ReactMarkdown children={md} linkTarget="_blank" />
                    ) : (
                        <div>Nothing to show here right now...</div>
                    )}
                </Block>
            )}
        </div>
    );
};

export default Works;
