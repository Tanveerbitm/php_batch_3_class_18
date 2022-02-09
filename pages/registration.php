<?php include ("header.php")?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Registration Form
                    </div>
                    <div class="card-body">

                        <form action="action.php" method="POST" >
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required name="full_name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3" >Subject</label>
                                <div class="col-md-9">
                                    <label ><input type="checkbox" value="Bangla" name="subject[]" /> Bangla</label>
                                    <label ><input type="checkbox"  value="English" name="subject[]" /> English</label>
                                    <label ><input type="checkbox"  value="Math" name="subject[]" /> Math</label>
                                    <label ><input type="checkbox"  value="Physics" name="subject[]" /> Physics</label>
                                    <label ><input type="checkbox"  value="Chemistry" name="subject[]" /> Chemistry</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label" >password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-outline-dark btn-block" value="submit" name="reg_btn">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ("footer.php")?>
