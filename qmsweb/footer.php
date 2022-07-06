<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create three equal columns that floats next to each other */
        .columnfooter {
            float: left;
            width: 33.33%;
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

        .pft {
            text-align: left;
        }

        #footerform input,
        #footerform textarea {
            width: 80%;
            margin: 11px 0px;
            padding: 7px;
            font-size: medium;
            border: 2px solid white;
            background-color: black;
            border-radius: 5px;
            color: white;

        }

        #footerform {
            /* display: flex; */
            align-self: center;
            justify-content: center;
            flex-direction: column;
        }

        .submit {
            display: block;
            margin-bottom: 10px;

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
    include "footerform.php";
    ?>

    <div class="row">
        <div class="columnfooter" style="background-color:black; color:white;">
            <h2 style="text-decoration-line: overline; text-decoration-color: #E18728; ">Get In Touch</h2>
            <?php
            if ($insert == true and isset($_POST['messageform'])) {
                echo "<p class='submit_msg' style='text-align:left;'>Thanks for submiting we will get back to you soon</p>";
            }
            ?>
            <form action="index.php" method="post" id=footerform>
                <input type="text" name="name" id="name" placeholder="Full name...">
                <input type="email" name="email" id="email" placeholder="Email...">
                <input type="tel" name="phone" id="phone" placeholder="Mobile...">
                <textarea name="message" id="message" cols="30" rows="3" placeholder="Message..."></textarea>
                <button class="submit" type="submit" id="confrmsbt" name="messageform">Send Message</button>
                <button class="reset" type="reset" id="confrmrst">Reset</button>
            </form>
        </div>
        <div class="columnfooter" style="background-color:black;color:#ccc;">
            <h2 style="text-decoration-line: overline; text-decoration-color: #E18728; ">Contact Us</h2>
            <p class="pft" style="font-weight: bold;">Call Us:</p>
            <p class="pft"><i class="fas fa-phone"><a href="tel:01413594644">+91-0141-3594644</a></i></p>
            <p class="pft"><i class="fas fa-phone"><a href="tel:+919982377770">+91-9982377770</a></i></p>
            <p class="pft"><i class="fas fa-phone"><a href="tel:+919828017851">+91-9828017851</a></i></p>
            <p class="pft" style="font-weight: bold;">Email Us::</p>
            <p class="pft"><i class="fas fa-email"><a href="mailto:desk@qmsil.co.in">desk@qmsil.co.in</a></i></p>
            <p class="pft"><i class="fas fa-email"><a href="mailto:qms.india@qmsil.co.in">qms.india@qmsil.co.in</a></i></p>
            <p class="pft" style="font-weight: bold; display:inline;">CIN No:</p></span> <span>U74999RJ2017PLC059634 <br></span>
            <p class="pft" style="font-weight: bold; display:inline;">GSTIN:</p> <span>08AAACQ5065E1ZJ</span>
        </div>

        <div class="columnfooter" style="background-color:black;color:#ccc;">
            <h2 style="text-decoration-line: overline; text-decoration-color: #E18728; ">Reach Us</h2>
            <p style="font-weight: bold; display:inline;">Corporate Office:<br></p></span> <span>94/26, 2nd Floor, <br> Vijay Path, <br> Mansarovar, <br> Jaipur - Rajasthan <br> <br></span>
            <p style="font-weight: bold; display:inline;">Mumbai Office:<br></p></span> <span>C-502, Greenwood Apartment, Chakala, Andheri Kurla Road,<br> Andheir East, <br> Mumbai - Maharashtra <br><br></span>
            <p style="font-weight: bold; display:inline;">Pune Office:<br></p></span> <span>14, A- Wing, Kamala Cross Roads, 2nd Floor, Opp. P.C.M.C.,<br> Building, Pimpri, <br> Pune - Maharashtra <br><br></span>
            <p style="font-weight: bold; display:inline;">Bengaluru Office:<br></p></span> <span>Anand, Second Floor, 362, @nd Cross, 10th Main, I Block, III<br> Stage, Basveshwaragar, <br> Bengaluru - Karnataka <br><br></span>
            <p style="font-weight: bold; display:inline;">Haryana Office:<br></p></span> <span>129, Sector 10A, <br> Gurugram - Haryana <br><br></span>
            <p style="font-weight: bold; display:inline;">Uttrakhand Office:<br></p></span> <span>155, Divine Park, Near Omax,<br> Rudrapur - Uttrakhand <br><br></span>
            <p style="font-weight: bold; display:inline;">West Bengal:<br></p></span> <span>75C, Park Street, 3rd Floor,<br>Kolkata - West Bengal <br><br></span>
            <p style="font-weight: bold; display:inline;">Comming Soon:<br></p></span> <span>Assam | Madhya Pradesh | Punjab</span>

        </div>
    </div>

</body>

</html>