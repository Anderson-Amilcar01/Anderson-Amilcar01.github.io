//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=60; timeIni=60; timeBon=0;
var successes=0; successesMax=5; attempts=0; attemptsMax=1;
var score=0; scoreMax=1; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=2;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=true;
var tiScore=true;
var startTime;
var colorBack="#FFFDFD"; colorButton="#91962F"; colorText="#000000"; colorSele="#FF8000";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="'Times New Roman', Times, serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="Felicidades!"; messageTime=""; messageError="Ups :("; messageErrorG="Ups :("; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#01BCFA"; borderTime="#FF0000";borderError="#FF0000"; borderAttempts="#FF0000";
var wordsGame="U29jaWFsZXNfQWxleGE="; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var joinPar=[["R3VlcnJhIGRlIG1pc2lsZXMgZW4=", "Q3ViYS4="],["RXZpdGFkYSBndWVycmEgbnVjbGVhcg==", "cG9yIGFjdWVyZG8gaGlzdMOzcmljby4="],["TWlzaWxlcyBzb3Zpw6l0aWNvcyBlbiBDdWJhLA==", "YW1lbmF6YSBnbG9iYWwu"],["QmxvcXVlbyBuYXZhbCB5", "bmVnb2NpYWNpb25lcyBkaXBsb23DoXRpY2FzIGludGVuc2FzLg=="],["Q29uZmxpY3RvcyBkaXBsb21hdGljb3MgZW50cnRl", "RXN0YWRvcyB1bmlkb3MsIGN1YmEgeSBVbmlvbiAgU292aWV0aWNhLg=="]];
var c=[[20,5],[22,22],[27,15],[15,36],[30,40]];
var con1=["Guerra de misiles en","Conflictos diplomaticos entrte","Misiles soviéticos en Cuba,","Bloqueo naval y","Evitada guerra nuclear"];
var con2=["por acuerdo histórico.","negociaciones diplomáticas intensas.","amenaza global.","Estados unidos, cuba y Union  Sovietica.","Cuba."];
var sel1=""; join1=[]; join2=[];
colorText="#FFFFFF";colorButton="#6699FF";colorBack="#3B3B3B";colorSele="#9BAFCB";goURLNext=true;
fMenssage="Verdana, Geneva, sans-serif";fActi="Verdana, Geneva, sans-serif";fEnun="Verdana, Geneva, sans-serif";
