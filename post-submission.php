<!DOCTYPE html>
<html>
 <head>
    <title>Blog CMS</title>
    <style>
            title {
                font-size: 40px;
            }
            body {
                background-color: hsl(0, 82%, 75%);
            }
            
            h1 {
                color: white;
                text-align: center;
            }
            
            p {
                font-family: verdana;
                font-size: 20px;
            }
            </style>
            
</head>
<body>
  <figure>
 <img src="bakingitems.jpg" alt="Baking" style="width:50%">
 <figcaption>Fig.1 -Baking items, bread, muffins etc. .</figcaption>
    </figure>


<nav>
<ul>
    <li> <a href="/index.html/">HTML</a> </li>
    <li> <a href="/post-submission.html/">Post-Submission</a> </li>
 </ul> 
        </nav>

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
      

     

              <footer>
                    <p>Posted by: Miranda Cabeceiras </p>
                    <p>Contact information: <a href="mcabecei@lesley.edu">mcabecei@lesley.edu</a>.</p>
                  </footer>