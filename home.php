<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire lateral</title>
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

        .btn {
            display: block;
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
            margin: 30px 10px;
        }

        button.actionbtn {
            background-color: #0b4c72;
            color: white;
            font-weight: bolder;
            padding: 5px 20px;
            border: none;
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

        .getbtn {
            text-align: center;
        }

        button.codebtn {
            background-color: #179721;
            color: white;
            font-weight: bolder;
            padding: 5px 20px;
            border: 0.5px solid #179721;
        }

        .jobsearch {
            text-align: center;
        }

        p {
            margin-top: 0;
            margin-bottom: 0;
        }

        button.mailbtns {
            margin: 0px 20px 0px 0px;
            background-color: #355a66;
            color: #f1f2dd;
            font-weight: 600;
            padding: 4px 24px 4px 24px;
            border: 1px solid #355a66;
        }

        .mail {
            margin: 0px 30px 30px 30px;
            height: 610px;
        }

        .mailbtn {
            padding: 10px 0px;
            text-align: center;
        }

        .preview {
            margin: 13px 0px 0px 0px;
            padding: 3px 10px 0px 10px;
            background-color: #cfcf5b;
            color: #919237;
            font-size: 23px;
            font-weight: 900;
            text-align: center;
        }

        select#joblimit {
            margin: 0px 15px 0px 0px;
            padding: 7px 40px 7px 0px;
            font-weight: 500;
            border: 2px solid #0b4c72;
        }

        .search-bar {
            text-align: center;
            margin: 30px 0px 15px 0px;
        }

        .mails {
            background-color: #f5f5dd;
            height: 550px;
        }

        input#jobtext {
            width: 65%;
            border: 2px solid #c4c4c4;
            height: 40px;
        }

        textarea#webcode {
            background-color: #f5f5dd;
            border: none;
            height: 500px;
            width: 100%;
            padding: 0px 20px 0px 20px;
            resize: none;
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
            <button class="add actionbtn" id="add_btn">ADD MORE</button>
            <button class="remove actionbtn" id="rem_last_btn">REMOVE</button>
        </div>
        <div class="jobtable">
            <table id="myTable"></table>
        </div>
        <p class="subtopic">SEARCH JOBS WITH LIMIT</p>
        <div class="jobsearch">
            <select id="joblimit">
                <option disabled selected>Select Limit</option>
                <option value="option1">1</option>
                <option value="option2">2</option>
                <option value="option3">3</option>
                <option value="option4">4</option>
                <option value="option5">5</option>
                <option value="option5">6</option>
                <option value="option5">7</option>
                <option value="option5">8</option>
                <option value="option5">9</option>
                <option value="option5">10</option>
            </select>
            <button class="add actionbtn">SEARCH JOBS</button>
        </div>
        <div class="search-bar">
            <input type="text" name="jobtext" id="jobtext">
        </div>
        <div class="getbtn">
            <button type="submit" class="codebtn" id="get_code">GET CODE</button>
        </div>
        <div class="mail">
            <div class="preview">
                <p>MAIL PREVIEW</p>
            </div>
            <div class="mails">
                <div class="mailbtn">
                    <button class="sourcebtn mailbtns">SOURCE CODE</button>
                    <button class="previewbtn mailbtns">PREVIEW</button>
                </div>
                <div class="desc">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        var table = $("#myTable");
        var trCounter = 1;
        table.append("<tr><th class='jobno'>Jobs</th><th>Job Title</th><th>Job Url</th></tr>");
        for (var i = 0; i < 5; i++) {
            table.append("<tr class='tjob' id='trow"+(i+1)+"'><td class='jobno'>Job" + (i + 1) + ":</td><td class='txt-adj'><input type='text' class='txtjob' id='title"+(i+1)+"'></td><td class='txt-adj'><input type='text' class='txtjob txturl' id='url"+(i+1)+"'></td><td class='jobclose'><button class='btn btn-danger rmbtn' type='button' id='close-btn"+(i+1)+"'>X</button></td></tr>");
            trCounter++;
        }

        $(document).on("click","#add_btn", function() {
            table.append("<tr class='tjob' id='trow"+trCounter+"'><td class='jobno'>Job" + trCounter + ":</td><td class='txt-adj'><input type='text' class='txtjob' id='title"+trCounter+"'></td><td class='txt-adj'><input type='text' class='txtjob txturl' id='url"+trCounter+"'></td><td class='jobclose'><button class='btn btn-danger rmbtn' type='button' id='close-btn"+trCounter+"'>X</button></td></tr>");
            trCounter++;
        });

        $(document).on("click","#rem_last_btn", function(){
            var trToRemove = "#trow" + (trCounter - 1);
            if ($(trToRemove).length) {
                $(trToRemove).remove();
                trCounter--;
            }
        });

        function adjustTrNumbers() {
            $(".tjob").each(function(index) {
                var currentTrId = $(this).attr("id");
                var newTrId = "trow" + (index + 1);
                $(this).attr("id", newTrId);
                $(this)
                    .find(".jobno")
                    .text("Job" + (index + 1) + ":");
                $(this)
                    .find(".txtjob")
                    .attr("id", "title" + (index + 1));
            });
        }

        $(document).on("click",".rmbtn", function() {
            var trToRemove = $(this).parent().parent().attr("id");
            if ($("#" + trToRemove).length) {
                $("#" + trToRemove).remove();
                trCounter--;
                adjustTrNumbers();
            }
        });

        var code1 = "<div id='webdesign' style='margin: 0px 290px;'><div class='post' style='background-color: white;padding: 0px 25px;'><p class='postpar' style='font-size: 18px;font-weight: bold;color: #abafb3;margin: 0px 0px 15px 0px;'>Dear Jobseekers,</p><p class='postpar' style='font-size: 18px;font-weight: bold;color: #abafb3;margin: 0px 0px 15px 0px;'>Latest Government jobs on hirelateral.com</p><div class='posts'><table class='tablepost' style='width: 100%'><tr class='posttr' style='border: 2px solid #717277;'><th><p class='theadtxt' style='font-weight: bold;color: #464646;font-size: 16px;margin: 0px 0px 0px 5px;'>POST</p></th></tr>";

        $(".mail").hide();

        $(document).on("change",".txturl",function(){
            var title = [];
            var url = [];
            $('#myTable tr td input[type="text"]').each(function(index) {
                if (index % 2 === 0) {
                    title.push($(this).val());
                } else {
                    url.push($(this).val());
                }
            });
            var code1 = "<div id='webdesign' style='margin: 0px 290px;'><div class='post' style='background-color: white;padding: 0px 25px;'><p class='postpar' style='font-size: 18px;font-weight: bold;color: #abafb3;margin: 0px 0px 15px 0px;'>Dear Jobseekers,</p><p class='postpar' style='font-size: 18px;font-weight: bold;color: #abafb3;margin: 0px 0px 15px 0px;'>Latest Government jobs on hirelateral.com</p><div class='posts'><table class='tablepost' style='width: 100%'><tr class='posttr' style='border: 2px solid #717277;'><th><p class='theadtxt' style='font-weight: bold;color: #464646;font-size: 16px;margin: 0px 0px 0px 5px;'>POST</p></th></tr>";
            for(var i=0;i<title.length;i++){
                if(title[i]!=""){
                    code1+="<tr class='posttr' style='border: 2px solid #717277;'><td><p class='posttxt' style='font-size: 22px;font-weight: bolder;margin: 0px 0px 0px 5px;line-height: 1;'>"+title[i]+"</p>";
                }
                if(url[i]!=""){
                    code1+="<a href='"+url[i]+"'><button class='applybtn' style='background-color: #ed931d;color: white;font-weight: 700;border: 1px solid #ed931d;border-radius: 3px;padding: 5px 4px;margin: 15px 0px 10px 5px;'>APPLY HERE</button></a></td></tr>";
                }
            }
            code1+="</table></div></div></div>";
            console.log(url);
            console.log(code1);
            $(".mail").show();
            $(".sourcebtn").click(function() {
                var code2="<textarea name='code' id='webcode' readonly></textarea>";
                $(".desc").html(code2);
                $("textarea").text(code1);
            });

            $(".previewbtn").click(function() {
                $(".desc").html(code1);
            });
        });

        $(document).on("click","#get_code",function(){
            $.ajax({
                url: 'getdata.php',
                type: 'POST',
                data: {search:"start"},
                success: function(data) {
                    myObj = JSON.parse(data);
                    $.each(myObj, function(i, item) {
                        title = item.title;
                        qualification = item.qualification;
                        salary = item.salary;
                        url = item.url;
                        if(title!="null"){
                            code1+="<tr class='posttr' style='border: 2px solid #717277;'><td><p class='posttxt' style='font-size: 22px;font-weight: bolder;margin: 0px 0px 0px 5px;line-height: 1;'>"+title+"</p>";
                        }
                        if(qualification!=null){
                            code1+="<p class='qualtxt' style='font-size: 16px;padding: 8px 0px 0px 5px;font-weight: 600;color: #7d7b7c;'>Qualification - "+qualification+"</p>";
                        }
                        if(salary!=null){
                            code1+="<p class='qualtxt' style='font-size: 16px;padding: 8px 0px 0px 5px;font-weight: 600;color: #7d7b7c;'>Salary - "+salary+"</p>";
                        }
                        if(url!="null"){
                            code1+="<a href='"+url+"'><button class='applybtn' style='background-color: #ed931d;color: white;font-weight: 700;border: 1px solid #ed931d;border-radius: 3px;padding: 5px 4px;margin: 15px 0px 10px 5px;'>APPLY HERE</button></a></td></tr>";
                        }
                    });
                    code1+="</table></div></div></div>";
                }
            });
            $(".mail").show();
        });

        $(document).on("keyup","#jobtext",function(){
            var search_str = $("#jobtext").val();
            $.ajax({
                url: 'getdata.php',
                type: 'POST',
                data: {search:search_str},
                success: function(data) {
                    myObj = JSON.parse(data);
                    var code1 = "<div id='webdesign' style='margin: 0px 290px;'><div class='post' style='background-color: white;padding: 0px 25px;'><p class='postpar' style='font-size: 18px;font-weight: bold;color: #abafb3;margin: 0px 0px 15px 0px;'>Dear Jobseekers,</p><p class='postpar' style='font-size: 18px;font-weight: bold;color: #abafb3;margin: 0px 0px 15px 0px;'>Latest Government jobs on hirelateral.com</p><div class='posts'><table class='tablepost' style='width: 100%'><tr class='posttr' style='border: 2px solid #717277;'><th><p class='theadtxt' style='font-weight: bold;color: #464646;font-size: 16px;margin: 0px 0px 0px 5px;'>POST</p></th></tr>";            
                    $.each(myObj, function(i, item) {
                        title = item.title;
                        qualification = item.qualification;
                        salary = item.salary;
                        url = item.url;
                        if(title!="null"){
                            code1+="<tr class='posttr' style='border: 2px solid #717277;'><td><p class='posttxt' style='font-size: 22px;font-weight: bolder;margin: 0px 0px 0px 5px;line-height: 1;'>"+title+"</p>";
                        }
                        if(qualification!=null){
                            code1+="<p class='qualtxt' style='font-size: 16px;padding: 8px 0px 0px 5px;font-weight: 600;color: #7d7b7c;'>Qualification - "+qualification+"</p>";
                        }
                        if(salary!=null){
                            code1+="<p class='qualtxt' style='font-size: 16px;padding: 8px 0px 0px 5px;font-weight: 600;color: #7d7b7c;'>Salary - "+salary+"</p>";
                        }
                        if(url!="null"){
                            code1+="<a href='"+url+"'><button class='applybtn' style='background-color: #ed931d;color: white;font-weight: 700;border: 1px solid #ed931d;border-radius: 3px;padding: 5px 4px;margin: 15px 0px 10px 5px;'>APPLY HERE</button></a></td></tr>";
                        }
                    });
                    code1+="</table></div></div></div>";
                    $(".desc").html(code1);
                }
            });
        });

        $(".sourcebtn").click(function() {
            var code2="<textarea name='code' id='webcode' readonly></textarea>";
            $(".desc").html(code2);
            $("textarea").text(code1);
        });

        $(".previewbtn").click(function() {
            $(".desc").html(code1);
        });
    });
</script>
</html>