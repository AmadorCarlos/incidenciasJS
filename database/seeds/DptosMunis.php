<?php

use Illuminate\Database\Seeder;
use incJS\Departamento;
use incJS\Municipio;
use incJS\User;

class DptosMunis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                
		$dptoMuni= ["Región Autónoma de la Costa Caribe Norte"=>["Bilwi","Bonanza","Mulukukú","Prinzapolka","Rosita","Siuna","Waslala","Waspán"],"Región Autónoma de la Costa Caribe Sur"=>["Bluefields","Corn Island","Desembocadura de Río Grande","El Ayote","El Tortuguero","Kukra Hill","La Cruz de Río Grande","Laguna de Perlas","Muelle de los Bueyes","Nueva Guinea","Paiwas","El Rama"],"Boaco"=>["Boaco","Camoapa","San Lorenzo","San José de Los Remates","Santa Lucía","Teustepe"],"Carazo"=>["Diriamba","Dolores","El Rosario","Jinotepe","La Conquista","La Paz de Oriente","San Marcos","Santa Teresa"],"Chinandega"=>["Chichigalpa","Chinandega","Cinco Pinos","Corinto","El Realejo","El Viejo","Posoltega","San Francisco del Norte","San Pedro del Norte","Santo Tomás del Norte","Somotillo","Puerto Morazán","Villanueva"],"Chontales"=>["Acoyapa","Comalapa","San Francisco de Cuapa","El Coral","Juigalpa","La Libertad","San Pedro de Lóvago","Santo Domingo","Santo Tomás","Villa Sandino"],"Estelí"=>["Condega","Estelí","La Trinidad","Pueblo Nuevo","San Juan de Limay","San Nicolás"],"Granada"=>["Diriá","Diriomo","Granada","Nandaime"],"Jinotega"=>["El Cuá","Jinotega","La Concordia","San José de Bocay","San Rafael del Norte","San Sebastián de Yalí","Santa María de Pantasma","Wiwilí"],"León"=>["Acuapa","El Jicaral","El Sauce","La Paz Centro","Larreynaga","León","Nagarote","Quezalguaque","Santa Rosa del Peñón","Telica"],"Madriz"=>["Las Sabanas","Palacagüina","San José de Cusmapa","San Juan de Río Coco","San Lucas","Somoto","Telpaneca","Totogalpa","Yalagüina"],"Managua"=>["Ciudad Sandino","El Crucero","Managua","Mateare","San Francisco Libre","San Rafael del Sur","Ticuantepe","Tipitapa","Villa El Carmen"],"Masaya"=>["Catarina","La Concepción","Masatepe","Masaya","Nandasmo","Nindirí","Niquinohomo","San Juan de Oriente","Tisma"],"Matagalpa"=>["Ciudad Darío","El Tuma - La Dalia","Esquipulas","Matagalpa","Matiguás","Muy Muy","Rancho Grande","Río Blanco","San Dionisio","San Isidro","San Ramón","Sébaco","Terrabona"],"Nueva Segovia"=>["Ciudad Antigua","Dipilto","El Jícaro","Güigüilí","Jalapa","Macuelizo","Mozonte","Murra","Ocotal","Quilalí","San Fernando","Santa María"],"Río San Juan"=>["El Almendro","El Castillo","Morrito","San Carlos","San Juan del Norte","San Miguelito"],"Rivas"=>["Altagracia","Belén","Buenos Aires","Cárdenas","Moyogalpa","Potosí","Rivas","San Jorge","San Juan del Sur","Tola"]];
        
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

        $usuarios=
        [
        	[
        		"nombre"=>'Alex',
        		'email'=>'asdf@asdf.com',
        		'password'=>bcrypt('asdfasdf'),
        		'role'=>'SU',
        		'alcance'=>"Nacional",
        	],
            [
                "nombre"=>'Digitación 01',
                'email'=>"Digitador@asdf.com",
                'password'=>bcrypt('asdfasdf'),
                'departamento_id'=>12,
                'role'=>'Digitador',
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

    }
}
