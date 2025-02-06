<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Boxes</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 10px;
            width: 330px;
            margin: auto;
            padding-top: 50px;
        }

        .box {
            width: 100px;
            height: 100px;
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid black;
            font-weight: bold;
            cursor: pointer;
        }

        
        #form-container {
            display: none;
            margin-top: 20px;
            text-align: center;
        }

        #form-container input {
            padding: 5px;
            font-size: 16px;
        }

        #form-container button {
            padding: 5px 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="container"> 
        <?php 
        for($i = 1; $i <= 9; $i++) {
            echo "<div class='box' id='box$i' onclick='showForm($i)'>Box $i</div>";
        }    
        ?>
    </div>

    <!-- Form to input text -->
    <div id="form-container">
        <h3>Enter text for the box:</h3>
        <input type="text" id="boxText" placeholder="Enter text">
        <button onclick="updateBox()">Update Box</button>
    </div>

    <script>
        let clickedBoxId = null; 

        function showForm(boxId) {
            clickedBoxId = boxId;  
            document.getElementById('form-container').style.display = 'block';  
        }

        function updateBox() {
            const text = document.getElementById('boxText').value;  

            if (text) {
                document.getElementById('box' + clickedBoxId).innerText = text;  
                document.getElementById('boxText').value = ''; 
                document.getElementById('form-container').style.display = 'none'; 
            }
        }
    </script>
</body>
</html>
