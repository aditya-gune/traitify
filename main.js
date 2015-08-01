var publicKey = 'tsekmdgq9oe26i5fh1kd389p19';
var secretKey = 'j7vu507a1ht594a1t6vrqek4d5';
var assessmentId;
//var assessmentId2 = '56933ffd-866d-43fe-9e31-22bd081e511c';

Traitify.setPublicKey(publicKey);
Traitify.setHost("https://api-sandbox.traitify.com");
Traitify.setVersion("v1");

function apiCall(method, key, url, data, responseHandler) {
  var httpRequest = new XMLHttpRequest();

  function requestCheck() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200 || httpRequest.status === 201) {
        responseHandler(JSON.parse(httpRequest.responseText));
      }
      else {
        alert('Request Status: ' + httpRequest.status);
      }
    }
  }

  httpRequest.onreadystatechange = requestCheck;

  httpRequest.open(method, url, true);
  httpRequest.setRequestHeader('Authorization', 'Basic ' + key + ":x");
  httpRequest.send(data);
}

function consolePretty(object) {
  console.log(JSON.stringify(object, null, '\t'));
}

function codePretty(object) {
  return "<pre>" + JSON.stringify(object, null, '\t') + "</pre>";
}

function createAssessment() {
  apiCall('POST', secretKey, 'https://api-sandbox.traitify.com/v1/assessments',
    "{\"deck_id\":\"career-deck\"}", assessmentHandler
  );
}

function assessmentHandler(data) {

  assessmentId = data.id;

  //document.getElementById('assessmentJSON').innerHTML = codePretty(data);

  var slideDeckWidget = Traitify.ui.load("slideDeck", assessmentId, "#slideDeck");

  slideDeckWidget.onFinished(function() {
    showCareers(assessmentId);
	//showPersonalitytraits(assessmentId);
  });

}

//formats the career output
function showCareers(id) {
  //var careersJSON = document.getElementById("careersJSON");
  var trHTML;
  Traitify.getCareers(id).then(function(data){
    //careersJSON.innerHTML = codePretty(data);
    trHTML = '<table class="table">';
    trHTML += '<tr><td colspan="2"><strong>Career Options<strong></td></tr>';
    console.log(data);
    for(var i=0; i<data.length; i++){
      trHTML += '<tr><td align="center"><div id="careertitle">' + data[i].career.title + '</div><img src="'+ data[i].career.picture +'"></td>';
      trHTML += '<td><div id = "score">Score: ' + (Math.round(data[i].score * 100) * .01) + '%' 
	  	+ '</div><br><div id = "description">' + data[i].career.description 
		+ '</div><br><div id="majors"><i>College Major Choices:</i></id> ';

      for(var j=0; j<data[i].career.majors.length; j++){
        trHTML += data[i].career.majors[j].title + ' ';
      }
      trHTML += '<br><br><i>Personality Traits: </i>';
      for(var k=0; k<data[i].career.personality_traits.length; k++){
        trHTML += data[i].career.personality_traits[k].personality_trait.name + ', ';
      }

      trHTML += '<br><br><i>Mean Annual Salary:</i> $' + numberWithCommas(data[i].career.salary_projection.annual_salary_mean) +'';

      trHTML += '</td></tr>';
    }
    trHTML += '</table>';
    var careersJSON = document.getElementById("careersJSON");
    careersJSON.innerHTML = trHTML;
  });
}

/*function showPersonalitytraits(assessmentId){
	var traits = Traitify.ui.load("personalityTraits", assessmentId, "#personality-traits"); 
    results.onInitialize(function(){
        console.log(traitify.data.get("PersonalityTraits"));
        console.log("Initialized!");
    })
}*/


//formats the salary number
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


window.onload = function() {

  createAssessment();

};



/*
{
  "id": "56933ffd-866d-43fe-9e31-22bd081e511c",
  "deck_id": "career-deck",
  "tags": null,
  "completed_at": null,
  "created_at": 1438440459641
}
*/