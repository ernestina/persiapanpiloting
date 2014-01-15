<h2>PERSIAPAN PILOTING 7 KANWIL</h2>
<div id="top">
    <div class="koloms">
            <center><canvas id="canvas" height="200" width="200"></canvas>
                <h0> 1/7 </h0></center>
        <h2>1 dari 7 KANWIL<br>SIAP PILOTING SPAN</h2>
    </div>
    <div class="kolomt">
        <h2>KANWIL (1)</h2>
            <center><canvas id="canvas1" width="100px"></canvas></li>
            <h3>1 dari 13 KPPN<br>SIAP PILOTING SPAN</h3><center>
    </div>
    <div class="kolomt">
        <h2>KANWIL (2)</h2>
            <center><canvas id="canvas2" width="100px"></canvas></li>
            <h3>4 dari 15 KPPN<br>SIAP PILOTING SPAN</h3><center>
    </div>
    <div class="kolomt">
        <h2>KANWIL (3)</h2>
            <center><canvas id="canvas3" width="100px"></canvas>
			<h3>7 dari 15 KPPN<br>SIAP PILOTING SPAN</h3><center>
    </div>
    <div class="kolomt">
        <h2>KANWIL (4)</h2>
            <center><canvas id="canvas4" width="100px"></canvas>
			<h3>1 dari 7 KPPN<br>SIAP PILOTING SPAN</h3><center>
    </div>
    <div class="kolomt">
        <h2>KANWIL (5)</h2>
            <center><canvas id="canvas5" width="100px"></canvas>
			<h3>1 dari 7 KPPN<br>SIAP PILOTING SPAN</h3><center>
    </div>
    <div class="kolomt">
        <h2>KANWIL (6)</h2>
            <center><canvas id="canvas6" width="100px"></canvas>
			<h3>1 dari 7 KPPN<br>SIAP PILOTING SPAN</h3><center>
    </div><div class="kolomt">
        <h2>KANWIL (7)</h2>
            <center><canvas id="canvas7" width="100px"></canvas>
			<h3>1 dari 7 KPPN<br>SIAP PILOTING SPAN</h3><center>
    </div>
</div>

<script>
    var data = [
	{
		value: 6,
		color:"#E06666"
	},
	
	{
		value : 1,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(data);
    var data1 = [
	{
		value: 12,
		color:"#E06666"
	},
	
	{
		value : 1,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(data1);
    var data2 = [
	{
		value: 4,
		color:"#E06666"
	},
	
	{
		value : 11,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(data2);
    var data3 = [
	{
		value: 7,
		color:"#E06666"
	},
	
	{
		value : 8,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(data3);
    var data4 = [
	{
		value: 1,
		color:"#E06666"
	},
	
	{
		value : 6,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas4").getContext("2d")).Doughnut(data4);
    var data5 = [
	{
		value: 1,
		color:"#E06666"
	},
	
	{
		value : 6,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas5").getContext("2d")).Doughnut(data5);
    var data6 = [
	{
		value: 1,
		color:"#E06666"
	},
	
	{
		value : 6,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas6").getContext("2d")).Doughnut(data6);
    var data7 = [
	{
		value: 1,
		color:"#E06666"
	},
	
	{
		value : 6,
		color : "#70DB70"
	}
	]
    var myLine = new Chart(document.getElementById("canvas7").getContext("2d")).Doughnut(data7);


</script>