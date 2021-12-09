<?php
// require '../config/keys.php';
require '../core/db_connect.php';
require '../core/bootstrap.php';


$meta=[];
$meta['description'] = "MicroTrain2111 Site For Web Development West Loop";
$meta['title']="MicroTrain, Site, Web Development, West Loop";


$content=<<<EOT
<h1>Microtrain 2111</h1>
<p>Welcome to class. We are here to develop web and mobile hybrid applications... Learn the skills needed to build full stack web and hybrid mobile applications using real-world tools, technology, and processes. Students will get 192 hours in the classroom learning the code, technology, and processes required to develop applications using Full Stack JavaScript, the LAMP stack, and Shell scripting, while taking a deeper dive into the dev environment.
</p>
<img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="MicroTrain2009 Avatar">
<h2>Agile Full Stack Web and Hybrid Mobile Application Development</h2>
<p>Full stack web and hybrid mobile applications developer specializing in full stack JavaScript application
  and architectures. Experienced in all stages of the development life cycle, well versed in numerous
  programming languages.</p>
<h3>HTML, CSS, JavaScript</h3>
<p>Learn front-end and client-side development starting with HTML, CSS and JavaScript. 
  Work with libraries and frameworks such as jQuery, Bootstrap and Angular. 
  Apply and use web technology to build hybrid mobile applications using Apache’s Cordova.
</p>
<p>Learn how to work with third party APIs from vendors such as Google, Nasa, Twilio and LinkedIn. 
  Learn the server side by working with LAMP (Linux, Apache, MySQL, PHP) and MEAN (MongoDB, Express, Angular, Node,js) stacks. 
  Apply newly acquired backend knowledge to build your own cloud-based server in AWS.
</p>
<ul>
  <li><a href="https://stackoverflow.com/questions/1016080/why-are-html-character-entities-necessary">A Stack Overflow thread on the topic.</a></li>
  <li><a href="https://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references">A Wikipedia artcile on the topic.</a></li>
  <li><a href="https://dev.w3.org/html5/html-author/charref">The W3C reference.</a></li>
</ul>

<p>Intended for experienced or tech-savvy working adults and self-motivated learners; students will meet twice a week for 12 weeks in a high paced independent learning environment.
</p>
EOT;
// "<h1>MicroTrains Users</h1>";
// $stmt = $pdo->query('SELECT * FROM users');

// while($row = $stmt->fetch()){
//   $content .= "<div><a href=\"view.php?id={$row['id']}\">{$row['first_name']} {$row['last_name']}</a></div>";
// }

// $content .= "<br><hr><div><a href=\"users\index.php\">User</a> | <a href=\"posts\index.php\">Posts</a></div>";

require '../core/layout.php';