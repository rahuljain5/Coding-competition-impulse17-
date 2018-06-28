<?php
session_start();
$_SESSION['username'] = $_POST["name"];
if (!isset($_SESSION["ans"])) {
    ?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
<script src="./assets/js/questions.js"></script>
<head>
    <style>
        .left {
            position: absolute;
            left: 10%;
        }

        .right {
            position: absolute;
            left: 60%;
        }
    </style>
</head>
<body>
    <img id="implogo" src="./assets/images/impulse17.png" alt="impulse logo" height="150px" width="300px" />
    <h2 id="timer" style="display:inline; position:absolute; left:45%;">00:30:00</h2>
    <img id="fsmklogo" src="./assets/images/fsmk.jpg" alt="fsmk logo" height="120px" width="120px" style="float:right;" />
    <h3 id="username" style="display:inline; position:absolute; left:10%; top:20%">Team:
        <?php echo $_SESSION['username'] ?>
    </h3>
    <script src="./assets/js/main.js"></script>
    <script>
        count();
    </script>
    <h1 style="text-align:center">
        <b>
            <u>ROUND 1</u>
        </b>
    </h1>
    <div class="container-fluid">
        <div class="modal-dialog-lg">
            <div class="modal-content " id="modal-content1">
                <form id="forml" class="form-horizontal" method="post" action="result.php">
                    <input name="timetaken" id="stam" type="text" style=" display:none;"></input>
                    <div class="modal-header">
                        <script>
                            var i = 0;
                            Questions.forEach(questjson => {
                                i++;
                                var quest = "q" + i
                                var quest_html =
                                    `<div id='${quest}'>

<h3 style='font-size:28px; font-weight:bold;'>
<span class="label label-info" id='qid${i}'>${i}</span>${questjson.question}</h3>
<br/>
<fieldset id="field">
<h4>
<label class="element-animation1 left">
<input type="radio" name="${quest}_answer" value="a">${questjson.optionA}</label>
</h4>
<h4>
<label class="element-animation2 right">
<input type="radio" name="${quest}_answer" value="b">${questjson.optionB}</label>
<br/>
<br/>
</h4>
<h4>
<label class="element-animation3 left ">
<input type="radio" name="${quest}_answer" value="c">${questjson.optionC}</label>
</h4>
<h4>
<label class="element-animation4 right">
<input type="radio" name="${quest}_answer" value="d">${questjson.optionD}</label>
</h4>
</fieldset>
<br/>
<hr/>
</div>
`;
                                 document.write(quest_html);
                            });
                        </script>
                        <br/>
`                        <button type="submit" id="button1" name="submit" class="btn btn-primary btn-lg" value="next" style="align:center; position:absolute; left:47%;">SUBMIT</button>
                        <hr/>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
<?php
} else {
    echo "<h2>No Retry allowed!</h2>";
}
?>
