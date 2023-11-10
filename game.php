<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

function check($computer, $human) {
    if ($human == $computer) {
        return "Tie";
    } else if ($human == 0 && $computer == 1) {
        return "You lose";
    } else if ($human == 1 && $computer == 2) {
        return "You lose";
    } else if ($human == 2 && $computer == 0) {
        return "You lose";
    } else {
        return "You win";
    }
}

$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST['human']) ? $_POST['human'] : -1;

if ($human != -1) {
    $computer = rand(0, 2);
    $result = check($computer, $human);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rock Paper Scissors</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <a href="logout.php">Logout</a>
    <form method="POST">
        <select name="human">
            <option value="-1">Select</option>
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
        </select>
        <input type="submit" value="Play">
    </form>

    <?php if ($human != -1): ?>
        <p>Your Play=<?php echo $names[$human]; ?> Computer Play=<?php echo $names[$computer]; ?> Result=<?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
