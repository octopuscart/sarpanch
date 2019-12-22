<?php
$this->load->view('layout/header');
?>

<router-outlet _ngcontent-c1=""></router-outlet>
<div _nghost-c6="" class="ng-star-inserted slick-slider-header" style="background: white;">
    <div id='bigSlider' class=" owl-carousel  carousel center r-header r-white-bg slick-initialized r slick-dotted">

        <?php
        foreach ($slider_images as $key => $value) {
            ?>
            <div class="owl-items">
                <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="<?php echo base_url(); ?>assets/sliders/<?php echo $value['image']; ?>">
            </div>
            <?php
        }
        ?>


    </div>



    <section _ngcontent-c9="" class="whyYMDMSec">
        <div _ngcontent-c9="" class="container">
            <div _ngcontent-c9="" class="secHdngCnt">
                <h1 _ngcontent-c9="">Highlights</h1></div>
            <div _ngcontent-c9="" class="wyYMDMCnt">

                <div _ngcontent-c9="" class="wyYMDMOptn rightImg">
                    <div _ngcontent-c9="" class="wyYMDMOptnImg"><img _ngcontent-c9="" alt="" src="<?php echo base_url(); ?>assets/highlight/InHouseStudio.jpg"></div>
                    <div _ngcontent-c9="" class="wyYMDMOptnTxt">
                        <h2 _ngcontent-c9="" class="wyYMDMHdng">In-House Studio </h2>
                        <p _ngcontent-c9=""> 
We bolster seasoned and premiere hair, skin and beauty professionals treating with authentic products and services. Our team is trained and supervised by the professional make up artist Tripti Garg (founder of Style Treat Studio) Certified by Ashmeen Munjaal’s makeup academy.</p>
                    </div>
                </div>
                <div _ngcontent-c9="" class="wyYMDMOptn rightImg">
                    <div _ngcontent-c9="" class="wyYMDMOptnImg"><img _ngcontent-c9="" alt="" src="<?php echo base_url(); ?>assets/highlight/EventMakeup2.jpg"></div>
                    <div _ngcontent-c9="" class="wyYMDMOptnTxt">
                        <h2 _ngcontent-c9="" class="wyYMDMHdng">Venue make up</h2>
                        <p _ngcontent-c9=""> 
Hey there! We know the hassle of getting ready for events is too much, so when you can’t visit the salon we bring the salon to you. The team is fully equipped and has trained professionals to ease your hassle. Also customer satisfaction has always been our priority. All you need to do is dial us or book an appointment by a click, we’ll be at your service.                    </div>
                </div>


                <div _ngcontent-c9="" class="wyYMDMOptn rightImg">
                    <div _ngcontent-c9="" class="wyYMDMOptnImg"><img _ngcontent-c9="" alt="" src="<?php echo base_url(); ?>assets/highlight/Pickdp_drop.jpg"></div>
                    <div _ngcontent-c9="" class="wyYMDMOptnTxt">
                        <h2 _ngcontent-c9="" class="wyYMDMHdng">Pick and drop facility </h2>
                        <p _ngcontent-c9=""> 
                            We at Style Treat love to embrace our clients and pamper them, we help you avoid the chaos of getting to the salon yourself by providing categorical pick/drop services for our lovely clients with an expert lady driver driving you to your pamper session at the salon.                         </p>
                    </div>
                </div>

                <div _ngcontent-c9="" class="wyYMDMOptn">
                    <div _ngcontent-c9="" class="wyYMDMOptnImg"><img _ngcontent-c9="" alt="" src="<?php echo base_url(); ?>assets/highlight/HomeVisit2.jpg"></div>
                    <div _ngcontent-c9="" class="wyYMDMOptnTxt">
                        <h2 _ngcontent-c9="" class="wyYMDMHdng">Home Visits</h2>
                        <p _ngcontent-c9=""> 
