
<?php get_header('page');?>
<head>
    <?php wp_head()?>
<link rel="stylesheet" href="<?php echo  get_template_directory_uri()?>/style/single-post.css">
<head>

<div class="container-fluid breadcrumb-wrapper">
        <!-- for intro and bread cruump  -->
        <div class="container mt-5">
            <div class="breadcrumbs mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item " aria-current="page"><a href="<?php home_url();?>">صفحه اصلی</a> </li>
                        <li class="breadcrumb-item " aria-current="page"> <a href="<?php home_url()?>/blog">مقاله ها</a></li>
                        <li class="breadcrumb-item " aria-current="page"> <a href="#" class="breadcrumb-active">راهنمای
                                ثبت نام در سایت </a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- start of the main  -->
<!-- start of the main  -->

<main class="container">

    <!-- start of the blog  -->
    <div class="row ">
        <div class="col-xxl-9 col-xl-9 ">
            <div class="blog-wrapper">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                
                
                <div class="blog_title mt-4">
                    <p class="title-item">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <circle cx="7" cy="7" r="7" fill="#EC3A4C" />
                            </svg></span>

                            <?php the_title()?>

                    </p>

                    <p class="date-published">
                        <span>تاریخ انتشار :</span>
                        <span><?php the_date()?></span>
                    </p>

                </div>
                <!-- this is the content tab of blog  -->

                <article class="main-content mt-3">


                    <div class="w-100 d-flex justify-content-between align-items-center ">

                        <!-- this is content of the tabs  -->
                        <!-- description -->
                        <div class="descriptions">
                            <div class="content-section">
                                <div class="des_content_sec">
                                    <!-- image of the blog pls place the tag nam  e in to alt tag  -->
                                    <div class="blog_pic w-100">
                                        <?php the_post_thumbnail()?>
                                    </div>
                                    <!-- this is the text article as you recommand -->

                                    <?php the_content()?>

        
                                </div>
                            </div>






                            <footer class="article_info mt-5">
                                <hr>
                                <div class="footer_content">
                                    <div class="tags">
                                        <span class="post_tags">بر چسب ها :</span>
                                        <span class="tag">فلان چیز</span>
                                        <span class="tag">فلان چیز</span>
                                        <span class="tag">فلان چیز</span>
                                        <span class="tag">فلان چیز</span>
                                        <span class="tag">فلان چیز</span>
                                    </div>

                                    <div class="resources">
                                        <div class="resource_name d-flex">
                                            <span class="text-resource">منبع :</span>
                                            <span class=""><a href="" class="resource">Ausbildung.de</a></span>

                                        </div>

                                        <div class="btns">
                                            <img src="<?php echo  get_template_directory_uri()?>/assets/Icons/save.svg" alt="">
                                            <div>
                                                <img src="<?php echo  get_template_directory_uri()?>/assets/Icons/share.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                </article>
                <?php
    endwhile;
