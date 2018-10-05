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
      <h1>New Post for Recipe Submissions!</h1>
      <p>Follow below for the Instructions to submit a personal recipe to share:</p>
      <form action="includes/submit-post.php" method="POST">
        <input type="text" name="title" placeholder="Titlename">
        <br>
        <input type="text" name="author" placeholder="Authorname">
        <br>
        <input type="text" name="date" placeholder="MM/DD/YYYY">
        <br>
        <input type="text" name="content" placeholder="Contenttext">
        <br>
    <button type="submit" name="submit">Submit</button>
    </form>
    
</body> 
<?php
    include 'footer.php';
?>