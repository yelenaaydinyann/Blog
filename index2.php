<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel = "stylesheet" href = "style.css">
    <script src="function.js"></script>
</head>
<body>
    <header> 
        <img src="./images/logo.png" alt="Logo" class = "logo">
        <ul>
            <li><a href = "index.html">HOME</a></li>
            <li><a href = "about.html">ABOUT</a></li>
            <li><a href = "contact.html">CONTACT</a></li>
        </ul>
    </header>
    <main class = "news container">
         <div class="news">
            <img src ="./images/Jude.jpg" alt="News 1">
            <h2> Jude Continues to Shine</h2>
            <p>Real Madrid star Jude Bellingham impressed fans again with his amazing performance this weekend, scoring and assisting in the team’s victory.</p>
        </div>
        <div class="news">
            <img src ="./images/dog.jpg" alt="News 2">
            <h2>Dogs as our friend</h2>
            <p>Recent studies show that spending time with dogs helps reduce stress and improve mood. Dogs bring endless joy and emotional support to their owners’ lives.</p>
        </div>
        <div class="news">
            <img src ="./images/healthy food.jpg" alt="News 3">
            <h2>Healthy Eating: The Key to a Clear Mind</h2>
            <p>Nutrition experts say that eating more fruits, vegetables, and whole grains improves not just physical health but also mental focus.</p>
        </div>
        <div class="news">
            <img src ="./images/reading.jpg" alt="News 4">
            <h2>Benefits of Reading</h2>
            <p>New research suggests that reading regularly helps reduce stress, improve memory, and boost creativity whether fiction or nonfiction.</p>
        </div>
    <ul id="myList"></ul>
    <input type ="text" id="input" placeholder="--">
    <button onclick="button1()">Click here to add</button>

  

    </main>
<p id="p1" onclick="changeColor(this)">Text 1</p>
<p id="p2" onclick="changeColor(this)">Text 2</p>
<p id="p3" onclick="changeColor(this)">Text 3</p>

    <footer>
        <ul>
            <li>Armenia,Tavush,Valance </li>
            <li><a href="mail to:blog@blog.blog">blog@blog.blog</a></li>
            <li><a href="+374111111">+374 11 111111</a></li>
       </ul>
    </footer>
</body>
</html>