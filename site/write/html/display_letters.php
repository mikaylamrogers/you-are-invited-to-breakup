<!DOCTYPE HTML>
<HTML>
<head>
<title>Congratulations, You Just Brokeup!</title>
    <link href="../css/mailbox.css" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>
<body>  
    
<!-- background, manila, tabs -->

<div class="flex-container">
    <div class="flex-child left">📀</div>
    <div class="flex-child middle">🖊️</div>
    <div class="flex-child right">📬</div>
</div>

<div id="manila">
    <h1 style="position: fixed;">BROWSE OTHER BREAKUPS:</h1>

    <div class="inside">

        <?php
        $url = parse_url(getenv("mysql://b7eb69c7de4c8b:ed3447d4@us-cdbr-east-06.cleardb.net/heroku_2ebf4257da5c43d?reconnect=true"));
        
        $host = getenv('PMA_HOST');
        $user = getenv('PMA_USER');
        $password = getenv('PMA_PASSWORD');
        $database = getenv('PMA_DM');
        $conn = mysqli_connect($host, $user, $password, $database);

        // // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Select all rows from the letters table
        $sql = "SELECT * FROM letters";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Group letters by name1
            $letters_by_name1 = array();
            while($row = mysqli_fetch_assoc($result)) {
                $name1 = $row['name1'];
                if (!isset($letters_by_name1[$name1])) {
                    $letters_by_name1[$name1] = array();
                }
                array_push($letters_by_name1[$name1], $row);
            }

        // Display letters by name1
        foreach ($letters_by_name1 as $name1 => $letters) {
            $i = 0;
            echo "<div class='letters'>";

            foreach ($letters as $letter) {
                if ( $name1 == 'iPhone 6s' || $name1 == 'iphone 6s' ) {
                    echo "<div class='letter'>";
                        echo "<div class='stamp'>";
                            echo "<model-viewer src='models/iphone6.glb' class='stampModel' auto-rotate progressive></model-viewer>";
                            echo "<div class='recBox' id='recBox1'></div>";
                            echo "<img src='../../images/stamp.png' class='stampImg' id='stamp1'>";
                        echo "</div>";

                        echo "<br><div class='salutation'> Dear " . $letter["name1"] . ",<br><br></div>";
                        echo "<div id='message'>I fell in love with your " . $letter["blank1"] . " from the moment we first met. ";
                        echo "You showed me a 3D love where we could interact in entirely new ways. But I'm afraid I've found someone else, someone with a more expansive " . $letter["blank2"] . ". Someone who cares more about life's " . $letter["blank3"] . " without randomly becoming " . $letter["blank4"] . " after some time. <br></div>";
                        echo "<br><div class='salutation'>Cordially,<br>" . $letter["name2"] . "<br><br></div>";
                    echo "</div>";
                }

                if ( $name1 == 'Nintendo DSi' || $name1 == 'nintendo dsi' || $name1 == 'Nintendo dsi' || $name1 == 'Nintendo Dsi' ) {
                    echo "<div class='letter' style='background-color: #fcd9e3'>";
                        echo "<div class='stamp'>";
                            echo "<model-viewer src='models/dsi.glb' id='dsi' class='stampModel' auto-rotate progressive></model-viewer>";
                            echo "<div class='recBox' id='recBox1'></div>";
                            echo "<img src='../../images/stamp.png' class='stampImg' id='stamp1'>";
                        echo "</div>";

                        echo "<br><div class='salutation'> Dear " . $letter["name1"] . ",<br><br></div>";
                        echo "<div id='message'>We had so much " . $letter["blank1"] . " from the moment we first met. ";
                        echo "You showed me a 3D love where we could interact in entirely new ways. But I'm afraid I've found someone else, someone with more  " . $letter["blank2"] . " and " . $letter["blank3"] . ", and quite frankly, someone more fun to play " . $letter["blank4"] . " with. <br></div>";
                        echo "<br><div class='salutation'>Cordially,<br>" . $letter["name2"] . "<br><br></div>";
                    echo "</div>";
                }

                if ( $name1 == 'Point & shoot camera' || $name1 == 'point & shoot camera' ) {
                    echo "<div class='letter' style='background-color: #ededed'>";
                        echo "<div class='stamp'>";
                            echo "<model-viewer src='models/polaroidcamera.glb' class='stampModel' auto-rotate progressive></model-viewer>";
                            echo "<div class='recBox' id='recBox1'></div>";
                            echo "<img src='../../images/stamp.png' class='stampImg' id='stamp1'>";
                        echo "</div>";

                        echo "<br><div class='salutation'> Dear " . $letter["name1"] . ",<br><br></div>";
                        echo "<div id='message'>You made it so easy to " . $letter["blank1"] . " the small things in life. ";
                        echo "I loved taking you everywhere, showing you every part of me. But I'm afraid I've found someone else, someone who cares more about  " . $letter["blank2"] . " over " . $letter["blank3"] . ", someone with a better " . $letter["blank4"] . " in life. <br></div>";
                        echo "<br><div class='salutation'>Cordially,<br>" . $letter["name2"] . "<br><br></div>";
                    echo "</div>";
                }

                if ( $name1 == 'iPhone 4' || $name1 == 'iphone 4' ) {
                    echo "<div class='letter' style='background-color: #f2eed8;'>";
                        echo "<div class='stamp'>";
                            echo "<model-viewer src='models/iphone4.glb' class='stampModel' auto-rotate progressive></model-viewer>";
                            echo "<div class='recBox' id='recBox1'></div>";
                            echo "<img src='../../images/stamp.png' class='stampImg' id='stamp1'>";
                        echo "</div>";

                        echo "<br><div class='salutation'> Dear " . $letter["name1"] . ",<br><br></div>";
                        echo "<div id='message'>I admired your ability to " . $letter["blank1"] . " so much. ";
                        echo "You were the first to show so much love and admiration for my beauty. But I'm afraid I've found someone else, someone who isn't so  " . $letter["blank2"] . " after a small fight and who doesn't run out of " . $letter["blank3"] . ", after just a(n) " . $letter["blank4"] . ". <br></div>";
                        echo "<br><div class='salutation'>Cordially,<br>" . $letter["name2"] . "<br><br></div>";
                    echo "</div>";
                }

                if ( $name1 == 'iPod Nano' || $name1 == 'ipod nano' ) {
                    echo "<div class='letter' style='background-color: #dcf2f2'>";
                        echo "<div class='stamp'>";
                            echo "<model-viewer src='models/ipodnano.glb' class='stampModel' auto-rotate progressive></model-viewer>";
                            echo "<div class='recBox' id='recBox1'></div>";
                            echo "<img src='../../images/stamp.png' class='stampImg' id='stamp1'>";
                        echo "</div>";

                        echo "<br><div class='salutation'> Dear " . $letter["name1"] . ",<br><br></div>";
                        echo "<div id='message'>You gave me a reason to " . $letter["blank1"] . " everyday. ";
                        echo "I loved spinning you round and round. But I'm afraid I've found someone else, someone with a better  " . $letter["blank2"] . " who is willing to stay up to date with my favorite " . $letter["blank3"] . ", like " . $letter["blank4"] . ". <br></div>";
                        echo "<br><div class='salutation'>Cordially,<br>" . $letter["name2"] . "<br><br></div>";
                    echo "</div>";
                }

                if ( $name1 == 'Video Recorder' || $name1 == 'video recorder' ) {
                    echo "<div class='letter' style='background-color: #ebe8da'>";
                        echo "<div class='stamp'>";
                            echo "<model-viewer src='models/mino.glb' class='stampModel' auto-rotate progressive></model-viewer>";
                            echo "<div class='recBox' id='recBox1'></div>";
                            echo "<img src='../../images/stamp.png' class='stampImg' id='stamp1'>";
                        echo "</div>";

                        echo "<br><div class='salutation'> Dear " . $letter["name1"] . ",<br><br></div>";
                        echo "<div id='message'>You gave me a whole new way to capture " . $letter["blank1"] . ". ";
                        echo "I loved reliving all our memories together. But I'm afraid I've found someone else—someone who is up to date with my passions, like posting on  " . $letter["blank2"] . " or " . $letter["blank3"] . " on " . $letter["blank4"] . ". <br></div>";
                        echo "<br><div class='salutation'>Cordially,<br>" . $letter["name2"] . "<br><br></div>";
                    echo "</div>";
                }

                if ( $name1 == 'Old Calculator' || $name1 == 'old calculator' ) {
                    echo "<div class='letter'>";
                        echo "<div class='stamp'>";
                            echo "<model-viewer src='models/casio.glb' class='stampModel' auto-rotate progressive></model-viewer>";
                            echo "<div class='recBox' id='recBox1'></div>";
                            echo "<img src='../../images/stamp.png' class='stampImg' id='stamp1'>";
                        echo "</div>";

                        echo "<br><div class='salutation'> Dear " . $letter["name1"] . ",<br><br></div>";
                        echo "<div id='message'>You gave me my first glimpse into a " . $letter["blank1"] . " reality. ";
                        echo "I loved growing up with you. But I'm afraid I've found someone else, someone who can do so much more than just  " . $letter["blank2"] . " numbers, and who lets me " . $letter["blank3"] . " with other " . $letter["blank4"] . ". <br></div>";
                        echo "<br><div class='salutation'>Cordially,<br>" . $letter["name2"] . "<br><br></div>";
                    echo "</div>";
                }
            }
        }

        echo "</div>";

        } else {
            echo "No letters found.";
        }

        // Close connection
        mysqli_close($conn);
        ?>

    </div>
</div>

<script>
    const scrollContainer = document.querySelector("#manila");

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
    });

</script>

</body>
</html>
