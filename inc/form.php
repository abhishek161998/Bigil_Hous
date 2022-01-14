<head>
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
</head>

<div class="cd-user-modal">
    <div class="cd-user-modal-container">
        <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">Registration</a></li>
        </ul>

        <!-- log in form -->
        <div id="cd-login">
            <!-- <p>Don't have an account yet? Click on "New Account"</p> -->
            <div style="background-color: #00ADB5;" class="alert alert-primary" role="alert">
                Don't have an account yet? Click on <span style="color: #000;font-weight: bold;">"Registration"</span>
            </div>
            <form class="cd-form" method="post" action="cust_login.php" autocomplete="off">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="number">Number</label>
                    <input class="full-width has-padding has-border" id="number" name="number" type="tel" placeholder="Enter your number" maxlength="10" pattern="^\d{10}$" required="required">
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="password">Password</label>
                    <input class="full-width has-padding has-border" id="password" name="password" type="password" required placeholder="Enter your password">
                    <a href="#0" class="hide-password">Hide</a>
                </p>


                <p class="fieldset">
                    <!-- <a class="full-width" href="../c_dashboard/index.html">Login</a> -->
                    <input class="full-width" type="submit" name="submit" value="Login">

                    <!-- <button class="full-width " type="submit" name="submit">Login</buttton> -->

                </p>
            </form>

            <!-- <p class="cd-form-bottom-message">
                <a href="#0">Forgot your password?</a>

            </p> -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-login -->

        <!-- sign up form -->
        <div id="cd-signup">
            <form class="cd-form" action="reg.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-name">Name</label>
                    <input class="full-width has-padding has-border" id="signup-name" name="name" type="text" placeholder="Enter your name" required>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-number">Number</label>
                    <input class="full-width has-padding has-border" name="number" id="signup-number" type="number" maxlength="10" pattern="^\d{10}$" placeholder="Enter your number">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">Email</label>
                    <input class="full-width has-padding has-border" name="mail" type="email" placeholder="Enter your email" required>
                    <!-- <a href="#0" class="hide-password">Hide</a> -->
                    <!-- <span class="cd-error-message">Error message here!</span> -->

                </p>
                <p class="fieldset">
                    <label class="image-replace cd-email " for="msg">Message</label>
                    <!-- <input class="full-width has-padding has-border" id="signup-number" type="number" placeholder="Enter your number"> -->
                    <input class="full-width has-padding has-border" name="msg" id="signup-email" type="text" placeholder="Enter your Message" required>
                    <!--  <span class="cd-error-message">Error message here!</span> -->
                </p>
                <!-- <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">I agree to the <a href="terms_conditions.php">Terms</a></label>
                </p> -->

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Submit">
                </p>
            </form>

            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-signup -->

        <!-- reset password form -->
        <div id="cd-reset-password">
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div>