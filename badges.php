<?php
    $title = 'Mis insignias'; //set title for this page (echoed in header file)
    require_once 'includes/header.php'; //include header file
?>

<main>
    <form id='account' action='' method='post'>
        <fieldset>
            <legend>User Details</legend>

            <div>
                <label for='name' class='first'>Name:</label>
                <input name="name" id="name" type="text" size="25" maxlength="50" placeholder="Santa Claus" value="<?php echo $name; ?>" />
            </div>

            <div>
                <label for="email">Email:</label>
                <input name="email" id="email" type="text" size="25" maxlength="100" placeholder="santa@northpole.org"
                    value="<?php echo $email; ?>" required />
            </div>

            <div>
                <label for="username">User Name:</label>
                <input name="username" id="username" type="text" size="25" maxlength="25" value="<?php echo $username; ?>"
                    required />
            </div>

            <div id="register">
                <label for="password">Password:</label>
                <input name="password" id="password" type="password" size="25" maxlength="100" required />&nbsp&nbsp
                <span id="result"></span>
            </div>

            <div>
                <label for="password2">Re-Enter Password:</label>
                <input name="password2" id="password2" type="password" size="25" maxlength="100" required />
                <?php if(isset($error["password"])):?>
                <span class="note">
                    <?php echo $error["password"];?> </span>
                <?php endif ?>
            </div>
        </fieldset>

        <fieldset>
            <legend>List Details</legend>
            <div>
                <label for="title" class="first">List Title:</label>
                <input name="title" id="title" type="text" size="25" maxlength="100" value="<?php echo $ltitle; ?>" />
            </div>

            <div>
                <label for="fromdate">Available From:</label>
                <input name="fromdate" id="fromdate" type="text" value="<?php echo $fromdate; ?>" required />
            </div>
            <div>
                <label for="todate">Available To:</label>
                <input name="todate" id="todate" type="text" value="<?php echo $todate; ?>" required />
            </div>
            <div>
                <label for="lpassword">List Password:</label>
                <input name="lpassword" id="lpassword" type="password" size="25" maxlength="100" value="<?php echo $lpassword; ?>"
                    required />
            </div>
        </fieldset>

        <div id="buttons">
            <button type="submit" name="submit">Save Account Info</button>
            <button type="reset" name="reset">Reset</button>
        </div>
    </form>
</main>

<?php
    require_once 'includes/footer.php';
?>