<?php
    include 'header.php';
?>
<body>


<?php
    include 'navigation.php';
?>

<?php
    include 'head.php';
?>


 <main>
<?php
    function getPostDetailsFromDatabase() {
          // Get the post title
    $postTitle = rawurldecode($_GET["title"]);


    // Get the post that matches the postTitle
    include_once 'db_connect.php';
    $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
    $result = mysqli_query($conn, $sql);


    // Get the first row from the result as an associative array
    $postDetails = mysqli_fetch_assoc($result);
    return $postDetails;

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