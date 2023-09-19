<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style/index.css">
	<?php wp_head(); ?>
</head>

<body dir="rtl">

    <!-- header started  -->
    <header class="container-fluid main_header">
        <div class="top_bar">
            <!-- the logo is here -->

            <div class="logo_part">
                <div class="logo_image">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/logo.svg" alt="">
                </div>

                <!-- the logo text is here -->
                <div class="logo_text">
                    <p>ایران آوسبیلدونگ </p>
                </div>
            </div>

            <!-- form enter part s -->
            <div class="form_enter">
                <div class="enter_buttons">
                    <!-- log / sign in button  -->
                    <div class="log_sign">
                        <a href="" class="log_sign-button">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.2"
                                        d="M22.5 12.75V15H5.72441C5.0793 15 4.45136 14.7921 3.93375 14.4071C3.41614 14.022 3.03644 13.4804 2.85097 12.8625L1.53191 8.46563C1.4983 8.35365 1.49133 8.23537 1.51156 8.12022C1.53179 8.00507 1.57866 7.89625 1.64843 7.80243C1.71819 7.70862 1.80893 7.63242 1.91338 7.57991C2.01784 7.5274 2.13312 7.50003 2.25003 7.5H3.00003L5.25003 9.75H8.71035L7.53941 6.23719C7.50185 6.12452 7.49158 6.00454 7.50946 5.88712C7.52733 5.76971 7.57283 5.65822 7.64222 5.56183C7.71161 5.46544 7.80289 5.38691 7.90856 5.3327C8.01423 5.27848 8.13127 5.25014 8.25003 5.25H9.00003L13.5 9.75H19.5C20.2957 9.75 21.0587 10.0661 21.6214 10.6287C22.184 11.1913 22.5 11.9544 22.5 12.75Z"
                                        fill="white" />
                                    <path
                                        d="M21.0001 20.25C21.0001 20.4489 20.9211 20.6397 20.7804 20.7803C20.6398 20.921 20.449 21 20.2501 21H6.75011C6.55119 21 6.36043 20.921 6.21978 20.7803C6.07912 20.6397 6.00011 20.4489 6.00011 20.25C6.00011 20.0511 6.07912 19.8603 6.21978 19.7197C6.36043 19.579 6.55119 19.5 6.75011 19.5H20.2501C20.449 19.5 20.6398 19.579 20.7804 19.7197C20.9211 19.8603 21.0001 20.0511 21.0001 20.25ZM23.2501 12.75V15C23.2501 15.1989 23.1711 15.3897 23.0304 15.5303C22.8898 15.671 22.699 15.75 22.5001 15.75H5.72542C4.91802 15.7537 4.13126 15.4951 3.48353 15.013C2.83581 14.531 2.36216 13.8516 2.13386 13.0772L0.814794 8.68125C0.747593 8.45737 0.733641 8.22089 0.774053 7.99067C0.814464 7.76044 0.90812 7.54285 1.04755 7.35524C1.18698 7.16764 1.36832 7.01521 1.57711 6.91013C1.7859 6.80505 2.01636 6.75021 2.25011 6.75H3.00011C3.19875 6.75009 3.38925 6.82899 3.52979 6.96938L5.56136 9H7.66979L6.82604 6.47438C6.75085 6.24881 6.73035 6.0086 6.76625 5.77355C6.80214 5.53851 6.8934 5.31537 7.03249 5.12252C7.17158 4.92968 7.35452 4.77267 7.56623 4.66443C7.77793 4.55619 8.01234 4.49983 8.25011 4.5H9.00011C9.09863 4.49992 9.1962 4.51926 9.28724 4.5569C9.37829 4.59454 9.46103 4.64975 9.53073 4.71938L13.8114 9H19.5001C20.4947 9 21.4485 9.39509 22.1518 10.0984C22.855 10.8016 23.2501 11.7554 23.2501 12.75ZM21.7501 12.75C21.7501 12.1533 21.5131 11.581 21.0911 11.159C20.6691 10.7371 20.0968 10.5 19.5001 10.5H13.5001C13.3015 10.4999 13.111 10.421 12.9704 10.2806L8.68979 6H8.25011L9.42104 9.51281C9.4586 9.62548 9.46887 9.74546 9.45099 9.86288C9.43312 9.98029 9.38762 10.0918 9.31823 10.1882C9.24885 10.2846 9.15756 10.3631 9.05189 10.4173C8.94622 10.4715 8.82919 10.4999 8.71042 10.5H5.25011C5.15159 10.5001 5.05402 10.4807 4.96297 10.4431C4.87192 10.4055 4.78919 10.3503 4.71948 10.2806L2.68979 8.25H2.25011L3.56917 12.6469C3.70631 13.1117 3.99074 13.5193 4.37964 13.8084C4.76853 14.0976 5.24083 14.2525 5.72542 14.25H21.7501V12.75Z"
                                        fill="white" />
                                </svg>
                            </span>
                            <p> پذیرش پرونده</p>
                        </a>
                    </div>

                    <!-- consult request  -->
                    <div class="consult_request">
                        <a href="" class="consult request-button">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2"
                                        d="M21 12C21.0002 13.5806 20.5841 15.1333 19.7937 16.502C19.0033 17.8708 17.8663 19.0072 16.4972 19.797C15.1281 20.5868 13.5752 21.0021 11.9946 21.0011C10.414 21.0002 8.86158 20.583 7.49344 19.7916L3.98813 20.9606C3.85598 21.0047 3.71417 21.0111 3.57859 20.9791C3.44301 20.9471 3.31903 20.878 3.22052 20.7795C3.12202 20.681 3.0529 20.557 3.02091 20.4214C2.98891 20.2858 2.99531 20.144 3.03938 20.0119L4.20844 16.5066C3.51741 15.3113 3.11064 13.9731 3.01959 12.5955C2.92854 11.2179 3.15566 9.83775 3.68337 8.56195C4.21108 7.28615 5.02523 6.14886 6.06284 5.23807C7.10044 4.32729 8.33367 3.66744 9.66711 3.30956C11.0006 2.95169 12.3985 2.9054 13.7527 3.17426C15.1069 3.44312 16.381 4.01994 17.4766 4.86007C18.5722 5.70021 19.4598 6.78114 20.0708 8.01923C20.6818 9.25732 20.9997 10.6194 21 12Z"
                                        fill="white" />
                                    <path
                                        d="M11.9999 2.25C10.3166 2.24963 8.66188 2.68508 7.19679 3.51396C5.7317 4.34285 4.50616 5.53692 3.63947 6.97997C2.77277 8.42301 2.29444 10.0659 2.25104 11.7486C2.20764 13.4314 2.60065 15.0967 3.39181 16.5825L2.32774 19.7747C2.2396 20.039 2.22681 20.3226 2.2908 20.5938C2.35479 20.8649 2.49304 21.1129 2.69004 21.3099C2.88704 21.5069 3.13502 21.6451 3.40618 21.7091C3.67733 21.7731 3.96095 21.7603 4.22524 21.6722L7.41743 20.6081C8.72503 21.3036 10.1739 21.6921 11.654 21.744C13.1342 21.7959 14.6067 21.51 15.9598 20.9079C17.3129 20.3057 18.5111 19.4033 19.4634 18.269C20.4156 17.1346 21.097 15.7983 21.4557 14.3613C21.8144 12.9244 21.841 11.4246 21.5335 9.97578C21.226 8.52701 20.5925 7.16732 19.6811 5.99992C18.7697 4.83253 17.6043 3.88811 16.2733 3.23836C14.9424 2.58861 13.481 2.25061 11.9999 2.25ZM11.9999 20.25C10.5496 20.251 9.12471 19.8691 7.86931 19.1428C7.75537 19.0767 7.62603 19.0418 7.49431 19.0416C7.41362 19.0416 7.33349 19.0549 7.25712 19.0809L3.74993 20.25L4.91899 16.7438C4.95269 16.643 4.9646 16.5362 4.95394 16.4305C4.94327 16.3248 4.91027 16.2226 4.85712 16.1306C3.94772 14.5584 3.5826 12.7299 3.8184 10.929C4.0542 9.12801 4.87774 7.4552 6.16126 6.17006C7.44479 4.88491 9.11655 4.05925 10.9172 3.82118C12.7179 3.5831 14.5468 3.94591 16.1202 4.85333C17.6936 5.76074 18.9236 7.16204 19.6193 8.83983C20.3151 10.5176 20.4377 12.3781 19.9681 14.1327C19.4986 15.8873 18.4632 17.4379 17.0224 18.5439C15.5817 19.65 13.8163 20.2497 11.9999 20.25ZM15.7499 10.5C15.7499 10.6989 15.6709 10.8897 15.5303 11.0303C15.3896 11.171 15.1988 11.25 14.9999 11.25H8.99993C8.80102 11.25 8.61025 11.171 8.4696 11.0303C8.32895 10.8897 8.24993 10.6989 8.24993 10.5C8.24993 10.3011 8.32895 10.1103 8.4696 9.96967C8.61025 9.82902 8.80102 9.75 8.99993 9.75H14.9999C15.1988 9.75 15.3896 9.82902 15.5303 9.96967C15.6709 10.1103 15.7499 10.3011 15.7499 10.5ZM15.7499 13.5C15.7499 13.6989 15.6709 13.8897 15.5303 14.0303C15.3896 14.171 15.1988 14.25 14.9999 14.25H8.99993C8.80102 14.25 8.61025 14.171 8.4696 14.0303C8.32895 13.8897 8.24993 13.6989 8.24993 13.5C8.24993 13.3011 8.32895 13.1103 8.4696 12.9697C8.61025 12.829 8.80102 12.75 8.99993 12.75H14.9999C15.1988 12.75 15.3896 12.829 15.5303 12.9697C15.6709 13.1103 15.7499 13.3011 15.7499 13.5Z"
                                        fill="white" />
                                </svg>

                            </span>

                            <p> درخواست مشاوره</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends here  -->

        <!-- nav bar started  -->
        <nav class="nav_bar container-fluid">
        <!-- the navbar items -->
        <div class="nav_wrapper">
            <ul class="nav_items">
                <div class="nav_item   ">
                    <li class="">
                        <a href="" class=" active_nav_bar">صفحه اصلی </a>
                    </li>
                </div>

                <div class="nav_item">
                    <li class=""><a href="" class="">لیست مشاغل</a></li>
                </div>

                <div class="nav_item">
                    <li class=""><a href="" class="">

                            خدمات ما
                            <span class="nav_arrow">
                                <svg width="13" height="6" viewBox="0 0 13 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.50003 5.57143C6.44675 5.57211 6.39393 5.56103 6.34496 5.53889C6.29598 5.51674 6.25195 5.48403 6.21567 5.44286L2.55961 1.58571C2.39712 1.41429 2.39712 1.14857 2.55961 0.977143C2.7221 0.805715 2.97397 0.805715 3.13646 0.977143L6.50816 4.53429L9.87173 0.985715C10.0342 0.814286 10.2861 0.814286 10.4486 0.985715C10.6111 1.15714 10.6111 1.42286 10.4486 1.59429L6.79252 5.45143C6.71127 5.53714 6.60565 5.58 6.50816 5.58L6.50003 5.57143Z"
                                        fill="#1D1E22" />
                                </svg>
                            </span>
                        </a></li>
                </div>

                <div class="nav_item">
                    <li class=""><a href="" class="">
                            مطالب منتخب
                            <span class="nav_arrow">
                                <svg width="13" height="6" viewBox="0 0 13 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.50003 5.57143C6.44675 5.57211 6.39393 5.56103 6.34496 5.53889C6.29598 5.51674 6.25195 5.48403 6.21567 5.44286L2.55961 1.58571C2.39712 1.41429 2.39712 1.14857 2.55961 0.977143C2.7221 0.805715 2.97397 0.805715 3.13646 0.977143L6.50816 4.53429L9.87173 0.985715C10.0342 0.814286 10.2861 0.814286 10.4486 0.985715C10.6111 1.15714 10.6111 1.42286 10.4486 1.59429L6.79252 5.45143C6.71127 5.53714 6.60565 5.58 6.50816 5.58L6.50003 5.57143Z"
                                        fill="#1D1E22" />
                                </svg>

                            </span>
                        </a></li>
                </div>

                <div class="nav_item">
                    <li class=""><a href="" class="">
                            ارتباط با ما
                        </a></li>
                </div>

                <div class="nav_item">
                    <li class=""><a href="" class="">
                            درباره ما
                        </a></li>
                </div>
            </ul>
        </div>

        <!-- form enter part  -->
        <div class="form_enter nav-part">
            <div class="enter_buttons">
                <!-- log / sign in button  -->

                <div class="log_sign">
                    <a href="" class="log_sign-button">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 10C14.2091 10 16 8.20914 16 6C16 3.79086 14.2091 2 12 2C9.79086 2 8 3.79086 8 6C8 8.20914 9.79086 10 12 10Z"
                                    fill="black" />
                                <path opacity="0.5"
                                    d="M20 17.5C20 19.985 20 22 12 22C4 22 4 19.985 4 17.5C4 15.015 7.582 13 12 13C16.418 13 20 15.015 20 17.5Z"
                                    fill="black" />
                            </svg>
                        </span>

                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav bar finished  -->

    <!-- the responsive header started  -->

    <div class="mobile-header container-fluid">
        <div class="row ">
            <div class="col-3">
                <button class="side-activator">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <rect width="30" height="30" rx="5" fill="#25262A" />
                        <path
                            d="M21.7551 15.4898H8.69941C8.51392 15.4898 8.33602 15.4043 8.20485 15.2522C8.07369 15.1001 8 14.8937 8 14.6786C8 14.4634 8.07369 14.2571 8.20485 14.1049C8.33602 13.9528 8.51392 13.8673 8.69941 13.8673H21.7551C21.9406 13.8673 22.1185 13.9528 22.2497 14.1049C22.3809 14.2571 22.4545 14.4634 22.4545 14.6786C22.4545 14.8937 22.3809 15.1001 22.2497 15.2522C22.1185 15.4043 21.9406 15.4898 21.7551 15.4898ZM21.7551 10.6224H8.69941C8.51392 10.6224 8.33602 10.537 8.20485 10.3848C8.07369 10.2327 8 10.0264 8 9.81122C8 9.59607 8.07369 9.38974 8.20485 9.2376C8.33602 9.08547 8.51392 9 8.69941 9H21.7551C21.9406 9 22.1185 9.08547 22.2497 9.2376C22.3809 9.38974 22.4545 9.59607 22.4545 9.81122C22.4545 10.0264 22.3809 10.2327 22.2497 10.3848C22.1185 10.537 21.9406 10.6224 21.7551 10.6224ZM21.7551 20.3571H8.69941C8.51392 20.3571 8.33602 20.2717 8.20485 20.1195C8.07369 19.9674 8 19.7611 8 19.5459C8 19.3308 8.07369 19.1244 8.20485 18.9723C8.33602 18.8202 8.51392 18.7347 8.69941 18.7347H21.7551C21.9406 18.7347 22.1185 18.8202 22.2497 18.9723C22.3809 19.1244 22.4545 19.3308 22.4545 19.5459C22.4545 19.7611 22.3809 19.9674 22.2497 20.1195C22.1185 20.2717 21.9406 20.3571 21.7551 20.3571Z"
                            fill="white" />
                    </svg>
                </button>
            </div>

            <div class="col-6">
                <div class="top-bar">
                    <div class="logo-top"><img src="<?php echo get_template_directory_uri() ?> ?>/assets/images/logo.svg" alt="logo"></div>
                    <div class="text-top"> <a href="#">ایـــران آوسـبـیـلـدونـــگ</a></div>
                </div>
            </div>


            <div class="col-3">
                <a href="" class="  ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                            fill="none">
                            <rect width="30" height="30" rx="5" fill="#25262A" />
                            <path opacity="0.2"
                                d="M21.6155 18.6461C21.5053 19.4697 21.0997 20.2253 20.4742 20.7722C19.8487 21.3192 19.0458 21.6204 18.2148 21.6198C15.6562 21.6198 13.2023 20.6033 11.393 18.7941C9.58381 16.9849 8.56738 14.531 8.56738 11.9723C8.56675 11.1414 8.86793 10.3385 9.41491 9.71295C9.96189 9.08742 10.7174 8.68183 11.5411 8.57162C11.6628 8.55716 11.786 8.58251 11.8921 8.64389C11.9982 8.70527 12.0817 8.79938 12.1298 8.91212L13.6287 12.2603C13.6656 12.3463 13.6806 12.4401 13.6724 12.5333C13.6642 12.6265 13.6331 12.7162 13.5819 12.7945L12.066 14.597C12.0122 14.6781 11.9804 14.7719 11.9737 14.869C11.967 14.9661 11.9856 15.0633 12.0277 15.151C12.6143 16.352 13.8557 17.5785 15.0602 18.1595C15.1485 18.2014 15.2461 18.2196 15.3435 18.2122C15.4409 18.2049 15.5347 18.1723 15.6157 18.1176L17.3891 16.6067C17.4677 16.5544 17.5581 16.5225 17.6521 16.5139C17.7461 16.5054 17.8408 16.5204 17.9275 16.5577L21.2729 18.0566C21.3862 18.1045 21.4808 18.1878 21.5426 18.2942C21.6044 18.4005 21.63 18.524 21.6155 18.6461Z"
                                fill="white" />
                            <path
                                d="M16.5316 8.98801C16.5509 8.91599 16.5841 8.84847 16.6295 8.78931C16.6749 8.73015 16.7314 8.68051 16.796 8.64322C16.8606 8.60593 16.9318 8.58173 17.0057 8.572C17.0797 8.56227 17.1548 8.5672 17.2268 8.58651C18.2788 8.86099 19.2387 9.41097 20.0075 10.1798C20.7763 10.9486 21.3263 11.9084 21.6008 12.9605C21.6201 13.0325 21.625 13.1076 21.6153 13.1815C21.6055 13.2554 21.5813 13.3267 21.544 13.3913C21.5068 13.4558 21.4571 13.5124 21.3979 13.5578C21.3388 13.6031 21.2713 13.6364 21.1992 13.6557C21.1513 13.6683 21.102 13.6747 21.0524 13.6748C20.9274 13.6748 20.8058 13.6335 20.7066 13.5573C20.6075 13.4811 20.5363 13.3743 20.5041 13.2534C20.2802 12.3946 19.8313 11.6111 19.2038 10.9835C18.5762 10.3559 17.7926 9.90706 16.9338 9.68319C16.8617 9.664 16.7941 9.63079 16.7349 9.58546C16.6757 9.54012 16.6259 9.48355 16.5886 9.41899C16.5512 9.35442 16.527 9.28312 16.5172 9.20917C16.5074 9.13522 16.5123 9.06007 16.5316 8.98801ZM16.3663 11.9532C17.3445 12.2142 17.973 12.8427 18.2341 13.8209C18.2663 13.9418 18.3375 14.0486 18.4367 14.1248C18.5358 14.201 18.6574 14.2423 18.7824 14.2423C18.832 14.2422 18.8813 14.2357 18.9293 14.2232C19.0013 14.2039 19.0688 14.1706 19.128 14.1253C19.1871 14.0799 19.2368 14.0233 19.2741 13.9588C19.3113 13.8942 19.3355 13.8229 19.3453 13.749C19.355 13.6751 19.3501 13.6 19.3308 13.528C18.9676 12.1688 18.0184 11.2197 16.6593 10.8565C16.5873 10.8373 16.5122 10.8324 16.4383 10.8422C16.3644 10.852 16.2932 10.8762 16.2286 10.9135C16.1641 10.9508 16.1076 11.0005 16.0623 11.0597C16.0169 11.1188 15.9837 11.1863 15.9645 11.2583C15.9452 11.3304 15.9404 11.4054 15.9501 11.4793C15.9599 11.5532 15.9842 11.6245 16.0215 11.689C16.0588 11.7535 16.1085 11.81 16.1676 11.8554C16.2268 11.9007 16.2943 11.9339 16.3663 11.9532ZM22.1789 18.717C22.0524 19.6782 21.5803 20.5605 20.8509 21.1991C20.1214 21.8378 19.1844 22.189 18.2149 22.1872C12.5825 22.1872 8.00001 17.6047 8.00001 11.9723C7.99827 11.0028 8.3495 10.0658 8.98811 9.33638C9.62672 8.60691 10.509 8.13485 11.4702 8.00837C11.7133 7.97869 11.9595 8.02842 12.1719 8.15013C12.3844 8.27184 12.5518 8.45901 12.6492 8.68369L14.1474 12.0284V12.0369C14.222 12.2089 14.2527 12.3966 14.237 12.5834C14.2213 12.7702 14.1596 12.9502 14.0573 13.1073C14.0445 13.1265 14.0311 13.1442 14.0169 13.1619L12.54 14.9127C13.0713 15.9923 14.2006 17.1117 15.2945 17.6444L17.0211 16.1753C17.038 16.1611 17.0558 16.1478 17.0743 16.1356C17.2312 16.0309 17.4118 15.967 17.5997 15.9497C17.7876 15.9323 17.9769 15.9621 18.1504 16.0363L18.1596 16.0406L21.5014 17.538C21.7265 17.6351 21.9141 17.8023 22.0363 18.0149C22.1584 18.2274 22.2084 18.4737 22.1789 18.717ZM21.0524 18.5751H21.0446L17.7106 17.0819L15.9833 18.551C15.9665 18.5652 15.949 18.5785 15.9308 18.5907C15.7674 18.6997 15.5786 18.7644 15.3828 18.7786C15.187 18.7928 14.9908 18.7559 14.8135 18.6716C13.4849 18.0296 12.1605 16.7152 11.5178 15.4007C11.4327 15.2247 11.3945 15.0297 11.4069 14.8345C11.4193 14.6394 11.482 14.4508 11.5887 14.287C11.6007 14.2678 11.6143 14.2495 11.6291 14.2324L13.1075 12.4795L11.6178 9.14549C11.6175 9.14266 11.6175 9.13981 11.6178 9.13698C10.9299 9.22671 10.2983 9.56413 9.84125 10.0861C9.38423 10.608 9.13314 11.2786 9.135 11.9723C9.13763 14.3797 10.0951 16.6877 11.7974 18.3899C13.4996 20.0922 15.8076 21.0496 18.2149 21.0523C18.9082 21.0546 19.5787 20.8044 20.1009 20.3484C20.6231 19.8924 20.9614 19.2617 21.0524 18.5744V18.5751Z"
                                fill="white" />
                        </svg></span>
                </a>
            </div>
        </div>
    </div>

    <!-- the responsive header end -->