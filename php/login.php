<?php
    /*   File: login.php
     * Author: Dalton Brooks
     */
     $page_title = "National Park Service Login";
     $css_path = "../css/site.css";
     $main_id = "main-index";

     include('inc.login.php');
     if ( $isFormValidated) { header('Location: ../html/dashboard.html'); }
     include ('inc.header.php');
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div id="welcome">
           <h1><img id="NPS-logo" src="../images/National_Park_Service.png" alt="NPS Logo">
                             Welcome to the National Park Service
        <img id="NPS-logo" src="../images/National_Park_Service.png" alt="NPS Logo"></h1>
</div>
<div id="admin-login">
        <p><!-- Required first -->
            <label for="user" accesskey="u">Username: </label>
            <input id="user" name="user" value="<?php echo $user; ?>" placeholder="Username">
            <span class="require"></span>
            <span class="error"><?php echo $userErr; ?></span>
        </p>

        <p><!-- Required last -->
            <label for="password" accesskey="p">Password: </label>
            <input id="password" name="password" value="<?php echo $password; ?>" type="password" placeholder="Password">
            <span class="require"></span>
            <span class="error"><?php echo $passErr; ?></span>
        </p>

        <p>
            <input type="submit" value="Log in ->">
        </p>
</div>
</form>

<?php
    $copyright_year = "2017";
    $copyright_text = "CS234-Spring. All rights reserved.";
    $js_path = "../js/form.js";

    include ('inc.footer.php');
?>