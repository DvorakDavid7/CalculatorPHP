<?php
    include_once "lib/header.php";
?>

<form>
    <input type="text" name="num1" placeholder="Number 1"><br>
    <select name="operator" id="operator">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select><br>
    <input type="text" name="num2" placeholder="Number 2">
    <button id="submit-btn" type="button">Submit!</button>
</form>

<div>
    <span id="result"></span>
</div>
<script src="script.js"></script>
</body>
</html>