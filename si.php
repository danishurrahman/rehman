<html>
<head>
	<title>Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?>

        <?php if (!isset($_POST['agree'])): ?>

            <p>You have not accepted our terms of service</p>

            <?php else: ?>

                <h2>Thank You <?php echo $_POST['firstname']; ?></h2>

                <p>You have been registered as
                    <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
                </p>

                <p> Go <a href="/insertT.php">back</a> to the form</p>

            <?php endif; ?>

            <?php else: ?>

                        <h2>Form</h2>

                        <form action="insertT.php" method="POST">

                            Name:
                            <input type="text" name="name">
                            
                            <br>email Id:
                            <input type="text" name="email">
                            <br>salary:
                            <input type="number" name="saly">
                            <br> Agree to Terms of Service:
                            <input type="checkbox" name="agree">
                            <br>

                            <input type="hidden" name="form_submitted" value="1" />

                            <input type="submit" value="Submit">

                        </form>
	<?php endif; ?>
</body>
</html>