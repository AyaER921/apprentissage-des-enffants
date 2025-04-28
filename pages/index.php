<!DOCTYPE html>
<!-- sara CHANOUANE ISITD -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Aventure Monde</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h1 {
            color: #ff6f61;
            margin-top: 20px;
        }
        .test-button {
            display: block;
            margin: 20px auto;
            padding: 15px 30px;
            background-color: #6b5b95;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 1.2em;
            box-shadow: 3px 3px 5px #888888;
            transition: background-color 0.3s;
        }
        .test-button:hover {
            background-color: #9e6fa0;
        }
        #carte-container {
            width: 100%;
            max-width: 1400px;
            margin: 20px auto;
        }
        #carte-interactive {
            display: inline-block;
        }
        area {
            cursor: pointer;
            transition: fill 0.3s;
        }
        area:hover {
            fill: rgba(255, 238, 88, 0.7);
        }
    </style>
</head>
<body>
    <h1>Découvre le Monde !</h1>

    <a href="test.php" class="test-button">Teste tes connaissances</a>

    <div id="carte-container">
        <div id="carte-interactive">
            <img src="carte.jpg" usemap="#image-map" alt="Carte du monde interactive">

            <map name="image-map">
                <area target="" alt="North America" title="North America" href="continent.php?continent=North America" coords="606,147,373,531,289,498,72,251,96,175,395,57,628,63" shape="poly">
                <area target="" alt="AMRICA" title="AMRICA" href="continent.php?continent=AMRICA" coords="435,528,565,642,411,875,373,604,406,533" shape="poly">
                <area target="" alt="Africa" title="Africa" href="continent.php?continent=Africa" coords="888,558,834,714,765,764,619,521,626,470,687,405,752,441,803,437" shape="poly">
                <area target="" alt="Australie" title="Australie" href="continent.php?continent=Australie" coords="1156,650,1289,669,1283,797,1128,748" shape="poly">
                <area target="" alt="Europe" title="Europe" href="continent.php?continent=Europe" coords="677,251,799,177,849,236,857,316,844,363,781,382,749,384,678,395,651,392,662,321" shape="poly">
                <area target="" alt="Asia" title="Asia" href="continent.php?continent=Asia" coords="891,202,1089,115,1294,181,1382,226,1230,261,1221,333,1139,411,1153,448,1118,480,1097,524,1044,485,996,485,994,522,932,473,907,495,880,508,844,462,869,434,831,421,875,202" shape="poly">
            </map>
        </div>
    </div>
</body>
</html>