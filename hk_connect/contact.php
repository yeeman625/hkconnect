<?require 'header.php'?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="" method="post">
                    <fieldset>
                        <legend class="text-xs-center header text-dark">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-xs-center">
                                <button type="submit" class="btn btn-warning btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="card ">
                    <div class="text-xs-center header text-dark">Our Office</div>
                    <div class="card-block text-xs-center">
                        <h4>Address</h4>
                        <div>
                        The Icknield Centre<br />
                        Icknield Way<br />
                        Letchworth Garden City <br />
                        SG6 1EF<br />
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2457.2214649467037!2d-0.22330618421241452!3d51.98461697971637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6f1d6a96bb1c3bb!2zNTHCsDU5JzA1LjIiTiAwwrAxMycxNS44Ilc!5e0!3m2!1sen!2suk!4v1661286274008!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>

<?require 'footer.php';?>