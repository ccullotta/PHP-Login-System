<?php 
 
define('__CONFIG__', true);
require_once "inc/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
</head>
<body>
    
<!-- UIkit CSS -->
<div class="uk-section uk-container">
<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">

        <form class="uk-form-stacked js-login">

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="email" placeholder="Some text...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-select">password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="password" placeholder="Some text...">  
                </div>
            </div>
            <div class="uk-margin">
            <button class="uk-button uk-button-default" type="submit">login</button></div>

        </form></div>
</div>
<?php require_once "inc/footer.php"; ?>


</body>
</html>