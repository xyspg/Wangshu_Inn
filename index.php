<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="tailwind.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.13.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./script/dayofWeek.js"></script>
    <title>望舒客栈</title>
</head>
<body>
<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
    <div class="flex items-start justify-between">
        <div class="h-screen hidden lg:block shadow-lg relative w-80">
            <div class="bg-white h-full dark:bg-gray-700">
                <div class="flex items-center justify-center pt-6">
                    <img src="image/paimon_faq.png" class="max-h-16" >
                </div>
                <nav class="mt-6 ml-4">
                    <div>
                        <a
                                class="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500"
                                href="/"
                        >
                            <span class="mx-4 text-sm font-normal">主页</span>
                        </a>
                        <a
                                class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="pages_html/news.html"
                        >

                            <span class="mx-4 text-sm font-normal">资讯</span>
                        </a>
                        <a
                                class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="pages_html/guides.html"
                        >

                            <span class="mx-4 text-sm font-normal">攻略</span>
                        </a>
                        <a
                                class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="pages_html/calc.html"
                        >

                            <span class="mx-4 text-sm font-normal">计算器</span>
                        </a>
                        <a
                                class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="pages_html/comment.html"
                        >

                            <span class="mx-4 text-sm font-normal">讨论版</span>
                        </a>
                        <a
                                class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="pages_html/abyss.html"
                        >

                            <span class="mx-4 text-sm font-normal">排行榜</span>
                        </a>

                        <a
                                class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="pages_html/userPanel.html"
                        >
                            <span class="mx-4 text-sm font-normal">用户中心</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
            <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                    <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                        <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                            <div class="relative flex items-center w-full lg:w-64 h-full group">
                                <div class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                    <svg
                                            fill="none"
                                            class="relative w-5 h-5"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            strokeWidth="2"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                    >
                                        <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <svg
                                        class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                >
                                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                </svg>
                                <input
                                        type="text"
                                        class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input"
                                        placeholder="搜索"
                                />

                            </div>
                        </div>
                        <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                            <a href="#" class="block relative">
                                <a href="pages_html/login_old.html">
                                <img
                                        alt="profile"
                                        src="https://s1.ax1x.com/2022/04/16/LJ3eQf.jpg"
                                        class="mx-auto object-cover rounded-full h-10 w-10 "

                                />
                                </a>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

<!--            右侧主内容-->
            <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                <div class="flex flex-col flex-wrap sm:flex-row ">
                    <div class="w-full sm:w-1/2 xl:w-1/3">
                        <div class="mb-4">
<!--                            每日素材-->
                            <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex items-center">
                                        <div class="flex flex-col">
                      <span class="font-bold font-display text-4xl text-black dark:text-white">
                        今日可刷取素材
                              <?php
                              include("pages_html/backend/connectphp.php");
                              $result = $conn->query('SELECT * from dayreglmet');
                              $arrDayReglMet = mysqli_fetch_assoc($result);
                              $arrDayReglMet1 = mysqli_fetch_assoc($result);
                              $whatDay = date('w');
                              $monMet = $arrDayReglMet['Mon'];
                              $monMet1 = $arrDayReglMet1['Mon'];
                              $tueMet = $arrDayReglMet['Tue'];
                              $tueMet1 = $arrDayReglMet1['Tue'];
                              $wedMet = $arrDayReglMet['Wed'];
                              $wedMet1 = $arrDayReglMet1['Wed'];
                              $thuMet = $arrDayReglMet['Thu'];
                              $thuMet1 = $arrDayReglMet1['Thu'];
                              $friMet = $arrDayReglMet['Fri'];
                              $friMet1 = $arrDayReglMet1['Fri'];
                              $satMet = $arrDayReglMet['Sat'];
                              $satMet1 = $arrDayReglMet1['Sat'];
                              $sunMet = $arrDayReglMet['Sun'];
                              $sunMet1 = $arrDayReglMet1['Sun'];
                              //    echo "<h3>{$whatDay}</h3>";
                              if ($whatDay == '1'){
                                  echo "今天是：星期一";
                                  echo "<br>";
                                  echo "角色有:{$monMet}";
                                  echo "材料有：{$monMet1}";
                                  echo "<div class='px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200' id='time-show'>星期一</div>";
                              }
                              elseif ($whatDay == '2'){
                                  echo "今天是：星期二";
                                  echo "<br>";
                                  echo "英雄有:{$tueMet}";
                                  echo "材料有：{$tueMet1}";
                                  echo "<div class='px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200' id='time-show'>星期二</div>";
                              }
                              elseif ($whatDay == '3'){
                                  echo "今天是：星期三";
                                  echo "<br>";
                                  echo "英雄有:{$wedMet}";
                                  echo "材料有：{$wedMet1}";
                                  echo "<div class='px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200' id='time-show'>星期三</div>";
                              }
                              elseif ($whatDay == '4'){
                                  echo "今天是：星期四";
                                  echo "<br>";
                                  echo "英雄有:{$thuMet}";
                                  echo "材料有：{$thuMet1}";
                              }
                              elseif ($whatDay == '5'){
//                                  echo "今天是：星期五";
//               四                  echo "<br>";
//                                  echo "英雄有:{$friMet}";
//                                  echo "材料有：{$friMet1}";

                                  echo "<div class='px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200' id='time-show'>星期五</div>";
                              }
                              elseif ($whatDay == '6'){
//                                  echo "今天是：星期六";
//                                  echo "<br>";
//                                  echo "英雄有:{$satMet}";
//                                  echo "材料有:{$satMet1}";
                                  echo "<div class='px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200' id='time-show'>星期六</div>";
                              }
                              else{
                                  echo "今天是：星期日";
                                  echo "<br>";
                                  echo "英雄有:{$sunMet}";
                                  echo "材料有：{$sunMet1}";
                                  echo "<div class='px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200' id='time-show'>星期日/div>";
                              }
                              ?>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mb-4 space-x-12">
