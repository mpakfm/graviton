<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    06.11.2022
 * Time:    16:41
 */

/** @var CMain $APPLICATION */

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Library\Tools\Breadcrumb;
use Library\Tools\CacheSelector;

define("BODY_CLASS", "ABOUT");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

Asset::getInstance()->addString('<link rel="stylesheet" href="' . SITE_TEMPLATE_PATH . '/styles/about_page.css">', true);
Asset::getInstance()->addString('<script src="' . SITE_TEMPLATE_PATH . '/js/about_page.js?t=' . time() . '" defer="defer"></script>', false, AssetLocation::BODY_END);

$iblock   = CacheSelector::getIblockId('pages', 'content');
$pageItem = CacheSelector::getIblockElement($iblock, 'about');

?>
    <main class="main">
        <section class="s-banner">
            <div class="l-default">
                <div class="s-banner__title">
                    <h1 class="title title--h1-banner s-about__title title--big">Компания Гравитон</h1>
                </div>
            </div>
            <div class="s-banner__img">
                <picture>
                    <source srcset="img/about/banner.jpg" type="image/jpg" media="(min-width: 768px)"/>
                    <source srcset="img/about/banner-small.jpg" type="image/jpg" media="(max-width: 768px)"/><img src="img/about/banner.jpg" alt=""/>
                </picture>
            </div>
        </section>
        <section class="s-about-graviton s-about-graviton-page">
            <div class="l-default">
                <h3 class="title-page title--h3">Гравитон</h3>
                <div class="s-about-graviton__texts">
                    <div class="s-about-graviton__texts-item">
                        <div class="s-about-graviton__texts-title">Гравитон: продукты и сервисы</div>
                        <div class="s-about-graviton__texts-list">
                            <p>Компания Гравитон - разработчик и производитель отечественной вычислительной техники, один из лидеров в области импортозамещения. Продукция внесена в Единый реестр российской радиоэлектронной продукции Минпромторга России.</p>
                        </div>
                    </div><div class="animation-wrapper">
                        <div class="sphere-animation">
                            <svg class="sphere" viewBox="0 0 440 440" stroke="rgba(80,80,80,.35)">
                                <defs>
                                    <linearGradient id="sphereGradient" x1="5%" x2="5%" y1="0%" y2="15%">
                                        <stop stop-color="#373734" offset="0%"/>
                                        <stop stop-color="#242423" offset="50%"/>
                                        <stop stop-color="#0D0D0C" offset="100%"/>
                                    </linearGradient>
                                </defs>
                                <path d="M361.604 361.238c-24.407 24.408-51.119 37.27-59.662 28.727-8.542-8.543 4.319-35.255 28.726-59.663 24.408-24.407 51.12-37.269 59.663-28.726 8.542 8.543-4.319 35.255-28.727 59.662z"/>
                                <path d="M360.72 360.354c-35.879 35.88-75.254 54.677-87.946 41.985-12.692-12.692 6.105-52.067 41.985-87.947 35.879-35.879 75.254-54.676 87.946-41.984 12.692 12.692-6.105 52.067-41.984 87.946z"/>
                                <path d="M357.185 356.819c-44.91 44.91-94.376 68.258-110.485 52.149-16.11-16.11 7.238-65.575 52.149-110.485 44.91-44.91 94.376-68.259 110.485-52.15 16.11 16.11-7.239 65.576-52.149 110.486z"/>
                                <path d="M350.998 350.632c-53.21 53.209-111.579 81.107-130.373 62.313-18.794-18.793 9.105-77.163 62.314-130.372 53.209-53.21 111.579-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"/>
                                <path d="M343.043 342.677c-59.8 59.799-125.292 91.26-146.283 70.268-20.99-20.99 10.47-86.483 70.269-146.282 59.799-59.8 125.292-91.26 146.283-70.269 20.99 20.99-10.47 86.484-70.27 146.283z"/>
                                <path d="M334.646 334.28c-65.169 65.169-136.697 99.3-159.762 76.235-23.065-23.066 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"/>
                                <path d="M324.923 324.557c-69.806 69.806-146.38 106.411-171.031 81.76-24.652-24.652 11.953-101.226 81.759-171.032 69.806-69.806 146.38-106.411 171.031-81.76 24.652 24.653-11.953 101.226-81.759 171.032z"/>
                                <path d="M312.99 312.625c-73.222 73.223-153.555 111.609-179.428 85.736-25.872-25.872 12.514-106.205 85.737-179.428s153.556-111.609 179.429-85.737c25.872 25.873-12.514 106.205-85.737 179.429z"/>
                                <path d="M300.175 299.808c-75.909 75.909-159.11 115.778-185.837 89.052-26.726-26.727 13.143-109.929 89.051-185.837 75.908-75.908 159.11-115.778 185.837-89.051 26.726 26.726-13.143 109.928-89.051 185.836z"/>
                                <path d="M284.707 284.34c-77.617 77.617-162.303 118.773-189.152 91.924-26.848-26.848 14.308-111.534 91.924-189.15C265.096 109.496 349.782 68.34 376.63 95.188c26.849 26.849-14.307 111.535-91.923 189.151z"/>
                                <path d="M269.239 267.989c-78.105 78.104-163.187 119.656-190.035 92.807-26.849-26.848 14.703-111.93 92.807-190.035 78.105-78.104 163.187-119.656 190.035-92.807 26.849 26.848-14.703 111.93-92.807 190.035z"/>
                                <path d="M252.887 252.52C175.27 330.138 90.584 371.294 63.736 344.446 36.887 317.596 78.043 232.91 155.66 155.293 233.276 77.677 317.962 36.521 344.81 63.37c26.85 26.848-14.307 111.534-91.923 189.15z"/>
                                <path d="M236.977 236.61C161.069 312.52 77.867 352.389 51.14 325.663c-26.726-26.727 13.143-109.928 89.052-185.837 75.908-75.908 159.11-115.777 185.836-89.05 26.727 26.726-13.143 109.928-89.051 185.836z"/>
                                <path d="M221.067 220.7C147.844 293.925 67.51 332.31 41.639 306.439c-25.873-25.873 12.513-106.206 85.736-179.429C200.6 53.786 280.931 15.4 306.804 41.272c25.872 25.873-12.514 106.206-85.737 179.429z"/>
                                <path d="M205.157 204.79c-69.806 69.807-146.38 106.412-171.031 81.76-24.652-24.652 11.953-101.225 81.759-171.031 69.806-69.807 146.38-106.411 171.031-81.76 24.652 24.652-11.953 101.226-81.759 171.032z"/>
                                <path d="M189.247 188.881c-65.169 65.169-136.696 99.3-159.762 76.235-23.065-23.065 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"/>
                                <path d="M173.337 172.971c-59.799 59.8-125.292 91.26-146.282 70.269-20.991-20.99 10.47-86.484 70.268-146.283 59.8-59.799 125.292-91.26 146.283-70.269 20.99 20.991-10.47 86.484-70.269 146.283z"/>
                                <path d="M157.427 157.061c-53.209 53.21-111.578 81.108-130.372 62.314-18.794-18.794 9.104-77.164 62.313-130.373 53.21-53.209 111.58-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"/>
                                <path d="M141.517 141.151c-44.91 44.91-94.376 68.259-110.485 52.15-16.11-16.11 7.239-65.576 52.15-110.486 44.91-44.91 94.375-68.258 110.485-52.15 16.109 16.11-7.24 65.576-52.15 110.486z"/>
                                <path d="M125.608 125.241c-35.88 35.88-75.255 54.677-87.947 41.985-12.692-12.692 6.105-52.067 41.985-87.947C115.525 43.4 154.9 24.603 167.592 37.295c12.692 12.692-6.105 52.067-41.984 87.946z"/>
                                <path d="M109.698 109.332c-24.408 24.407-51.12 37.268-59.663 28.726-8.542-8.543 4.319-35.255 28.727-59.662 24.407-24.408 51.12-37.27 59.662-28.727 8.543 8.543-4.319 35.255-28.726 59.663z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="s-about-graviton__texts-item">
                        <div class="s-about-graviton__texts-title">Ассортимент продукции включает следующие решения:</div>
                        <div class="s-about-graviton__texts-list">
                            <p><span>клиентские</span> - ноутбуки, моноблоки, настольные персональные компьютеры на базе различных архитектур;</p>
                            <p><span>серверные</span> - серверные системы, ПАКи хранения, рабочие станции;</p>
                            <p><span>программно-аппаратный комплекс гиперконвергентной инфраструктуры</span> на базе ПО из реестра Минцифры России.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-about-graviton__bottom">
                <div class="l-default">
                    <div class="s-about-graviton__bottom-wrapper">
                        <div class="s-about-graviton__bottom-title">Продукция соответствует требованиям импортозамещения, сертифицирована ТР ТС, МПТ, РЭП, Минкомсвязи.</div>
                        <div class="s-about-graviton__bottom-icon"><img src="img/svg/minprom-logo.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-about-video">
            <div class="l-default">
                <div class="s-about-video__text"><svg viewBox="0 0 1832 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.15" d="M68.9492 2.8125V145H44.6328V2.8125H68.9492ZM113.578 2.8125V22.3438H0.394531V2.8125H113.578ZM219.395 125.566V145H143.906V125.566H219.395ZM150.84 2.8125V145H126.328V2.8125H150.84ZM209.531 62.1875V81.3281H143.906V62.1875H209.531ZM218.906 2.8125V22.3438H143.906V2.8125H218.906ZM252.066 2.8125L282.242 54.668L312.418 2.8125H340.641L297.672 73.2227L341.715 145H313.199L282.242 92.168L251.285 145H222.672L266.812 73.2227L223.746 2.8125H252.066ZM447.727 62.1875V81.6211H372.238V62.1875H447.727ZM378.293 2.8125V145H353.781V2.8125H378.293ZM466.574 2.8125V145H442.16V2.8125H466.574ZM603.152 70V77.8125C603.152 88.5547 601.753 98.1901 598.953 106.719C596.154 115.247 592.15 122.507 586.941 128.496C581.798 134.486 575.613 139.076 568.387 142.266C561.16 145.391 553.152 146.953 544.363 146.953C535.639 146.953 527.664 145.391 520.438 142.266C513.276 139.076 507.059 134.486 501.785 128.496C496.512 122.507 492.41 115.247 489.48 106.719C486.616 98.1901 485.184 88.5547 485.184 77.8125V70C485.184 59.2578 486.616 49.6549 489.48 41.1914C492.345 32.6628 496.382 25.4036 501.59 19.4141C506.863 13.3594 513.081 8.76953 520.242 5.64453C527.469 2.45443 535.444 0.859375 544.168 0.859375C552.957 0.859375 560.965 2.45443 568.191 5.64453C575.418 8.76953 581.635 13.3594 586.844 19.4141C592.052 25.4036 596.056 32.6628 598.855 41.1914C601.72 49.6549 603.152 59.2578 603.152 70ZM578.641 77.8125V69.8047C578.641 61.862 577.859 54.8633 576.297 48.8086C574.799 42.6888 572.553 37.5781 569.559 33.4766C566.629 29.3099 563.016 26.1849 558.719 24.1016C554.422 21.9531 549.572 20.8789 544.168 20.8789C538.764 20.8789 533.947 21.9531 529.715 24.1016C525.483 26.1849 521.87 29.3099 518.875 33.4766C515.945 37.5781 513.699 42.6888 512.137 48.8086C510.574 54.8633 509.793 61.862 509.793 69.8047V77.8125C509.793 85.7552 510.574 92.7865 512.137 98.9062C513.699 105.026 515.978 110.202 518.973 114.434C522.033 118.6 525.678 121.758 529.91 123.906C534.142 125.99 538.96 127.031 544.363 127.031C549.832 127.031 554.682 125.99 558.914 123.906C563.146 121.758 566.727 118.6 569.656 114.434C572.586 110.202 574.799 105.026 576.297 98.9062C577.859 92.7865 578.641 85.7552 578.641 77.8125ZM711.801 2.8125V22.3438H643.637V2.8125H711.801ZM730.551 2.8125V145H706.039V2.8125H730.551ZM638.754 2.8125H663.07L659.652 73.418C659.197 83.7695 658.318 92.8841 657.016 100.762C655.714 108.639 653.956 115.378 651.742 120.977C649.529 126.576 646.729 131.165 643.344 134.746C639.958 138.262 635.889 140.866 631.137 142.559C626.449 144.186 620.948 145 614.633 145H608.383V125.566L612.191 125.273C615.642 125.013 618.604 124.199 621.078 122.832C623.617 121.4 625.766 119.316 627.523 116.582C629.281 113.783 630.746 110.169 631.918 105.742C633.09 101.315 634.001 95.9115 634.652 89.5312C635.368 83.151 635.889 75.6966 636.215 67.168L638.754 2.8125ZM867.324 70V77.8125C867.324 88.5547 865.924 98.1901 863.125 106.719C860.326 115.247 856.322 122.507 851.113 128.496C845.97 134.486 839.785 139.076 832.559 142.266C825.332 145.391 817.324 146.953 808.535 146.953C799.811 146.953 791.836 145.391 784.609 142.266C777.448 139.076 771.23 134.486 765.957 128.496C760.684 122.507 756.582 115.247 753.652 106.719C750.788 98.1901 749.355 88.5547 749.355 77.8125V70C749.355 59.2578 750.788 49.6549 753.652 41.1914C756.517 32.6628 760.553 25.4036 765.762 19.4141C771.035 13.3594 777.253 8.76953 784.414 5.64453C791.641 2.45443 799.616 0.859375 808.34 0.859375C817.129 0.859375 825.137 2.45443 832.363 5.64453C839.59 8.76953 845.807 13.3594 851.016 19.4141C856.224 25.4036 860.228 32.6628 863.027 41.1914C865.892 49.6549 867.324 59.2578 867.324 70ZM842.812 77.8125V69.8047C842.812 61.862 842.031 54.8633 840.469 48.8086C838.971 42.6888 836.725 37.5781 833.73 33.4766C830.801 29.3099 827.188 26.1849 822.891 24.1016C818.594 21.9531 813.743 20.8789 808.34 20.8789C802.936 20.8789 798.118 21.9531 793.887 24.1016C789.655 26.1849 786.042 29.3099 783.047 33.4766C780.117 37.5781 777.871 42.6888 776.309 48.8086C774.746 54.8633 773.965 61.862 773.965 69.8047V77.8125C773.965 85.7552 774.746 92.7865 776.309 98.9062C777.871 105.026 780.15 110.202 783.145 114.434C786.204 118.6 789.85 121.758 794.082 123.906C798.314 125.99 803.132 127.031 808.535 127.031C814.004 127.031 818.854 125.99 823.086 123.906C827.318 121.758 830.898 118.6 833.828 114.434C836.758 110.202 838.971 105.026 840.469 98.9062C842.031 92.7865 842.812 85.7552 842.812 77.8125ZM976.754 2.8125V22.3438H910.738V145H886.324V2.8125H976.754ZM1015.38 105.059L1078.47 2.8125H1102.98V145H1078.47V42.6562L1015.38 145H990.969V2.8125H1015.38V105.059ZM1123.35 2.8125H1147.86V46.8555C1147.86 53.5612 1148.87 58.8346 1150.89 62.6758C1152.9 66.4518 1155.96 69.1211 1160.07 70.6836C1164.23 72.2461 1169.41 73.0273 1175.59 73.0273C1178.59 73.0273 1181.75 72.8971 1185.07 72.6367C1188.39 72.3763 1191.71 72.0182 1195.03 71.5625C1198.41 71.0417 1201.67 70.4557 1204.79 69.8047C1207.92 69.0885 1210.78 68.3073 1213.39 67.4609V86.8945C1210.85 87.6758 1208.05 88.4245 1204.99 89.1406C1201.99 89.8568 1198.87 90.4753 1195.61 90.9961C1192.36 91.4518 1189.04 91.8099 1185.65 92.0703C1182.27 92.3307 1178.91 92.4609 1175.59 92.4609C1164.85 92.4609 1155.57 90.931 1147.76 87.8711C1139.95 84.7461 1133.93 79.8307 1129.7 73.125C1125.46 66.4193 1123.35 57.6628 1123.35 46.8555V2.8125ZM1207.82 2.8125H1232.33V145H1207.82V2.8125ZM1348.79 125.566V145H1273.3V125.566H1348.79ZM1280.24 2.8125V145H1255.73V2.8125H1280.24ZM1338.93 62.1875V81.3281H1273.3V62.1875H1338.93ZM1348.3 2.8125V22.3438H1273.3V2.8125H1348.3ZM1446.8 98.7109H1471.21C1470.43 108.021 1467.83 116.322 1463.4 123.613C1458.97 130.84 1452.75 136.536 1444.75 140.703C1436.74 144.87 1427.01 146.953 1415.55 146.953C1406.76 146.953 1398.85 145.391 1391.82 142.266C1384.79 139.076 1378.76 134.583 1373.75 128.789C1368.74 122.93 1364.9 115.866 1362.23 107.598C1359.62 99.3294 1358.32 90.0846 1358.32 79.8633V68.0469C1358.32 57.8255 1359.65 48.5807 1362.32 40.3125C1365.06 32.0443 1368.96 24.9805 1374.04 19.1211C1379.12 13.1966 1385.21 8.67188 1392.3 5.54688C1399.47 2.42188 1407.51 0.859375 1416.43 0.859375C1427.75 0.859375 1437.32 2.94271 1445.14 7.10938C1452.95 11.276 1459 17.0378 1463.3 24.3945C1467.66 31.7513 1470.33 40.1823 1471.31 49.6875H1446.89C1446.24 43.5677 1444.81 38.3268 1442.6 33.9648C1440.45 29.6029 1437.26 26.2826 1433.03 24.0039C1428.8 21.6602 1423.26 20.4883 1416.43 20.4883C1410.83 20.4883 1405.94 21.5299 1401.78 23.6133C1397.61 25.6966 1394.13 28.7565 1391.33 32.793C1388.53 36.8294 1386.41 41.8099 1384.98 47.7344C1383.61 53.5938 1382.93 60.2995 1382.93 67.8516V79.8633C1382.93 87.0247 1383.55 93.5352 1384.79 99.3945C1386.09 105.189 1388.04 110.169 1390.64 114.336C1393.31 118.503 1396.7 121.725 1400.8 124.004C1404.9 126.283 1409.82 127.422 1415.55 127.422C1422.51 127.422 1428.14 126.315 1432.44 124.102C1436.8 121.888 1440.09 118.665 1442.3 114.434C1444.58 110.137 1446.08 104.896 1446.8 98.7109ZM1512.38 2.8125V145H1487.96V2.8125H1512.38ZM1597.93 2.8125L1540.11 83.8672H1505.45L1502.12 62.5781H1526.54L1567.95 2.8125H1597.93ZM1572.93 145L1526.93 80.1562L1542.75 61.3086L1602.32 145H1572.93ZM1665.75 21.7578L1623.27 145H1597.59L1651.11 2.8125H1667.51L1665.75 21.7578ZM1701.3 145L1658.72 21.7578L1656.87 2.8125H1673.37L1727.08 145H1701.3ZM1699.25 92.2656V111.699H1621.91V92.2656H1699.25ZM1814.05 91.6797H1774.89L1765.22 87.6758C1754.48 84.2904 1746.24 79.1471 1740.52 72.2461C1734.79 65.3451 1731.92 56.6536 1731.92 46.1719C1731.92 36.7969 1734.01 28.8867 1738.17 22.4414C1742.34 15.9961 1748.26 11.1133 1755.95 7.79297C1763.69 4.47266 1772.84 2.8125 1783.39 2.8125H1831.14V145H1806.53V22.3438H1783.39C1774.27 22.3438 1767.5 24.5573 1763.07 28.9844C1758.65 33.4115 1756.43 39.5312 1756.43 47.3438C1756.43 52.6823 1757.41 57.2721 1759.36 61.1133C1761.38 64.8893 1764.34 67.819 1768.25 69.9023C1772.22 71.9206 1777.14 72.9297 1783 72.9297H1814.05V91.6797ZM1784.17 80.7422L1751.16 145H1724.79L1758.19 80.7422H1784.17Z" fill="url(#paint0_linear_1737_32242)"/>
                        <defs>
                            <linearGradient id="paint0_linear_1737_32242" x1="769.682" y1="204.068" x2="797.606" y2="-49.1061" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#18191F"/>
                                <stop offset="1" stop-color="#262B38"/>
                            </linearGradient>
                        </defs>
                </div></svg>
                <div class="s-about-video__iframe">
                    <iframe src="https://rutube.ru/play/embed/a3b8399664d67e91eaf58e64117f2108" frameborder="0" allow="clipboard-write; autoplay" webkitallowfullscreen mozallowfullscreen allowfullscreen loading="lazy"></iframe>
                    <div class="s-about-video__icon"><img src="img/svg/play-about.svg" alt=""></div>
                </div>
                <div class="s-about-video__text"><svg width="332" height="34" viewBox="0 0 332 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.15" d="M20.5327 1.00781V5.40234H5.65723V33H0.164062V1.00781H20.5327ZM3.9873 13.2905H12.0293C14.4609 13.2905 16.541 13.7007 18.2695 14.521C19.998 15.3267 21.3164 16.4619 22.2246 17.9268C23.1328 19.3916 23.5869 21.0981 23.5869 23.0464C23.5869 24.5112 23.3306 25.8516 22.8179 27.0674C22.3052 28.2832 21.5508 29.3379 20.5547 30.2314C19.5586 31.1104 18.3428 31.7915 16.9072 32.2749C15.4863 32.7583 13.8604 33 12.0293 33H0.164062V1.00781H5.70117V28.6274H12.0293C13.4209 28.6274 14.5635 28.3711 15.457 27.8584C16.3506 27.3311 17.0098 26.6426 17.4346 25.793C17.874 24.9434 18.0938 24.0132 18.0938 23.0024C18.0938 22.021 17.874 21.1274 17.4346 20.3218C17.0098 19.5161 16.3506 18.8716 15.457 18.3882C14.5635 17.9048 13.4209 17.6631 12.0293 17.6631H3.9873V13.2905ZM48.1427 28.6274V33H31.1578V28.6274H48.1427ZM32.7179 1.00781V33H27.2027V1.00781H32.7179ZM45.9234 14.3672V18.6738H31.1578V14.3672H45.9234ZM48.0328 1.00781V5.40234H31.1578V1.00781H48.0328ZM62.2614 17.6631H57.8229V14.521H61.6462C63.0085 14.521 64.1145 14.3232 64.9641 13.9277C65.8137 13.5176 66.4289 12.9536 66.8098 12.2358C67.2053 11.5034 67.403 10.6538 67.403 9.68701C67.403 8.82275 67.1833 8.03174 66.7438 7.31396C66.319 6.59619 65.6599 6.0249 64.7663 5.6001C63.8728 5.16064 62.7229 4.94092 61.3166 4.94092C60.2619 4.94092 59.3024 5.13135 58.4382 5.51221C57.5739 5.89307 56.8854 6.42773 56.3728 7.11621C55.8747 7.80469 55.6257 8.61768 55.6257 9.55518H50.1105C50.1105 8.16357 50.4035 6.91846 50.9895 5.81982C51.59 4.70654 52.403 3.76172 53.4284 2.98535C54.4685 2.20898 55.6623 1.61572 57.01 1.20557C58.3723 0.780762 59.8078 0.568359 61.3166 0.568359C63.0744 0.568359 64.6638 0.766113 66.0847 1.16162C67.5056 1.54248 68.7287 2.11377 69.7541 2.87549C70.7795 3.63721 71.5632 4.58936 72.1052 5.73193C72.6472 6.85986 72.9182 8.1709 72.9182 9.66504C72.9182 10.7637 72.6618 11.7964 72.1491 12.7632C71.6511 13.73 70.9333 14.5796 69.9958 15.312C69.0583 16.0444 67.9304 16.623 66.612 17.0479C65.3083 17.458 63.8581 17.6631 62.2614 17.6631ZM57.8229 15.7515H62.2614C64.0339 15.7515 65.6086 15.9346 66.9855 16.3008C68.3625 16.667 69.5271 17.2017 70.4792 17.9048C71.4313 18.6079 72.1564 19.4795 72.6545 20.5195C73.1525 21.5449 73.4016 22.7241 73.4016 24.0571C73.4016 25.5513 73.1013 26.8843 72.5007 28.0562C71.9147 29.2134 71.0798 30.1948 69.9958 31.0005C68.9118 31.8062 67.6301 32.4141 66.1506 32.8242C64.6857 33.2344 63.0744 33.4395 61.3166 33.4395C59.8957 33.4395 58.4895 33.2637 57.0979 32.9121C55.7209 32.5459 54.4685 31.9893 53.3405 31.2422C52.2272 30.4805 51.3337 29.5137 50.6599 28.3418C49.986 27.1699 49.6491 25.7637 49.6491 24.123H55.1862C55.1862 25.0312 55.4426 25.8662 55.9553 26.6279C56.4826 27.375 57.2004 27.9756 58.1086 28.4297C59.0314 28.8691 60.1008 29.0889 61.3166 29.0889C62.7082 29.0889 63.8874 28.8691 64.8542 28.4297C65.8356 27.9902 66.5827 27.3896 67.0954 26.6279C67.6228 25.8662 67.8864 25.0093 67.8864 24.0571C67.8864 23.1489 67.7473 22.3652 67.4689 21.7061C67.2053 21.0322 66.8098 20.4902 66.2824 20.0801C65.7551 19.6553 65.1032 19.3403 64.3269 19.1353C63.5505 18.9302 62.6569 18.8276 61.6462 18.8276H57.8229V15.7515ZM102.791 16.125V17.8828C102.791 20.2998 102.476 22.4678 101.846 24.3867C101.217 26.3057 100.316 27.939 99.1438 29.2866C97.9866 30.6343 96.595 31.667 94.969 32.3848C93.3431 33.0879 91.5413 33.4395 89.5638 33.4395C87.6009 33.4395 85.8064 33.0879 84.1805 32.3848C82.5691 31.667 81.1702 30.6343 79.9837 29.2866C78.7972 27.939 77.8743 26.3057 77.2151 24.3867C76.5706 22.4678 76.2483 20.2998 76.2483 17.8828V16.125C76.2483 13.708 76.5706 11.5474 77.2151 9.64307C77.8597 7.72412 78.7679 6.09082 79.9397 4.74316C81.1263 3.38086 82.5252 2.34814 84.1365 1.64502C85.7625 0.927246 87.5569 0.568359 89.5198 0.568359C91.4974 0.568359 93.2991 0.927246 94.9251 1.64502C96.5511 2.34814 97.95 3.38086 99.1219 4.74316C100.294 6.09082 101.195 7.72412 101.825 9.64307C102.469 11.5474 102.791 13.708 102.791 16.125ZM97.2762 17.8828V16.0811C97.2762 14.2939 97.1004 12.7192 96.7488 11.3569C96.4119 9.97998 95.9065 8.83008 95.2327 7.90723C94.5735 6.96973 93.7605 6.2666 92.7937 5.79785C91.827 5.31445 90.7356 5.07275 89.5198 5.07275C88.304 5.07275 87.22 5.31445 86.2679 5.79785C85.3157 6.2666 84.5027 6.96973 83.8289 7.90723C83.1697 8.83008 82.6644 9.97998 82.3128 11.3569C81.9612 12.7192 81.7854 14.2939 81.7854 16.0811V17.8828C81.7854 19.6699 81.9612 21.252 82.3128 22.6289C82.6644 24.0059 83.177 25.1704 83.8509 26.1226C84.5394 27.0601 85.3597 27.7705 86.3118 28.2539C87.264 28.7227 88.3479 28.957 89.5638 28.957C90.7942 28.957 91.8855 28.7227 92.8377 28.2539C93.7898 27.7705 94.5955 27.0601 95.2547 26.1226C95.9139 25.1704 96.4119 24.0059 96.7488 22.6289C97.1004 21.252 97.2762 19.6699 97.2762 17.8828ZM132.269 1.00781V33H126.776V5.40234H112.559V33H107.066V1.00781H132.269ZM150.013 5.27051L140.455 33H134.676L146.717 1.00781H150.409L150.013 5.27051ZM158.011 33L148.431 5.27051L148.014 1.00781H151.727L163.812 33H158.011ZM157.55 21.1348V25.5073H140.147V21.1348H157.55ZM184.588 22.585H190.082C189.906 24.6797 189.32 26.5474 188.324 28.188C187.328 29.814 185.929 31.0957 184.127 32.0332C182.325 32.9707 180.135 33.4395 177.557 33.4395C175.58 33.4395 173.8 33.0879 172.218 32.3848C170.636 31.667 169.281 30.6562 168.153 29.3525C167.025 28.0342 166.161 26.4448 165.56 24.5845C164.974 22.7241 164.681 20.644 164.681 18.3442V15.6855C164.681 13.3857 164.982 11.3057 165.582 9.44531C166.197 7.58496 167.076 5.99561 168.219 4.67725C169.361 3.34424 170.731 2.32617 172.328 1.62305C173.939 0.919922 175.748 0.568359 177.755 0.568359C180.304 0.568359 182.457 1.03711 184.215 1.97461C185.973 2.91211 187.335 4.2085 188.302 5.86377C189.283 7.51904 189.884 9.41602 190.104 11.5547H184.61C184.464 10.1777 184.142 8.99854 183.644 8.01709C183.16 7.03564 182.442 6.28857 181.49 5.77588C180.538 5.24854 179.293 4.98486 177.755 4.98486C176.495 4.98486 175.397 5.21924 174.459 5.68799C173.522 6.15674 172.738 6.84521 172.108 7.75342C171.478 8.66162 171.002 9.78223 170.68 11.1152C170.372 12.4336 170.218 13.9424 170.218 15.6416V18.3442C170.218 19.9556 170.358 21.4204 170.636 22.7388C170.929 24.0425 171.368 25.1631 171.954 26.1006C172.555 27.0381 173.316 27.7632 174.239 28.2759C175.162 28.7886 176.268 29.0449 177.557 29.0449C179.125 29.0449 180.392 28.7959 181.358 28.2979C182.34 27.7998 183.08 27.0747 183.578 26.1226C184.09 25.1558 184.427 23.9766 184.588 22.585ZM214.879 14.3672V18.7397H197.894V14.3672H214.879ZM199.257 1.00781V33H193.741V1.00781H199.257ZM219.12 1.00781V33H213.627V1.00781H219.12ZM249.85 16.125V17.8828C249.85 20.2998 249.535 22.4678 248.905 24.3867C248.275 26.3057 247.374 27.939 246.202 29.2866C245.045 30.6343 243.654 31.667 242.028 32.3848C240.402 33.0879 238.6 33.4395 236.622 33.4395C234.659 33.4395 232.865 33.0879 231.239 32.3848C229.628 31.667 228.229 30.6343 227.042 29.2866C225.856 27.939 224.933 26.3057 224.274 24.3867C223.629 22.4678 223.307 20.2998 223.307 17.8828V16.125C223.307 13.708 223.629 11.5474 224.274 9.64307C224.918 7.72412 225.826 6.09082 226.998 4.74316C228.185 3.38086 229.584 2.34814 231.195 1.64502C232.821 0.927246 234.616 0.568359 236.578 0.568359C238.556 0.568359 240.358 0.927246 241.984 1.64502C243.61 2.34814 245.009 3.38086 246.18 4.74316C247.352 6.09082 248.253 7.72412 248.883 9.64307C249.528 11.5474 249.85 13.708 249.85 16.125ZM244.335 17.8828V16.0811C244.335 14.2939 244.159 12.7192 243.807 11.3569C243.471 9.97998 242.965 8.83008 242.291 7.90723C241.632 6.96973 240.819 6.2666 239.852 5.79785C238.886 5.31445 237.794 5.07275 236.578 5.07275C235.363 5.07275 234.279 5.31445 233.326 5.79785C232.374 6.2666 231.561 6.96973 230.887 7.90723C230.228 8.83008 229.723 9.97998 229.371 11.3569C229.02 12.7192 228.844 14.2939 228.844 16.0811V17.8828C228.844 19.6699 229.02 21.252 229.371 22.6289C229.723 24.0059 230.236 25.1704 230.909 26.1226C231.598 27.0601 232.418 27.7705 233.37 28.2539C234.323 28.7227 235.407 28.957 236.622 28.957C237.853 28.957 238.944 28.7227 239.896 28.2539C240.848 27.7705 241.654 27.0601 242.313 26.1226C242.972 25.1704 243.471 24.0059 243.807 22.6289C244.159 21.252 244.335 19.6699 244.335 17.8828ZM272.912 22.585H278.405C278.229 24.6797 277.643 26.5474 276.647 28.188C275.651 29.814 274.252 31.0957 272.45 32.0332C270.648 32.9707 268.458 33.4395 265.88 33.4395C263.903 33.4395 262.123 33.0879 260.541 32.3848C258.959 31.667 257.604 30.6562 256.476 29.3525C255.348 28.0342 254.484 26.4448 253.883 24.5845C253.297 22.7241 253.004 20.644 253.004 18.3442V15.6855C253.004 13.3857 253.305 11.3057 253.905 9.44531C254.52 7.58496 255.399 5.99561 256.542 4.67725C257.684 3.34424 259.054 2.32617 260.651 1.62305C262.262 0.919922 264.071 0.568359 266.078 0.568359C268.627 0.568359 270.78 1.03711 272.538 1.97461C274.296 2.91211 275.658 4.2085 276.625 5.86377C277.606 7.51904 278.207 9.41602 278.427 11.5547H272.934C272.787 10.1777 272.465 8.99854 271.967 8.01709C271.483 7.03564 270.766 6.28857 269.813 5.77588C268.861 5.24854 267.616 4.98486 266.078 4.98486C264.818 4.98486 263.72 5.21924 262.782 5.68799C261.845 6.15674 261.061 6.84521 260.431 7.75342C259.801 8.66162 259.325 9.78223 259.003 11.1152C258.695 12.4336 258.541 13.9424 258.541 15.6416V18.3442C258.541 19.9556 258.681 21.4204 258.959 22.7388C259.252 24.0425 259.691 25.1631 260.277 26.1006C260.878 27.0381 261.64 27.7632 262.562 28.2759C263.485 28.7886 264.591 29.0449 265.88 29.0449C267.448 29.0449 268.715 28.7959 269.682 28.2979C270.663 27.7998 271.403 27.0747 271.901 26.1226C272.413 25.1558 272.75 23.9766 272.912 22.585ZM294.567 1.00781V33H289.096V1.00781H294.567ZM304.608 1.00781V5.40234H279.142V1.00781H304.608ZM311.564 13.2905H319.606C322.038 13.2905 324.118 13.7007 325.846 14.521C327.575 15.3267 328.893 16.4619 329.801 17.9268C330.71 19.3916 331.164 21.0981 331.164 23.0464C331.164 24.5112 330.907 25.8516 330.395 27.0674C329.882 28.2832 329.128 29.3379 328.131 30.2314C327.135 31.1104 325.92 31.7915 324.484 32.2749C323.063 32.7583 321.437 33 319.606 33H307.741V1.00781H313.278V28.6274H319.606C320.998 28.6274 322.14 28.3711 323.034 27.8584C323.927 27.3311 324.587 26.6426 325.011 25.793C325.451 24.9434 325.671 24.0132 325.671 23.0024C325.671 22.021 325.451 21.1274 325.011 20.3218C324.587 19.5161 323.927 18.8716 323.034 18.3882C322.14 17.9048 320.998 17.6631 319.606 17.6631H311.564V13.2905Z" fill="url(#paint0_linear_1865_35039)"/>
                        <defs>
                            <linearGradient id="paint0_linear_1865_35039" x1="137.555" y1="46.5254" x2="145.252" y2="-9.95184" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#18191F"/>
                                <stop offset="1" stop-color="#262B38"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </section>
        <section class="s-company-materials">
            <div class="l-default">
                <h2 class="s-company-materials__title">Материалы о компании</h2>
                <div class="s-company-materials__items"><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">История компании</div></a><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">Краткое описание</div></a><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">Полное описание</div></a><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">Каталог продуктов</div></a><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">Брендбук</div></a><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">Лого бук</div></a><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">Логотипы для полиграфии</div></a><a class="s-company-materials__item" href="#" download>
                        <div class="s-company-materials__item-icon">
                            <svg class="ico ico-mono-icon-download">
                                <use xlink:href="img/sprite-mono.svg#ico-mono-icon-download"></use>
                            </svg>
                        </div>
                        <div class="s-company-materials__item-title">Логотипы для web</div></a>
                </div>
            </div>
        </section>
        <section class="s-about-contacts">
            <div class="s-about-contacts__top">
                <div class="l-default">
                    <div class="s-about-contacts__title">Контакты для прессы</div>
                    <div class="s-about-contacts__subtitle">Пригасить спикера для учатстия в мероприятии или запросить дополнительную информацию</div>
                </div>
                <div class="s-about-contacts__text">нам о нас</div>
            </div>
            <div class="l-default">
                <form class="s-about-contacts__form form">
                    <div class="form__columns">
                        <div class="form__column">
                            <div class="form__textarea">
                                <label>Ваше предложение и наименование компании </label>
                                <textarea placeholder="Введите ваш предложение "></textarea>
                            </div>
                        </div>
                        <div class="form__column">
                            <div class="form__inputs">
                                <div class="form__input">
                                    <label>E-mail*</label>
                                    <input type="email" placeholder="Введите реальный E-mail на него придет письмо  подтверждения" required>
                                </div>
                                <div class="form__input">
                                    <label>Телефон</label>
                                    <input type="tel" placeholder="+7(ХХХ)ХХХХХХХ">
                                </div>
                                <div class="form__input">
                                    <label>ФИО</label>
                                    <input type="text" placeholder="Введите фамилию имя и отчество">
                                </div>
                                <div class="form__submit">
                                    <div class="form__checkbox">
                                        <input class="form__checkbox-input" type="checkbox">
                                        <div class="form__checkbox-btn"></div>
                                        <div class="form__checkbox-text">Я согласен на обработку персональных данных</div>
                                    </div>
                                    <button class="btn" type="submit">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="s-feedback">
            <div class="s-feedback__content">
                <div class="s-feedback__content-top">
                    <div class="l-default">
                        <div class="s-feedback__item">
                            <div class="s-feedback__item-text">Остались вопросы? Свяжитесь с нами</div>
                        </div>
                        <div class="s-feedback__item"><a class="s-feedback__item-btn" href="mailto:sale@graviton.ru"> Связаться с нами</a></div>
                    </div>
                </div>
                <div class="s-feedback__content-bottom">
                    <div class="l-default">
                        <div class="s-feedback__item">
                            <div class="s-feedback__item-note">*Вышеприведенные характеристики являются теоретическими величинами и зависят от дизайна продукта. Для предоставления точной информации об устройствах и для обеспечения ее соответствия с харакетристиками и функциями фактических продуктов компания Гравитон может вносить изменения в режиме реального времени. Сведения о продукции могут быть изменены без предварительного уведомления.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
