<!-- write your PHP script to define two string array -->
<?php
    $genre = array("Action", "Adventure", "Comedy", "Drama");
    $subject = array("Animation", "Children and Youth", "People");
    ?>
<!--write your php function  here -->
<?php
    function displayGenre($genre) {
        foreach ($genre as $value) {
            echo "<option>$value</option>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hanbin Lee">
    <meta name="description" content="Movie details ">
    <meta name="keywords" content="CST8285, Lab 6, html code">
    <title>Chapter 12</title>    
    
    <link rel="stylesheet" href="css/styles.css" />
   

</head>
<body>
<!-- include the hearder file here -->
<header>
    <h1>ACME Corporation</h1>
    <div class="tagline">Movies you can watch!</div>
</header>
    
<main>
<form class="form" method="post" action="private/process.php" id="mainForm">
   <fieldset class="form__panel">
      <legend class="form__heading">Edit Movie Details</legend>
        <p class="form__row">
           <label>Title</label><br/>
           <input type="text" name="title" class="form__input form__input--large"/>
       </p>
       <p class="form__row">
           <label>Description</label><br/>
           <input type="text" name="description" class="form__input form__input--large">
       </p>            
       <p class="form__row"> 
           <label>Genre</label><br/>
           <select name="genre" class="form__input form__select">
              <option>Choose genre</option> 
              <!-- use php function to display gener options -->
              
              
              
           </select>
       </p>
       <p class="form__row"> 
           <label>Subject</label><br/>
           <select name="subject" class="form__input form__select">
              <option>Choose subject</option> 
              <!-- use php function to display subject options -->
           </select>
       </p>
       <p class="form__row">	
           <label>Star</label><br/>               
           <input type="text" name="Star" class="form__input form__input--medium" />
       </p>
       <p class="form__row">	
           <label>Year</label><br/>               
           <input type="text" name="year" class="form__input form__input--small" />
       </p>  
       <p class="form__row">	
           <label>Production</label><br/>               
           <input type="text" name="Production" class="form__input form__input--medium"/>
       </p>                             

       <div class="form__box"> 
          <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">      
       </div>
   </fieldset>
</form>
</main> 
<!-- include the footer file here -->  
    <footer>ACME Coporation for all that you can dream up!</footer>
</body>
</html>
