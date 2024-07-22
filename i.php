<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top {
            background-color: #ad1457;
            height: 15px;
        }
        
        .logo {
            display: flex;
            background-attachment: fixed;
            justify-content: space-evenly;
            height: 50px;
            width: 50vw;
            
            background-color: white;
            color: #ad1457;
            I {
                position: relative;
                top: 15px;
                font-size: 30px;
            }
            a {
                color: #ad1457;
                position: relative;
                top: 25px;
                margin:5px;
            }
        }
        
        .logo a:hover {
            color: #ad1457;
        }
        
        .image img {
            max-width: 100%;
            height: auto;
        }
        
        .categories {
            display: flex;
            position: relative;
            top: 50px;
            bottom: 50px;
            list-style: none;
            justify-content: space-evenly;
            .box1,
            .box2,
            .box3,
            .box4 {
                padding-top: 20px;
                color: #ad1457;
                height: 200px;
                width: 300px;
                p {
                    text-align: center;
                    position: relative;
                    top: 30px;
                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                }
            }
        }
        
        @keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        .blink {
            animation: blink 1s infinite;
        }
        
        .scroll {
            direction: right;
            width: 100%;
            background-color: #ad1457;
            font-size: 20px;
            color: white;
            bottom: 30px;
            position: relative;
        }
        
        .front {
            background-image: url(https://png.pngtree.com/back_origin_pic/03/55/28/348ae6d58d9e64f6efbe63fe167eb1f7.jpg);
            height: 400px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 20px;
            /* Adjust the left padding as needed */
        }
        
        .front p {
            color: #ad1457;
            font-size: 80px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', 'Verdana', ' sans-serif';
            /* Update the font family as needed */
        }
        
        .search-bar {
            display: flex;
            align-items: center;
        }
        
        .search-bar input[type="text"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }
        
        .search-bar button {
            padding: 5px 10px;
            border-radius: 5px;
            border: none;
            background-color: #ad1457;
            color: white;
            cursor: pointer;
        }
        
        .offers {
            color: #ad1457;
            font-size: 50px;
            position: relative;
            top: 100px;
            left: 550px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', 'Verdana', ' sans-serif';
        }
        
        .blinking {
            animation: blink 1s infinite;
        }
        
        @keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        .o1 {
            position: relative;
            top: 50px;
            height: 25px;
            width: 25px;
            left: -20px;
        }
        
        .o {
            display: flex;
            justify-content: space-around;
        }
        
        .o2 {
            position: relative;
            top: 50px;
            height: 25px;
            width: 25px;
            left: -60px;
        }
        
        .blogs {
            display: flex;
            justify-content: space-around;
        }
        
        .blog1 {
            position: relative;
            top: 400px;
        }
        
        .blog2 {
            position: relative;
            top: 400px;
        }
        
        .blog3 {
            position: relative;
            top: 400px;
        }
        
        .blog4 {
            position: relative;
            top: 400px;
        }
    </style>
</head>

<body>
    <div class="top">

    </div>
    <div class="logo">
        <i><B>BLOSSOM</B></i>
        <a href="#categories">CATEGORIES</a>
        <br>
        <a href="#">HOME</a>
        <br>
        <a href="lo.php">LOGIN</a>
        <br>
        <a href="mycart.php">CART</a>
        <br>
        <a href="signup.html">SIGNUP</a>
        
        
        <div class="search-bar">
            <input id="searchInput" type="text" placeholder="Search...">
            <button type="button" onclick="search()">Search</button>
        </div>
    </div>
    <div class="image">
        <div class="front">
            <div class="blink">
                <P>
                    <I>Where Beauty Blooms!</I>
                </P>
            </div>
        </div>
    </div>
    </br>


    <div class="scroll">
        <marquee scroll amount=50>Your sanctuary for all things elegant and exquisite. Explore a world where every petal whispers tales of grace and allure.Indulge in our curated selection of luxurious skincare, captivating fragrances, and timeless beauty essentials. Let Blossom
            be your guide to a journey of self-care and timeless elegance.</marquee>
    </div>



    <div class="categories" id="categories">
        <a href="makeup.html ">
            <div class="box1 ">
                <p>MAKEUP</p>
                </br>
                <img src="https://media6.ppl-media.com/tr:w-427,ar-427-200,c-at_max,pr-true,dpr-2/mediafiles/ecomm/misc/1712926187_slice-banner-web_05.jpg" height="200px" width="300px">
            </div>
        </a>
        <a href="skincare.html">
            <div class="box2 ">
                <p>SKINCARE</p>
                </br>
                <img src="https://media6.ppl-media.com/tr:w-427,ar-427-200,c-at_max,pr-true,dpr-2/mediafiles/ecomm/misc/1712926188_slice-banner-web_04.jpg" height="200px" width="300px">
            </div>
        </a>
        <a href="Haircare.html">
            <div class="box3">
                <p>HAIRCARE</p>   
                </br>
                <img src="https://media6.ppl-media.com/tr:w-427,ar-427-200,c-at_max,pr-true,dpr-2/mediafiles/ecomm/misc/1712926186_slice-banner-web_06.jpg" height="200px" width="300px">
            </div>
        </a>
        <a href="Fragrances.html">
            <div class="box4">
                <P>FRAGRANCES</P>
                </br>
                <img src="https://i.pinimg.com/564x/95/d8/a7/95d8a7e5fa94231fb069012054861f2f.jpg" height="200px" width="300px">
            </div>
        </a>
        <br>
        <br>
    </div>
    <div class="offers">
        <div class="blinking">
            <p>Offers!</p>
        </div>
    </div>
    <br>
    <br>
    <div class="o">
        <div class="o1">
            <a href="o.php">
                <img src="https://images-static.nykaa.com/creatives/6dac22a5-a306-4582-8fe6-d49063935054/default.jpg?tr=cm-pad_resize,w-500" alt="offer1">
        </div>
        </a>
        <br>
        <div class="o2">
            <a href="o.php">
                <img src="https://images-static.nykaa.com/creatives/ba9217c0-bf76-4929-8179-7b3a8f7d083a/default.jpg?tr=cm-pad_resize,w-500">
        </div>
        </a>
        <br>
    </div>

    </div>
    <br>
    <br>

    <div class="blogs">
        <div class="blog1">
            <a href="">
                <img src="https://images-static.nykaa.com/creatives/8705c4cb-bdb9-434b-80ce-e3ed0d2286a1/default.jpg?tr=cm-pad_resize,w-300" </a>


            </a>
        </div>
        <div class="blog2">
            <a href="">
                <img src="https://images-static.nykaa.com/creatives/a38c4a36-cfdb-40ee-9fa9-60432d90cd4e/default.jpg?tr=cm-pad_resize,w-300" alt="">
            </a>
        </div>
        <div class="blog3">
            <a href="">
                <img src="https://images-static.nykaa.com/creatives/4fb72cc4-0f48-40cd-b08d-f642fba9acd4/default.jpg?tr=cm-pad_resize,w-300" alt="">
            </a>
        </div>
        <div class="blog4">
            <a href="">
                <img src="https://images-static.nykaa.com/creatives/2f3ddc49-4a7d-42ac-92b9-ca549b2a33de/default.jpg?tr=cm-pad_resize,w-300" alt="">
            </a>
        </div>

    </div>


    <script>
        function search() {
            // Retrieve the search query from the input field
            var searchTerm = document.getElementById("searchInput").value.toLowerCase();

            // Redirect based on the search term
            switch (searchTerm) {
                case "lipstick":
                    window.location.href = "lipstick.html";
                    break;
                case "eyeliner":
                    window.location.href = "eyeliner.html";
                    break;
                    // Add more cases for other search terms and corresponding HTML files
                case "concealer":
                    window.location.href = "Concealer.html";
                    break;
                case "blush":
                    window.location.href = "Blush.html";
                    break;
                case "nailpolish":
                    window.location.href = "nail.html";
                    break;
                case "lipstick":
                    window.location.href = "lipstick.html";
                    break;
                case "lipstick":
                    window.location.href = "lipstick.html";
                    break;
                case "lipstick":
                    window.location.href = "lipstick.html";
                    break;
                case "lipstick":
                    window.location.href = "lipstick.html";
                    break;
                case "lipstick":
                    window.location.href = "lipstick.html";
                    break;

                default:
                    alert("No matching category found.");
            }
        }
    </script>

</body>

</html>