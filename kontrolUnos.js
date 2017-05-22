               document.getElementById("spremi").onclick=function(e){

                    var slanje=true;

                    var naziv = document.getElementById("naziv").value;
                    var sifra = document.getElementById("sifra").value;
                    var opis = document.getElementById("opis").value;
                    var kategorija = document.getElementById("kategorija").value;
					var cijena = document.getElementById("cijena").value;
                    var arhiviraj = document.getElementById("arhiviraj").checked;

                    if (kategorija==""){
                        slanje=false;
                        document.getElementById("kategorija").style.border="2px solid red";
                        document.getElementById("kategorijaHelp").innerHTML="Kategorija je obavezna!";
                    } else {
                        document.getElementById("kategorija").style.border="1px solid grey";
                        document.getElementById("kategorijaHelp").innerHTML="";
                    }

                    if (naziv.length<5 || naziv.length>30){
                        slanje=false;
                        document.getElementById("naziv").style.border="2px solid red";
                        document.getElementById("nazivHelp").innerHTML="Naziv mora imati 5 do 30 znakova!";
                    } else {
                        document.getElementById("naziv").style.border="1px solid gray";
                        document.getElementById("nazivHelp").innerHTML="";
                    }
					
					if (sifra.length != 10){
                        slanje=false;
                        document.getElementById("sifra").style.border="2px solid red";
                        document.getElementById("sifraHelp").innerHTML="Sifra mora imati tocno 10 znakova!";
                    } else {
                        document.getElementById("sifra").style.border="1px solid gray";
                        document.getElementById("sifraHelp").innerHTML="";
                    }
					
                    if (opis.length<10 || opis.length>100){
                        slanje=false;
                        document.getElementById("opis").style.border="2px solid red";
                        document.getElementById("opisHelp").innerHTML="Opis mora imati 10 do 100 znakova!";
                    } else {
                        document.getElementById("opis").style.border="1px solid gray";
                        document.getElementById("opisHelp").innerHTML="";
                    }
					
					if (cijena==""){
                        slanje=false;
                        document.getElementById("cijena").style.border="2px solid red";
                        document.getElementById("cijenaHelp").innerHTML="Cijena je obavezna!";
                    } else {
                        document.getElementById("cijena").style.border="1px solid grey";
                        document.getElementById("cijenaHelp").innerHTML="";
                    }

                    if (!slanje){
                       e.preventDefault();

                    } else if (arhiviraj){

                        var a=confirm("Jeste li sigurni da zelite arhivirati vijest?");
                        if (!a) e.preventDefault();


                    }
                }

   