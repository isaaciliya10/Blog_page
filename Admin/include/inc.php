<?php
session_start();

function error_message(){
      if (isset($_SESSION['errormessage'])) {
      $error_alert = "<div class='alert alert-danger'>"; 
      $error_alert .= htmlentities($_SESSION['errormessage']); 
      $error_alert .= "</div>";
      $_SESSION['errormessage'] = null;
      return $error_alert;
      }
      }

function success_message(){
      if (isset($_SESSION['successmessage'])) {
      $success_alert = "<div class='alert alert-success'>"; 
      $success_alert .= htmlentities($_SESSION['successmessage']); 
      $success_alert .= "</div>";
      $_SESSION['successmessage'] = null;
      return $success_alert;
      }
      }
 
?>

