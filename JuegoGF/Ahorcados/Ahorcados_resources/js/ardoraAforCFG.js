//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=6; attempts=0; attemptsMax=1;
var score=0; scoreMax=6; scoreInc=1; scoreDec=0;
var typeGame=0;
var tiTime=false;
var tiTimeType=0;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=false;
var tiAttempts=false;
var tiScore=false;
var startTime;
var colorBack="#FFCECE"; colorButton="#C5CA57"; colorText="#000000"; colorSele="#FFBC79";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="TERMINASTEE"; messageTime=""; messageError="sigue intentando :("; messageErrorG="sigue intentando :("; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="QWhvcmNhZG9z"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var words=["UE9MQVJJWkFDSU9OIERFTCBNVU5ETw==","TVVSTyBERSBCRVJMSU4=","R1VFUlJBIEVOVFJFIENPUkVBUw==","U1BVVE5JSw==","Q0FSUkVSQSBBUk1BTUVOVElTVEE=","Q0FSUkVSQSBFU1BBQ0lBTA==","","","",""];imaW=["0_yo.jpg","0_muro-de-berlin.jpg","0_descarga.jpg","0_descarga__1_.jpg","0_descarga__1_.jpg","0_descarga__1_.jpg","","","",""];queW=["Disputa entre los estadounidenses y los soviéticos afectó las relaciones internacionales de estas naciones en su conjunto.","Fue el escenario central del conflicto entre Estados Unidos y la URSS","El problema viene a raíz de la ocupación japonesa de Corea entre 1910 y 1945.","Fue el primer satélite artificial de la Tierra","Hegemonía internacional hizo que las dos potencias invirtieran en el desarrollo de nuevas tecnologías bélicas.","Otro campo de discordia entre estadounidenses y soviéticos fue en las expediciones espaciales a lo largo de la década de 1960.","","","",""];var wordsL=[22,14,19,7,20,16,"","","",""];var altW=["","","","","","","","","",""];
var auW=["","","","","","","","","",""];
var fillLetter="ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚÜ "; wordsG=[];var wordsGL=[]; indexG=0; actMaxWidth=550; indexWord=0; totalWord=0;
var alterW=[];var imageW=[];questionW=[];audioW=[];profG=0; dirMedia="Ahorcados_resources/media/"; textBNext="";
colorText="#FFFFFF";colorButton="#6699FF";colorBack="#3B3B3B";colorSele="#9BAFCB";goURLNext=true;
fMenssage="Verdana, Geneva, sans-serif";fActi="Verdana, Geneva, sans-serif";fEnun="Verdana, Geneva, sans-serif";
