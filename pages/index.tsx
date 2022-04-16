import type { NextPage } from 'next'
import Image from 'next/image'
import PaimonFAQ from '../assets/paimon_faq.png'
import Document, { Html, Head, Main, NextScript } from 'next/document'
import Link from 'next/link'

function getDate(){
  var str = "星期";
  var week = new Date().getDay();
  switch (week) {
    case 0 :
      str += "日";
      break;
    case 1 :
      str += "一";
      break;
    case 2 :
      str += "二";
      break;
    case 3 :
      str += "三";
      break;
    case 4 :
      str += "四";
      break;
    case 5 :
      str += "五";
      break;
    case 6 :
      str += "六";
      break;
  }
  alert(str);
}

const Home: NextPage = () => {
  return (
      <html>
      <body>
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
                      className="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500"
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
                      className="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
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

            {/*右侧主内容*/}
            <div className="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
              <div className="flex flex-col flex-wrap sm:flex-row ">
                <div className="w-full sm:w-1/2 xl:w-1/3">
                  <div className="mb-4">
                    {/*每日素材*/}
                    <div className="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                      <div className="flex items-center justify-between mb-6">
                        <div className="flex items-center">
                          <div className="flex flex-col">
                      <span className="font-bold font-display text-4xl text-black dark:text-white">
                        今日可刷取素材
                      </span>
                          </div>
                        </div>
                      </div>
                      <div className="flex items-center justify-between mb-4 space-x-12">
                  <span className="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200">
                    星期
                  </span>
                        <span className="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-red-400 border border-red-400  bg-white">
                    天赋书双倍产出
                  </span>
                      </div>
                      <div className="flex flex-row">
                        <img
                            src="assets/items/boreal_wolfs_nostalgia.png"
                            className="max-h-16"
                        />
                        <img
                            src="assets/items/divine_body_from_guyun.png"
                            className="max-h-16"
                        />
                        <img
                            src="assets/items/philosophies_of_diligence.png"
                            className="max-h-16"
                        />
                        <img
                            src="assets/items/philosophies_of_elegance.png"
                            className="max-h-16"
                        />
                        <img
                            src="assets/items/philosophies_of_resistance.png"
                            className="max-h-16"
                        />
                        {/*                <image src="assets/items/golden_branch_of_a_distant_sea.png" class="max-h-16">*/}
                      </div>
                    </div>
                  </div>
                  {/*前往讨论区*/}
                  <div className="mb-4">
                    <div className="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                      <div className="flex items-center justify-between mb-6">
                        <div className="flex items-center">
                          <div className="flex flex-col">
                      <span className="font-bold text-4xl text-black dark:text-white">
                        前往讨论区
                      </span>
                          </div>
                        </div>
                        <div className="flex items-center"></div>
                      </div>
                      <div className="flex items-center justify-between mb-4 space-x-12">
                  <span className="px-2 py-1 flex items-center font-semibold text-xl rounded-md text-green-700 bg-green-50">
                    进入讨论版
                  </span>
                      </div>
                    </div>
                  </div>
                </div>
                {/*角色配装攻略*/}
                <div className="w-full sm:w-1/2 xl:w-1/3">
                  <div className="mb-4 mx-0 sm:ml-4 xl:mr-4">
                    <div className="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
                      <p className="font-bold text-4xl p-4 text-black dark:text-white">
                        角色配装攻略
                      </p>
                      <div className="flex flex-row">
                        <img
                            src="./assets/characters/raiden_shogun.png"
                            className="p-5"
                        />
                      </div>
                      <img
                          src="./assets/characters/sangonomiya_kokomi.png"
                          className="p-5"
                      />
                    </div>
                  </div>
                  <div className="mb-4 sm:ml-4 xl:mr-4">
                    <div className="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
                      <div className="flex items-center p-4 justify-between">
                        <p className="font-bold text-4xl text-black dark:text-white">
                          校内深渊排行榜
                        </p>
                      </div>
                      <div className="flex items-center p-4 justify-between border-b-2 border-gray-100">
                        <p className="font-bold text-xl text-black dark:text-white">
                          查看完整列表
                        </p>
                        <button className="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                          <svg
                              width={15}
                              height={15}
                              fill="currentColor"
                              viewBox="0 0 20 20"
                          >
                            <g fill="none">
                              <path
                                  d="M17.222 8.685a1.5 1.5 0 0 1 0 2.628l-10 5.498A1.5 1.5 0 0 1 5 15.496V4.502a1.5 1.5 0 0 1 2.223-1.314l10 5.497z"
                                  fill="currentColor"
                              ></path>
                            </g>
                          </svg>
                        </button>
                      </div>
                      <div className="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
                        <p className="text-lg flex items-center dark:text-white">
                          枫原万叶的狗
                        </p>
                        <div className="flex items-center">
                    <span className="text-lg text-black  mr-2 ml-2 md:ml-4 dark:text-white">
                      12-3
                    </span>
                        </div>
                      </div>
                      <div className="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
                        <p className="text-lg flex items-center dark:text-white">
                          神里凌华的狗
                        </p>
                        <div className="flex items-center">
                    <span className="text-lg text-black  mr-2 ml-2 md:ml-4 dark:text-white">
                      12-3
                    </span>
                        </div>
                      </div>
                      <div className="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
                        <p className="text-lg flex items-center dark:text-white">
                          雷电将军的狗
                        </p>
                        <div className="flex items-center">
                    <span className="text-lg text-black  mr-2 ml-2 md:ml-4 dark:text-white">
                      12-1
                    </span>
                        </div>
                      </div>
                      <div className="py-2 px-4 text-gray-600 flex items-center justify-between">
                        <p className="text-xs flex items-center dark:text-white">
                          数据为用户自行上传，本站不对其真实性负责
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="w-full sm:w-1/2 xl:w-1/3">
                  <div className="mb-4">
                    {/*未来活动*/}
                    <div className="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700">
                      <div className="flex flex-wrap overflow-hidden">
                        <div className="w-full rounded shadow-sm">
                          <div className="flex items-center justify-between mb-4">
                            <div className="text-left font-bold text-4xl text-black dark:text-white">
                              未来活动
                            </div>
                          </div>
                          <div className="card w-96 bg-base-100 shadow-xl">
                            <figure><img src="https://upload-bbs.mihoyo.com/upload/2022/04/02/75276539/d042be04b4a879ecb25bd5cd376a8d76_8754414170477140033.jpg?x-oss-process=image//resize,s_600/quality,q_80/auto-orient,0/interlace,1/format,jpg" alt="Shoes"/></figure>
                            <div className="card-body">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {/*官方公告*/}
                  <div className="mb-4">
                    <div className="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                      <p className="font-bold text-4xl text-black dark:text-white">
                        官方公告
                      </p>
                      <ul>
                        <li className="flex items-center my-6 space-x-2">
                          <a href="#" className="block relative">
                            <Image src={PaimonFAQ}  height={100} width={100} className="max-h-16" />

                          </a>
                          <div className="flex flex-col">
                      <span className="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                        2.5版本预下载功能开启
                      </span>
                            <span className="text-sm text-gray-400 dark:text-gray-300 ml-2">
                        亲爱的旅行者：为了给旅行者更好的游戏体验，制作组将于近期在PC端和移动端开放预下载功能……
                      </span>
                          </div>
                        </li>
                        <li className="flex items-center my-6 space-x-2">
                          <a href="#" className="block relative">
                            <Image src={PaimonFAQ}  height={100} width={100} className="max-h-16" />

                          </a>
                          <div className="flex flex-col">
                      <span className="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                        璃月手帐——「层岩巨渊」篇 003期 矿区生物&amp;敌人
                      </span>
                            <span className="text-sm text-gray-400 dark:text-gray-300 ml-2">
                        层岩巨渊有许多奇异的生态环境和地质环境，其中生长着许多新奇的生物，同时也有着更加危险的敌人…
                      </span>
                          </div>
                        </li>
                        <li className="flex items-center my-6 space-x-2">
                          <a href="#" className="block relative">
                            <Image src={PaimonFAQ}  height={100} width={100} className="max-h-16" />
                          </a>
                          <div className="flex flex-col">
                      <span className="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                        璃月手帐——「层岩巨渊」篇 002期 地下矿区
                      </span>
                            <span className="text-sm text-gray-400 dark:text-gray-300 ml-2">
                        完成世界任务
                        「巧瞒七星解磐键」后，将开启层岩巨渊的地下矿坑区域。一起来看看在层岩巨渊之下，都有哪些全新玩法吧。
                      </span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      </body>
      </html>
  )
}

export default Home
