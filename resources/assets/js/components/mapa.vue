<template>
	<div id="mapaContainer">
		<div id="mapa" style="height:500px"></div>
		<!-- <button @click='setPoligon()'>Managua</button> -->
	</div>
</template>
<script>
	export default{
		mounted(){
			let vm = this;
			console.log('mapa cargado');
			this.setScriptTag();
			$(document).ready(function(){vm.initMap();});
			setInterval(function(){
				vm.setPoligonos();
				vm.crearFigura();
			},2000)
		},
		props:{
			alcance:{
				type:String,
				default:"",
				required:true
			},
			departamentoId:{
				type:Number,
				default:0,
				required:false
			},
			dataIn:{
				type:Array,
				default(){return []},
				required:true
			}
		},
		data(){
			return {
					apiKey:"AIzaSyBDzalkc2GCsKQWOx9xhMCwvxYPiTtjO7c",
					apiKey2:"AIzaSyAVMXe1PeoJmSb7IQft7sQ2uS_XwJIjRPA",
					nicaraguaCenter:{lat:12.671638,lng:-85.167863,zoom:7},
					poligonos:{}
				}
    	},

    	computed:{
    		centro_computed(){
    			let vm = this;
    			let centroResultado={lat:0,lng:0};
    			if(vm.alcance=="Nacional"){
    				centroResultado.lat=vm.nicaraguaCenter.lat;
    				centroResultado.lng=vm.nicaraguaCenter.lng;
    				return centroResultado;
    			}else{
    				let dpto = Laravel.dptos.filter(function(dpto){
    					if (dpto.id == vm.departamentoId){
    						return dpto;
    					}
    				});
    				console.log(dpto);
    				let centro= dpto[0].centro.split(','); //lat->0  lng->1
    				centroResultado.lat=Number(centro[0]);
    				centroResultado.lng=Number(centro[1]);
    				return centroResultado;
    			}
    		},
    		zoom_computed(){
    			let vm = this;
    			let zoomResultado=0;
    			if(vm.alcance=="Nacional"){
    				zoomResultado=vm.nicaraguaCenter.zoom;
    				return zoomResultado;
    			}else{
    				let dpto = Laravel.dptos.filter(function(dpto){
    					if (dpto.id == vm.departamentoId){
    						return dpto;
    					}
    				});
    				zoomResultado=dpto[0].zoom;
    				return zoomResultado;
    			}
    		}
    	},
    	methods:{
    		setPoligonos(){
    			let vm = this;
    			let poligonosTemp={};
    			let tipoI = {Mayor:"M",Menor:"m",Sin:"s"};
    			for (let x of vm.dataIn){
    				if(poligonosTemp[x.municipio]==undefined){
    					poligonosTemp[x.municipio]={};
    					poligonosTemp[x.municipio][tipoI[x.tipo]]=1;
    					poligonosTemp[x.municipio]["municipio_id"]=x.municipio_id;
    					poligonosTemp[x.municipio]["nombre"]=x.municipio;

    				}else{
    					if(poligonosTemp[x.municipio][tipoI[x.tipo]]==undefined){
    						poligonosTemp[x.municipio][tipoI[x.tipo]]=1;
    					}else{
	    					poligonosTemp[x.municipio][tipoI[x.tipo]]+=1;
    					}
    				}
    			}
    			console.log("watcher exec");
    			vm.poligonos={};
    			vm.poligonos=poligonosTemp;
    			
    		},
    		crearFigura(){
    			let vm = this;
    			vm.destroyShapes();
    			let listaColor={};
    			if (vm.poligonos!=null){
	    			for (let x in vm.poligonos){
	    				console.log(vm.poligonos[x].municipio_id);
	    				vm.setPoligonShape(vm.poligonos[x].municipio_id);
	    				if(vm.poligonos[x].M!=undefined){
	    					listaColor[vm.poligonos[x].nombre]='Red'
	    				}else if(vm.poligonos[x].m!=undefined){
	    					listaColor[vm.poligonos[x].nombre]='orange'
	    				}else{
	    					listaColor[vm.poligonos[x].nombre]='yellow'
	    				}
	    			}
	    			vm.setPoligonsColor(listaColor);
    			}
    			

    		},
    		destroyShapes(){
    			Mapa.data.forEach(function(feature) {
			        Mapa.data.remove(feature);
				});
    		},
    		setScriptTag(){
    			let vm = this;
				let scriptMap = document.createElement('script');
				scriptMap.setAttribute('src','https://maps.googleapis.com/maps/api/js?language=es&key='+vm.apiKey);
				scriptMap.setAttribute("async","");
				scriptMap.setAttribute("defer","");
				// scriptMap.setAttribute('id','googleApiScript')
				document.body.appendChild(scriptMap); 
 			},
    		initMap(){
    			let vm=this;
				if(typeof(google)!="undefined"){
 					Mapa = new google.maps.Map(document.getElementById('mapa'),
					{
					    center: vm.centro_computed,
					    zoom: vm.zoom_computed,
					    mapTypeControl:false,
					    streetViewControl:false
				  	});
 					
				}else{
					setTimeout(function(){
						vm.initMap();

					},200);
				}
    		},
    		setPoligonShape(muni_idx){
    			let municipio = Laravel.munis.filter(function(muni){
    				if(muni.id==muni_idx){
    					return muni;
    				}
    			});
    			console.log('setPoligonShape',municipio);
			  	Mapa.data.loadGeoJson("http://"+location.hostname+"/geojson/"+municipio[0].polygon+".geojson");
    		},
    		setPoligonsColor(colorList){
    			Mapa.data.setStyle(function(feature) {
					// console.log(feature)
				    var nombre = feature.getProperty('Name');
				    
 					var color =  colorList[nombre];
				    return {
				      fillColor: color,
				      strokeWeight: 1
				    };
				    				    
				});
    		}
    	}
	}
</script>