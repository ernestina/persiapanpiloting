<h2>PERSIAPAN PILOTING 7 KANWIL</h2>
<div id="top">
    <div class="koloms">
        <fieldset><legend>TOTAL</legend>
            <center><canvas id="canvas" width="200"></canvas>
                <h0> 1/7 </h0></center>
        </fieldset>
    </div>
    <div class="kolomt">
        <fieldset><legend>KANWIL (1)</legend>
            <ul class="inline">
                <li><canvas id="canvas1" width="100px"></canvas></li>
                <li><h2>100 %</h2></li>
            </ul>
        </fieldset>
    </div>
    <div class="kolomt">
        <fieldset><legend>KANWIL (2)</legend>
            <ul class="inline">
                <li><canvas id="canvas2" width="100px"></canvas></li>
                <li><h2>80 %</h2></li>
            </ul>
        </fieldset>
    </div>
    <div class="kolomt">
        <fieldset><legend>KANWIL (3)</legend>
            <ul class="inline">
                <li><canvas id="canvas3" width="100px"></canvas></li>
                <li><h2>30 %</h2></li>
            </ul>
        </fieldset>
    </div>
    <div class="kolomt">
        <fieldset><legend>KANWIL (4)</legend>
            <ul class="inline">
                <li><canvas id="canvas4" width="100px"></canvas></li>
                <li><h2>50 %</h2></li>
            </ul>
        </fieldset>
    </div>
    <div class="kolomt">
        <fieldset><legend>KANWIL (5)</legend>
            <ul class="inline">
                <li><canvas id="canvas5" width="100px"></canvas></li>
                <li><h2>70 %</h2></li>
            </ul>
        </fieldset>
    </div>
    <div class="kolomt">
        <fieldset><legend>KANWIL (6)</legend>
            <ul class="inline">
                <li><canvas id="canvas6" width="100px"></canvas></li>
                <li><h2>50 %</h2></li>
            </ul>
        </fieldset>
    </div><div class="kolomt">
        <fieldset><legend>KANWIL (7)</legend>
            <ul class="inline">
                <li><canvas id="canvas7" width="100px"></canvas></li>
                <li><h2>90 %</h2></li>
            </ul>
        </fieldset>
    </div>
</div>

<script>
    var data = [
        {
            value: 1,
            color: "#F7464A"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(data);
    var data1 = [
        {
            value: 1,
            color: "#008000"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(data1);
    var data2 = [
        {
            value: 1,
            color: "#F7464A"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(data2);
    var data3 = [
        {
            value: 1,
            color: "#F7464A"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(data3);
    var data4 = [
        {
            value: 1,
            color: "#F7464A"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas4").getContext("2d")).Doughnut(data4);
    var data5 = [
        {
            value: 1,
            color: "#F7464A"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas5").getContext("2d")).Doughnut(data5);
    var data6 = [
        {
            value: 1,
            color: "#F7464A"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas6").getContext("2d")).Doughnut(data6);
    var data7 = [
        {
            value: 1,
            color: "#F7464A"
        }
    ]
    var myLine = new Chart(document.getElementById("canvas7").getContext("2d")).Doughnut(data7);


</script>