<h2 class="display-6 fw-bold row">
    <div class="col align-self-start" id="saudacao">

    </div>

    <div class="col-3 align-self-end text-end" id="clock">
        13:00
    </div>

</h2>
<p class="col fs-4">
    Sistema Infranet do cimeb local para frases motivacionais
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