import Block from "@/components/Block";

const Home = () => {
    return (
        <Block
            title="Home"
            className="w-full md:h-[45rem] border-0 bg-gradient-to-r from-purple-400 to-pink-600 p-[0.1rem]"
            titleClassName="ml-5"
        >
            <div className=" bg-slate-800 h-full p-5 rounded-lg break-normal">
                <pre className="leading-[0.6rem] sm:leading-[0.76rem] md:leading-[1.03rem] text-[0.6rem] sm:text-[0.75rem] md:text-base font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 w-fit">
                    {`
██████╗░██╗░░░██╗████████╗███████╗  ██████╗░░░░░█████╗░
██╔══██╗╚██╗░██╔╝╚══██╔══╝██╔════╝  ╚════██╗░░░██╔══██╗
██████╦╝░╚████╔╝░░░░██║░░░█████╗░░  ░░███╔═╝░░░██║░░██║
██╔══██╗░░╚██╔╝░░░░░██║░░░██╔══╝░░  ██╔══╝░░░░░██║░░██║
██████╦╝░░░██║░░░░░░██║░░░███████╗  ███████╗██╗╚█████╔╝
╚═════╝░░░░╚═╝░░░░░░╚═╝░░░╚══════╝  ╚══════╝╚═╝░╚════╝░`}
                </pre>
                <p className="mt-3 break-word w-90 break-normal">
                    Welcome to my homepage! <br />
                    <br />
                    TLDR: <br />
                    I'm Pakin Puttanukulchai (Byte), a college student that interested in
                    programming / web development. <br />
                    I'm (quite) proficient at Javascript, Python, Tailwindcss. And good at Go,
                    Typescript, React.
                    <br />
                    <br />
                    You can see my info in About page.
                    <br />
                    Also you can see my works in Works page.
                </p>
            </div>
        </Block>
    );
};

export default Home;
