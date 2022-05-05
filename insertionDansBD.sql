insert into marque values(1,"Audi");
insert into marque values(2,"Bmw");
insert into marque values(3,"Bugatti");
insert into marque values(4,"Aston Martin");
insert into marque values(5,"Honda");
insert into marque values(6,"Koenigsegg");
insert into marque values(7,"Lamborghini");
insert into marque values(8,"Ferrari");
insert into marque values(9,"Maserati");
insert into marque values(10,"McLaren");
insert into marque values(11,"Mercedes");
insert into marque values(12,"Nissan");
insert into marque values(13,"Porche");
insert into marque values(14,"Tesla");
insert into marque values(15,"Renault");

insert into pays values(1,"Allemangne");
insert into pays values(2,"France");
insert into pays values(3,"Italie");
insert into pays values(4,"Royaume-Uni");
insert into pays values(5,"Japon");
insert into pays values(6,"Suèdoise");
insert into pays values(7,"États-Unis");

insert into tag values (1,"Supercars");
insert into tag values (2,"Sportives");
insert into tag values (3,"Modernes");
insert into tag values (4,"Anciennes");
insert into tag values (5,"Luxe");
insert into tag values (6,"Drift");

insert into carburant values (1,"essence");
insert into carburant values (2,"gasoile");
insert into carburant values (3,"électrique");
insert into carburant values (4,"hybride");

insert into provenir values (1,1);
insert 	into provenir values (1,2);
insert into provenir values (2,3);
insert into provenir values (4,4);
insert into provenir values (5,5);
insert into provenir values (3,7);
insert into provenir values (3,8);
insert into provenir values (3,9);
insert into provenir values (6,6);
insert into provenir values (1,11);
insert into provenir values (4,10);
insert into provenir values (5,12);
insert into provenir values (1,13);
insert into provenir values (7,14);
insert into provenir values (2,15);

insert into modele (idcarburant,idmarque,nommodele,vitessemax,cheveauxdin,boitevitesse,annee,nbplace,notation,idtag,prix,image)
 values
 (1,1,"S1",250,231,"mécanique",2015,4,null,2,37000,"images/audi-s1-sportback-2015.jpg"),
