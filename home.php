<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire lateral</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #main {
            font-family: 'Rubik', serif;
            background-color: #f3f4f6;
            width: auto;
            height: auto;
        }

        .topic {
            text-align: center;
            font-size: 22px;
            color: #0f0f0e;
            font-weight: bolder;
            padding: 5px;
        }

        hr {
            margin: 10px;
            border-top: 1px solid #a6ada0;
        }

        p.subtopic {
            font-size: 22px;
            font-weight: bolder;
        }

        button.actionbtn {
            background-color: #0b4c72;
            color: white;
            font-weight: bolder;
        }

        .rmbtn {
            border-radius: 100%;
        }

        .txtjob {
            width: 97%;
        }

        .jobtable {
            padding: 0px 10px;
        }

        td.txt-adj {
            width: 50%;
        }

        td.jobno {
            width: 3%;
        }

    </style>
</head>
<body>
    <div id="main">
        <div class="topic">
            <label for="topicLab">HIRELATERAL MAIL FORM</label>
        </div>
        <hr>
        <p class="subtopic">ENTER TODAY TOP JOBS</p>
        <div class="btn">
            <button class="add actionbtn">ADD MORE</button>
            <button class="remove actionbtn">REMOVE</button>
        </div>
        <div class="container">
            <h2>To-Do List</h2>
            <div class="row" id="todo-list">
                <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" id="todo-item" placeholder="Enter a task">
                    <div class="input-group-append">
                    <button class="btn btn-primary" id="add-todo">Add</button>
                    </div>
                </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                <ul class="list-group" id="todo-items">
                    <!-- To-do items will be added here -->
                </ul>
                </div>
            </div>
        </div>
        <div class="jobtable">
            <table id="myTable"></table>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        var table = $("#myTable");
        table.append("<tr><th class='jobno'>Jobs</th><th>Job Title</th><th>Job Url</th></tr>");
        for (var i = 0; i < 5; i++) {
            table.append("<tr class='trow"+(i+1)+"'><td class='jobno'>Job" + (i + 1) + ":</td><td class='txt-adj'><input type='text' class='txtjob' name='txttitle"+(i+1)+"' id='title"+(i+1)+"'></td><td class='txt-adj'><input type='text' class='txtjob' name='txturl"+(i+1)+"' id='url"+(i+1)+"'></td><td class='jobno'><button class='btn btn-danger rmbtn' type='button' id='close-btn"+(i+1)+"'>X</button></td></tr>");
        }

        $(document).on("click",".rmbtn", function() {
            var trClass = $(this).closest("tr").attr("class");
            $("."+trClass+"").remove();
        });
    });

    const inputField = document.getElementById("todo-item");
    const addButton = document.getElementById("add-todo");
    const todoList = document.getElementById("todo-items");
    // Add event listener to the "Add" button
    addButton.addEventListener("click", function() {
        console.log("item added");
        // Get the value of the input field
        const todoItem = inputField.value;
        // Create a new list item
        const newItem = document.createElement("li");
        newItem.classList.add("list-group-item");
        // Create a new text node with the to-do item text
        const itemText = document.createTextNode(todoItem);
        // Append the text to the list item
        newItem.appendChild(itemText);
        // create a span element to hold close button
        const span = document.createElement("span");
        span.classList.add("close");
        span.innerHTML = "&times;";
        newItem.appendChild(span);
        // Append the list item to the to-do list
        todoList.appendChild(newItem);
        // Clear the input field
        inputField.value = "";
        // Close button event listener 
        span.addEventListener("click", function() {
            newItem.remove();
            console.log("item removed");
        });
    });
</script>
</html>