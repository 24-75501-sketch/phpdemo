<html lang="tl">
    <head>
        <meta charset="UTF-8">
        <title>Form Validaion</title>
    </head>
    <body>

    <?php if (!empty($message)): ?>
        <p style="color: lavender;"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST" action="" onsubmit="return validateForm()">
            <label for ="email"> Email Address: </label>
            <input type="text" id="email" name="email">
            <button type="submit">Submit</button>
            </form>

        <script>
            function validateForm() {
                let emailInput = document.getElementById("email").value;

                if (emailInput.trim() === "") {
                    alert("All Fields are REQUIRED");
                    return false;
                }

                return true;
            }
        </script>
    </body>
</html>