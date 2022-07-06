<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
    <style>
        .bgcontact {
            position: absolute;
            width: 100%;
            z-index: -1;
            opacity: 0.8;
        }

        .contact {
            max-width: 80%;
            padding: 34px;
            margin: auto;
            background: #aaa;
            color: white;
        }

        #h1contact {
            margin-top: 80px;
            text-align: center;
            font-family: 'Sriracha', cursive;
            font-size: 40px;
        }

        p {
            text-align: center;
            font-family: 'Sriracha', cursive;


        }

        .submit_msg {
            color: green;
        }

        #conpgform {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #conpgform input,
        textarea {
            width: 80%;
            margin: 11px;
            padding: 7px;
            border: 2px solid black;
            border-radius: 6px;
            font-size: 20px;
            outline: none;
        }


        #confrmsbt {
            color: white;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
            background-color: purple;

        }

        #confrmsbt:hover {
            color: black;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
            background-color: yellowgreen;

        }

        .reset {
            color: white;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
            background-color: blue;
        }

        .reset:hover {
            color: black;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
            background-color: yellowgreen;

        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <?php
    include "contactform.php";
    ?>
    <!-- <img src="img/bg.jpg" class="bgcontact" alt="smcet building" srcset="smcet building" /> -->
    <div class="contact">
        <h1 id="h1contact">Contact here</h1>
        <p>Please submit details with your query</p>
        <?php
        if ($insert == true and isset($_POST['contactform'])) {
            echo "<p class='submit_msg'>Thanks for submiting we will get back to you soon</p>";
        }
        ?>
        <form action="contact.php" method="post" id="conpgform">
            <input type="text" name="name" id="name" placeholder="Full name...">
            <input type="email" name="email" id="email" placeholder="Email...">
            <input type="tel" name="phone" id="phone" placeholder="Mobile...">
            <textarea name="message" id="message" cols="30" rows="3" placeholder="Message..."></textarea>
            <span><button type="submit" id="confrmsbt" name="contactform">Submit</button>
                <button class="reset" type="reset" id="confrmrst">Reset</button></span>
        </form>
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>