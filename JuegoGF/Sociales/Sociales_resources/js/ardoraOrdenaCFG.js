var timeAct=60; timeIni=60; timeBon=0;
var successes=0; successesMax=4; attempts=0; attemptsMax=1;
var score=0; scoreMax=4; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=2;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=true;
var tiScore=true;
var startTime;
var colorBack="#E8F3FF"; colorButton="#004864"; colorText="#000000"; colorSele="#BCBCFE";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="'Times New Roman', Times, serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="Felicidades :)"; messageTime=""; messageError="Ups :("; messageErrorG="Ups :("; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#55A3F9"; borderTime="#FF0000";borderError="#ECA6FD"; borderAttempts="#FF0000";
var wordsGame="U29jaWFsZXM="; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var words=["U29saWRhcmlkYWQgZW4gdGllbXBvcyBkaWbDrWNpbGVzLg==","QXZpb25lcyBjcnV6YW5kbyBlbCBjaWVsbyBwYXJhIHNhbHZhciB2aWRhcy4=","QWJhc3RlY2ltaWVudG8gYcOpcmVvIHBhcmEgdW5hIGNpdWRhZCBzaXRpYWRhLg==","U3VwZXJhbmRvIGJsb3F1ZW9zIGNvbiBwdWVudGVzIGFlcmVvcw==",""];imaW=["C-54landingattemplehof.jpg","descarga__2_.jpg","descarga__1_.jpg","descarga__2_.jpg",""];queW=["","","","",""];altW=["","","","",""];c=[33,44,45,37,0];
var auW=["","","","",""];
var actMaxWidth="600"; actMaxHeight="300";indexG=0;profG=0;dirMedia="Sociales_resources/media/"; textBNext="";
var wordsG=[];imageW=[];questionW=[];audioW=[];cG=[];alterW=[];
colorText="#FFFFFF";colorButton="#6699FF";colorBack="#3B3B3B";colorSele="#9BAFCB";goURLNext=true;
fMenssage="Verdana, Geneva, sans-serif";fActi="Verdana, Geneva, sans-serif";fEnun="Verdana, Geneva, sans-serif";
