<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="home.css">
<style>

#toolbar {
    display: flex;
    height: 40px;
    width: 60%;
    background-color: #202020;
    margin:auto;
}

#toolbar label {
    font-size: 12px;
}

#toolbar input {
    width: 100%;
}

#toolbar button {
    background-color: #1565c0;
    border: none;
    border-radius: 4px;
    color:white;

}
.toLeft{
    width:100%;
    float:left;
    padding: 1px;
}
    </style>

</head>
<body>
    <?php
if(!isset($_SESSION['id'])){
        echo '<p>A folytatáshoz <a href="./forms/loginform.php">jelentkezzen be!</a></p>';
    }
else{
echo '<section>
        <div id="toolbar">
        <div class="toLeft">
            <button id="clear">Törlés</button>
            <button id="send">Beküldés</button>
            <button id="download" onclick="downloadCanvas()">Letöltés</button>
            <button id="upload">Kép feltöltése</button>
        </div>
            <label for="stroke">Stroke</label>
            <input id="stroke" name="stroke" type="color">
            <label for="lineWidth">Line Width</label>
            <input id="lineWidth" name="lineWidth" type="number" value="5">

        </div>
        <div class="drawing-board">
            <canvas id="drawing-board"></canvas>
        </div>
    </section>
        <script src="forms/draw.js"></script>';
}
?>
</body>