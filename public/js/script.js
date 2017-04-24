function grab_form_info(){
  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value;
  return create_id(name, surname);
}

function create_id (name, surname){

  name = name.toLowerCase();
  surname = surname.toLowerCase();

  if(surname.length >= 4){
    surname = surname.substring(0, 4);
  } else if (surname.length == 3){
    surname = surname.substring(0,1)+surname;
  } else {
    surname = surname+surname;
  }

  personId = name.substring(0,2)+surname;
  return personId;

}

function displayClientsGraph(){

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

}
