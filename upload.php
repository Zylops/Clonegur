<?php 
    include('comp/envRead.php');
    $env = env();
    $err = 'Uploading!';

    if (isset($_POST['g-recaptcha-response'])) {
        $secret = $env['captcha_secret'];
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            if (isset($_FILES['fileToUpload'])) {
                $supported = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
                $file_ext = $_FILES['fileToUpload']['type'];
                $file_name = $_FILES['fileToUpload']['name'];
        
                $target = "uploads/${file_name}";
        
                if (in_array($file_ext, $supported)) {
                    if (filesize($_FILES['fileToUpload']['tmp_name']) > 16000000) {
                        $err = 'File exceeds 16MB size limit!';
                    } else {
                        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
                        header('Location: '. $target);
                    }
                } else {
                    $err = 'File format is not supported!';
                    
                }
            } else {
                $err = 'Please upload a file.';
            }
        } else {
            $err = 'Invalid captcha!';
        }
    }
?>

<?php include('comp/header.php'); ?>

<div class="d-flex justify-content-center m-4">
    <div class="text-center p-2 w-75 bg-light rounded-3 text-dark">
        <?php if ($err != 'Uploading!'): ?>
            <div class="alert alert-danger">
                <?php echo $err; ?>
                <br><a href="index.php">Go back.</a>
            </div>
        <?php else: ?>
            <div class="alert alert-success">
                <?php echo $err; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include('comp/footer.php'); ?>