<?php
/*
    Reminder on the cleaning and validation of
    form data

    User data can be manipulated
    in many ways to present the least
    possible risk for the website:

    - cleaned,
    - Validated,
    - Escapes before being sent to the database,
    - Escapes before being sent to the client.


    1 / First, we must ensure that the data
    sent by the user correspond well
    what we expect.

    Cleaning and filtering:
    For example, for a number, we can make sure
    to get a good number:
 */

$id = (int)$_GET['id']; // by default, strings

if($id > 0) {
    // ...
}

/*
    All form data is processed
    Initially like strings, so, casting
    the variables sent can be easily cleaned
    the id sent by the user.

    The other types of field can be validated thanks to
    to the function filter_var (seen previously)


    2/ Second, you have to escape the data
    before presenting them (ie to send them
    to the client)

    When we send HTML from the database,
    we have to make sure that the information does not
    contain no unexpected HTML characters.

    The function htmlspecialchars () can be used,
    to override any characters
    undesirable.

    I can do :

 */

// Première méthode
$str = htmlspecialchars($_POST['content']);

/*
    htmlspecialchars () will transform the characters
    HTML specials to HTML entities:

        "&" (et commercial) devient "&amp;"
        "<" (inférieur à) devient "&lt;"
        ">" (supérieur à) devient "&gt;"

    Note : when you display a variable in an HTML tag attribute, you must use the ENT_QUOTES option.
    Exemple :
 */

echo '<a href="' . htmlspecialchars($urlFromDB) . '">Lien</a>'; // -> Risque d'injection

echo '<a href="' . htmlspecialchars($urlFromDB, ENT_QUOTES) . '">Lien</a>'; // -> Échappement valide

// Second method
$str = strip_tags($_POST['name']);

/*
    strip_tags() remove HTML tags.
    They are not transformed, protected ...
    They simply disappear.