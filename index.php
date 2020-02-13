<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1 /jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
<section class="container">
    <form method="post" action="" id="contact-form">
    <div class="field">
        <label class="label has-text-centered">Nom :</label>
        <div class="control">
            <input type="text" name="name" id="name" class="input" placeholder="Votre nom..." value="">
        </div>
        <p class="comments help is-danger" id="name"></p>
    </div>
    <div class="field">
        <label class="label has-text-centered">
            Prénom:
        </label>
        <div class="control has-icons-left">
            <input type="text" name="firstname" id="firstname" class="input" placeholder="Votre prénom..." value="">
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
        </div>
        <p class="comments help is-danger" id="name"></p>
    </div>
        <div class="field">
            <label for="email" class="label has-text-centered" id="email">Adresse mail :</label>
            <div class="control has-icons-left ">
                <input type="text" name="email" id="email" class="input" placeholder="Votre adresse mail..." value="">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            <p class="comments help is-danger" id="name"></p>
        </div>
        <div class="field">
            <label for="message" class="label has-text-centered">Message :</label>
            <div class="control">
                <textarea name="message" id="message" cols="30" rows="10" class="textarea" placeholder="Votre Message..."></textarea>
            </div>
            <p class="comments help is-danger" id="name"></p>
        </div>
        <br>
        <div class="field is-grouped is-grouped-centered">
            <div class="control">
                <button class="button is-info" type="submit">Envoyer</button>
            </div>
            <div class="control">
                <button class="button is-danger">Effacer</button>
            </div>
        </div>
    </form>
    </section>
</body>
</html>