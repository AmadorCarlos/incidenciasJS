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
						vm.setPoligon();
					},200);
				}
    		},
    		getPolygon(){
    			let pase1=Laravel.dptos[11].municipios[2].polygon.split(' ')
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
    		setPoligon(){
    			let vm = this;
    			let Managua = new google.maps.Polygon({
					    paths: vm.getPolygon(),
					    strokeColor: '#FF0000',
					    strokeOpacity: 0.8,
					    strokeWeight: 2,
					    fillColor: '#FF0000',
					    fillOpacity: 0.35
					});
				Managua.setMap(vm.mapa);
    		}
    	}
	}
</script>