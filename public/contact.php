<?php
// require '../core/bootstrap.php';
require '../core/processContactForm.php';
//Build the page metadata

$meta = [];
$meta['title']="Contact MicroTrain2111";
$meta['description'] = "Contact MicroTrain2111 Form";
$meta['keywords'] = "contact, web development, application development, MicroTrain2111";

$content = <<<EOT
<h1>{$meta['title']}</h1>
<form action="contact.php" method="POST">
    <input type="hidden" name="subject" value="New submission!">
  
  <div class="form-group">
  <label for="name">Name</label>
    <input class="form-control" id="name" type="text" name="name" value="{$valid->userInput('name')}">
    <div class="text text-danger">{$valid->error('name')}</div>
  </div>

  <div class="form-group">
  <label for="email">Email</label>
    <input class="form-control" id="email" type="text" name="email" value="{$valid->userInput('email')}">
    <div class="text text-danger">{$valid->error('email')}</div>
  </div>
  <div class="form-group">
  <label for="message">Message</label>
    <textarea class="form-control" id="message" name="message">{$valid->userInput('message')}</textarea>
    <div class="text text-danger">{$valid->error('message')}</div>
  </div>

  <input type="submit" class="btn btn-primary">

  </form>
</script>
EOT;

include '../core/layout.php';