endif;?>
            </div>
        </div>


        <div class="col-xxl-3 col-xl-3 sidebar">
            <div class="sticky">
                <!-- this is the form link  -->
                <div class="row  ">
                    <div class="form-link_box">
                        <div class="img-flag "><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/flag-for-germany (1).svg" alt=""></div>

                        <div class="text-form ">
                            <p>وقتشه به محاجرت آسان فکر کنی</p>
                        </div>

                        <div class="arrow "><img src="<?php echo get_template_directory_uri() ?>/assets/Icons/Vector 7.svg" alt=""> </div>

                        <div class="link_boxs">
                            <a href="#" class="link_box">
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M21 12C21.0002 13.5806 20.5841 15.1333 19.7937 16.502C19.0033 17.8708 17.8663 19.0072 16.4972 19.797C15.1281 20.5868 13.5752 21.0021 11.9946 21.0011C10.414 21.0002 8.86158 20.583 7.49344 19.7916L3.98813 20.9606C3.85598 21.0047 3.71417 21.0111 3.57859 20.9791C3.44301 20.9471 3.31903 20.878 3.22052 20.7795C3.12202 20.681 3.0529 20.557 3.02091 20.4214C2.98891 20.2858 2.99531 20.144 3.03938 20.0119L4.20844 16.5066C3.51741 15.3113 3.11064 13.9731 3.01959 12.5955C2.92854 11.2178 3.15566 9.83774 3.68337 8.56194C4.21108 7.28614 5.02523 6.14885 6.06284 5.23807C7.10044 4.32729 8.33367 3.66743 9.66711 3.30956C11.0006 2.95169 12.3985 2.90539 13.7527 3.17425C15.1069 3.44312 16.381 4.01993 17.4766 4.86007C18.5722 5.7002 19.4598 6.78113 20.0708 8.01922C20.6818 9.25731 20.9997 10.6194 21 12Z"
                                            fill="#1D1E22" />
                                        <path
                                            d="M11.9999 2.25C10.3166 2.24963 8.66188 2.68508 7.19679 3.51396C5.7317 4.34285 4.50616 5.53692 3.63947 6.97997C2.77277 8.42301 2.29444 10.0659 2.25104 11.7486C2.20764 13.4314 2.60065 15.0967 3.39181 16.5825L2.32774 19.7747C2.2396 20.039 2.22681 20.3226 2.2908 20.5938C2.35479 20.8649 2.49304 21.1129 2.69004 21.3099C2.88704 21.5069 3.13502 21.6451 3.40618 21.7091C3.67733 21.7731 3.96095 21.7603 4.22524 21.6722L7.41743 20.6081C8.72503 21.3036 10.1739 21.6921 11.654 21.744C13.1342 21.7959 14.6067 21.51 15.9598 20.9079C17.3129 20.3057 18.5111 19.4033 19.4634 18.269C20.4156 17.1346 21.097 15.7983 21.4557 14.3613C21.8144 12.9244 21.841 11.4246 21.5335 9.97578C21.226 8.52701 20.5925 7.16732 19.6811 5.99992C18.7697 4.83253 17.6043 3.88811 16.2733 3.23836C14.9424 2.58861 13.481 2.25061 11.9999 2.25ZM11.9999 20.25C10.5496 20.251 9.12471 19.8691 7.86931 19.1428C7.75537 19.0767 7.62603 19.0418 7.49431 19.0416C7.41362 19.0416 7.33349 19.0549 7.25712 19.0809L3.74993 20.25L4.91899 16.7438C4.95269 16.643 4.9646 16.5362 4.95394 16.4305C4.94327 16.3248 4.91027 16.2226 4.85712 16.1306C3.94772 14.5584 3.5826 12.7299 3.8184 10.929C4.0542 9.12801 4.87774 7.4552 6.16126 6.17006C7.44479 4.88491 9.11655 4.05925 10.9172 3.82118C12.7179 3.5831 14.5468 3.94591 16.1202 4.85333C17.6936 5.76074 18.9236 7.16204 19.6193 8.83983C20.3151 10.5176 20.4377 12.3781 19.9681 14.1327C19.4986 15.8873 18.4632 17.4379 17.0224 18.5439C15.5817 19.65 13.8163 20.2497 11.9999 20.25ZM15.7499 10.5C15.7499 10.6989 15.6709 10.8897 15.5303 11.0303C15.3896 11.171 15.1988 11.25 14.9999 11.25H8.99993C8.80102 11.25 8.61025 11.171 8.4696 11.0303C8.32895 10.8897 8.24993 10.6989 8.24993 10.5C8.24993 10.3011 8.32895 10.1103 8.4696 9.96967C8.61025 9.82902 8.80102 9.75 8.99993 9.75H14.9999C15.1988 9.75 15.3896 9.82902 15.5303 9.96967C15.6709 10.1103 15.7499 10.3011 15.7499 10.5ZM15.7499 13.5C15.7499 13.6989 15.6709 13.8897 15.5303 14.0303C15.3896 14.171 15.1988 14.25 14.9999 14.25H8.99993C8.80102 14.25 8.61025 14.171 8.4696 14.0303C8.32895 13.8897 8.24993 13.6989 8.24993 13.5C8.24993 13.3011 8.32895 13.1103 8.4696 12.9697C8.61025 12.829 8.80102 12.75 8.99993 12.75H14.9999C15.1988 12.75 15.3896 12.829 15.5303 12.9697C15.6709 13.1103 15.7499 13.3011 15.7499 13.5Z"
                                            fill="#1D1E22" />
                                    </svg>
                                </span>

                                <p>درخواست مشاوره</p>
                            </a>


                            <a href="#" class="link_box">
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M18.9804 3.9866L18.9193 20.0739C18.9189 20.1724 18.8991 20.2698 18.8611 20.3607C18.823 20.4516 18.7674 20.534 18.6974 20.6034C18.6275 20.6728 18.5446 20.7277 18.4534 20.765C18.3622 20.8023 18.2646 20.8213 18.1661 20.8209L5.76631 20.7672C5.56754 20.7664 5.37722 20.6867 5.23717 20.5457C5.09713 20.4046 5.01881 20.2137 5.01943 20.0149L5.08048 3.92767C5.08087 3.82915 5.10066 3.73168 5.13873 3.64081C5.1768 3.54995 5.23239 3.46747 5.30234 3.3981C5.37229 3.32872 5.45523 3.27381 5.5464 3.2365C5.63758 3.19918 5.73522 3.1802 5.83373 3.18063L18.2335 3.23427C18.4323 3.23509 18.6226 3.3148 18.7626 3.45586C18.9027 3.59693 18.981 3.78783 18.9804 3.9866Z"
                                            fill="#1D1E22" />
                                        <path
                                            d="M18.2367 2.48412L5.83692 2.43048C5.43918 2.42899 5.05713 2.58554 4.77479 2.86569C4.49245 3.14584 4.33294 3.52666 4.33133 3.9244L4.27028 20.0116C4.26959 20.2087 4.30774 20.404 4.38254 20.5863C4.45735 20.7686 4.56735 20.9344 4.70626 21.0742C4.84517 21.214 5.01026 21.3251 5.19211 21.401C5.37395 21.477 5.56898 21.5164 5.76605 21.5169L18.1658 21.5706C18.363 21.5714 18.5583 21.5333 18.7408 21.4586C18.9232 21.3838 19.0891 21.2738 19.229 21.1349C19.3689 20.9959 19.48 20.8308 19.556 20.6488C19.6321 20.4669 19.6715 20.2718 19.672 20.0746L19.733 3.98739C19.7339 3.58962 19.5767 3.2078 19.2961 2.9259C19.0155 2.64399 18.6344 2.48508 18.2367 2.48412ZM18.1702 20.0706L5.7695 20.0171L5.83054 3.92985L18.2303 3.98349L18.1702 20.0706ZM7.32151 6.18652C7.32254 5.98768 7.40248 5.7974 7.54376 5.65749C7.68504 5.51758 7.8761 5.43949 8.07493 5.4404L15.9764 5.47399C16.1641 5.47454 16.3448 5.5455 16.4828 5.67282C16.6208 5.80015 16.706 5.9746 16.7216 6.1617C16.7372 6.34879 16.682 6.53494 16.567 6.68335C16.452 6.83176 16.2856 6.93164 16.1005 6.96327C16.0571 6.97067 16.0132 6.97441 15.9692 6.97444L8.06763 6.93993C7.8688 6.93891 7.67851 6.85896 7.5386 6.71768C7.39869 6.5764 7.3206 6.38535 7.32151 6.18652ZM7.31093 9.18679C7.31131 9.08828 7.33111 8.9908 7.36918 8.89994C7.40724 8.80907 7.46284 8.7266 7.53279 8.65722C7.60274 8.58785 7.68568 8.53294 7.77685 8.49562C7.86803 8.45831 7.96567 8.43932 8.06418 8.43975L15.9658 8.47426C16.1546 8.47337 16.3368 8.54373 16.476 8.67129C16.6152 8.79885 16.7012 8.97422 16.7168 9.16239C16.7324 9.35057 16.6764 9.53769 16.5601 9.6864C16.4437 9.83511 16.2755 9.93447 16.0892 9.96463C16.0455 9.97224 16.0012 9.97572 15.9568 9.97504L8.05535 9.94145C7.8566 9.93998 7.66656 9.85967 7.52697 9.71817C7.38739 9.57667 7.30969 9.38555 7.31093 9.18679ZM7.29926 12.1863C7.30101 11.9879 7.38134 11.7982 7.52265 11.6589C7.66395 11.5196 7.85471 11.4419 8.05315 11.443L12.0015 11.4568C12.1891 11.4574 12.3698 11.5283 12.5077 11.6555C12.6457 11.7827 12.7309 11.9571 12.7466 12.1441C12.7623 12.3311 12.7073 12.5172 12.5925 12.6656C12.4777 12.8141 12.3115 12.9141 12.1265 12.946C12.0832 12.9534 12.0392 12.9571 11.9953 12.9571L8.04445 12.9399C7.84575 12.9386 7.65568 12.8585 7.51596 12.7173C7.37624 12.576 7.2983 12.385 7.29926 12.1863Z"
                                            fill="#1D1E22" />
                                    </svg>
                                </span>
                                <p>نگارش و بررسی رزومه و انگیزه نامه</p>
                            </a>



                            <a class="link_box" href="">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M22.5 12.75V15H5.72441C5.0793 15 4.45136 14.7921 3.93375 14.4071C3.41614 14.022 3.03644 13.4804 2.85097 12.8625L1.53191 8.46563C1.4983 8.35365 1.49133 8.23537 1.51156 8.12022C1.53179 8.00507 1.57866 7.89625 1.64843 7.80243C1.71819 7.70862 1.80893 7.63242 1.91338 7.57991C2.01784 7.5274 2.13312 7.50003 2.25003 7.5H3.00003L5.25003 9.75H8.71035L7.53941 6.23719C7.50185 6.12452 7.49158 6.00454 7.50946 5.88712C7.52733 5.76971 7.57283 5.65822 7.64222 5.56183C7.71161 5.46544 7.80289 5.38691 7.90856 5.3327C8.01423 5.27848 8.13127 5.25014 8.25003 5.25H9.00003L13.5 9.75H19.5C20.2957 9.75 21.0587 10.0661 21.6214 10.6287C22.184 11.1913 22.5 11.9544 22.5 12.75Z"
                                            fill="#1D1E22" />
                                        <path
                                            d="M21.0001 20.25C21.0001 20.4489 20.9211 20.6397 20.7804 20.7803C20.6398 20.921 20.449 21 20.2501 21H6.75011C6.55119 21 6.36043 20.921 6.21978 20.7803C6.07912 20.6397 6.00011 20.4489 6.00011 20.25C6.00011 20.0511 6.07912 19.8603 6.21978 19.7197C6.36043 19.579 6.55119 19.5 6.75011 19.5H20.2501C20.449 19.5 20.6398 19.579 20.7804 19.7197C20.9211 19.8603 21.0001 20.0511 21.0001 20.25ZM23.2501 12.75V15C23.2501 15.1989 23.1711 15.3897 23.0304 15.5303C22.8898 15.671 22.699 15.75 22.5001 15.75H5.72542C4.91802 15.7537 4.13126 15.4951 3.48353 15.013C2.83581 14.531 2.36216 13.8516 2.13386 13.0772L0.814794 8.68125C0.747593 8.45737 0.733641 8.22089 0.774053 7.99067C0.814464 7.76044 0.90812 7.54285 1.04755 7.35524C1.18698 7.16764 1.36832 7.01521 1.57711 6.91013C1.7859 6.80505 2.01636 6.75021 2.25011 6.75H3.00011C3.19875 6.75009 3.38925 6.82899 3.52979 6.96937L5.56136 9H7.66979L6.82604 6.47437C6.75085 6.24881 6.73035 6.0086 6.76625 5.77355C6.80214 5.53851 6.8934 5.31536 7.03249 5.12252C7.17158 4.92968 7.35452 4.77267 7.56623 4.66443C7.77793 4.55619 8.01234 4.49983 8.25011 4.5H9.00011C9.09863 4.49992 9.1962 4.51926 9.28724 4.5569C9.37829 4.59454 9.46103 4.64975 9.53073 4.71937L13.8114 9H19.5001C20.4947 9 21.4485 9.39509 22.1518 10.0983C22.855 10.8016 23.2501 11.7554 23.2501 12.75ZM21.7501 12.75C21.7501 12.1533 21.5131 11.581 21.0911 11.159C20.6691 10.7371 20.0968 10.5 19.5001 10.5H13.5001C13.3015 10.4999 13.111 10.421 12.9704 10.2806L8.68979 6H8.25011L9.42104 9.51281C9.4586 9.62548 9.46887 9.74546 9.45099 9.86288C9.43312 9.98029 9.38762 10.0918 9.31823 10.1882C9.24885 10.2846 9.15756 10.3631 9.05189 10.4173C8.94622 10.4715 8.82919 10.4999 8.71042 10.5H5.25011C5.15159 10.5001 5.05402 10.4807 4.96297 10.4431C4.87192 10.4055 4.78919 10.3503 4.71948 10.2806L2.68979 8.25H2.25011L3.56917 12.6469C3.70631 13.1117 3.99074 13.5193 4.37964 13.8084C4.76853 14.0976 5.24083 14.2525 5.72542 14.25H21.7501V12.75Z"
                                            fill="#1D1E22" />
                                    </svg>

                                </span>
                                <p>شرایط پذیرش پرونده و مهاجرت</p>
                            </a>




                        </div>


                    </div>
                </div>

                <!-- this is the similar ausbildungs -->
                <div class="row p-up">
                    <div class=" similar-ausbildungs_box">
                        <header class="similar-header">
                            <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" transform="translate(0 20) rotate(-90)"
                                        fill="#EC3A4C" />
                                    <path
                                        d="M15.8332 17.5L15.8332 2.49999C15.8327 2.34812 15.7908 2.19926 15.712 2.06943C15.6332 1.93959 15.5205 1.8337 15.386 1.76316C15.2516 1.69262 15.1004 1.66008 14.9488 1.66907C14.7972 1.67806 14.6509 1.72822 14.5257 1.81416L3.69234 9.31416C3.24318 9.62499 3.24318 10.3733 3.69234 10.685L14.5257 18.185C14.6506 18.2718 14.797 18.3227 14.9488 18.3322C15.1007 18.3417 15.2522 18.3093 15.387 18.2387C15.5218 18.1681 15.6346 18.0619 15.7133 17.9317C15.792 17.8014 15.8334 17.6521 15.8332 17.5Z"
                                        fill="#F6F6F6" />
                                </svg>
                            </span>
                            <h1>آوسبیلدونگ های مشابه</h1>

                        </header>

                        <div class="similar-ausbildung_box">

                            <div class="similar-ausbildungs">
                                <div class="d-flex justify-content-between align-items-center w-50 gap-3">
                                    <div><img src="<?php echo  get_template_directory_uri()?>/assets/images/similar-ausbildungs.png" alt=""></div>
                                    <div class="similar-ausbildungs_name">
                                        <h1>پیرا پزشکی</h1>
                                        <h1 class="s-a-de">Gesundheitswesen</h1>
                                    </div>

                                </div>
                                <div>
                                    <a href="">
                                        <img class="similar-ausbildungs_arrow"
                                            src="<?php echo  get_template_directory_uri()?>/assets/Icons/ph_arrow-up-light.svg" alt="">

                                    </a>
                                </div>

                            </div>

                            <div class="similar-ausbildungs">
                                <div class="d-flex justify-content-between align-items-center w-50 gap-3">
                                    <div><img src="<?php echo  get_template_directory_uri()?>/assets/images/similar-ausbildungs.png" alt=""></div>
                                    <div class="similar-ausbildungs_name">
                                        <h1>پیرا پزشکی</h1>
                                        <h1 class="s-a-de">Gesundheitswesen</h1>
                                    </div>

                                </div>
                                <div>
                                    <a href="">
                                        <img class="similar-ausbildungs_arrow"
                                            src="<?php echo  get_template_directory_uri()?>/assets/Icons/ph_arrow-up-light.svg" alt="">

                                    </a>
                                </div>

                            </div>


                            <div class="similar-ausbildungs">
                                <div class="d-flex justify-content-between align-items-center w-50 gap-3">
                                    <div><img src="<?php echo  get_template_directory_uri()?>/assets/images/similar-ausbildungs.png" alt=""></div>
                                    <div class="similar-ausbildungs_name">
                                        <h1>پیرا پزشکی</h1>
                                        <h1 class="s-a-de">Gesundheitswesen</h1>
                                    </div>

                                </div>
                                <div>
                                    <a href="">
                                        <img class="similar-ausbildungs_arrow"
                                            src="<?php echo  get_template_directory_uri()?>/assets/Icons/ph_arrow-up-light.svg" alt="">

                                    </a>
                                </div>

                            </div>

                            <div class="similar-ausbildungs">
                                <div class="d-flex justify-content-between align-items-center w-50 gap-3">
                                    <div><img src="<?php echo  get_template_directory_uri()?>/assets/images/similar-ausbildungs.png" alt=""></div>
                                    <div class="similar-ausbildungs_name">
                                        <h1>پیرا پزشکی</h1>
                                        <h1 class="s-a-de">Gesundheitswesen</h1>
                                    </div>

                                </div>
                                <div>
                                    <a href="">
                                        <img class="similar-ausbildungs_arrow"
                                            src="<?php echo  get_template_directory_uri()?>/assets/Icons/ph_arrow-up-light.svg" alt="">

                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>
