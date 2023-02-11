<?php
if (@$_GET['pag'] == "form") {
    //Pag 2
?>
    <script>
        //Outros
        document.querySelector('#menu1').classList.remove('link-secondary')
        document.querySelector('#menu2').classList.remove('link-dark')
        document.querySelector('#menu3').classList.remove('link-secondary')
        document.querySelector('#menu4').classList.remove('link-secondary')
        //Selecionado
        document.querySelector('#menu1').classList.add('link-dark')
        document.querySelector('#menu2').classList.add('link-secondary')
        document.querySelector('#menu3').classList.add('link-dark')
        document.querySelector('#menu4').classList.add('link-dark')

        console.log('feito');
    </script>
<?php
} ?>
<?php
if (@$_GET['pag'] == "ramais") {
    //Pag 3
?>
    <script>
        //Outros
        document.querySelector('#menu1').classList.remove('link-secondary')
        document.querySelector('#menu2').classList.remove('link-secondary')
        document.querySelector('#menu3').classList.remove('link-dark')
        document.querySelector('#menu4').classList.remove('link-secondary')
        //Selecionado
        document.querySelector('#menu1').classList.add('link-dark')
        document.querySelector('#menu2').classList.add('link-dark')
        document.querySelector('#menu3').classList.add('link-secondary')
        document.querySelector('#menu4').classList.add('link-dark')

        console.log('feito');
    </script>
<?php
} ?>
<?php
if (@$_GET['pag'] == "login") {
    //Pag 4
?>
    <script>
        //Outros
        document.querySelector('#menu1').classList.remove('link-secondary')
        document.querySelector('#menu2').classList.remove('link-secondary')
        document.querySelector('#menu3').classList.remove('link-secondary')
        //Selecionado
        document.querySelector('#menu1').classList.add('link-dark')
        document.querySelector('#menu2').classList.add('link-dark')
        document.querySelector('#menu3').classList.add('link-dark')

        console.log('feito');
    </script>
<?php
} ?>