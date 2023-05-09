<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>

<div id="artikel1">
Bisa aja si Mail ternyata jago banget kalau disuruh jadi tukang gombal. Nggak sia-sia ternyata jualan ayam sambil PDKT sama Mey-Mey selama ini
</div>


<div class="artikel2">
Opah ini udah tua, tapi tingkahnya benar-benar nggak kenal sama dosa. Masih aja nyuruhin cucu-cucunya buat maling di minimarket
</div>

<script>
    document.getElementById("artikel1").style.color = "blue"; 

    const obj = document.getElementsByClassName("artikel2");
    obj[0].style.color = "pink"; 
</script>

</body>
</html>