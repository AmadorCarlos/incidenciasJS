<template>
	<div id="mapaContainer">
		<div id="mapa" style="height:500px"></div>
		<!-- <button @click='setPoligon()'>Managua</button> -->
	</div>
</template>
<script>
	export default{
		mounted(){
			console.log('mapa cargado');
			this.setScriptTag();
			this.initMap();
		},
		ready(){
		},
		data(){
			return {
					apiKey:"AIzaSyBDzalkc2GCsKQWOx9xhMCwvxYPiTtjO7c",
					apiKey2:"AIzaSyAVMXe1PeoJmSb7IQft7sQ2uS_XwJIjRPA",
					mapa:null
				}
    	},
    	methods:{
    		setScriptTag(){
    			let vm = this;
				let scriptMap = document.createElement('script');
				scriptMap.setAttribute('src','https://maps.googleapis.com/maps/api/js?key='+vm.apiKey);
				scriptMap.setAttribute("async","");
				scriptMap.setAttribute("defer","");
				// scriptMap.setAttribute('id','googleApiScript')
				document.body.appendChild(scriptMap); 
 			},
    		initMap(){
    			let vm=this;
				if(typeof(google)!="undefined"){
 					vm.mapa = new google.maps.Map(document.getElementById('mapa'),
					{
					    center: {lat: 12.1362, lng: -86.2516},
					    zoom: 9,
					    mapTypeControl:false,
					    streetViewControl:false
				  	});
				  	console.log(vm.mapa.getBounds());
				}else{
					setTimeout(function(){
						vm.initMap();
						vm.setPoligon(11,0,'#ff0000');
						vm.setPoligon(11,1,"e85500");
						vm.setPoligon(11,2,"e85500");
						vm.setPoligon(11,9,"e85500");
						vm.setPoligon(11,10,"e85500");
						vm.setPoligon(11,11,"e85500");
						vm.setPoligon(11,12,"e85500");
						vm.setPoligon(11,13,"e85500");
						vm.setPoligon(11,14,"e85500");

					},200);
				}
    		},
    		getPolygon(departamento_idx,muni_idx){
    			let pase1=Laravel.dptos[departamento_idx].municipios[muni_idx].polygon.split(' ')
    			let pase2=[];
    			for (let x of pase1)
    				{
    					let latlon=x.split(',');
    					pase2.push
    					({
    						lng:Number(latlon[0]),
    						lat:Number(latlon[1])
    					});
    				}
    			return pase2;
    		},
    		setPoligon(departamento_idx,muni_idx,color){
    			let vm = this;
    			let poligono = new google.maps.Polygon({
					    paths: vm.getPolygon(departamento_idx,muni_idx),
					    strokeColor: '#fafafa',
					    strokeOpacity: 0.9,
					    strokeWeight: 1,
					    fillColor: color,
					    fillOpacity: 0.5
					});
				poligono.setMap(vm.mapa);
    		}
    	}
	}
</script>