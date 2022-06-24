type Props = React.PropsWithChildren & {
    className?: string;
    insideClassName?: string;
    title?: string;
    titleCenter?: boolean;
    center?: boolean;
    verticalCenter?: boolean;
};

const Block = ({
    title,
    children,
    className,
    center,
    verticalCenter,
    titleCenter,
    insideClassName,
}: Props) => (
    <div
        className={`${className} flex border-[1px] box-border border-slate-50 rounded-lg p-5 text-slate-50 relative`}
        style={{
            justifyContent: titleCenter ? "center" : "normal",
        }}
    >
        <div className=" absolute top-[-0.8rem] bg-slate-800 px-1 text-bold">{title}</div>
        <div
            className={`${insideClassName} w-full`}
            style={{
                textAlign: center ? "center" : "left",
                display: verticalCenter || center ? "flex" : "inline",
                alignItems: verticalCenter ? "center" : "normal",
                justifyContent: center ? "center" : "normal",
            }}
        >
            {children}
        </div>
    </div>
);

export default Block;
