function grab_form_info(){
  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value;
  return create_id(name, surname);
}

function create_id (name, surname){

  //id = id.toString();
  //id = id.toLowerCase();
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
