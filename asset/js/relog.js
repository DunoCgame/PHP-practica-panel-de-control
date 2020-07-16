function mueveReloj(){
	momentoActual = new Date()
	var hora = momentoActual.getHours();
	var minuto = momentoActual.getMinutes();
	var segundo = momentoActual.getSeconds();

	str_segundo = new String (segundo)
	if (str_segundo.length == 1)
		segundo = "0" + segundo

	str_minuto = new String (minuto)
	if (str_minuto.length == 1)
		minuto = "0" + minuto

	str_hora = new String (hora)
	if (str_hora.length == 1)
		hora = "0" + hora
	horaImprimible = hora + " : " + minuto + " : " + segundo

	setTimeout("mueveReloj()",1000);

var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Domingo,","Lunes,","Martes,","Miércoles,","Jueves,","Viernes,","Sábado,")
var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
document.getElementById("relog").innerHTML = dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year+" | "+hora+":"+minuto+":"+segundo;


}

	mueveReloj();