import Block from "@/components/Block";
import { useEffect, useState } from "react";
import ReactMarkdown from "react-markdown";
import "@/md.css";
const Works = () => {
    const [workName, setWorkName] = useState("s");

    const workList = [
        { title: "m609osk139", file: "m609osk139.md" },
        { title: "Covid stat website", file: "covidWeb.md" },
    ];
    const [md, setMd] = useState("test");

    useEffect(() => {
        const fetcher = async () => {
            const raw = await fetch("md/m609osk139.md");
            const text = await raw.text();
            console.log(text);

            setMd(text);
        };
        fetcher();
    }, []);

    return (
        <div className="flex gap-5 w-full h-[45rem]">
            <Block
                title="Works"
                className="w-96 h-full border-yellow-500"
                titleClassName="text-yellow-500"
                center
                titleCenter
            >
                <div className="flex flex-col gap-3">
                    <button>m609osk139</button>
                    <button>Covid Stat Website</button>
                    <button>Covid Stat Discord Bot</button>
                    <button>Simple Tier List</button>
                    <button>Snip Websocket Addon</button>
                </div>
            </Block>
            {workName != "" && (
                <Block
                    title="Work's Info"
                    titleClassName="text-yellow-500"
                    className="w-full border-yellow-500"
                >
                    <ReactMarkdown children={md} />
                </Block>
            )}
        </div>
    );
};

export default Works;
