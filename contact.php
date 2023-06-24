<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <title>Contact Me</title>
        <link rel="stylesheet" href="contactstyles.css">
    </head>
    <body>
        <section class="contact">
            <div class="contact-form">
                <h1>Contact<span> Me</span></h1>
                <p> I am available for freelance work. Connect with me via phone: 0992027850 or email: sandraangels441@gmail.com</p>
                <form id="form" method="post" action="server.php" autocomplete="off">
                    <input type="text" name="username" id="username" placeholder="Your Name">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                    <input type="text" name="usersubject" id="usersubject" placeholder="Write a subject">
                    <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Your Message">
                    </textarea>
                    <input type="submit" name="" value="submit" class="btn">
                </form>
        </section>
      
        <script src="contactjs.js"></script>
    </body>
</html>