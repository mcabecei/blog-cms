<?php
    include_once 'db_connect.php'
?>


<?php
    include 'header.php';
?>
    <p>For further information, please click on additional links.</p>
</article>

<?php
    include 'navigation.php';
?>

 <main>
<?php 
        function getPostTitlesFromDatabase() {
          // Get all the post titles from the posts table
    include_once 'db_connect.php';

    $sql = "SELECT title FROM posts";
    $result = mysqli_query($conn, $sql);
    
     // Get each result row as an assoc array, then add title to $postTitles
     $postTitles = array();
     while($row = mysqli_fetch_assoc($result)){
         array_push($postTitles, $row['title']);
     }
     return $postTitles;
    }

             
        $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
            return $postTitles;
        }
 ?>

      <h1>Baking Recipes</h1>
    <p> All of these baking recipes, are recipes submitted by users and made from scratch!</p>
    
    <p>An unordered list of Baking Instruction Posts:</p>
    <ul>

      <?php 
        $postTitles = getPostTitlesFromDatabase();

        foreach($postTitles as $postTitle) {
            echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . 
            "</a></li>";
             }

         ?>
    </ul>

          <section>
                <h1>Fall Recipes</h1>
                <p>These baking recipes, are ready to enter your kitchen and give off the famous fall scents. Hand crafted specifically for each fall occassion, these recipes will be a hit in your family!</p>
              </section>
              
              <section>
                <h1>Winter Recipes</h1>
                <p>These winter baking recipe instructions, are bundled up and ready for the cold holiday season. From events like, Christmas or New Years, these recipes will have you jumping for joy!</p>
              </section>

<?php
    include 'footer.php';
?>

</body>
</html>