<!--                  <div class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-gray-500 bg-gray-200" id="time-show">星期-->
<!--                  </div>-->
                                    <span class="px-2 py-1 flex items-center font-semibold text-xs rounded-md text-red-400 border border-red-400  bg-white">
                    天赋书双倍产出
                  </span>
                                </div>
                                <div class="flex flex-row">
                                    <img
                                            src="assets/items/boreal_wolfs_nostalgia.png"
                                            class="max-h-16" >

                                    <img
                                            src="assets/items/divine_body_from_guyun.png"
                                            class="max-h-16"
                                    />
                                    <img
                                            src="assets/items/philosophies_of_diligence.png"
                                            class="max-h-16"
                                    />
                                    <img
                                            src="assets/items/philosophies_of_elegance.png"
                                            class="max-h-16"
                                    />
                                    <img
                                            src="assets/items/philosophies_of_resistance.png"
                                            class="max-h-16"
                                    />
<!--                                                    <image src="assets/items/golden_branch_of_a_distant_sea.png" class="max-h-16">*/}-->
                                </div>
                            </div>
                        </div>
<!--                        {/*前往讨论区*/}-->
                        <div class="mb-4">
                            <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex items-center">
                                        <div class="flex flex-col">
                      <span class="font-bold text-4xl text-black dark:text-white">
                        前往讨论区
                      </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center"></div>
                                </div>
                                <div class="flex items-center justify-between mb-4 space-x-12">
                  <span class="px-2 py-1 flex items-center font-semibold text-xl rounded-md text-green-700 bg-green-50">
                    进入讨论版
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    {/*角色配装攻略*/}-->
                    <div class="w-full sm:w-1/2 xl:w-1/3">
                        <div class="mb-4 mx-0 sm:ml-4 xl:mr-4">
                            <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
                                <p class="font-bold text-4xl p-4 text-black dark:text-white">
                                    角色配装攻略
                                </p>
                                <div class="flex flex-row">
                                    <img
                                            src="assets/characters/raiden_shogun.png"
                                            class="p-5"
                                    />
                                </div>
                                <img
                                        src="assets/characters/sangonomiya_kokomi.png"
                                        class="p-5"
                                />
                            </div>
                        </div>
                        <div class="mb-4 sm:ml-4 xl:mr-4">
                            <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-700 w-full">
                                <div class="flex items-center p-4 justify-between">
                                    <p class="font-bold text-4xl text-black dark:text-white">
                                        校内深渊排行榜
                                    </p>
                                </div>
                                <div class="flex items-center p-4 justify-between border-b-2 border-gray-100">
                                    <p class="font-bold text-xl text-black dark:text-white">
                                        查看完整列表
                                    </p>
                                    <button class="text-sm p-1 text-gray-400 border rounded border-gray-400 mr-4">
                                        <svg
                                                width="15"
                                                height="15"
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
                                <?php
                                include("connectphp.php");
                                $result = $conn->query('SELECT heroname,value FROM sorttable ORDER BY value DESC');
                                $datacountInSort = mysqli_num_rows($result);
                                echo "<tr><td style='color:rebeccapurple'>英雄</td><td style='color: rebeccapurple'>分数</td></tr>";
                                for($i=0;$i<$datacountInSort;$i++){
                                    $arrSort = mysqli_fetch_assoc($result);
                                    $heroname = $arrSort['heroname'];
                                    $value = $arrSort['value'];
                                    echo " <div class='py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100'>
                                    <p class='text-lg flex items-center dark:text-white'>
                                        {$heroname}
                                    </p>
                                    <div class='flex items-center'>
                    <span class='text-lg text-black  mr-2 ml-2 md:ml-4 dark:text-white'>
                      {$value}
                    </span>
                                    </div>
                                </div>";
                                }
                                ?>
                                <div class="py-2 px-4 text-gray-600 flex items-center justify-between border-b-2 border-gray-100">
                                    <p class="text-lg flex items-center dark:text-white">
                                        神里绫华的狗
                                    </p>
                                    <div class="flex items-center">
                    <span class="text-lg text-black  mr-2 ml-2 md:ml-4 dark:text-white">
                      12-3
                    </span>
                                    </div>
                                </div>
                                <div class="py-2 px-4 text-gray-600 flex items-center justify-between">
                                    <p class="text-xs flex items-center dark:text-white">
                                        数据为用户自行上传，本站不对其真实性负责
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 xl:w-1/3">
                        <div class="mb-4">
