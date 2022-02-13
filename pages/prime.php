<?php include "pages/includes/header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-capitalize">Prime Number</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Input Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="input_number" />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Result</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="5" >
                                            <?php echo (isset($result)&& $result==1) ? 'Prime Number' : 'Not Prime' ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="prime_btn" value="Check Result" class="btn btn-outline-success btn-block " />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "pages/includes/footer.php"; ?><?php
