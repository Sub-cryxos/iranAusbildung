<?php get_header()?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style/post-archive.css">

    <!-- start of the hero section  -->

    <div class="container mt-5">
        <div class="row">
            <!-- for using api and making dynamic the picture you can use (style : background-image url(api)-->
            <div class="col-xxl-6 col-xl-6 col-md-12 col-sm-12">
                <div class="large-hero-sec">
                    <div class="hero-sec-category">
                        <!-- this must navigate user to the edge of categories -->
                        <a href="" class="category-btn">مقالات آموزشی</a>
                    </div>

                    <div class="hero-section-title">
                        <a href="#">چگونه میتوان در ابتدای ورود به آلمان ، صاحب اولین خانه خود شد؟</a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 small-hero-sec-wapper">
                <div class="small-hero-sec" id="bg_car">
                    <div class="hero-sec-category">
                        <!-- this must navigate user to the edge of categories -->
                        <a href="" class="category-btn">مقالات آموزشی</a>
                    </div>
                    <div class=" hero-section-title hero-section-title-sm">
                        <a href="#">راهنمای ثبت نام خودرو در آلمان</a>
                    </div>
                </div>

                <div class="small-hero-sec" id="bg_football">
                    <div class="hero-sec-category">
                        <!-- this must navigate user to the edge of categories -->
                        <a href="" class="category-btn">مقالات آموزشی</a>
                    </div>
                    <div class=" hero-section-title hero-section-title-sm">
                        <a href="#">آموزش فوتبال در آلمان</a>
                    </div>
                </div>

                <div class="small-hero-sec" id="bg_card">
                    <div class="hero-sec-category">
                        <!-- this must navigate user to the edge of categories -->
                        <a href="" class="category-btn">مقالات آموزشی</a>
                    </div>
                    <div class=" hero-section-title hero-section-title-sm">
                        <a href="#">چگونه از کارت عابر بانک خرید اینترنتی داشته باشیم؟</a>
                    </div>
                </div>

                <div class="small-hero-sec" id="bg_millitary">
                    <div class="hero-sec-category">
                        <!-- this must navigate user to the edge of categories -->
                        <a href="" class="category-btn">مقالات آموزشی</a>
                    </div>
                    <div class=" hero-section-title hero-section-title-sm">
                        <a href="#"> نحوه خرید سربازی در آلمان</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- finish of the hero section  -->

    <!-- start of the categories section  -->

    <div class="container mt-5 categories-sec">
        <div class="row">
            <div class="text-section mt-4">
                <p class=" text-center">دسته بندی مقالات</p>
            </div>
            <div class="d-flex justify-content-between align-items-center gap-2 top-m " id="wrapper-catefories">
                <div class="category_box_post active-category">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                            fill="none">
                            <path
                                d="M8.75065 52.5H61.2507V58.3333H8.75065V52.5ZM62.7352 24.8704C62.3418 23.6889 61.4952 22.712 60.3816 22.1546C59.2679 21.5972 57.9785 21.5051 56.7969 21.8983L43.7507 26.25L20.4173 17.5L14.584 20.4167L32.084 32.0833L20.4173 37.9167L8.75065 32.0833L5.83398 35L17.5007 46.6667L59.9294 30.7562C61.0678 30.3289 61.9962 29.4768 62.5194 28.3792C63.0426 27.2816 63.12 26.0239 62.7352 24.8704Z"
                                fill="white" />
                        </svg></span>

                    <a href="" class="d-flex align-items-center gap-2">
                        راهنمای محاجرت
                        <span><img src="./assets/Icons/ph_arrow-up.svg" alt=""></span>
                    </a>
                </div>

                <div class="category_box_post ">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70" fill="none">
                            <path
                                d="M37.7445 64.0383C44.5044 63.4089 50.8303 60.4317 55.6237 55.6238C67.0132 44.2342 67.0132 25.7658 55.6237 14.3763C44.2341 2.98668 25.7658 2.98668 14.3762 14.3763C2.98659 25.7658 2.98659 44.2342 14.3762 55.6238C17.2959 58.5499 20.8057 60.8204 24.6716 62.2839C28.5376 63.7474 32.671 64.3703 36.7966 64.1113C37.1141 64.1572 37.4378 64.1323 37.7445 64.0383ZM10.4328 31.6575C11.0565 27.0255 12.9834 22.6659 15.9891 19.0867L31.9083 35L28.7349 38.1733C25.6666 35.6942 22.2483 34.3583 18.9903 33.4833C17.0945 32.9758 15.2103 32.6083 13.4866 32.2788L13.4399 32.2671C12.3695 32.0629 11.3691 31.8675 10.4358 31.6575H10.4328ZM10.2316 36.0908C11.0074 36.2542 11.792 36.4058 12.5649 36.5575L12.6058 36.5633C14.3645 36.9046 16.1116 37.2429 17.8528 37.7096C20.6324 38.4563 23.2808 39.5063 25.617 41.2913L15.992 50.9163C12.4897 46.7448 10.4645 41.5326 10.2316 36.0908ZM28.7203 44.3742C30.6891 46.8883 31.7537 49.6417 32.5033 52.4621C32.8678 53.8329 33.1478 55.1688 33.4308 56.5221L33.6758 57.6742C33.8216 58.3742 33.982 59.0771 34.157 59.7771C28.6287 59.5969 23.3208 57.5664 19.0837 54.0108L28.7203 44.3742ZM38.6166 59.5292C38.366 58.6127 38.1443 57.6887 37.9516 56.7583L37.727 55.6879C37.4412 54.32 37.1291 52.8296 36.7324 51.3363C35.8545 48.0463 34.5099 44.52 31.8324 41.2621L34.9999 38.0946L50.9162 54.0108C47.4084 56.9569 43.1494 58.8678 38.6166 59.5292ZM38.0916 35L41.6266 31.4679C44.8758 34.2154 48.2766 35.7263 51.4412 36.7938C52.7449 37.2371 54.0574 37.6163 55.2649 37.9692C55.7287 38.1033 56.1778 38.2317 56.6066 38.36C57.6274 38.6692 58.5637 38.9667 59.4183 39.2963C58.6716 43.5786 56.8061 47.5874 54.0108 50.9163L38.0916 35ZM57.8578 34.1688L56.3937 33.74C55.2026 33.4026 54.0191 33.0389 52.8441 32.6492C50.0908 31.7158 47.3374 30.4908 44.7328 28.3617L54.0078 19.0838C57.7022 23.4846 59.7474 29.0354 59.7916 34.7813C59.1499 34.5625 58.4995 34.3613 57.8578 34.1688ZM50.9162 15.9892L41.6383 25.2671C39.5091 22.6625 38.2812 19.9092 37.3508 17.1558C36.9597 15.9803 36.596 14.7958 36.2599 13.6033C36.1141 13.1192 35.977 12.6321 35.8283 12.1421C35.6358 11.5004 35.4374 10.85 35.2187 10.2083C40.9641 10.2517 46.5149 12.2958 50.9162 15.9892ZM33.2033 18.5558C34.2737 21.7204 35.7816 25.1242 38.532 28.3733L34.9999 31.9083L19.0837 15.9892C22.4126 13.1938 26.4214 11.3283 30.7037 10.5817C31.0333 11.4363 31.3308 12.3696 31.637 13.3933L32.0308 14.735C32.3808 15.9425 32.7599 17.2521 33.2033 18.5558Z"
                                fill="#EC3A4C" />
                        </svg>
                    </span>

                    <a href="" class="d-flex align-items-center gap-2">
                        مقالات ورزشی

                    </a>
                </div>

                <div class="category_box_post ">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" fill="none">
                            <g clip-path="url(#clip0_834_12)">
                                <path
                                    d="M26.676 42.2121C13.0683 47.9812 4.50424 54.8147 5.80363 59.6641C7.63376 66.4942 28.2222 66.834 51.5446 60.4383C74.8671 54.0427 92.6005 43.7274 90.7704 36.8973C89.6241 32.4827 80.4647 30.9473 67.8897 31.8278"
                                    stroke="#EC3A4C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M75.4902 51.8625C75.0947 56.0333 73.6573 60.0378 71.3102 63.5081C68.963 66.9784 65.7814 69.8032 62.0577 71.7229C58.3339 73.6427 54.1874 74.5958 49.9991 74.4948C45.8108 74.3938 41.715 73.2418 38.0881 71.1448C35.1889 69.4724 32.6503 67.2414 30.6194 64.581M25.7676 52.4845C25.0478 46.5098 26.5073 40.476 29.8781 35.4908C33.2489 30.5056 38.3048 26.9035 44.1177 25.346C49.9305 23.7884 56.1101 24.3799 61.5219 27.0118C66.9337 29.6438 71.2146 34.1395 73.5785 39.6736"
                                    stroke="#EC3A4C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_834_12">
                                    <rect width="70" height="70" fill="white"
                                        transform="translate(35.1895 0.189087) rotate(30)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>

                    <a href="" class="d-flex align-items-center gap-2">
                        مقالات علمی
                        <!-- <span><img src="./assets/Icons/ph_arrow-up.svg" alt=""></span> -->
                    </a>
                </div>

                <div class="category_box_post ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                            fill="none">
                            <path
                                d="M52.5 41.5625C54.2405 41.5625 55.9097 40.8711 57.1404 39.6404C58.3711 38.4097 59.0625 36.7405 59.0625 35C59.0625 33.2595 58.3711 31.5903 57.1404 30.3596C55.9097 29.1289 54.2405 28.4375 52.5 28.4375C50.7595 28.4375 49.0903 29.1289 47.8596 30.3596C46.6289 31.5903 45.9375 33.2595 45.9375 35C45.9375 36.7405 46.6289 38.4097 47.8596 39.6404C49.0903 40.8711 50.7595 41.5625 52.5 41.5625ZM52.5 39.375C51.3397 39.375 50.2269 38.9141 49.4064 38.0936C48.5859 37.2731 48.125 36.1603 48.125 35C48.125 33.8397 48.5859 32.7269 49.4064 31.9064C50.2269 31.0859 51.3397 30.625 52.5 30.625C53.6603 30.625 54.7731 31.0859 55.5936 31.9064C56.4141 32.7269 56.875 33.8397 56.875 35C56.875 36.1603 56.4141 37.2731 55.5936 38.0936C54.7731 38.9141 53.6603 39.375 52.5 39.375ZM36.0938 19.1406C36.0938 20.446 35.5752 21.6979 34.6522 22.6209C33.7291 23.5439 32.4772 24.0625 31.1719 24.0625C29.8665 24.0625 28.6146 23.5439 27.6916 22.6209C26.7686 21.6979 26.25 20.446 26.25 19.1406C26.25 17.8353 26.7686 16.5834 27.6916 15.6603C28.6146 14.7373 29.8665 14.2188 31.1719 14.2188C32.4772 14.2188 33.7291 14.7373 34.6522 15.6603C35.5752 16.5834 36.0938 17.8353 36.0938 19.1406ZM22.9688 27.8906C22.9688 28.537 22.8414 29.177 22.5941 29.7741C22.3467 30.3713 21.9842 30.9139 21.5272 31.3709C21.0701 31.828 20.5275 32.1905 19.9304 32.4378C19.3332 32.6852 18.6932 32.8125 18.0469 32.8125C17.4005 32.8125 16.7605 32.6852 16.1634 32.4378C15.5662 32.1905 15.0236 31.828 14.5666 31.3709C14.1095 30.9139 13.747 30.3713 13.4997 29.7741C13.2523 29.177 13.125 28.537 13.125 27.8906C13.125 26.5853 13.6436 25.3334 14.5666 24.4103C15.4896 23.4873 16.7415 22.9688 18.0469 22.9688C19.3522 22.9688 20.6041 23.4873 21.5272 24.4103C22.4502 25.3334 22.9688 26.5853 22.9688 27.8906ZM18.0469 48.125C18.6932 48.125 19.3332 47.9977 19.9304 47.7503C20.5275 47.503 21.0701 47.1405 21.5272 46.6834C21.9842 46.2264 22.3467 45.6838 22.5941 45.0866C22.8414 44.4895 22.9688 43.8495 22.9688 43.2031C22.9688 42.5568 22.8414 41.9168 22.5941 41.3196C22.3467 40.7225 21.9842 40.1799 21.5272 39.7228C21.0701 39.2658 20.5275 38.9033 19.9304 38.6559C19.3332 38.4086 18.6932 38.2812 18.0469 38.2812C16.7415 38.2812 15.4896 38.7998 14.5666 39.7228C13.6436 40.6459 13.125 41.8978 13.125 43.2031C13.125 44.5085 13.6436 45.7604 14.5666 46.6834C15.4896 47.6064 16.7415 48.125 18.0469 48.125ZM35 53.0469C35 54.3522 34.4814 55.6041 33.5584 56.5272C32.6354 57.4502 31.3835 57.9688 30.0781 57.9688C28.7728 57.9688 27.5209 57.4502 26.5978 56.5272C25.6748 55.6041 25.1562 54.3522 25.1562 53.0469C25.1562 51.7415 25.6748 50.4896 26.5978 49.5666C27.5209 48.6436 28.7728 48.125 30.0781 48.125C31.3835 48.125 32.6354 48.6436 33.5584 49.5666C34.4814 50.4896 35 51.7415 35 53.0469Z"
                                fill="#EC3A4C" />
                            <path
                                d="M35.4373 67.8125C29.3306 67.3666 23.4336 65.3944 18.2873 62.0769C10.7659 57.6706 5.29979 50.4604 3.08855 42.0284C2.1355 38.3574 1.92455 34.5331 2.46807 30.7796C3.0116 27.026 4.29865 23.4186 6.25387 20.1687C14.4723 6.60625 32.8954 2.59656 49.1026 10.8587C58.7692 15.7916 65.9989 24.4016 67.517 32.7994C68.0215 35.1165 67.9647 37.5207 67.3513 39.8115C66.7379 42.1022 65.5857 44.2131 63.9907 45.9681C59.2701 51.1219 53.1779 51.0497 48.7504 50.9994H48.7351C45.7929 50.9469 43.9554 50.9994 43.5157 51.8744C43.6689 52.5481 43.9357 53.1956 44.3032 53.7841C45.408 55.3378 45.9629 57.2156 45.8801 59.1202C45.7973 61.0248 45.0815 62.8474 43.8461 64.2994C42.8088 65.4919 41.5105 66.4292 40.0522 67.0385C38.5938 67.6478 37.0146 67.9126 35.4373 67.8125ZM31.782 10.9375C27.4648 10.7908 23.184 11.7731 19.3626 13.7871C15.5412 15.8012 12.3114 18.7775 9.9923 22.4219C8.33756 25.1787 7.24958 28.2381 6.79207 31.4207C6.33457 34.6033 6.51674 37.8452 7.32793 40.9566C9.25144 48.261 13.9957 54.5033 20.5186 58.3122C27.8489 62.6609 37.2179 65.5309 40.4489 61.5344C42.1704 59.4169 41.6236 58.1109 40.4226 55.7987C39.8032 54.9612 39.404 53.9815 39.2618 52.9495C39.1197 51.9175 39.239 50.8663 39.6089 49.8925C41.3173 46.5237 45.117 46.5609 48.7964 46.6112C52.8104 46.6659 57.3648 46.7206 60.7664 43.0041C61.8903 41.736 62.6983 40.2199 63.1241 38.5797C63.5499 36.9395 63.5815 35.2219 63.2164 33.5672C61.952 26.5672 55.4814 19.0137 47.1207 14.7547C42.3809 12.2947 37.1264 10.9905 31.7864 10.9484L31.782 10.9375Z"
                                fill="#EC3A4C" />
                        </svg> </span>

                    <a href="" class="d-flex align-items-center gap-2">
                        مقالات هنری
                        <!-- <span><img src="./assets/Icons/ph_arrow-up.svg" alt=""></span> -->
                    </a>
                </div>


                <div class="category_box_post ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                            fill="none">
                            <path
                                d="M7.875 49.2188C5.6875 44.8438 4.375 40.0312 4.375 35C4.375 18.1562 18.1562 4.375 35 4.375V8.75C20.5625 8.75 8.75 20.5625 8.75 35C8.75 39.375 9.84375 43.3125 11.8125 47.0312L7.875 49.2188ZM61.25 35C61.25 49.4375 49.4375 61.25 35 61.25C28.6562 61.25 22.75 59.0625 18.1562 55.125L30.625 42.6562L27.5625 39.375L13.3438 53.5938C12.4688 54.4688 12.4688 55.7812 13.3438 56.6562C19.0312 62.3438 26.9062 65.625 35 65.625C51.8438 65.625 65.625 51.8438 65.625 35H61.25Z"
                                fill="#EC3A4C" />
                            <path
                                d="M39.3742 54.6875C39.1554 54.6875 38.7179 54.6875 38.4992 54.4688C37.8429 54.25 37.1867 53.5938 37.1867 52.7188L35.6554 41.7812L40.0304 41.125L40.9054 48.3438L45.7179 44.625V32.8125C45.7179 32.1562 45.9367 31.7188 46.3742 31.2812L53.3742 24.2813C55.3429 22.3125 56.6554 19.4688 56.6554 16.625V13.125H53.3742C50.5304 13.125 47.6867 14.2188 45.7179 16.4062L38.7179 23.4062C38.2804 23.8438 37.8429 24.0625 37.1867 24.0625H25.1554L21.4367 28.875L28.6554 29.75L27.9992 34.125L17.0617 32.5938C16.1867 32.5938 15.5304 31.9375 15.3117 31.2812C15.0929 30.625 15.0929 29.75 15.5304 29.0938L22.0929 20.3438C22.7492 19.9062 23.4054 19.6875 24.0617 19.6875H36.3117L42.8742 13.125C45.7179 10.2813 49.6554 8.75 53.5929 8.75H56.8742C59.2804 8.75 61.2492 10.7188 61.2492 13.125V16.4062C61.2492 20.5625 59.7179 24.2812 56.8742 27.125L50.3117 33.6875V45.9375C50.3117 46.5938 50.0929 47.25 49.4367 47.6875L40.6867 54.25C40.2492 54.4688 39.8117 54.6875 39.3742 54.6875Z"
                                fill="#EC3A4C" />
                        </svg></span>

                    <a href="" class="d-flex align-items-center gap-2">
                        آوسبیلدونگ
                        <!-- <span><img src="./assets/Icons/ph_arrow-up.svg" alt=""></span> -->
                    </a>
                </div>

                <div class="category_box_post ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                            fill="none">
                            <path
                                d="M14.5833 35H8.75L35 8.75L61.25 35H55.4167M14.5833 35V55.4167C14.5833 56.9638 15.1979 58.4475 16.2919 59.5415C17.3858 60.6354 18.8696 61.25 20.4167 61.25H49.5833C51.1304 61.25 52.6142 60.6354 53.7081 59.5415C54.8021 58.4475 55.4167 56.9638 55.4167 55.4167V35"
                                stroke="#EC3A4C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M29.166 35H40.8327V46.6667H29.166V35Z" stroke="#EC3A4C" stroke-width="4"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>

                    <a href="" class="d-flex align-items-center gap-2">
                        یافتن خانه در آلمان

                    </a>
                </div>

                <div class="category_box_post ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M35 58.3333C47.8873 58.3333 58.3333 47.8873 58.3333 35C58.3333 22.1127 47.8873 11.6667 35 11.6667C22.1127 11.6667 11.6667 22.1127 11.6667 35C11.6667 47.8873 22.1127 58.3333 35 58.3333ZM35 61.25C49.4973 61.25 61.25 49.4973 61.25 35C61.25 20.5027 49.4973 8.75 35 8.75C20.5027 8.75 8.75 20.5027 8.75 35C8.75 49.4973 20.5027 61.25 35 61.25Z"
                                fill="#EC3A4C" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.3472 40.8333C26.6149 46.4216 30.793 49.5833 35.0003 49.5833C39.209 49.5833 43.3857 46.4216 45.6534 40.8333H24.3472ZM35.0003 52.5C29.1115 52.5 24.0074 48.055 21.499 41.5625C21.4745 41.4998 21.4502 41.4371 21.4261 41.3743C20.7757 39.6375 22.167 37.9166 24.0234 37.9166H45.9786C47.8351 37.9166 49.2278 39.6375 48.5744 41.3743C48.5509 41.4371 48.5271 41.4998 48.503 41.5625C45.9932 48.055 40.889 52.5 35.0003 52.5Z"
                                fill="#EC3A4C" />
                            <path
                                d="M31.0647 32.728C31.2543 32.2059 31.1974 31.5686 31.0414 30.9882C30.8535 30.3197 30.5526 29.6884 30.1518 29.1215C29.3045 27.9125 27.9001 26.8028 26.0028 26.7211C24.0384 26.6394 22.5714 27.8863 21.6672 29.209C21.2329 29.8457 20.8916 30.541 20.6536 31.274C20.4451 31.9244 20.3343 32.5894 20.4072 33.1217C20.4239 33.2431 20.471 33.3583 20.544 33.4566C20.6171 33.555 20.7137 33.6334 20.825 33.6845C20.9364 33.7357 21.0588 33.758 21.181 33.7493C21.3032 33.7407 21.4213 33.7014 21.5243 33.635C22.1076 33.2617 22.7186 32.7498 23.2845 32.2773C23.5411 32.0615 23.7905 31.8544 24.0209 31.6721C24.8405 31.0246 25.4793 30.6557 26.0072 30.6294C26.5103 30.6046 27.0907 30.8919 27.8228 31.4403C28.0853 31.6357 28.3391 31.8428 28.6016 32.0586L28.8859 32.2905C29.2418 32.5778 29.6209 32.8723 30.003 33.1028C30.0952 33.1583 30.1985 33.1928 30.3056 33.2037C30.4127 33.2147 30.5208 33.2017 30.6223 33.1659C30.7238 33.1301 30.8161 33.0722 30.8926 32.9965C30.9691 32.9208 31.0278 32.8291 31.0647 32.728ZM38.8099 32.728C38.6203 32.2059 38.6786 31.5686 38.8347 30.9882C38.998 30.3815 39.2999 29.7296 39.7243 29.1215C40.5701 27.9125 41.9759 26.8028 43.8732 26.7211C45.8361 26.6394 47.3047 27.8863 48.2089 29.209C48.6668 29.8798 49.008 30.6061 49.2224 31.274C49.4295 31.9244 49.5403 32.5894 49.4674 33.1217C49.4505 33.2429 49.4035 33.3578 49.3305 33.456C49.2576 33.5542 49.1611 33.6324 49.05 33.6835C48.9389 33.7347 48.8167 33.757 48.6947 33.7485C48.5727 33.7401 48.4548 33.701 48.3518 33.635C47.7684 33.2617 47.1559 32.7498 46.5916 32.2773C46.3487 32.0724 46.1032 31.8706 45.8551 31.6721C45.0341 31.0246 44.3968 30.6557 43.8674 30.6294C43.3643 30.6046 42.7839 30.8919 42.0532 31.4403C41.7907 31.6357 41.537 31.8428 41.2745 32.0586L40.9886 32.2905C40.6353 32.5858 40.2626 32.8571 39.873 33.1028C39.7808 33.1586 39.6774 33.1933 39.5701 33.2044C39.4629 33.2154 39.3545 33.2026 39.2528 33.1668C39.1512 33.1309 39.0587 33.073 38.9821 32.9971C38.9055 32.9212 38.8467 32.8293 38.8099 32.728Z"
                                fill="#EC3A4C" />
                        </svg></span>

                    <a href="" class="d-flex align-items-center gap-2">
                        زندگی بهتر در آلمان
                        <!-- <span><img src="./assets/Icons/ph_arrow-up.svg" alt=""></span> -->
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- end of the categories section  -->

    <!-- the lastest news start -->

    <div class="container top-m-big">
        <div class="row">
            <div class="section-title col-12">
                <h1 class="">آخرین اخبار</h1>
            </div>

            <div class="col-12 news-boxs">
                <div class="news-box col-xxl-3 col-xl-3 col-sm-12">
                    <div desktop-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>
                        <div class="news-box-title">
                            <h1><a href="#">
                                    لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر
                                    ترکیب
                                    کنید و استفاده کنید

                                </a></h1>
                        </div>
                        <div class="shorthand">
                            <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر ترکیب
                                کنید
                                و استفاده کنید. طراحان از این متن برای استفاده در سمپل های خود استفاده میکنند و ...</p>
                        </div>
                        <footer class="box-news-footer">
                            <a href="">راهنمای محاجرت</a>
                            <span>زمان مطالعه 10 دقیقه</span>
                        </footer>
                    </div>

                    <div class="d-flex gap-2" mobile-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>

                        <div class="textes ">

                            <div class="news-box-title">
                                <h1><a href="#">
                                        لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب
                                        دیگر
                                        ترکیب
                                        کنید و استفاده کنید

                                    </a></h1>
                            </div>

                            <footer class="box-news-footer">
                                <a href="">راهنمای محاجرت</a>
                            </footer>
                        </div>
                    </div>
                </div>

                <div class="news-box col-xxl-3 col-xl-3 col-sm-12">
                    <div desktop-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>
                        <div class="news-box-title">
                            <h1><a href="#">
                                    لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر
                                    ترکیب
                                    کنید و استفاده کنید

                                </a></h1>
                        </div>
                        <div class="shorthand">
                            <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر ترکیب
                                کنید
                                و استفاده کنید. طراحان از این متن برای استفاده در سمپل های خود استفاده میکنند و ...</p>
                        </div>
                        <footer class="box-news-footer">
                            <a href="">راهنمای محاجرت</a>
                            <span>زمان مطالعه 10 دقیقه</span>
                        </footer>
                    </div>

                    <div class="d-flex gap-2" mobile-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>

                        <div class="textes ">

                            <div class="news-box-title">
                                <h1><a href="#">
                                        لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب
                                        دیگر
                                        ترکیب
                                        کنید و استفاده کنید

                                    </a></h1>
                            </div>

                            <footer class="box-news-footer">
                                <a href="">راهنمای محاجرت</a>
                            </footer>
                        </div>
                    </div>
                </div>

                <div class="news-box col-xxl-3 col-xl-3 col-sm-12">
                    <div desktop-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>
                        <div class="news-box-title">
                            <h1><a href="#">
                                    لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر
                                    ترکیب
                                    کنید و استفاده کنید

                                </a></h1>
                        </div>
                        <div class="shorthand">
                            <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر ترکیب
                                کنید
                                و استفاده کنید. طراحان از این متن برای استفاده در سمپل های خود استفاده میکنند و ...</p>
                        </div>
                        <footer class="box-news-footer">
                            <a href="">راهنمای محاجرت</a>
                            <span>زمان مطالعه 10 دقیقه</span>
                        </footer>
                    </div>

                    <div class="d-flex gap-2" mobile-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>

                        <div class="textes ">

                            <div class="news-box-title">
                                <h1><a href="#">
                                        لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب
                                        دیگر
                                        ترکیب
                                        کنید و استفاده کنید

                                    </a></h1>
                            </div>

                            <footer class="box-news-footer">
                                <a href="">راهنمای محاجرت</a>
                            </footer>
                        </div>
                    </div>
                </div>

                <div class="news-box col-xxl-3 col-xl-3 col-sm-12">
                    <div desktop-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>
                        <div class="news-box-title">
                            <h1><a href="#">
                                    لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر
                                    ترکیب
                                    کنید و استفاده کنید

                                </a></h1>
                        </div>
                        <div class="shorthand">
                            <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب دیگر ترکیب
                                کنید
                                و استفاده کنید. طراحان از این متن برای استفاده در سمپل های خود استفاده میکنند و ...</p>
                        </div>
                        <footer class="box-news-footer">
                            <a href="">راهنمای محاجرت</a>
                            <span>زمان مطالعه 10 دقیقه</span>
                        </footer>
                    </div>

                    <div class="d-flex gap-2" mobile-show>
                        <div class="news-box-pic">
                            <a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="news-pic"></a>
                        </div>

                        <div class="textes ">

                            <div class="news-box-title">
                                <h1><a href="#">
                                        لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب
                                        دیگر
                                        ترکیب
                                        کنید و استفاده کنید

                                    </a></h1>
                            </div>

                            <footer class="box-news-footer">
                                <a href="">راهنمای محاجرت</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- the lastest news finish  -->

    <!-- start of the video section  -->

    <div class="container-fluid video-offer mt-5">
        <div class="container ">
            <div class="row">
                <div class="section-title mt-5 col-12">
                    <h1 class="text-white"> ویدیو های پیشنهادی هر دسته</h1>
                </div>

                <div class="video-setion">

                    <div class="tab-title ">
                        <ul class="perfect-centering tab-title-ul nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">ویدیو های علمی</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">ویدیو های ورزشی</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">ویدیو های هنری</button>
                            </li>

                        </ul>
                    </div>


                    <div class="tab-content " id="pills-tabContent">
                        <div class="tab-pane fade show active video-wrapper" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">

                            <div class="video-box ">
                                <video class="video" poster="./assets/Icons/video-poster.svg"
                                    src="./assets/videos/Pexels Videos 2098988.mp4" controls>


                                </video>

                                <div class="video-text-box">
                                    <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب
                                        دیگر ترکیب کنید و استفاده کنید</p>
                                </div>
                                <footer class="box-news-footer mt-3">
                                    <a href="">راهنمای محاجرت</a>
                                    <span>زمان مطالعه 10 دقیقه</span>
                                </footer>
                            </div>

                            <div class="video-box ">
                                <video class="video" poster="./assets/Icons/video-poster.svg"
                                    src="./assets/videos/Pexels Videos 2098988.mp4" controls>


                                </video>

                                <div class="video-text-box">
                                    <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های جذاب
                                        دیگر ترکیب کنید و استفاده کنید</p>
                                </div>
                                <footer class="box-news-footer mt-3">
                                    <a href="">راهنمای محاجرت</a>
                                    <span>زمان مطالعه 10 دقیقه</span>
                                </footer>
                            </div>


                        </div>


                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">...</div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">...</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- finish  of the video section  -->

    <!-- the recommanded articles are started -->

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="section-title col-12">
                <h1 class=""> مقالات پیشنهادی</h1>
            </div>
            <div class="recommended-color col-xx-8 col-xl-8 col-md-8 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class=" col-xxl-10 col-xl-10   col-md-12  col-sm-12  offset-xxl-2 offset-xl-2 offset-sm-0">
                            <div class="recommended-box-wrapepr">

                                <div class="recommended-box" desktop-show>
                                    <div class="recommended-pic">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="recommended picture">
                                        </a>
                                    </div>

                                    <div class="recommended-info">
                                        <div class="recommended-title">
                                            <h1><a href="">لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را
                                                    با
                                                    المان
                                                    های جذاب دیگر ترکیب کنید و استفاده کنید </a></h1>
                                        </div>

                                        <div class="recommended-text">
                                            <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های
                                                جذاب
                                                دیگر ترکیب کنید و استفاده کنید. طراحان از این متن برای استفاده در سمپل
                                                های
                                                خود
                                                استفاده میکنند و ...</p>
                                        </div>

                                        <footer class="box-news-footer mt-4">
                                            <a href="">راهنمای محاجرت</a>
                                            <span>زمان مطالعه 10 دقیقه</span>
                                        </footer>
                                    </div>
                                </div>


                                <div class="d-flex gap-2" mobile-show>
                                    <div class="recommended-pic">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="recommended picture">
                                        </a>
                                    </div>
                                    <div class="textes ">

                                        <div class="recommended-info">
                                            <div class="recommended-title">
                                                <h1><a href="">لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن
                                                        را با
                                                        المان
                                                        های جذاب دیگر ترکیب کنید و استفاده کنید </a></h1>
                                            </div>

                                            <footer class="box-news-footer ">
                                                <a href="">راهنمای محاجرت</a>

                                            </footer>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="recommended-box-wrapepr">

                                <div class="recommended-box" desktop-show>
                                    <div class="recommended-pic">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="recommended picture">
                                        </a>
                                    </div>

                                    <div class="recommended-info">
                                        <div class="recommended-title">
                                            <h1><a href="">لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را
                                                    با
                                                    المان
                                                    های جذاب دیگر ترکیب کنید و استفاده کنید </a></h1>
                                        </div>

                                        <div class="recommended-text">
                                            <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های
                                                جذاب
                                                دیگر ترکیب کنید و استفاده کنید. طراحان از این متن برای استفاده در سمپل
                                                های
                                                خود
                                                استفاده میکنند و ...</p>
                                        </div>

                                        <footer class="box-news-footer mt-4">
                                            <a href="">راهنمای محاجرت</a>
                                            <span>زمان مطالعه 10 دقیقه</span>
                                        </footer>
                                    </div>
                                </div>


                                <div class="d-flex gap-2" mobile-show>
                                    <div class="recommended-pic">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="recommended picture">
                                        </a>
                                    </div>
                                    <div class="textes ">

                                        <div class="recommended-info">
                                            <div class="recommended-title">
                                                <h1><a href="">لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن
                                                        را با
                                                        المان
                                                        های جذاب دیگر ترکیب کنید و استفاده کنید </a></h1>
                                            </div>

                                            <footer class="box-news-footer ">
                                                <a href="">راهنمای محاجرت</a>

                                            </footer>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="recommended-box-wrapepr">

                                <div class="recommended-box" desktop-show>
                                    <div class="recommended-pic">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="recommended picture">
                                        </a>
                                    </div>

                                    <div class="recommended-info">
                                        <div class="recommended-title">
                                            <h1><a href="">لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را
                                                    با
                                                    المان
                                                    های جذاب دیگر ترکیب کنید و استفاده کنید </a></h1>
                                        </div>

                                        <div class="recommended-text">
                                            <p>لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن را با المان های
                                                جذاب
                                                دیگر ترکیب کنید و استفاده کنید. طراحان از این متن برای استفاده در سمپل
                                                های
                                                خود
                                                استفاده میکنند و ...</p>
                                        </div>

                                        <footer class="box-news-footer mt-4">
                                            <a href="">راهنمای محاجرت</a>
                                            <span>زمان مطالعه 10 دقیقه</span>
                                        </footer>
                                    </div>
                                </div>


                                <div class="d-flex gap-2" mobile-show>
                                    <div class="recommended-pic">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/image 10.png" alt="recommended picture">
                                        </a>
                                    </div>
                                    <div class="textes ">

                                        <div class="recommended-info">
                                            <div class="recommended-title">
                                                <h1><a href="">لورم ایپسوم متن ساختگی برای طراحان میباشد که میتوانید آن
                                                        را با
                                                        المان
                                                        های جذاب دیگر ترکیب کنید و استفاده کنید </a></h1>
                                            </div>

                                            <footer class="box-news-footer ">
                                                <a href="">راهنمای محاجرت</a>

                                            </footer>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>


                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-md-4 col-sm-12">

                <div class="d-flex flex-column gap-2">
                    <div class="ad_box">
                        ads
                    </div>

                    <div class="ad_box">
                        ads
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- the recommanded articles are finished -->

    <!-- the most popular cities in germany start  -->

    <div class="container mt-5">
        <div class="row">
            <div class="section-title col-12">
                <h1 class=""> محبوب ترین شهر ها</h1>
            </div>
            <div class="d-flex" mobile-flex>

                <div class="col-xxl-3 col-xl-3 col-sm-6 popular-city-boxs">
                    <div class="popular-city-box">
                        <div class="popular-city-pic"><a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/berlin.png" alt=""></a></div>
                        <div class="popular-city-title">
                            <h1><a href="">برلین ( Berlin)</a></h1>
                        </div>
                        <div class="popular-navigate-btn"><a href="">مشاهده اطلاعات
                                <span> <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_980_1769)">
                                            <path
                                                d="M8.67287 4.63338L3.33398 10L8.67287 15.3667C8.72109 15.43 8.78235 15.4823 8.8525 15.5198C8.92266 15.5574 9.00007 15.5795 9.07949 15.5846C9.15892 15.5896 9.2385 15.5776 9.31287 15.5492C9.38723 15.5208 9.45463 15.4768 9.5105 15.4202C9.56637 15.3635 9.60942 15.2955 9.63672 15.2207C9.66402 15.1459 9.67493 15.0662 9.66873 14.9868C9.66253 14.9075 9.63935 14.8304 9.60077 14.7608C9.56219 14.6912 9.5091 14.6307 9.4451 14.5834L5.45065 10.5556L16.0784 10.5556C16.2258 10.5556 16.3671 10.4971 16.4713 10.3929C16.5755 10.2887 16.634 10.1474 16.634 10C16.634 9.85271 16.5755 9.7114 16.4713 9.60721C16.3671 9.50302 16.2258 9.44449 16.0784 9.44449L5.45065 9.44449L9.4451 5.41672C9.54897 5.3121 9.60704 5.17051 9.60652 5.02308C9.60599 4.87566 9.54693 4.73448 9.44232 4.6306C9.3377 4.52673 9.19611 4.46866 9.04869 4.46918C8.90126 4.4697 8.76008 4.52877 8.65621 4.63338L8.67287 4.63338Z"
                                                fill="#EC3A4C" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_980_1769">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(0 20) rotate(-90)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </a></div>
                    </div>


                </div>

                <div class="col-xxl-3 popular-city-boxs">
                    <div class="popular-city-box">
                        <div class="popular-city-pic"><a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/berlin.png" alt=""></a></div>
                        <div class="popular-city-title">
                            <h1><a href="">برلین ( Berlin)</a></h1>
                        </div>
                        <div class="popular-navigate-btn"><a href="">مشاهده اطلاعات
                                <span> <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_980_1769)">
                                            <path
                                                d="M8.67287 4.63338L3.33398 10L8.67287 15.3667C8.72109 15.43 8.78235 15.4823 8.8525 15.5198C8.92266 15.5574 9.00007 15.5795 9.07949 15.5846C9.15892 15.5896 9.2385 15.5776 9.31287 15.5492C9.38723 15.5208 9.45463 15.4768 9.5105 15.4202C9.56637 15.3635 9.60942 15.2955 9.63672 15.2207C9.66402 15.1459 9.67493 15.0662 9.66873 14.9868C9.66253 14.9075 9.63935 14.8304 9.60077 14.7608C9.56219 14.6912 9.5091 14.6307 9.4451 14.5834L5.45065 10.5556L16.0784 10.5556C16.2258 10.5556 16.3671 10.4971 16.4713 10.3929C16.5755 10.2887 16.634 10.1474 16.634 10C16.634 9.85271 16.5755 9.7114 16.4713 9.60721C16.3671 9.50302 16.2258 9.44449 16.0784 9.44449L5.45065 9.44449L9.4451 5.41672C9.54897 5.3121 9.60704 5.17051 9.60652 5.02308C9.60599 4.87566 9.54693 4.73448 9.44232 4.6306C9.3377 4.52673 9.19611 4.46866 9.04869 4.46918C8.90126 4.4697 8.76008 4.52877 8.65621 4.63338L8.67287 4.63338Z"
                                                fill="#EC3A4C" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_980_1769">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(0 20) rotate(-90)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </a></div>
                    </div>


                </div>

                <div class="col-xxl-3 popular-city-boxs">
                    <div class="popular-city-box">
                        <div class="popular-city-pic"><a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/berlin.png" alt=""></a></div>
                        <div class="popular-city-title">
                            <h1><a href="">برلین ( Berlin)</a></h1>
                        </div>
                        <div class="popular-navigate-btn"><a href="">مشاهده اطلاعات
                                <span> <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_980_1769)">
                                            <path
                                                d="M8.67287 4.63338L3.33398 10L8.67287 15.3667C8.72109 15.43 8.78235 15.4823 8.8525 15.5198C8.92266 15.5574 9.00007 15.5795 9.07949 15.5846C9.15892 15.5896 9.2385 15.5776 9.31287 15.5492C9.38723 15.5208 9.45463 15.4768 9.5105 15.4202C9.56637 15.3635 9.60942 15.2955 9.63672 15.2207C9.66402 15.1459 9.67493 15.0662 9.66873 14.9868C9.66253 14.9075 9.63935 14.8304 9.60077 14.7608C9.56219 14.6912 9.5091 14.6307 9.4451 14.5834L5.45065 10.5556L16.0784 10.5556C16.2258 10.5556 16.3671 10.4971 16.4713 10.3929C16.5755 10.2887 16.634 10.1474 16.634 10C16.634 9.85271 16.5755 9.7114 16.4713 9.60721C16.3671 9.50302 16.2258 9.44449 16.0784 9.44449L5.45065 9.44449L9.4451 5.41672C9.54897 5.3121 9.60704 5.17051 9.60652 5.02308C9.60599 4.87566 9.54693 4.73448 9.44232 4.6306C9.3377 4.52673 9.19611 4.46866 9.04869 4.46918C8.90126 4.4697 8.76008 4.52877 8.65621 4.63338L8.67287 4.63338Z"
                                                fill="#EC3A4C" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_980_1769">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(0 20) rotate(-90)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </a></div>
                    </div>


                </div>

                <div class="col-xxl-3 popular-city-boxs">
                    <div class="popular-city-box">
                        <div class="popular-city-pic"><a href=""><img src="<?php echo get_template_directory_uri()?>/assets/images/berlin.png" alt=""></a></div>
                        <div class="popular-city-title">
                            <h1><a href="">برلین ( Berlin)</a></h1>
                        </div>
                        <div class="popular-navigate-btn"><a href="">مشاهده اطلاعات
                                <span> <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_980_1769)">
                                            <path
                                                d="M8.67287 4.63338L3.33398 10L8.67287 15.3667C8.72109 15.43 8.78235 15.4823 8.8525 15.5198C8.92266 15.5574 9.00007 15.5795 9.07949 15.5846C9.15892 15.5896 9.2385 15.5776 9.31287 15.5492C9.38723 15.5208 9.45463 15.4768 9.5105 15.4202C9.56637 15.3635 9.60942 15.2955 9.63672 15.2207C9.66402 15.1459 9.67493 15.0662 9.66873 14.9868C9.66253 14.9075 9.63935 14.8304 9.60077 14.7608C9.56219 14.6912 9.5091 14.6307 9.4451 14.5834L5.45065 10.5556L16.0784 10.5556C16.2258 10.5556 16.3671 10.4971 16.4713 10.3929C16.5755 10.2887 16.634 10.1474 16.634 10C16.634 9.85271 16.5755 9.7114 16.4713 9.60721C16.3671 9.50302 16.2258 9.44449 16.0784 9.44449L5.45065 9.44449L9.4451 5.41672C9.54897 5.3121 9.60704 5.17051 9.60652 5.02308C9.60599 4.87566 9.54693 4.73448 9.44232 4.6306C9.3377 4.52673 9.19611 4.46866 9.04869 4.46918C8.90126 4.4697 8.76008 4.52877 8.65621 4.63338L8.67287 4.63338Z"
                                                fill="#EC3A4C" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_980_1769">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(0 20) rotate(-90)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- the most popular cities in germany finish  -->

    <?php get_footer()?>

</body>

</html>