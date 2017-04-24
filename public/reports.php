<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
<?php @changeToHTTP(); ?>
<div class="container justify-center">
  <h2>View Reports</h2>
  <p class="text-justify"> <strong>Visits added: </strong>The below graph shows the amount of visits given to your clients on a daily basis.</p>
  <div id="visualization"></div>

<script type="text/javascript">

    var container = document.getElementById('visualization');
    var items = [
        {x: '2017-04-21', y: 3},
        {x: '2017-04-22', y: 0},
        {x: '2017-04-23', y: 8},
        {x: '2017-04-24', y: 7},
        {x: '2017-04-25', y: 4},
        {x: '2017-04-27', y: 10},
        {x: '2017-04-28', y: 8},
        {x: '2017-04-29', y: 5},
    ];

    var dataset = new vis.DataSet(items);
    var options = {
        style:'bar',
        barChart: {width:50, align:'center'}, // align: left, center, right
        drawPoints: false,
        dataAxis: {
            icons:true
        },
        orientation:'top',
        start: '2017-04-18',
        end: '2017-04-30'
    };
    var graph2d = new vis.Graph2d(container, items, options);

</script>
</div>
  <?php include("../includes/layouts/footer.php"); ?>
</body>
</html>
