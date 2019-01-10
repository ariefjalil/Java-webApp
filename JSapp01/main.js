function fetchIssues() {
//retrieve item from local storage
  var issues = JSON.parse(localStorage.getItem('issues'));
  var issuesList = document.getElementById('issuesList');

  issuesList.innerHTML= '';

  for(var i = 0; i < issues.length; i++) {
    var id = issues[i].id;
    var desc = issues[i].description;
    var severity = issues[i].severity;
    var assignedTo = issues[i].assignedTo;
    var status = issues[i].status;

    issuesList.innerHTML += '<div class ="well">'+
                            '<h6>Issue ID:' + id + '</h6>'+
/*span use to call bootstrap*/  '<p><span class="label label-info">' + status + '</span></p>'+
                            '<h3>' + desc + '</h3>' +
                            '<p><span class="glyphicon glyphicon-time"></span>' + Severity + '</p>' +
                            '<p><span class="glyphicon glyphicon-user"></span>' + assignedTp + '</p>' +
                            '<a href = "#" onClick="setStatusClosed(\''+id+'\')" class="btn btn-warning">Close</a>' +
                            '<a href = "#" onClick="deleteIssues(\''+id+'\') class="btn btn-danger">Delete</a>' +
                            '</div>';
  }
}
