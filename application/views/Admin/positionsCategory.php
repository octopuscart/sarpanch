<?php
$this->load->view('layout/headerAdmin');
?>

<style>
    .small_table td, .small_table th {
        padding: 0px 5px;
        line-height: 18px;
    }
</style>
<section class="sub-bnr" data-stellar-background-ratio="0.5" >
    <div class="position-center-center">
        <div class="container">
            <h4>संगठन वर्गीकरण / Organization classification</h4>
        </div>
    </div>
</section>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->

    <div class="panel panel-inverse">

        <div class="panel-body">

            <form method="post" action="#">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="exampleInputEmail1" class="col-form-label">संगठन का नाम </label>
                            <div class="">
                                <input type="text" class="form-control"  placeholder="Enter Position Name" value="" required="" name="category_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="staticEmail" class="col-form-label">Display Order</label>
                            <input type="number"  class="form-control" name="display_index" value="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label for="staticEmail" class="col-form-label">Add Now</label><br/>
                            <button type="submit" name="add_data" class="btn btn-primary m-r-5"><i class="fa fa-save"></i> Save Now</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>



        </div>


        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th style="width:200px;">संगठन का नाम </th>
                    <th style="width:200px;">Order</th>
                </tr>
                <?php
                foreach ($positiondata as $key => $value) {
                    ?>
                    <tr>
                        <td>
                            <span  id="name<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="category_name" data-value="<?php echo $value['category_name']; ?>" data-params ={'tablename':'category_position'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['category_name']; ?></span>
                        </td>

                        <td>
                            <span  id="order<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="display_index" data-value="<?php echo $value['display_index']; ?>" data-params ={'tablename':'category_position'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['display_index']; ?></span>
                        </td>

                        <td>
                            <form class="form-inline" action="#" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $value['id']; ?>">
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn  btn-default " name="deleteUser"><i class="fa fa-times"></i></button>
                                </div>
                            </form>

                        </td>
                    </tr>
                <?php } ?>
            </table>

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