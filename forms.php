<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mail</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="main">
    <div class="mail-area">
        <h1>Doctors Form</h1>
        <form method="post" action="mail.php" enctype="multipart/form-data">
            <label for="">Doctor's Email Id:</label>
            <input type="email" name="email" class="input" placeholder="Email Id" required><br>
            <label for="">Nutritionist's Email Id:</label>
            <input type="email" name="email" class="input" placeholder="Email Id" required><br>
            <label for="">Subject:</label>
            <input type="text" name="subject" class="input" placeholder="Subject" required><br>
            <label for="">Message:</label>
            <textarea class="input" name="message" placeholder="Message" required></textarea><br>
            <label for="">Attach Files:</label>
            <input type="file" name="attachment" class="up"><br>
            <input class="input btn" type="submit" name="send" value="Send"><br>
        </form>
    </div>
    </div>
</body>
</html>