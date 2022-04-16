import type { NextPage } from 'next'
import Head from 'next/head'
import Image from 'next/image'
import PaimonFAQ from '../assets/paimon_faq.png'
import Link from 'next/link'
import {Select} from "antd";


const { Option } = Select;

function onChange(value) {
    console.log(`selected ${value}`);
}

function onSearch(val) {
    console.log('search:', val);
}
const Home: NextPage = () => {
    const onChange = () => {};
    return (
        <main className="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
            <div className="flex items-start justify-between">
                {/*边栏*/}
                <div className="h-screen hidden lg:block shadow-lg relative w-80">
                    <div className="bg-white h-full dark:bg-gray-700">
                        <div className="flex items-center justify-center pt-6">
                            <Image src={PaimonFAQ}  height={100} width={100} className="max-h-16" />
                        </div>
                        <nav className="mt-6 ml-4">
                            <div>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/"
                                >
                                    <span className="mx-4 text-sm font-normal">主页</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/news"
                                >

                                    <span className="mx-4 text-sm font-normal">资讯</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/guides"
                                >

                                    <span className="mx-4 text-sm font-normal">攻略</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/calc"
                                >

                                    <span className="mx-4 text-sm font-normal">计算器</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500"
                                    href="/bag"
                                >

                                    <span className="mx-4 text-sm font-normal">背包</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/planner"
                                >

                                    <span className="mx-4 text-sm font-normal">规划</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/comment"
                                >

                                    <span className="mx-4 text-sm font-normal">讨论版</span>
                                </a>
                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/abyss"
                                >

                                    <span className="mx-4 text-sm font-normal">排行榜</span>
                                </a>

                                <a
                                    className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                    href="/userPanel"
                                >
                                    <span className="mx-4 text-sm font-normal">用户中心</span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div className="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                    <header className="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                        <div className="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                            <div className="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                                <div className="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                                    <div className="relative flex items-center w-full lg:w-64 h-full group">
                                        <div className="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                            {/*绘制搜索框搜索图标*/}
                                            <svg
                                                fill="none"
                                                className="relative w-5 h-5"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                                strokeWidth={2}
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >
                                                <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <svg
                                            className="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                        >
                                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                        </svg>
                                        <input
                                            type="text"
                                            className="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input"
                                            placeholder="搜索"
                                        />
                                        {/*<div className="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block">*/}
                                        {/*  GO*/}
                                        {/*</div>*/}
                                    </div>
                                </div>
                                <div className="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                    <a href="#" className="block relative">
                                        <img
                                            alt="profile"
                                            src="https://s1.ax1x.com/2022/04/16/LJ3eQf.jpg"
                                            className="mx-auto object-cover rounded-full h-10 w-10 "
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                    {/*暂时没写*/}

                </div>
            </div>
        </main>
    )
}



export default Home
