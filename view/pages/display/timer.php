<h2 class="display-6 fw-bold row">
    <div class="col align-self-start" id="saudacao">

    </div>

    <div class="col-3 align-self-end text-end" id="clock">
        13:00
    </div>

</h2>
<p class="col fs-4">
    <?php
    $frases = array(
        "A coragem não é a ausência de medo, mas a conquista dele.",
        "O fracasso é a oportunidade de começar de novo, com mais inteligência.",
        "A vida é curta para se preocupar com coisas que não importam. - Mark Twain",
        "Não existe um caminho para a felicidade. A felicidade é o caminho.",
        "Você não fracassa até desistir. - George Herbert",
        "Não há obstáculo que possa resistir a uma mente determinada. - Napoleon Hill",
        "Se você acredita, você pode alcançar. - Jack Nicklaus",
        "A vida começa fora da sua zona de conforto. - Neale Donald Walsch",
        "O sucesso é a soma de pequenos esforços repetidos dia após dia. - Robert Collier",
        "Se você quer ser bem sucedido, precisa desenvolver uma paixão por seu trabalho. - Steve Jobs",
        "A maior barreira para o sucesso é a falta de confiança em si mesmo. - Socrates",
        "Não há nada de impossível para alguém que tem a coragem de tentar. - Nick Vujicic",
        "Não importa o quão lentamente você vá, desde que não pare. - Confúcio.",
        "",
    );

    $hoje = date("z");
    $frase_do_dia = $frases[$hoje % count($frases)];

    echo "$frase_do_dia";
    ?>

</p>
<div class="row m-auto">
    <a href="index.php?pag=<?php echo $menu2 ?>" class="btn btn-warning btn-lg col-5 col-lg-2 col-md-3 col-sm-4 justify-content-sm-center" type="button">
        Formulários
    </a>
    <a href="index.php?pag=<?php echo $menu3 ?>" class="btn btn-dark btn-lg mx-2 col-5 col-md-2 col-sm-4 justify-content-sm-center" type="button">
        Ramais
    </a>
</div>

<script>
    function updateGreeting() {
        var now = new Date();
        var hours = now.getHours();
        var greeting;
        if (hours < 12) {
            greeting = "Bom dia! ☀️";
        } else if (hours < 18) {
            greeting = "Boa tarde! 🌅";
        } else {
            greeting = "Boa noite! 🌚";
        }
        document.getElementById("saudacao").innerHTML = greeting;
    }
    updateGreeting()
    setInterval(updateGreeting, 1000);

    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        hours = (hours < 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;
        document.getElementById("clock").innerHTML = hours + ":" + minutes + ":" + seconds;
    }
    updateClock()
    setInterval(updateClock, 1000);
</script>