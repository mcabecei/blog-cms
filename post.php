<?php
    include 'header.php';
?>
<body>
  <figure>
 <img src="bakingitems.jpg" alt="Baking" style="width:50%">
 <figcaption>Fig.1 -Baking items, bread, muffins etc. .</figcaption>
    </figure>


<?php
    include 'navigation.php';
?>


 <main>
<?php
    function getPostDetailsFromDatabase() {
        // TODO in Module 4
        // get this data from a database instead of hardcoding it
        $postDetails = array('title' => 'Blog Post 1',
                             'content' => 'My first blog post',
                             'date' => '01/01/2018',
                             'author' => 'christikaes');
               
         return $postDetails;                     
                                                    
    }
?>

<?php 
    // Post details contains all the data to generate the blog from
        $postDetails = getPostDetailsFromDatabase();

    ?>
    <h1> <?php echo $postDetails["title"]; ?> </h1>
    <div> <?php echo $postDetails["author"]; ?> </div>
    <div> <?php echo $postDetails["date"]; ?> </div>
    <div> <?php echo $postDetails["content"]; ?> </div>

      <h1>Baking Recipe for Chocolate Chip Cookies</h1>
      <p>Follow below for the Instructions to this Recipe:</p>

      <div style="background-color:indianred">
            <p>Author: Lorem ipsum dolor sit amet 
            Date Published: consectetur adipiscing elit
            Post Content: Excepteur sint occaecat cupidatat non proident
            </p>
          </div>

      <article>
        <h1>Baking Time:</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </article>

      <article>
            <h1>Baking Instructions:</h1>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </article>

<?php
    include 'footer.php';
?>

</body>
</html>