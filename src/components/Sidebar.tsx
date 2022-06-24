import Block from "@/components/Block";
import { Pages } from "@/App";
export function Sidebar({ setPage }: { setPage: React.Dispatch<React.SetStateAction<Pages>> }) {
    return (
        <div className="lg:w-56 flex flex-col flex-grow">
            <Block title="Navigation" className="grow" titleCenter>
                <button
                    onClick={() => {
                        setPage(Pages.home);
                    }}
                >
                    Home
                </button>
                <br />
                <button
                    onClick={() => {
                        setPage(Pages.profile);
                    }}
                >
                    Profile
                </button>
            </Block>
            <Block title="Contract" className="mt-5 grow">
                <div className="text-[0.8rem]">bright.pakin@hotmail.com</div>
                <a href="">Github</a>
            </Block>
        </div>
    );
}
