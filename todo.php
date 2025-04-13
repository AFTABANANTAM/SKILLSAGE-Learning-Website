<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To Do List</title>
    <link rel="stylesheet" href="style1.css.css">
</head>
<body>
    <div>
        <span id="date"></span>
    </div>
        <div class="container" id="dark">
            <div class="heading">
                <h2>To Do List <img src="notes.png" width="30" height="30" style="margin-left:5px"></h2>
            </div>
            <div class="container2">
                <input type="text" id="inputContainer" placeholder="Add The Task">
                <button onclick="addTask()">Add Task</button>
            </div>
                <ul id="listContainer">
                </ul>
        </div>
</body>
<script src="script.js"></script>
</html>