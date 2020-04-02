<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Game World">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <title>Contact</title>
    </head>
    <body>
    <?php include ("inc/navigatie.php"); ?>
        <div class="container">

	    <div id="container">
		<br>

        <div class="containercontact">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="netherlands">The Netherlands</option>
      <option value="belgium">Belgium</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

    
  </form>
</div> 

        </header>
    </body>
    
</html>