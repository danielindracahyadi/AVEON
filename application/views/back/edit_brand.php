<!--     <div id="page-wrapper">
        <div class="row">
           <div class="col-lg-12">
            <h1 class="page-header">Perbarui Brand</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                                <?php echo form_open('update-brand'.'/'.$brand_by_id->brand_id,'');?>
                                <div class="form-group">
                                    <label>Perbarui Brand</label>
                                    <input type="text" class="form-control" value="<?php echo $brand_by_id->brand_name;?>" name="brand_name" required="">
                                </div>
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 -->