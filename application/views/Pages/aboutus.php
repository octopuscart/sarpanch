<?php
$this->load->view('layout/header');
$aboutimages = array(
    "1" => "Building our branches",
    "2" => "Innaugrations of STS Branches",
    "3" => "Team behind the success of STS so far!",
    "4" => "Professional acknowledgment",
    "5" => "Social presence on behalf of STS",
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
                <h2 _ngcontent-c14="">Know Our Story</h2>
            </div>
        </section>

        <section _ngcontent-c14="" class="aboutSec">
            <div _ngcontent-c14="" class="container">
                <div _ngcontent-c14="" class="abtTxt">
                    <p _ngcontent-c14=""> 
                        Style Treat Studio- Tripti Garg initiated the Style Treat as a passion to follow her long lost dream to beauty, which began on 1st May’2018. She established the first branch in Patparganj and began on a small scale which has only grown to new heights ever since. She went on to curate her dream into reality by building two more branches of the same brand and strengthening her roots even deeper in the beauty world. She is a certified professional make-up artist from ‘STAR ACADEMY’ by Ashmeen Munjaal. She has a team of experts lined up to serve to the best of their ability and to accommodate all your demands. They continue to explore the world of the beauty with hands on experience in hair, make-up and beauty. They create customized packages for their clients to meet all their needs.                     </p>
                    <p _ngcontent-c14=""> 
                        She set-up the first branch at Patparganj which did not serve her ambitions to the core of it so as a young entrepreneur she decided to enhance her services by providing the pick and drop facilities to her clients. She later realised that this was not the zenith of her ambition so she decided to get ahead of it and established a new branch in Madhu Vihar but this still did not satiate her. She also wanted her clients to be pampered properly when they get ready for their wedding. She would want them to lavishly sit in the car parked right at the door of salon which wasn’t possible at Madhu Vihar so she further spread her wings to engender a branch at Mayur Vihar which could serve the purpose.                    </p>



                    <div class="row">
                        <div class='col-md-6'>
                            <?php
                            foreach ($aboutimages as $key => $value) {
                                if ($key % 2 != 0)
                                    echo "<div class='imgcontainer'> <img src='" . base_url() . 'assets/images/about/' . $key . ".jpeg' class='galleryimage'/><h2 class='imgcaption'>" . $value . "</h2></div>";
                            }
                            ?>
                        </div>
                        <div class='col-md-6'>
                            <?php
                            foreach ($aboutimages as $key => $value) {
                                if ($key % 2 == 0)
                                    echo " <div class='imgcontainer'> <img src='" . base_url() . 'assets/images/about/' . $key . ".jpeg' class='galleryimage'/><h2 class='imgcaption'>" . $value . "</h2> </div>";
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