This is for all the ladies who balances life, work and families all together. We understand and value the time you give to pamper others but forget to take care of yourselves, worry not we’re here all set to pamper you at your door step, just a click/call away.                    </div>
                </div>


            </div>
        </div>

    </section>


    <section  class="hwItWrksSec">
        <div  class="hwItWrksSbSec">
            <div  class="container">

            </div>
        </div>
    </section>


    <!---->
    <!---->
    <app-customer-reviews _ngcontent-c6="" _nghost-c11="">
        <section _ngcontent-c11="" class="reviewsSec">
            <div _ngcontent-c11="" class="container">
                <div _ngcontent-c11="" class="secHdngCnt">
                    <h1 _ngcontent-c11="">Hear It From The Customers</h1></div>
                <!---->
                <div class="slick-list" style="padding: 0px;">
                    <div class="owl-carousel owl-theme owl-loaded" id="reviewSlider" >

                        <div class="owl-stage-outer">
                            <div class="owl-stage max_width" style="">

                                <?php
                                
                                foreach ($reviewItem as $key => $value) {
                                    ?>

                                    <div _ngcontent-c11="" class="cstmrRvwSld owl-item active" >
                                        <div _ngcontent-c11="" class="cstmrRvwBx">
                                            <div _ngcontent-c11="" class="cstmrDtl">
                                                <div _ngcontent-c11="" class="cstmrImg"><img _ngcontent-c11="" alt="" style="border-radius: 50%;    height: inherit;" src="<?php echo base_url(); ?>assets/images/logo.png"></div>
                                                <div _ngcontent-c11="" class="cstmrNmDtl">
                                                    <h3 _ngcontent-c11="" title="Sakshi Malviya"><?php echo $value['person']; ?></h3><span _ngcontent-c11="" class="reviewed">Reviewed Style Treat Studios</span></div>
                                            </div>
                                            <div _ngcontent-c11="" class="rvwTxt" style="    height: 100%;">
                                                <p _ngcontent-c11="" style="      font-size: 19px;">
    <?php echo $value['review']; ?>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
    <?php
}
?>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>

    </app-customer-reviews>

    <app-welcome-rough-content _ngcontent-c6="" _nghost-c12="">
        <!---->

