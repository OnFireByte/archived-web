import React from "react";
import Block from "@/components/Block";

type Props = React.PropsWithChildren & {
    className?: String;
};
const Contract = ({ className }: Props) => {
    return (
        <Block title="Contract" className={`${className} md:mt-5 grow`}>
            <div className="flex flex-col gap-1 md:gap-3 h-full">
                <a href="http://github.com/onfirebyte" target="_blank">
                    <div>Github</div>
                </a>
                <a
                    href="https://www.linkedin.com/in/pakin-puttanukulchai-851991205/"
                    target="_blank"
                >
                    <div>LinkedIn</div>
                </a>
                <a href="https://www.facebook.com/0nfirebyte/" target="_blank">
                    <div>Facebook</div>
                </a>
                <button
                    className="text-blue-300 text-left hover:text-blue-700"
                    onClick={() => {
                        navigator.clipboard.writeText("bright.pakin@hotmail.com");
                    }}
                >
                    Email (Copy to clipboard)
                </button>
            </div>
        </Block>
    );
};

export default Contract;
