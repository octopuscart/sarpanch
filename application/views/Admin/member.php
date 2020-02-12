<?php
$this->load->view('layout/headerAdmin');
?>

<style>
    .small_table td, .small_table th {
        padding: 0px 5px;
        line-height: 18px;
    }
    .form-group {
        margin-bottom: 1rem;
        width: 100%;
    }
</style>
<section class="sub-bnr" data-stellar-background-ratio="0.5" >
    <div class="position-center-center">
        <div class="container">
            <h4>            सदस्य जोड़ें 
            </h4>

        </div>
    </div>
</section>

<!-- begin #content -->
<div id="content" class="content" ng-controller="ServiceController">
    <!-- begin breadcrumb -->
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-5" style="    margin-bottom: 15px;">

        <div class="panel-body">
        </div>
    </div>
    <div class="panel panel-inverse">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="panel-body">
                <div class="">
                    <div class="col-md-4" style="text-align: center">
                        <img src="<?php echo base_url(); ?>assets/images/user1.png" id="previewHolder" alt="Your Image" width="150px" height="150px"/>


                        <div class="btn-group col-md-12" role="group" aria-label="..." style="text-align: left;" >
                            <span class="fileinput-button" >


                                <input type="file" name="file"  id="filePhoto" class="custom-file-input"  file-model="filemodel" accept="image/*">
                                <label class="custom-file-label"  style="text-align: left;"  for="filePhoto">फोटो ऐड करे </label>
                            </span>
                        </div>
                        <div class="col-md-12">
                            <span style="font-size: 10px;">  Attach File From Here (JPG, PNG Allowed)</span>
                            <h2 style="    font-size: 12px;">{{filemodel.name}}</h2>
                            <input type="hidden" name="file_real_name" value="{{filemodel.name}}"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">सदस्य का पूरा नाम</label>
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                
                                <input type="text"  class="form-control" name="name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">पिता / पति का नाम </label>
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <select class="t" id="inputGroupSelect01" name="prefix">
                                        <option value="पिता">पिता </option>
                                        <option value="पति">पति</option>
                                    </select>
                                </div>
                                <input type="text"  class="form-control" name="parent" value="">
                            </div>
                        </div>



                    </div>

                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">मोबाइल नं. </label>
                        <div class="col-sm-6">
                            <input type="tel"  class="form-control" name="mobile_no" value="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">संगठन</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="category_id">
                                <option vale="">संगठन चुने </option>
                                <?php foreach ($categorylist as $key => $value) { ?>
                                    <option class="" value="<?php echo $value['id'] ?>"><?php echo $value['category_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">पद</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="position_id">
                                <option vale="">पद चुने</option>
                                <?php foreach ($positionlist as $key => $value) { ?>
                                    <option class="" value="<?php echo $value['id'] ?>"><?php echo $value['position_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">राज्य</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="state">
                                <option vale="">Select State</option>
                                <?php foreach ($statlist as $key => $value) { ?>
                                    <option class="" value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">जिला</label>
                        <div class="col-sm-6">
                            <input type="text"  class="form-control" name="district" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">शहर/ ग्राम</label>
                        <div class="col-sm-6">
                            <input type="text"  class="form-control" name="city" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="staticEmail" class="col-sm-2 col-form-label">पता</label>
                        <div class="col-sm-6">
                            <textarea name="address" class="form-control"  placeholder="Description"></textarea>
                        </div>
                    </div>


                    <div class="col-md-12" >
                        <button type="submit" name="add_data" class="btn  btn-primary m-r-5"><i class="fa fa-save"></i> Save Now</button>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Clear</button>

                    </div>
                </div>

            </div>
        </form>



    </div>
</div>

</div>



<?php
$this->load->view('layout/footerAdmin');
?>
<script>
    $(function () {
        $(".editable").editable();
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewHolder').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#filePhoto").change(function () {
            readURL(this);
        });
    })
</script>