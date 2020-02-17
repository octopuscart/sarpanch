<?php
$this->load->view('layout/headerAdmin');
?>

<style>
    .small_table td, .small_table th {
        padding: 0px 5px;
        line-height: 18px;
    }
    .memberslist img{
        border: 2px solid #FF9800;
        height: 200px;
        margin: 10px;
        border-radius: 12px;
    }
    .memberslist h2{
        font-size: 20px;
    }

    .memberslist h3 {
        font-size: 20px;
        color: #FF5722;
    }

    .memberslist h4{
        font-size: 20px;
        color: #3F51B5;
    }
    .memberslist {
        text-align: center;
        border: 1px solid #000;
    }

    .memberslist p{
        margin-bottom: 0;
    }

    .memberslist h5{
        background: #FF5722;
        padding: 5px;
        font-weight: 400;
        color: #FFEB3B;
    }
    .memberslist {
        text-align: center;
        border: 1px solid #E0E0E0;
        height: 500px;
    }
</style>
<section class="sub-bnr" data-stellar-background-ratio="0.5" >
    <div class="position-center-center">
        <div class="container">
            <h4>
                <?php echo $title; ?> संगठन 
                <a href="<?php echo site_url("Admin/addmembers") ?>" class="btn btn-success pull-right"><i class="fa fa-plus"></i> सदस्य जोड़े </a>
            </h4>


        </div>
    </div>
</section>

<!-- begin #content -->
<div id="content" class="content" ng-controller="ServiceController">
    <!-- begin breadcrumb -->



    <div class="panel panel-inverse">

        <div class="panel-body">

            <div >
                <div class="row">
                    <?php
                    foreach ($memberslist as $key => $value) {
                        ?>
                        <div class="col-md-4 " style="margin-bottom: 20px">
                            <div class="memberslist">
                                <img src="<?php echo base_url() . "assets/memberphotos/" . $value['image']; ?>" class="img-fluid" alt="Responsive image" style="height: 200px">
                                <h2><?php echo $value['name']; ?></h2>
                                <h4><?php echo $value['position']; ?></h4>
                                <h3><?php echo $value['category']; ?></h3>


                                <p>
                                    <?php echo $value['prefix']; ?> <?php echo $value['parent']; ?>
                                </p>
                                <p>
                                    <?php echo $value['city']; ?> <?php echo $value['district']; ?> 
                                </p>
                                <p>
                                    <?php echo $value['state']; ?>
                                </p>
                                <h5><i class="fa fa-phone"></i> <?php echo $value['mobile_no']; ?></h5>
                                <form action="#" method="post">
                                    <button class="btn btn-danger btn-sm" name="delete_data" type="submit">Delete</button>
                                    <input type="hidden" name="member_id" value="<?php echo $value['id']; ?>"/>
                                </form>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>




    <!-- end panel -->
</div>
<!-- end #content -->



<?php
$this->load->view('layout/footerAdmin');
?>
<script>
    $(function () {
        $(".editable").editable();
    })
</script>