<!--        <section _ngcontent-c12="" class="homeVideoSec ng-star-inserted">
            <div _ngcontent-c12="" class="container" style="padding: 0px;">
                <div class="col-md-6">
                    <div class="hideonmobile">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=224707228091621&autoLogAppEvents=1"></script>
                        <div class="fb-page" data-href="https://www.facebook.com/pages/category/Beauty-Salon/Style-Treat-Studio-By-Tripti-Garg-994361217407042/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pages/category/Beauty-Salon/Style-Treat-Studio-By-Tripti-Garg-994361217407042/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pages/category/Beauty-Salon/Style-Treat-Studio-By-Tripti-Garg-994361217407042/">Style Treat Studio - By Tripti Garg</a></blockquote></div>
                    </div>
                    <div class="showinmobile">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=224707228091621&autoLogAppEvents=1"></script>
                        <div class="fb-page" data-href="https://www.facebook.com/pages/category/Beauty-Salon/Style-Treat-Studio-By-Tripti-Garg-994361217407042/" data-tabs="timeline" data-width="" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pages/category/Beauty-Salon/Style-Treat-Studio-By-Tripti-Garg-994361217407042/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pages/category/Beauty-Salon/Style-Treat-Studio-By-Tripti-Garg-994361217407042/">Style Treat Studio - By Tripti Garg</a></blockquote></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/B1Y8lpMFs4k/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);height: 500px;"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B1Y8lpMFs4k/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:500px;height: 300px;;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/B1Y8lpMFs4k/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by STYLE TREAT STUDIO!💕 (@style_treat_studio)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-08-20T14:51:20+00:00">Aug 20, 2019 at 7:51am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                </div>

            </div>


        </section>-->



        <section _ngcontent-c12="" class="homeVideoSec ng-star-inserted">
            <div _ngcontent-c12="" class="container">
                <div _ngcontent-c12="" class="vdoBnr" style="background-image: url('')!important; "></div>
                <div _ngcontent-c12="" class="videoCont" id="">
                    <img src="<?php echo base_url(); ?>assets/images/yslide.png"/>
                </div>
            </div>
        </section>





        <section _ngcontent-c12="" class="dwnlodAppSec">
            <div _ngcontent-c12="" class="container">
                <div _ngcontent-c12="" class="dwnlodAppCnt">
                    <div _ngcontent-c12="" class="appScrn left"></div>
                    <div _ngcontent-c12="" class="appDwnldBtn right">
                        <h3 _ngcontent-c12="">Download Our App</h3>
                        <p _ngcontent-c12="" class="sndLnkTxt">Click here to download our app.</p>

                        <ul _ngcontent-c12="" class="appLink">
                            <li _ngcontent-c12="">
                                <a _ngcontent-c12="" href="https://play.google.com/store/apps/details?id=com.srvapps.styletreat" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/google-play.png"></a>
                            </li>

                            <li _ngcontent-c12="">
                                <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/apple-icon.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </app-welcome-rough-content>


    <!---->
    <section _ngcontent-c6="" class="ourFeatureSec ng-star-inserted">
        <div _ngcontent-c6="" class="container">
            <div _ngcontent-c6="" class="rcmddHdng">
                <h2 _ngcontent-c6="" class="left">Our Best Features</h2></div>
            <div _ngcontent-c6="" class="ourFtrCnt">
                <div _ngcontent-c6="" class="ourFtrOpt">
                    <h2 _ngcontent-c6="">Client Friendly </h2>
                    <p _ngcontent-c6=""> 
                        Our clients define us, make us and we prioritize them over everything else. As our client, you decide the time, venue and service and WE WILL SERVE YOU WITH THE BEST!                    </p>
                </div>
                <div _ngcontent-c6="" class="ourFtrOpt">
                    <h2 _ngcontent-c6="">Appointments </h2>
                    <p _ngcontent-c6=""> 
The STS Website/App allows clients to easily book and manage appointments with just few clicks . The procedure is hassle-free as easy as ordering your food online through the app.                     </p>
                </div>
                <div _ngcontent-c6="" class="ourFtrOpt">
                    <h2 _ngcontent-c6="">100% Transparency </h2>
                    <p _ngcontent-c6="">
                        We provide suggestions and recommendations to our clients while embracing their natural beauty. We use authentic products according to the skin and hair type of our clients.                     </p>
                </div>
            </div>
        </div>
    </section>
    <app-media-converage _ngcontent-c6="" _nghost-c13="">
        <section _ngcontent-c13="" class="mediaCvrgSec hidden_mobile">
            <div _ngcontent-c13="" class="container">
                <div _ngcontent-c13="" class="secHdngCnt">
                    <h1 _ngcontent-c13="">Our Partners</h1></div>
                <div _ngcontent-c13="" class="mdaImgs">
                    <ul _ngcontent-c13="">
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="http://www.deethebaker.com/" target="_blank"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/brand/deethebaker.jpg"></a>
                        </li>
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="http://www.studysevenseas.com/" target="_blank"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/brand/studysevenseas.jpeg"></a>
                        </li>
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="http://www.timeouttravels.com/" target="_blank"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/brand/timeouttravels.jpeg"></a>
                        </li>
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="https://www.haritikajewellery.com" target="_blank"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/brand/haritikajewellery.jpeg"></a>
                        </li>
                        
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="https://www.theprintadda.in/" target="_blank"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/brand/the_print_adda.jpg"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
    </app-media-converage>
    <!---->
</div>
<app-loader _ngcontent-c1="" _nghost-c3="">
    <div _ngcontent-c3="" class="hidden">
        <div _ngcontent-c3="" class="loader-overlay">
            <!---->
        </div>
    </div>
</app-loader>




<?php
$this->load->view('layout/footer');
?>