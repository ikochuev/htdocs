<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Визитка</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
    <div class="header">
    <canvas id="q"></canvas>
    </div>

    <div class="navigation">
         <?php include 'menu.inc.php' ?>
    </div>

    <div class="greetings">
        <h1>  <?php  echo $p  ?> </h1>
        <div class="myImg">
            <?php  echo '<img src="/img/neo.png">'; ?>
        </div>
            <h2>
                ENJOY Clubbed To Death Kurayamino Variation 
            </h2>
        <audio class="myAudio" controls autoplay loop>
            <source src="Clubbed_To_Death_Kurayamino_Variation.mp3" type="audio/mpeg">
        </audio>
    </div>
    <div class="knowlege">
                <div class="fullname">
                    <p> Моё имя и фамилия: 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Город в котором я живу: ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    годиков, но 12 марта исполнится <?php echo ++$age ?>.
                    </p>

                    <p>
                     За то небольшое время что я со Skillfactory, <br>
                     узнал про синтаксис PHP,JS, CSS, HTML.<br>
                     Вот, это мой первый сайт с нуля.<br>
                     Небольшой код:
                    </p>
                    <?php  include 'knowledge.inc.php'; ?> <br>
                    <?php echo("Текущее время: $time_today и дата: $date_today ."); ?> <br>
                    <?php echo 'Время генерации: '.$download_time.' секунд.'; ?> <br>
    

                </div>
            </div>
    </div>
    <div class="footer">
        <?php include 'logo.inc.php' ?>
        <h2> <?php  echo ' Skillfactory, 2022 ' ?> </h2>
        <p class="text">
                <i> Информации, получаемой из Матрицы, гораздо больше, 
                    чем ты можешь расшифровать. Ты привыкаешь к этому. 
                    Скоро твой мозг сам делает перевод. Я уже даже не вижу код. 
                    Я вижу блондинку, брюнетку и рыжую.</i><br>
                © к.ф. "Матрица"
                </p>
                <?php include 'footer.inc.php' ?>
    </div>
    </div>
</body>
<script src='matrix.inc.js'></script>
</html>