<!--                            {/*未来活动*/}-->
                            <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700">
                                <div class="flex flex-wrap overflow-hidden">
                                    <div class="w-full rounded shadow-sm">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="text-left font-bold text-4xl text-black dark:text-white">
                                                未来活动
                                            </div>
                                        </div>
                                        <div class="card w-96 bg-base-100 shadow-xl">
                                            <figure><img src="https://upload-bbs.mihoyo.com/upload/2022/04/02/75276539/d042be04b4a879ecb25bd5cd376a8d76_8754414170477140033.jpg?x-oss-process=image//resize,s_600/quality,q_80/auto-orient,0/interlace,1/format,jpg" alt="Shoes"/></figure>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        {/*官方公告*/}-->
                        <div class="mb-4">
                            <div class="shadow-lg rounded-2xl p-4 bg-white dark:bg-gray-700 w-full">
                                <?php
                                include("connectphp.php");
                                $result = $conn->query('SELECT one from officetable');
                                $datacountInOfficeTable = mysqli_num_rows($result);
                                for ($i = 0; $i < $datacountInOfficeTable; $i++){
                                    $arrOfficeTable = mysqli_fetch_assoc($result);
                                    $one = $arrOfficeTable['one'];
                                    echo "<p class='font-bold text-4xl text-black dark:text-white'>{$one}</p>";
                                }
                                ?>
<!--                                <p class="font-bold text-4xl text-black dark:text-white">-->
<!--                                    官方公告-->
<!--                                </p>-->
                                <ul>
                                    <li class="flex items-center my-6 space-x-2">
                                        <a href="#" class="block relative">
                                            <img src="image/paimon_faq.png" height="100" width="100" class="max-h-16" >

                                        </a>
                                        <div class="flex flex-col">
                      <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                        2.5版本预下载功能开启
                      </span>
                                            <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                        亲爱的旅行者：为了给旅行者更好的游戏体验，制作组将于近期在PC端和移动端开放预下载功能……
                      </span>
                                        </div>
                                    </li>
                                    <li class="flex items-center my-6 space-x-2">
                                        <a href="#" class="block relative">
                                            <img src="image/paimon_faq.png" height="100" width="100" class="max-h-16" >

                                        </a>
                                        <div class="flex flex-col">
                      <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                        璃月手帐——「层岩巨渊」篇 003期 矿区生物&amp;敌人
                      </span>
                                            <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
                        层岩巨渊有许多奇异的生态环境和地质环境，其中生长着许多新奇的生物，同时也有着更加危险的敌人…
                      </span>
                                        </div>
                                    </li>
                                    <li class="flex items-center my-6 space-x-2">
                                        <a href="#" class="block relative">
                                            <img src="image/paimon_faq.png" height="100" width="100" class="max-h-16" >
                                        </a>
                                        <div class="flex flex-col">
                      <span class="text-sm text-gray-900 font-semibold dark:text-white ml-2">
                        璃月手帐——「层岩巨渊」篇 002期 地下矿区
                      </span>
                                            <span class="text-sm text-gray-400 dark:text-gray-300 ml-2">
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