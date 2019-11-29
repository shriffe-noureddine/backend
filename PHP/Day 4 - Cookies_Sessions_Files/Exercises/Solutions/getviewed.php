<?php
session_start();

if (isset($_SESSION['page_view'])) {
  echo 'page visited';
} else {
  echo 'not visited yet';
}