</main>
<!-- end of the blog  -->

<!-- social-media start  -->
<div class="container">
    <div class="row mt-5">
        <div class="col-12 social_box">
            <div class="social_box_main">
                <div class="social_box_text">
                    <p>ایران آوسبیلدونگ را در شبکه های اجتماعی دنبال کنید</p>
                </div>

                <div class="social_box_icons">
                    <a href=""><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/iconoir_youtube.svg" alt=""></a>

                    <a href=""><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/basil_twitter-outline.svg" alt=""></a>
                    <a href=""><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/iconoir_telegram.svg" alt=""></a>
                    <a href=""><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/mdi_instagram.svg" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- social-media end  -->

<!-- comments and ads start -->
<div class="container mt-5">
    <div class="row">
        <div class="col-xxl-9 comment-section">
            <!-- comment form  start-->
            <div class="d-flex">
                <span><svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.75 8.75H21.25V11.25H8.75V8.75ZM8.75 13.75H17.5V16.25H8.75V13.75Z"
                            fill="black" />
                        <path
                            d="M25 2.5H5C3.62125 2.5 2.5 3.62125 2.5 5V27.5L9.16625 22.5H25C26.3788 22.5 27.5 21.3788 27.5 20V5C27.5 3.62125 26.3788 2.5 25 2.5ZM25 20H8.33375L5 22.5V5H25V20Z"
                            fill="black" />
                    </svg>
                </span>
                <p>دیدگاه خود را بنویسید</p>
            </div>

            <form action="" class="mt-4 submit-comment">
                <input type="text" placeholder="نام خود را وارد کنید" class="" id="">
                <input type="email" placeholder="ایمیل خود را وارد کنید" class="" id="">
                <div>
                    <textarea name="" placeholder="دیدگاه خود را بنویسید" id="" cols="30" rows="10"> </textarea>
                </div>
                <div class="w-100 ms-auto">
                    <button class="comment-send"> ارسال نظر</button>

                </div>
            </form>
            <!-- comment form end -->

            <!-- comments section start -->
            <div class="comments mt-5">
                <div class="comment_box">
                    <div class="comment-header">
                        <div class="user-avatar">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/comments.png" alt="">
                            <div class="comment-user">
                                <p class="user-name">مریم محمدی</p>
                                <p class="user-role">کاربر آوسبیلدونگ</p>
                            </div>
                        </div>



                        <div class="rating">
                            <img src="<?php echo  get_template_directory_uri()?>/assets/images/rating_start.svg" alt="">
                        </div>
                    </div>

                    <div class="comment-body mt-4">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                            است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط
                            فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                            کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                            طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای است.</p>
                    </div>

                    <div class="reply-btn">
                        <span><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/basil_reply-outline.svg" alt=""></span>
                        <p>پاسخ</p>
                    </div>
                </div>

                <div class="comment_box">
                    <div class="comment-header">
                        <div class="user-avatar">
                            <img src="<?php echo  get_template_directory_uri()?>/assets/images/comments.png" alt="">
                            <div class="comment-user">
                                <p class="user-name">مریم محمدی</p>
                                <p class="user-role">کاربر آوسبیلدونگ</p>
                            </div>
                        </div>



                        <div class="rating">
                            <img src="<?php echo  get_template_directory_uri()?>/assets/images/rating_start.svg" alt="">
                        </div>
                    </div>

                    <div class="comment-body mt-4">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                            است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط
                            فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد،
                            کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                            طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای است.</p>
                    </div>

                    <div class="reply-btn">
                        <span><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/basil_reply-outline.svg" alt=""></span>
                        <p>پاسخ</p>
                    </div>
                </div>


                <div class="load-more">
                    <a> نظرات بیشتر</a>
                    <span><img src="<?php echo  get_template_directory_uri()?>/assets/Icons/load-more.svg" alt=""></span>
                </div>
            </div>
            <!-- comments section end -->
        </div>
        
        <div class="col-xxl-3">
            <div class="ad_box">
                ads
            </div>

            <div class="ad_box">
                ads
            </div>
        </div>
    </div>
</div>
<!-- comments and ads end -->

<!-- this is the big ad on site  -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="ad_box big_ads">ads</div>
        </div>
    </div>
</div>
<!-- this is the big ad on site  -->



<?php get_footer()?>

