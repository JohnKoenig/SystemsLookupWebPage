// api url
const api_url = "https://t877htutzb.execute-api.us-east-2.amazonaws.com/Prod/systems-update-read-pc/";
const queryString = window.location.search;
// console.log(queryString);
// console.log(api_url);

// Defining async function
async function getapi(url) {

    // Storing response
    const response = await fetch(url + queryString);

    // Storing data in form of JSON
    var data = await response.json();

    show(data);
}
// Calling that async function
getapi(api_url);

// Function to define innerHTML for HTML table
function show(data) {
    JSON.stringify(data)
    console.log("Success", data);
    let tab =
        `<tr>
		<th>OsLocalDateTime</th>
		<th>CsUserName</th>
		<th>CsName</th>
		<th>Event</th>
        <th>LogonServer</th>
        <th>OsUptimeDays</th>
        <th>OsUptimeHours</th>
		</tr>`;

    for (let r of data.body.Items) {
        var d = new Date(0); // The 0 there is the key, which sets the date to the epoch
        d.setUTCSeconds(r.OsLocalDateTime / 1000);
        tab += `<tr>
	    <td>${d}</td>
	    <td>${r.CsUserName}</td>
	    <td>${r.CsName}</td>
        <td>${r.Event}</td>
        <td>${r.LogonServer}</td>
        <td>${r.OsUptimeDays}</td>
        <td>${r.OsUptimeHours}</td>
        </tr>`;
    }
    // Setting innerHTML as tab variable
    document.getElementById("logEvents").innerHTML = tab;
}