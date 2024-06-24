<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    

        <label for="checkbox">Checkbox:</label>
        <input type="checkbox" id="checkbox" name="checkbox"><br><br>

        <label for="color">Color:</label>
        <input type="color" id="color" name="color" value="#000000"><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date"><br><br>

        <label for="datetime-local">Datetime Local:</label>
        <input type="datetime-local" id="datetime-local" name="datetime-local"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="file">File:</label>
        <input type="file" id="file" name="file">

        <input type="hidden" id="hidden" name="hidden" value="hiddenValue">


        <label for="month">Month:</label>
        <input type="month" id="month" name="month"><br><br>

        <label for="number">Number:</label>
        <input type="number" id="number" name="number" min="0" max="100"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <label for="radio">Radio:</label>
        <input type="radio" id="radio1" name="radio" value="option1"> Option 1
        <input type="radio" id="radio2" name="radio" value="option2"> Option 2<br>

        <label for="range">Range:</label>
        <input type="range" id="range" name="range" min="0" max="100"><br>

        

        <label for="search">Search:</label>
        <input type="search" id="search" name="search"><br><br>

       

        <label for="tel">Telephone:</label>
        <input type="tel" id="tel" name="tel"><br><br>

        <label for="text">Text:</label>
        <input type="text" id="text" name="text"><br><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time"><br><br>

        <label for="url">URL:</label>
        <input type="url" id="url" name="url"><br><br>

        <label for="week">Week:</label>
        <input type="week" id="week" name="week"><br><br>

        <input type="reset" value="Reset Form"><br><br>
        <input type="submit" value="Submit Form"><br><br>
        <input type="image" id="image" name="image" src="{{asset('public/img_submit.gif')}}" alt="Submit Image"><br><br>
    </center>
</body>
</html>