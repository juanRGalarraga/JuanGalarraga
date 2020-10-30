function showMessage(){
    alert("Hola Mundo");
    }

    function showSuma() {
        alert(8);
    }

    function getData() {
        var ip1 = parseInt(document.getElementById("ip1").value); 
        var ip2 = parseInt(document.getElementById("ip2").value); 
        result = ip1 + ip2;
        if (!result) {
            return;
        }
        alert ("Resultado de la suma: " + result);
    }

    function random(){
        p_showNumbers = document.getElementById("showNumbers");
        //Si hay algo en el parrafo, borrarlo.
        if (p_showNumbers.innerHTML != "") {
            p_showNumbers.innerHTML = "";
        }
        //Muestro numeros
        for (var i = 0; i < 10; i++) {
            numero = Math.round(Math.random()*99);
            p_showNumbers.innerHTML += numero+((i < 9) ? " , " : "");
        }
    }

    function showMessageConsola(){
        console.log("Hola mundo");
    }

    function pintar(color, pp){
        e = document.getElementById(pp);
        e.style.color = color;
    }

    function saludar(n, a) {
        nombre = document.getElementById(n).value;
        apel = document.getElementById(a).value;
        if (!nombre.length == 0 && !apel.length == 0) {
            document.getElementById("p3").innerHTML = "Hola " + nombre +" "+ apel +"!!";
        }
    }

    function edad() {
        //obtener fecha actual
        var fecha_actual = new Date();
        //Obtenemos fecha de nacimiento
        f_nac = document.getElementById("fecha_nacimiento").value;
        //calcular dia completo actual
        fecha_actual = fecha_actual.getFullYear()+"-"+ (fecha_actual.getMonth() + 1) + "-" + fecha_actual.getDate();
        //Pasamos fechas a milisegundos
        fecha_actual = new Date(fecha_actual).getTime();+
        console.log(fecha_actual);
        f_nac = new Date(f_nac).getTime();
        //restamos
        edad_usuario = fecha_actual - f_nac;
        //pasar a dias
        edad_usuario = edad_usuario/(1000*60*60*24);
        //Dividir
        edad_usuario = edad_usuario/365;
        //Redondeamos
        alert("Usted tiene " +Math.floor(edad_usuario)+" años");
    }

    function MostrarValor(self){
        if (self && self.id && self.value) {
            var value = document.getElementById("text-"+self.id);
            console.log(value);
            if (value) {
                value.innerText = "Valor "+self.value;

            }
        }    
    }




