import Block from "@/components/Block";

const Profile = () => {
    const calcAge = (dateString: string) => {
        var birthday = +new Date(dateString);
        return ~~((Date.now() - birthday) / 31557600000);
    };

    return (
        <Block title="Profile" className="w-full">
            <div className="grid place-items-center grid-cols-2 md:grid-cols-3 lg:grid-cols-5 md:grid-rows-2 gap-5">
                <img
                    className="w-52 md:row-span-2 col-span-2 md:col-span-1"
                    src="https://avatars.githubusercontent.com/u/65996113"
                    alt="profile image"
                />
                <Block
                    title="Name"
                    className="h-full w-full lg:col-span-2"
                    center
                    verticalCenter
                    titleCenter
                >
                    Pakin Puttanukulchai
                </Block>
                <Block
                    title="Education"
                    className="h-full w-full row-span-2 lg:col-span-2"
                    center
                    verticalCenter
                    titleCenter
                >
                    <div className="text-left">
                        {"1 > Suankularb Wittayalai School\n"}
                        <br />
                        <br />
                        {"2 > Chulalongkorn university\n"}
                    </div>
                </Block>
                <Block
                    title="Born"
                    className="h-full w-full lg:col-span-2"
                    center
                    verticalCenter
                    titleCenter
                >
                    31-08-2002 ({calcAge("2002-08-31")} Y/O)
                </Block>
            </div>
            <Block title="About Me" className="mt-5">
                Hi 👋, I'm Pakin, a 19-near-20 years old college student, you can call me
                Byte/Bright! I'm interested in web development in general both Front-End and
                Back-End. I'm considered myself beginner in world of programming 👶
                <br />
                <div>
                    <h2 className="my-2 ">Tech that i&#39;m confident about:</h2>
                    <div className="flex gap-2">
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&amp;logo=javascript&amp;logoColor=%23F7DF1E"
                            alt="JavaScript"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/python-3670A0?style=for-the-badge&amp;logo=python&amp;logoColor=ffdd54"
                            alt="Python"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&amp;logo=tailwind-css&amp;logoColor=white"
                            alt="TailwindCSS"
                        />
                    </div>
                    <h2 className="my-2">Tech that I&#39;m using and learning:</h2>
                    <div className="flex gap-2">
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/react-%2320232a.svg?style=for-the-badge&amp;logo=react&amp;logoColor=%2361DAFB"
                            alt="React"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/Next-black?style=for-the-badge&amp;logo=next.js&amp;logoColor=white"
                            alt="Next JS"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/svelte-%23f1413d.svg?style=for-the-badge&amp;logo=svelte&amp;logoColor=white"
                            alt="Svelte"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&amp;logo=node.js&amp;logoColor=white"
                            alt="NodeJS"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/typescript-%23007ACC.svg?style=for-the-badge&amp;logo=typescript&amp;logoColor=white"
                            alt="TypeScript"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/go-%2300ADD8.svg?style=for-the-badge&amp;logo=go&amp;logoColor=white"
                            alt="Go"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/postgres-%23316192.svg?style=for-the-badge&amp;logo=postgresql&amp;logoColor=white"
                            alt="Postgres"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&amp;logo=docker&amp;logoColor=white"
                            alt="Docker"
                        />
                        <img
                            className="inline-block"
                            src="https://img.shields.io/badge/Linux-FCC624?style=for-the-badge&amp;logo=linux&amp;logoColor=black"
                            alt="Linux"
                        />
                    </div>
                    <em>(So technically web development in general)</em>
                    <br />
                    <h2 className="my-2">Thing that I&#39;m interested in / want to learn :</h2>
                    <ul className="list-disc px-6">
                        <li>
                            <h3 id="database-and-api">Database and API</h3>
                        </li>
                        <div className="flex gap-2">
                            <img
                                className="inline-block"
                                src="https://img.shields.io/badge/MongoDB-%234ea94b.svg?style=for-the-badge&amp;logo=mongodb&amp;logoColor=white"
                                alt="MongoDB"
                            />
                            <img
                                className="inline-block"
                                src="https://img.shields.io/badge/-GraphQL-E10098?style=for-the-badge&amp;logo=graphql&amp;logoColor=white"
                                alt="GraphQL"
                            />
                        </div>
                        <li>BaaS (AWS/Firebase)</li>
                        <li>Networking</li>
                    </ul>
                </div>
            </Block>
        </Block>
    );
};

export default Profile;