(1,1,"RS3",250,400,"Automatique",2021,"5",null,2,70000,"images/rs3 2021.jpg"),
(1,1,"RS4",250,400,"Automatique",2021,"5",null,2,98000 ,"images/Audi_A4-Avant_RS4 2021.jpg"),
(1,1,"RS5",250,450,"Automatique",2021,"5",null,2,100000,"images/rs5 2021.jpg"),
(1,1,"RS6",250,600,"Automatique",2021,"5",null,2,137000,"images/rs6 2021.jpg"),
(1,1,"RS7",250,600,"Automatique",2021,"5",null,2,147000,"images/Audi_A7-Sportback_RS72021.jpg"),
(1,1,"TTRS",250,400,"Automatique",2021,"5",null,2,81000,"images/tt rs 2021.jpg"),
(1,2,"R8",324,540,"Automatique",2021,"2",null,2,226000,"images/r8 2021.jpg"),
(1,2,"M3 Compétition",250,510,"Automatique",2021,"5",null,6,103000,"images/bmw-m3-competition-2020-3.jpg"),
(1,2,"M2 Coupé",250,410,"Manuelle",2021,"4",null,6,68000,"images/m2-coupe-2021.jpg"),
(1,2,"M4 Coupé",250,510,"Automatique",2021,"4",null,6,105000,"images/BMW-M4-Coupe-Competition-2021-08.jpg"),
(1,2,"M5 Compétition",250,625,"Automatique",2021,"5",null,6,168000,"images/m5-competition-2021.jpg"),
(1,2,"Z4 Roadster",250,340,"Automatique",2021,"2",null,2,68000,"images/z4 2021.jpg"),
(1,2,"M8 Compétition",250,625,"Automatique",2021,"4",null,2,174000,"images/m82021.jpg"),
(3,2,"I4 M50",225,544,"Automatique",2021,"4",null,3,71000,"images/im502021.jpg"),
(1,3,"Chiron",420,1500,"Automatique",2016,"2",null,1,2000000,"images/bugatti-chiron2021.jpg"),
(1,3,"Veyron",407,1001,"Automatique",2013,"2",null,1,1000000,"images/veyron.jpg"),
(1,4,"Vantage",314,510,"Automatique",2021,"2",null,2,150000,"images/vantage 2021.jpg"),
(1,4,"DB11",309,535,"Automatique",2018,"2",null,2,189000,"images/2020-aston-martin-db11.jpg"),
(1,4,"DBS",340,725,"Automatique",2012,"2",null,2,290000,"images/dbs.jpg"),
(1,4,"Valkirye",400,1155,"Automatique",2021,"2",null,1,2500000,"images/valkyrie2021.jpg"),
(1,5,"Civic Type-R",272,320,"Mécanique",2021,"5",null,2,380000,"images/civic2021.jpg"),
(1,5,"S2000 CR",240,240,"Mécanique",2009,"2",null,4,30000,"images/s2000cr.jpg"),
(1,5,"Integra Type-R",233,190,"Mécanique",2000,"2",null,4,430000,"images/integra2009.jpg"),
(4,6,"Gemera",400,1400,"Automatique",2020,"2",null,1,1300000,"images/Koenigsegg_Gemera_2021.jpg"),
(1,6,"Jesko",500,1600,"Automatique",2020,"2",null,1,3400000,"images/jesko 2021+.jpg"),
(3,6,"Regera",400,1500,"Automatique",2016,"2",null,1,2100000,"images/koenigsegg-regera 2021.jpg"),
(1,7,"Aventador",350,740,"Automatique",2021,"2",null,1,234000,"images/Lamborghini_Aventador_2021.jpg"),
(1,7,"Urus",305,650,"Automatique",2021,"2",null,5,300000,"images/2021-lamborghini-urus.jpg"),
(1,7,"Gallardo",320,570,"Automatique",2014,"2",null,1,90000,"images/lamborghini-gallardo-2021.jpg"),
(1,8,"Testarossa",290,428,"Mécanique",1996,"2",null,4,100000,"images/2021-ferrari-testarossa.jpg"),
(1,8,"F458 Italia",325,570,"Automatique",2021,"2",null,1,236000,"images/ferrari_458_italia.jpg"),
(1,8,"488 GTB",340,720,"Automatique",2021,"2",null,1,290000,"images/488 gtb.jpg"),
(1,8,"Enzo",350,660,"Automatique",2007,"2",null,1,675000,"images/enzo.jpg"),
(1,9,"GranTurismo",299,460,"Automatique",2021,"4",null,1,153000,"images/granturismo 2021.jpg"),
(1,9,"Quattroporte",326,579,"Automatique",2016,"2",null,2,108000,"images/quatroprte 2021.jpg"),
(3,10,"720S",341,720,"Automatique",2020,"2",null,1,249000,"images/mclaren-720s-.jpg"),
(1,10,"P1",350,737,"Automatique",2017,"2",null,1,130000,"images/mclaren-p1 2021.jpg"),
(1,11,"AMG GT",325,730,"Automatique",2021,"2",null,1,120000,"images/amg gt 2021.jpg"),
(1,11,"AMG C63S",315,639,"Automaique",2021,"5",null,2,102000,"images/AMG-C63S-Presse-25.jpg"),
(1,11,"AMG SLS",320,591,"Automatique",2014,"2",null,2,200000,"images/amg-sls.jpg"),
(1,11,"AMG S Maybach",250,612,"Automatique",2016,"4",null,5,232000,"images/s maybach22021.jpg"),
(1,11,"A45 AMG",270,421,"Automatique",2016,"2",null,3,55000,"images/a45.jpg"),
(1,12,"Skyline R34 GT-R",271,280,"Mécanique",2002,"5",null,4,485000,"images/1999_skyline.jpg"),
(1,12,"GT-R",315,600,"Automatique",2021,"4",null,2,111000,"images/2020-nissan-gt-r-nismo.jpg"),
(1,12,"370Z",250,324,"Automatique",2016,"2",null,6,32000,"images/370z 2021.jpg"),
(1,13,"918 Spyder",345,608,"Automatique",2021,"2",null,1,778000,"images/spyder 2021.jpg"),
(1,13,"911 Turbo S",330,650,"Automatique",2020,"4",null,1,221000,"images/911 turbos.jpg"),
(1,13,"Cayman GT4",302,420,"Automatique",2020,"2",null,2,200000,"images/porsche-718-cayman-gt4-rs-750x410.jpg"),
(1,13,"Boxster GTS",293,400,"Automatique",2020,"2",null,2,85000,"images/porsche-718-boxster-gts.jpg"),
(1,13,"Cayenne 3 Turbo",286,550,"Automatique",2016,"2",null,5,200000,"images/Porsche-Cayenne-Turbo-S-E-Hybrid-Coupe-13.jpg"),
(3,14,"Model X",262,1020,"Automatique",2021,"5",null,3,100000,"images/model-x.jpg"),
(3,14,"Model S",322,1020,"Automatique",2021,"5",null,2,104000,"images/tesla-model-s-2021-.jpg"),
(3,14,"Model 3",261,482,"Automatique",2021,"5",null,3,44000,"images/model-3.jpg"),
(1,14,"Model Y",351,1500,"Automatique",2016,"5",null,3,60000,"images/model-y.jpg"),
(1,15,"Clio 4 RS",230,200,"Automatique",2018,"5",null,2,25000,"images/renaul-clio-4-rs-.jpg"),
(1,15,"Méganne 4 RS",254,265,"Automatique",2019,"5",null,2,50000,"images/megan 4 rs.jpg");

insert into user (pseudo, email, mdp) values('root', 'root@gmail.com', 'root');
