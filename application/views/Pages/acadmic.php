<?php
$this->load->view('layout/header');
$images = array(
    "1" => "Make up classes by TG at STS",
    "2" => "Walk a talk about beauty and make up by TG at STS",
    "3" => "Inspiring the Aspiring Entrepreneurs",
    "4" => "Live make up session By TG organised by STS",
    "5" => "",
);
?>
<style>
    .galleryimage{margin: 5px;}
    .imgcaption{
        font-size: 17px;
        text-align: center;
    }
</style>
<!--contannt section-->
<app-about-us _nghost-c14="" class="ng-star-inserted">
    <div _ngcontent-c14="">
        <section _ngcontent-c14="" class="sbPageTopSec servicesPgSec">
            <div _ngcontent-c14="" class="container">
                <h2 _ngcontent-c14="">ACADEMY</h2>
            </div>
        </section>

        <section _ngcontent-c14="" class="aboutSec">
            <div _ngcontent-c14="" class="container">
                <div _ngcontent-c14="" class="abtTxt" >
                    <p _ngcontent-c14="" > 
                        We also are a home to the courses for hair, make-up and beauty. We include a wide range of courses for hair, make up and beauty inculcating the fondness towards the art. The courses are created for learners across all age bars and experience, taught and supervised by Tripti Garg herself. The list of the courses include but not limited to :
                    </p>

                    <ul >
                        <li><i class="fa fa-arrow-right"></i> Self Make-Up</li>
                        <li><i class="fa fa-arrow-right"></i> Basic Make-Up</li>
                        <li><i class="fa fa-arrow-right"></i> Professional Make-Up </li>
                        <li><i class="fa fa-arrow-right"></i> Basic Beauty </li>
                        <li><i class="fa fa-arrow-right"></i> Advance Beauty </li>

                    </ul>
                    <p _ngcontent-c14=""> 
                        We also provide a special category of courses for the aspiring entrepreneurs looking forward to establish their own set-up in the field of beauty from the scratch. We serve with specially curated courses with duly registered certificates from the academy.
                    </p>
                    <div class="row">
                        <div class='col-md-6'>
                            <?php
                            foreach ($images as $key => $value) {
                                if($key%2!=0)
                                echo "<div class='imgcontainer'> <img src='" . base_url() . 'assets/images/acadmic/' . $key . ".jpeg' class='galleryimage'/><h2 class='imgcaption'>" . $value . "</h2></div>";
                            }
                            ?>
                        </div>
                        <div class='col-md-6'>
                            <?php
                            foreach ($images as $key => $value) {
                                if($key%2==0)
                                echo " <div class='imgcontainer'> <img src='" . base_url() . 'assets/images/acadmic/' . $key . ".jpeg' class='galleryimage'/><h2 class='imgcaption'>" . $value . "</h2> </div>";
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </div>
</app-about-us>
<!--end of contant section-->



<?php
$this->load->view('layout/footer');
?>