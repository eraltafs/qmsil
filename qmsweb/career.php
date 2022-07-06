<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Career</title>
    <style>
        .demoh1 {
            text-align: center;

        }

        #careerbg {
            width: 100%;
            height: 500px;
            z-index: -2;
            margin-bottom: 2px;
            margin-top: 40px;
        }

        .submit_msg {
            color: green;
        }

        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }

        .row {
            margin-top: 10px;
        }

        /* Clear floats after the column footers */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        #careerpgform {
            display: flex;
            /* justify-content: center;
            align-items: center; */
            flex-direction: column;
        }

        #careerpgform input,
        textarea {
            width: 100%;
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

        .presume {
            text-align: left;
        }
        .options{
            width: 100%;
            margin: 11px;
            padding: 7px;
            border: 2px solid black;
            border-radius: 6px;
            font-size: 20px;
            outline: none;

        }
        form h5{
            text-align: left;
            margin-left: 11px;
            font-size: 20px;

        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    include "careerform.php";
    ?>

    <img id="careerbg" src="img/careerbg.jpg" alt="" srcset="">

    <div class="container">
        <h1 id="indexh1">Careers</h1>
        <div class="row">
            <div class="column">
                <div class="container">


                    <h4>Fascinating work, great people, and boundless opportunities</h4>

                    <p>Our consultants have a range of knowledge, backgrounds, and experience. You will work with leading companies, government agencies, and multinational organisations on their most critical challenges. You will have the chance to work with some of the most diverse and talented people and
                        help clients transform their performance.</p>
                    <p>Here at QMS India Limited, you will learn every day, take on the challenges that will build your confidence, and make an impact on global industries and organizations. Mail your CV to<a href="mailto:qms.india@qmsil.co.in"> qms.india@qmsil.co.in</a></p>
                </div>
            </div>
            <div class="column">
                <h4>Apply for Job, please fill the form given below:</h4>
                <?php
                if ($insert == true and isset($_POST['careerform'])) {
                    echo "<p class='submit_msg'>Thanks for submiting we will get back to you soon</p>";
                }
                ?>
                <form action="career.php" method="post" id="careerpgform">
                    <input type="text" name="name" id="name" placeholder="Full name...">
                    <input type="email" name="email" id="email" placeholder="Email...">
                    <input type="tel" name="phone" id="phone" placeholder="Mobile...">
                    <input type="text" name="subject" id="subject" placeholder="Subject..">
                    <input type="text" name="matricpercent" id="matricpercent" placeholder="10th class percenatge">
                    <h5> Highest education</h6>
                    <select class="options" name="education" id="education">
                        <option value="1Oth">1Oth</option>
                        <option value="12th">12th</option>
                        <option value="Diploma">Diploma</option>
                        <option value="B.Scie">B.Sc</option>
                        <option value="B.tech">B.tech</option>
                        <option value="M.tech">M.tech</option>
                    </select>
                    <textarea name="message" id="message" cols="30" rows="3" placeholder="Message..."></textarea>
                    <span><button type="submit" id="confrmsbt" name="careerform">Submit</button>
                        <button class="reset" type="reset" id="confrmrst">Reset</button></span>
                </form>
            </div>

        </div>


    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>