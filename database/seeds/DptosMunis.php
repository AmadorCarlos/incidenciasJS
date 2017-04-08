<?php

use Illuminate\Database\Seeder;
use incJS\Departamento;
use incJS\Municipio;
use incJS\User;
use Illuminate\Support\Facades\DB;

class DptosMunis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $dptoMuni= ["RACN"=>["Bilwi","Bonanza","Mulukukú","Prinzapolka","Rosita","Siuna","Waslala","Waspán"],"RACS"=>["Bluefields","Corn Island","Desembocadura de Río Grande","El Ayote","El Tortuguero","Kukra Hill","La Cruz de Río Grande","Laguna de Perlas","Muelle de los Bueyes","Nueva Guinea","Paiwas","El Rama"],"Boaco"=>["Boaco","Camoapa","San Lorenzo","San José de Los Remates","Santa Lucía","Teustepe"],"Carazo"=>["Diriamba","Dolores","El Rosario","Jinotepe","La Conquista","La Paz de Oriente","San Marcos","Santa Teresa"],"Chinandega"=>["Chichigalpa","Chinandega","Cinco Pinos","Corinto","El Realejo","El Viejo","Posoltega","San Francisco del Norte","San Pedro del Norte","Santo Tomás del Norte","Somotillo","Puerto Morazán","Villanueva"],"Chontales"=>["Acoyapa","Comalapa","San Francisco de Cuapa","El Coral","Juigalpa","La Libertad","San Pedro de Lóvago","Santo Domingo","Santo Tomás","Villa Sandino"],"Estelí"=>["Condega","Estelí","La Trinidad","Pueblo Nuevo","San Juan de Limay","San Nicolás"],"Granada"=>["Diriá","Diriomo","Granada","Nandaime"],"Jinotega"=>["El Cuá","Jinotega","La Concordia","San José de Bocay","San Rafael del Norte","San Sebastián de Yalí","Santa María de Pantasma","Wiwilí"],"León"=>["Achuapa","El Jicaral","El Sauce","La Paz Centro","Larreynaga","León","Nagarote","Quezalguaque","Santa Rosa del Peñón","Telica"],"Madriz"=>["Las Sabanas","Palacagüina","San José de Cusmapa","San Juan de Río Coco","San Lucas","Somoto","Telpaneca","Totogalpa","Yalagüina"],"Managua"=>["Ciudad Sandino","El Crucero","Managua","Mateare","San Francisco Libre","San Rafael del Sur","Ticuantepe","Tipitapa","Villa El Carmen"],"Masaya"=>["Catarina","La Concepción","Masatepe","Masaya","Nandasmo","Nindirí","Niquinohomo","San Juan de Oriente","Tisma"],"Matagalpa"=>["Ciudad Darío","El Tuma - La Dalia","Esquipulas","Matagalpa","Matiguás","Muy Muy","Rancho Grande","Río Blanco","San Dionisio","San Isidro","San Ramón","Sébaco","Terrabona"],"Nueva Segovia"=>["Ciudad Antigua","Dipilto","El Jícaro","Güigüilí","Jalapa","Macuelizo","Mozonte","Murra","Ocotal","Quilalí","San Fernando","Santa María"],"Río San Juan"=>["El Almendro","El Castillo","Morrito","San Carlos","San Juan del Norte","San Miguelito"],"Rivas"=>["Altagracia","Belén","Buenos Aires","Cárdenas","Moyogalpa","Potosí","Rivas","San Jorge","San Juan del Sur","Tola"]];
      	$dptoMuni= 
        [   
            "RACN"=> ["Bilwi","Waspán"], 
            "RACS"=> ["Bluefields","Corn Island","Desembocadura del Río Grande","El Ayote","El Tortuguero","Kukra Hill","La Cruz de Río Grande","Laguna de Perlas"], "Boaco"=> ["Boaco","Camoapa","San Lorenzo","San José de Los Remates","Santa Lucía","Teustepe"], "Carazo"=> ["Diriamba","Dolores","El Rosario","Jinotepe","La Conquista","La Paz de Oriente","San Marcos","Santa Teresa"], "Chinandega"=> ["Chichigalpa","Chinandega","Cinco Pinos","Corinto","El Realejo","El Viejo","Posoltega","San Francisco del Norte","San Pedro del Norte","Santo Tomás del Norte","Somotillo","Puerto Morazán","Villanueva"], "Chontales"=> ["Acoyapa","Comalapa","San Francisco de Cuapa","Juigalpa","La Libertad","San Pedro de Lóvago","Santo Domingo","Santo Tomás","Villa Sandino"], "Estelí"=> ["Condega","Estelí","La Trinidad","Pueblo Nuevo","San Juan de Limay","San Nicolás"], "Granada"=> ["Diriá","Diriomo","Granada","Nandaime"], "Jinotega"=> ["El Cuá","Jinotega","La Concordia","San José de Bocay","San Rafael del Norte","San Sebastián de Yalí","Santa María de Pantasma","Wiwilí"], "León"=> ["Achuapa","El Jicaral","El Sauce","La Paz Centro","Larreynaga","León","Nagarote","Quezalguaque","Santa Rosa del Peñón","Telica"], "Madriz"=> ["Las Sabanas","Palacagüina","San José de Cusmapa","San Juan de Río Coco","San Lucas","Somoto","Telpaneca","Totogalpa","Yalagüina"], "Managua"=> ["Ciudad Sandino","El Crucero","Distrito I","Distrito II","Distrito III","Distrito IV","Distrito V","Distrito VI","Distrito VII","Mateare","San Francisco Libre","San Rafael del Sur","Ticuantepe","Tipitapa","Villa El Carmen"], "Masaya"=> ["Catarina","La Concepción","Masatepe","Masaya","Nandasmo","Nindirí","Niquinohomo","San Juan de Oriente","Tisma"], "Matagalpa"=> ["Ciudad Darío","El Tuma - La Dalia","Esquipulas","Matagalpa","Matiguás","Muy Muy","Rancho Grande","Río Blanco","San Dionisio","San Isidro","San Ramón","Sébaco","Terrabona","Waslala"], "Nueva Segovia"=> ["Ciudad Antigua","Dipilto","El Jícaro","Güigüilí","Jalapa","Macuelizo","Mozonte","Murra","Ocotal","Quilalí","San Fernando","Santa María"], "Río San Juan"=> ["El Almendro","El Castillo","Morrito","San Carlos","San Juan del Norte","San Miguelito"], "Rivas"=> ["Altagracia","Belén","Buenos Aires","Cárdenas","Moyogalpa","Potosí","Rivas","San Jorge","San Juan del Sur","Tola"], "Triangulo Minero"=> ["Paiwas","Bonanza","Mulukuku","Prinzapolka","Rosita","Siuna"], "Zelaya Central" => ["El Coral","El Rama","Muelle de los Bueyes","Nueva Guinea"]];
        
        $dptosCentroZoom= ['RACN'=>['centro'=>"14.109045094334084,-84.12454806622316",'zoom'=>8], 'RACS'=>['centro'=>"11.893325387369707,-84.33878146466066",'zoom'=>8], 'Boaco'=>['centro'=>"12.416878772657123,-85.40602170285035",'zoom'=>9], 'Carazo'=>['centro'=>"11.748123768514796,-86.23901926335145",'zoom'=>10], 'Chinandega'=>['centro'=>"12.861761466300898,-87.10752927120973",'zoom'=>9], 'Chontales'=>['centro'=>"12.049141585507396,-85.17668210324098",'zoom'=>9], 'Estelí'=>['centro'=>"13.154783398960118,-86.3736017828827",'zoom'=>10],'Granada'=>['centro'=>"11.930693122630625,-85.87884804878234",'zoom'=>10], 'Jinotega'=>['centro'=>"13.830293486353597,-85.47275087509155",'zoom'=>8], 'León'=>['centro'=>"12.560119744047292,-86.61140224609375",'zoom'=>9], 'Madriz'=>['centro'=>"13.460598459660378,-86.4144315448761",'zoom'=>10], 'Managua'=>['centro'=>"12.175132517172306,-86.28593227539062",'zoom'=>9], 'Masaya'=>['centro'=>"11.989800951790201,-86.11063918743133",'zoom'=>11], 'Matagalpa'=>['centro'=>"12.889672305977376,-85.56064150009155",'zoom'=>8], 'Nueva Segovia'=>['centro'=>"13.699555350400294,-86.19804165039062",'zoom'=>9], 'Río San Juan'=>['centro'=>"11.280990194817175,-84.52929994735717",'zoom'=>8], 'Rivas'=>['centro'=>"11.3940745261782,-85.69816372070312",'zoom'=>9], 'Triangulo Minero'=>['centro'=>"13.29095291296663,-84.68310854110717",'zoom'=>8], 'Zelaya Central'=>['centro'=>"12.270446902244837,-84.52655336532592",'zoom'=>8] ];

        

        echo "Procesando Almacenamiento de Departamentos y Municipios";
        foreach ($dptoMuni as $entry => $val) 
        {
            $dpto= new Departamento();
            $dpto->nombre=$entry;
            $dpto->save();
	        foreach ($val as $municipio) 
	        {
	            $muni= new Municipio();
	            $muni->nombre=$municipio;
	            $depa = Departamento::where('nombre',$entry)->first();
	            $muni->departamento()->associate($depa)->save();
	        }
        }

        // echo "\n Listo \nProcesando asignacion de poligonos a los municipios";
        $polygons= [["id"=> 1, "nombre"=> "Bilwi", "polygon"=> "bilwi"], ["id"=> 2, "nombre"=> "Waspán", "polygon"=> "waspan"], ["id"=> 3, "nombre"=> "Bluefields", "polygon"=> "bluefields"], ["id"=> 4, "nombre"=> "Corn Island", "polygon"=> "corn-island"], ["id"=> 5, "nombre"=> "Desembocadura del Río Grande", "polygon"=> "desembocadura"], ["id"=> 6, "nombre"=> "El Ayote", "polygon"=> "el-ayote"], ["id"=> 7, "nombre"=> "El Tortuguero", "polygon"=> "el-tortuguero"], ["id"=> 8, "nombre"=> "Kukra Hill", "polygon"=> "kukrahill"], ["id"=> 9, "nombre"=> "La Cruz de Río Grande", "polygon"=> "la-cruz-de-rio-grande"], ["id"=> 10, "nombre"=> "Laguna de Perlas", "polygon"=> "laguna-de-perlas"], ["id"=> 11, "nombre"=> "Boaco", "polygon"=> "boaco"], ["id"=> 12, "nombre"=> "Camoapa", "polygon"=> "camoapa"], ["id"=> 13, "nombre"=> "San Lorenzo", "polygon"=> "san-lorenzo"], ["id"=> 14, "nombre"=> "San José de Los Remates", "polygon"=> "san-jose-de-los-remates"], ["id"=> 15, "nombre"=> "Santa Lucía", "polygon"=> "santa-lucia"], ["id"=> 16, "nombre"=> "Teustepe", "polygon"=> "teustepe"], ["id"=> 17, "nombre"=> "Diriamba", "polygon"=> "diriamba"], ["id"=> 18, "nombre"=> "Dolores", "polygon"=> "dolores"], ["id"=> 19, "nombre"=> "El Rosario", "polygon"=> "el-rosario"], ["id"=> 20, "nombre"=> "Jinotepe", "polygon"=> "jinotepe"], ["id"=> 21, "nombre"=> "La Conquista", "polygon"=> "la-conquista"], ["id"=> 22, "nombre"=> "La Paz de Oriente", "polygon"=> "la-paz-de-oriente"], ["id"=> 23, "nombre"=> "San Marcos", "polygon"=> "san-marcos"], ["id"=> 24, "nombre"=> "Santa Teresa", "polygon"=> "santa-teresa"], ["id"=> 25, "nombre"=> "Chichigalpa", "polygon"=> "chichigalpa"], ["id"=> 26, "nombre"=> "Chinandega", "polygon"=> "chinandega"], ["id"=> 27, "nombre"=> "Cinco Pinos", "polygon"=> "cinco-pinos"], ["id"=> 28, "nombre"=> "Corinto", "polygon"=> "corinto"], ["id"=> 29, "nombre"=> "El Realejo", "polygon"=> "el-realejo"], ["id"=> 30, "nombre"=> "El Viejo", "polygon"=> "el-viejo"], ["id"=> 31, "nombre"=> "Posoltega", "polygon"=> "posoltega"], ["id"=> 32, "nombre"=> "San Francisco del Norte", "polygon"=> "san-francisco-del-norte"], ["id"=> 33, "nombre"=> "San Pedro del Norte", "polygon"=> "san-pedro-del-norte"], ["id"=> 34, "nombre"=> "Santo Tomás del Norte", "polygon"=> "santo-tomas-del-norte"], ["id"=> 35, "nombre"=> "Somotillo", "polygon"=> "somotillo"], ["id"=> 36, "nombre"=> "Puerto Morazán", "polygon"=> "puerto-morazan"], ["id"=> 37, "nombre"=> "Villanueva", "polygon"=> "villanueva"], ["id"=> 38, "nombre"=> "Acoyapa", "polygon"=> "acoyapa"], ["id"=> 39, "nombre"=> "comalapa", "polygon"=> "comalapa"], ["id"=> 40, "nombre"=> "San Francisco de Cuapa", "polygon"=> "san-francisco-de-cuapa"], ["id"=> 41, "nombre"=> "Juigalpa", "polygon"=> "juigalpa"], ["id"=> 42, "nombre"=> "La Libertad", "polygon"=> "la-libertad"], ["id"=> 43, "nombre"=> "San Pedro de Lóvago", "polygon"=> "san-pedro-de-lovago"], ["id"=> 44, "nombre"=> "Santo Domingo", "polygon"=> "santo-domingo"], ["id"=> 45, "nombre"=> "Santo Tomás", "polygon"=> "santo-tomas"], ["id"=> 46, "nombre"=> "Villa Sandino", "polygon"=> "villa-sandino"], ["id"=> 47, "nombre"=> "Condega", "polygon"=> "condega"], ["id"=> 48, "nombre"=> "Estelí", "polygon"=> "esteli"], ["id"=> 49, "nombre"=> "La Trinidad", "polygon"=> "la-trinidad"], ["id"=> 50, "nombre"=> "Pueblo Nuevo", "polygon"=> "pueblo-nuevo"], ["id"=> 51, "nombre"=> "San Juan de Limay", "polygon"=> "san-juan-de-limay"], ["id"=> 52, "nombre"=> "San Nicolás", "polygon"=> "san-nicolas"], ["id"=> 53, "nombre"=> "Diriá", "polygon"=> "diria"], ["id"=> 54, "nombre"=> "Diriomo", "polygon"=> "diriomo"], ["id"=> 55, "nombre"=> "Granada", "polygon"=> "granada"], ["id"=> 56, "nombre"=> "Nandaime", "polygon"=> "nandaime"], ["id"=> 57, "nombre"=> "El Cuá", "polygon"=> "el-cua"], ["id"=> 58, "nombre"=> "Jinotega", "polygon"=> "jinotega"], ["id"=> 59, "nombre"=> "La Concordia", "polygon"=> "la-concordia"], ["id"=> 60, "nombre"=> "San José de Bocay", "polygon"=> "san-jose-de-bocay"], ["id"=> 61, "nombre"=> "San Rafael del Norte", "polygon"=> "san-rafael-del-norte"], ["id"=> 62, "nombre"=> "San Sebastián de Yalí", "polygon"=> "san-sebastian-de-yali"], ["id"=> 63, "nombre"=> "Santa María de Pantasma", "polygon"=> "santa-maria-de-pantasma"], ["id"=> 64, "nombre"=> "Wiwilí", "polygon"=> "wiwili"], ["id"=> 65, "nombre"=> "Achuapa", "polygon"=> "achuapa"], ["id"=> 66, "nombre"=> "El Jicaral", "polygon"=> "el-jicaral"], ["id"=> 67, "nombre"=> "El Sauce", "polygon"=> "el-sauce"], ["id"=> 68, "nombre"=> "La Paz Centro", "polygon"=> "la-paz-centro"], ["id"=> 69, "nombre"=> "Larreynaga", "polygon"=> "larreynaga"], ["id"=> 70, "nombre"=> "León", "polygon"=> "leon"], ["id"=> 71, "nombre"=> "Nagarote", "polygon"=> "nagarote"], ["id"=> 72, "nombre"=> "Quezalguaque", "polygon"=> "quezalguaque"], ["id"=> 73, "nombre"=> "Santa Rosa del Peñón", "polygon"=> "santa-rosa"], ["id"=> 74, "nombre"=> "Telica", "polygon"=> "telica"], ["id"=> 75, "nombre"=> "Las Sabanas", "polygon"=> "las-sabanas"], ["id"=> 76, "nombre"=> "Palacagüina", "polygon"=> "pala"], ["id"=> 77, "nombre"=> "San José de Cusmapa", "polygon"=> "san-jose-de-cusmapa"], ["id"=> 78, "nombre"=> "San Juan de Río Coco", "polygon"=> "san-juan-del-rio-coco"], ["id"=> 79, "nombre"=> "San Lucas", "polygon"=> "san-lucas"], ["id"=> 80, "nombre"=> "Somoto", "polygon"=> "somoto"], ["id"=> 81, "nombre"=> "Telpaneca", "polygon"=> "telpaneca"], ["id"=> 82, "nombre"=> "Totogalpa", "polygon"=> "totogalpa"], ["id"=> 83, "nombre"=> "Yalagüina", "polygon"=> "yala"], ["id"=> 84, "nombre"=> "Ciudad Sandino", "polygon"=> "ciudad-sandino"], ["id"=> 85, "nombre"=> "El Crucero", "polygon"=> "el-crucero"], ["id"=> 86, "nombre"=> "Distrito I", "polygon"=> "managua"], ["id"=> 87, "nombre"=> "Distrito II", "polygon"=> "managua"], ["id"=> 88, "nombre"=> "Distrito III", "polygon"=> "managua"], ["id"=> 89, "nombre"=> "Distrito IV", "polygon"=> "managua"], ["id"=> 90, "nombre"=> "Distrito V", "polygon"=> "managua"], ["id"=> 91, "nombre"=> "Distrito VI", "polygon"=> "managua"], ["id"=> 92, "nombre"=> "Distrito VII", "polygon"=> "managua"], ["id"=> 93, "nombre"=> "Mateare", "polygon"=> "mateare"], ["id"=> 94, "nombre"=> "San Francisco Libre", "polygon"=> "san-francisco-libre"], ["id"=> 95, "nombre"=> "San Rafael del Sur", "polygon"=> "san-rafael-del-sur"], ["id"=> 96, "nombre"=> "Ticuantepe", "polygon"=> "ticuantepe"], ["id"=> 97, "nombre"=> "Tipitapa", "polygon"=> "tipitapa"], ["id"=> 98, "nombre"=> "Villa El Carmen", "polygon"=> "villa-el-carmen"], ["id"=> 99, "nombre"=> "Catarina", "polygon"=> "catarina"], ["id"=> 100, "nombre"=> "La Concepción", "polygon"=> "la-concepcion"], ["id"=> 101, "nombre"=> "Masatepe", "polygon"=> "masatepe"], ["id"=> 102, "nombre"=> "Masaya", "polygon"=> "masaya"], ["id"=> 103, "nombre"=> "Nandasmo", "polygon"=> "nandasmo"], ["id"=> 104, "nombre"=> "Nindirí", "polygon"=> "nindiri"], ["id"=> 105, "nombre"=> "Niquinohomo", "polygon"=> "niquinohomo"], ["id"=> 106, "nombre"=> "San Juan de Oriente", "polygon"=> "san-juan-de-oriente"], ["id"=> 107, "nombre"=> "Tisma", "polygon"=> "tisma"], ["id"=> 108, "nombre"=> "Ciudad Darío", "polygon"=> "ciudad-dario"], ["id"=> 109, "nombre"=> "El Tuma - La Dalia", "polygon"=> "el-tuma"], ["id"=> 110, "nombre"=> "Esquipulas", "polygon"=> "esquipulas"], ["id"=> 111, "nombre"=> "Matagalpa", "polygon"=> "matagalpa"], ["id"=> 112, "nombre"=> "Matiguás", "polygon"=> "matiguas"], ["id"=> 113, "nombre"=> "Muy Muy", "polygon"=> "muy-muy"], ["id"=> 114, "nombre"=> "Rancho Grande", "polygon"=> "rancho-grande"], ["id"=> 115, "nombre"=> "Río Blanco", "polygon"=> "rio-blanco"], ["id"=> 116, "nombre"=> "San Dionisio", "polygon"=> "san-dionisio"], ["id"=> 117, "nombre"=> "San Isidro", "polygon"=> "san-isidro"], ["id"=> 118, "nombre"=> "San Ramón", "polygon"=> "san-ramon"], ["id"=> 119, "nombre"=> "Sébaco", "polygon"=> "sebaco"], ["id"=> 120, "nombre"=> "Terrabona", "polygon"=> "terrabona"], ["id"=> 121, "nombre"=> "Waslala", "polygon"=> "waslala"], ["id"=> 122, "nombre"=> "Ciudad Antigua", "polygon"=> "ciudad-antigua"], ["id"=> 123, "nombre"=> "Dipilto", "polygon"=> "dipilto"], ["id"=> 124, "nombre"=> "El Jícaro", "polygon"=> "el-jicaro"], ["id"=> 125, "nombre"=> "Güigüilí", "polygon"=> "guiguili"], ["id"=> 126, "nombre"=> "Jalapa", "polygon"=> "jalapa"], ["id"=> 127, "nombre"=> "Macuelizo", "polygon"=> "macuelizo"], ["id"=> 128, "nombre"=> "Mozonte", "polygon"=> "mozonte"], ["id"=> 129, "nombre"=> "Murra", "polygon"=> "murra"], ["id"=> 130, "nombre"=> "Ocotal", "polygon"=> "ocotal"], ["id"=> 131, "nombre"=> "Quilalí", "polygon"=> "quilali"], ["id"=> 132, "nombre"=> "San Fernando", "polygon"=> "san-fernando"], ["id"=> 133, "nombre"=> "Santa María", "polygon"=> "santa-maria"], ["id"=> 134, "nombre"=> "El Almendro", "polygon"=> "el-almendro"], ["id"=> 135, "nombre"=> "El Castillo", "polygon"=> "el-castillo"], ["id"=> 136, "nombre"=> "Morrito", "polygon"=> "morrito"], ["id"=> 137, "nombre"=> "San Carlos", "polygon"=> "san-carlos"], ["id"=> 138, "nombre"=> "San Juan del Norte", "polygon"=> "san-juan-de-nicaragu"], ["id"=> 139, "nombre"=> "San Miguelito", "polygon"=> "san-miguelito"], ["id"=> 140, "nombre"=> "Altagracia", "polygon"=> "altagracia"], ["id"=> 141, "nombre"=> "Belén", "polygon"=> "belen"], ["id"=> 142, "nombre"=> "Buenos Aires", "polygon"=> "buenos-aires"], ["id"=> 143, "nombre"=> "Cárdenas", "polygon"=> "cardenas"], ["id"=> 144, "nombre"=> "Moyogalpa", "polygon"=> "moyogalpa"], ["id"=> 145, "nombre"=> "Potosí", "polygon"=> "potosi"], ["id"=> 146, "nombre"=> "Rivas", "polygon"=> "rivas"], ["id"=> 147, "nombre"=> "San Jorge", "polygon"=> "san-jorge"], ["id"=> 148, "nombre"=> "San Juan del Sur", "polygon"=> "san-juan-del-sur"], ["id"=> 149, "nombre"=> "Tola", "polygon"=> "tola"], ["id"=> 150, "nombre"=> "Paiwas", "polygon"=> "paiwas"], ["id"=> 151, "nombre"=> "Bonanza", "polygon"=> "bonanza"], ["id"=> 152, "nombre"=> "Mulukuku", "polygon"=> "mulukuku"], ["id"=> 153, "nombre"=> "Prinzapolka", "polygon"=> "prinzapolka"], ["id"=> 154, "nombre"=> "Rosita", "polygon"=> "rosita"], ["id"=> 155, "nombre"=> "Siuna", "polygon"=> "siuna"], ["id"=> 156, "nombre"=> "El Coral", "polygon"=> "el-coral"], ["id"=> 157, "nombre"=> "El Rama", "polygon"=> "el-rama"], ["id"=> 158, "nombre"=> "Muelle de los Bueyes", "polygon"=> "muelle-de-los-bueyes"], ["id"=> 159, "nombre"=> "Nueva Guinea", "polygon"=>"nueva-guinea"]];
        
        foreach ($polygons as $poly) {
            $municipio = Municipio::find($poly["id"]);
            echo $municipio->nombre . "  " . $poly['nombre'] . ' \n ' ;
            $municipio->polygon=$poly['polygon'];
            $municipio->save();
        }

        foreach ($dptosCentroZoom as $dept => $valor) {
            $depa = Departamento::where('nombre',$dept)->first();
            $depa->centro=$valor['centro'];
            $depa->zoom=$valor['zoom'];
            $depa->save();
        }

        echo "\n Listo \nProcesando Almacenamiento de Usuarios de Control \n";
        $usuarios=
        [
            [
                "nombre"=>'Digitación Nacional',
                'email'=>"DigitacionNacional@incidenciasjs.com",
                'password'=>bcrypt('apolo2017$'),
                'departamento_id'=>0,
                'role'=>'Digitador',
                'alcance'=>"Nacional",
            ],
            [
                "nombre"=>'Monitoreo Nacional',
                'email'=>"MonitoreoNacional@incidenciasjs.com",
                'password'=>bcrypt('sputnik2017!'),
                'departamento_id'=>0,
                'role'=>'Monitor',
                'alcance'=>"Nacional",
            ],
            [
                "nombre"=>'Monitoreo Rivas',
                'email'=>"rivas@incidenciasjs.com",
                'password'=>bcrypt('rivas'),
                'departamento_id'=>17,
                'role'=>'Monitor',
                'alcance'=>"Departamental",
            ]
        ];

        foreach ($usuarios as $usuario ) {
        	$user = new User();
        	$user->name= $usuario['nombre'];
        	$user->email= $usuario['email'];
        	$user->password= $usuario['password'];
        	$user->muni_id= (array_key_exists("muni_id",$usuario)) ? $usuario['muni_id'] : NULL;
        	$user->departamento_id= (array_key_exists("departamento_id",$usuario)) ? $usuario['departamento_id'] : NULL;
        	$user->role=$usuario['role'];
        	$user->alcance=$usuario['alcance'];
        	$user->save();
        }
        echo " Listo\n";
        echo "Generando Usuarios Departamentales Digitación\n";

        $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', ' '=>'' );

        $contador=1;
        foreach ($dptoMuni as $dpto => $valor) {
            $user= new User();
            $user->name= "Digitación de ".$dpto;
            $user->email= strtr( $dpto, $unwanted_array )."_digitacion@incidenciasjs.com";
            $user->password= bcrypt(strrev(strtr( $dpto, $unwanted_array )));
            $user->muni_id= NULL;
            $user->departamento_id= $contador;
            $user->role="Digitador";
            $user->alcance="Departamental";
            $contador++;
            $user->save();   
        }
        $contador=1;
        foreach ($dptoMuni as $dpto => $valor) {
            $user= new User();
            $user->name= "Monitoreo de ".$dpto;
            $user->email= strtr( $dpto, $unwanted_array )."_monitoreo@incidenciasjs.com";
            $user->password= bcrypt(strrev(strtr( $dpto, $unwanted_array )));
            $user->muni_id= NULL;
            $user->departamento_id= $contador;
            $user->role="Monitor";
            $user->alcance="Departamental";
            $contador++;
            $user->save();   
        }
        echo " Listo \n";
    }
}
