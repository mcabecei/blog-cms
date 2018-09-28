<?php
    include 'header.php';
?>
<body>
    <form>



    </form>

  <figure>
 <img src="bakingitems.jpg" alt="Baking" style="width:50%">
 <figcaption>Fig.1 -Baking items, bread, muffins etc. .</figcaption>
    </figure>


<?php
    include 'navigation.php';
?>


 <main>
      <h1>New Post for Recipe Submissions!</h1>
      <p>Follow below for the Instructions to submit a personal recipe to share:</p>
      
      <form action="/action_page.php" method="get">
        Title Name: <input type="text" title="tname"><br>
        Author Name: <input type="text" author="aname"><br>
        Date: <input type="text" date="Date"><br>
        <textarea rows="4" cols="50">
               Please type in all of your Recipe instructions here... 
                </textarea>
        <button type="submit" value="Submit">Submit</button>
        <button type="reset" value="Reset">Reset</button>
      </form>
</body> 
<?php
    include 'footer.php';
?>