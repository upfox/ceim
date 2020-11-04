<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/assets/styles/global.css">
    <!--script type="javascript" src="./node_modules/jquery/dist/jquery.js"></script-->
    <title>Projeto em Php</title>
</head>
<body>
    <div class="container">
        <header>
            <div id="welcome"></div>
        </header>
        <main>
            <div class="aside left"><img src="src/assets/images/study.png"></div>
            <div class="aside right">Right</div>
        </main>
        
        <footer>
            <div id="hora"></div>
        </footer>
        
    </div>    
</body>
<script type="text/javascript">
    
    function seconds(sec){
        let s = isNaN(sec)?1000:sec*1000;
        return s;
    }

    let seconds2 = function(sec){
        let s = isNaN(sec)?1000:sec*1000;
        return s;
    };


    
    // Inicia a ação depois de x tempo [execução programada]
    setTimeout(()=>{
        let target = document.getElementById("welcome");
        target.innerHTML = '<b>Bem-vindo a minha primeira página em php</b>';
        seconds2('flavio');
    },seconds(1));

    // Reinicia a ação de tanto em tanto tempo. [loop]
    setInterval(()=>{
        let data = new Date();
        let target = document.getElementById('hora');
        target.innerHTML =  data.getHours() + " : " + 
                            data.getMinutes() + " : " + 
                            data.getSeconds();
    },seconds(1));
    
</script>
</html>