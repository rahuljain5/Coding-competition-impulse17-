<?php
session_start();
include('config.php');
$connect = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$connect) {
	echo "failed to connect to the Database";
	die();
}
if (isset($_POST['submit'])) {
    $ans = array('d', 'c', 'b', 'c', 'd', 'c', 'd', 'b', 'b', 'd', 'd', 'd', 'c', 'a', 'c', 'b', 'a', 'c', 'c', 'a', 'c', 'a', 'b', 'c', 'a', 'c', 'b', 'a', 'b', 'a');
    $correct = 0;
    $j = 1;
    $queak = $_SESSION['uname'];
    $tt = $_POST['stamp'];
    for ($i = 0; $i < 30; $i++, $j++) {
        if (isset($_POST['q' . $j . '_answer'])) {
            if ($ans[$i] == $_POST['q' . $j . '_answer']) {
                $correct++;
            }
        }
    }
    if ($connect) {
        $q = "INSERT INTO code VALUES('$queak','$correct','$tt');";
        $res = mysqli_query($connect, $q);
        $_SESSION["ans"] = 1;
    }
}
?>
<img id="implogo" src="./assets/images/impulse17.png" alt="impulse logo" height="130px" width="250px" style="display:inline;">
</img>
<h3 style="text-align:center; display:inline; position:absolute; top:5%; left:45%;">Time taken:
    <?php echo $_POST['stamp'] ?>
</h3>
<img id="fsmklogo" src="./assets/images/fsmk.jpg" alt="fsmk logo" height="100px" width="100px" style="float:right; display:inline;" />
<img src="./assets/images/fist.jpg" style="position:absolute; top:35%; left:48%;" />
<h2 style="text-align:center; position:absolute; top:20%; left:47%;" ">Team: <?php echo $_SESSION['username']; ?></h2>
<h1 style="text-align:center; position:absolute; top:20%; right:40%; font-size:98px; ">Your score:</h1>
<h1 style="text-align:center; position:absolute; top:35%; font-size:128px; left:45%; "><?php echo $correct; ?></h1>
