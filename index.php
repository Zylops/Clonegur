<?php include('comp/header.php'); ?>

    <?php 
        include('comp/envRead.php');
        $env = env();
    ?>

    <div class="d-flex justify-content-center">
        <div class="card m-4 w-75 bg-dark text-light shadow-lg">
            <div class="card-body text-center">
                <h1 class="card-title display-6">Select image to upload</h1>
                <p class="card-subtitle text-light opacity-50 lead fs-6">This must be an image file (jpg, png, gif), less than 16 megabytes.</p>
                <hr class="">
                <form action="upload.php" method="post" enctype="multipart/form-data" class="">
                    <div class="d-flex justify-content-center">
                        <input type="file" class="" name="fileToUpload" id="fileToUpload">
                    </div>
                    <hr>
                    <div class="g-recaptcha mb-3 d-flex justify-content-center text-light fw-semibold" data-theme="dark" data-sitekey="<?php echo $env['captcha_sitekey']; ?>">Loading captcha, please wait.</div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-success" value="Upload Image" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include('comp/footer.php'); ?>