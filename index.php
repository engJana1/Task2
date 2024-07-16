<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>واجهة تحكم بالروبوت</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eed9c4; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff8e7; 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        h2 {
            color: #333333; 
            margin-bottom: 20px;
        }
        .btn {
            padding: 15px 30px;
            font-size: 18px;
            margin: 10px;
            background-color: #4CAF50; 
            color: #ffffff; 
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #45a049; 
        }
        .btn.stop {
            background-color: #e74c3c; 
        }
        .btn.stop:hover {
            background-color: #c0392b; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2> تحكم بالروبوت</h2>
        <form action="control.php" method="post"> 
        <button class="btn" type="submit" name="direction" value="يسار">يسار</button>
        <button class="btn stop" type="submit" name="direction" value="توقف">توقف</button>
        <button class="btn" type="submit" name="direction" value="يمين">يمين</button>
        <button class="btn" type="submit" name="direction" value="أمام">أمام</button>
        <button class="btn" type="submit" name="direction" value="خلف">خلف</button>
    </div>
</body>
</html>


