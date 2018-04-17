var JSONURL = 'https://spreadsheets.google.com/feeds/list/1hG5S2NIDj1gDLNPY8mjoXbCI4wWeW8GCRuEn-K6oGGU/3/public/basic?alt=json';

function callback(data){
    var rows = [];
    var cells = data.feed.entry;

    for (var i = 0; i < cells.length; i++){
        var rowObj = {};
        rowObj.timestamp = cells[i].title.$t;
        var rowCols = cells[i].content.$t.split(',');
        for (var j = 0; j < rowCols.length; j++){
            var keyVal = rowCols[j].split(':');
            rowObj[keyVal[0].trim()] = keyVal[1].trim();
        }
        rows.push(rowObj);
    }

    var raw = document.createElement('p');
    raw.innerText = JSON.stringify(rows);
    document.body.appendChild(raw);
}

$(document).ready(function(){

    $.ajax({
        url:JSONURL,
        success: function(data){
            callback(data);
        }
    });

});
