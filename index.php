<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Systems Utility Page</title>
  <script type="text/javascript">
     function goToNewPage()
     {
        var url = document.getElementById( 'list').value;
        if(url != 'none') {
           window.location = url;
        }
     }
  </script>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <center>
  <header>
        <img src="kemi.png">
        <h2>MIS Systems Utilities</h2>
        <hr />
  </header>

  <article>
        <section>
        <h3>User/PC Lookup</h3>
        <table class="lookup">
        <tr class="lookup">
        <form action="userlookup/userlookup_result.php" method="post" name="userlookup">
        <td class="lookup">User Name:</td><td class="lookup"> <input type="text" name="name" size="25"></td>
        <td class="lookup"><input type="submit" value="Submit"></td>
        </form>
        </tr>
        <tr class="lookup">
        <form action="userlookup/pclookup_result.php" method="post" name="pclookup">
        <td class="lookup">PC Name:</td><td class="lookup"><input type"text" name="Computername" size="25" >
        <td class="lookup"> <input type="submit" value="Submit"></td>
        </tr>
        </form>
        </table>
        </section>
        <section>
        <hr />
        <h3>Logs</h3>
        <p>Log Files By Reviewer:
        <form name="systemsPages">
        <select name="list" onchange="document.location = this.value" value="Go">
        <option selected>--Select Name--</option>
        <!--
        <option value="/systems_users/jason.php">Jason</option>
        <option value="/systems_users/jeff.php">Jeff</option>
        <option value="/systems_users/kathy.php">Kathy</option>
        <option value="/systems_users/matt.php">Matt</option>
        -->
        <option value="/systems_users/operational.php">Operational Team</option>
        <option value="/systems_users/triage.php">Triage Team</option>
        <!--<option value="/systems_users/strategic.php">Strategic Team</option>-->
        <!--<option value="/systems_users/rim.php">RIM</option-->
        </select>
        </form>
        </p>

        <p>Notifcations by vendor
        <form method="post" action="notifications/notify_by_vendor.php">
                <select name="sVendor">
                        <option selected>Select Vendor</option>
                        <option value="CorVel">CorVel</option>
                        <option value="KEMI">KEMI</option>
                        <option value="OMCA">OMCA</option>
                        <option value="Equian">Equian</option>
                        <option value="KUSI">KUSI</option>
                        <option value="NCCI">NCCI</option>
                        <option value="PMSI">PMSI</option>
                        <option value="ISO">ISO</option>
                        <option value="Redwood">Redwood</option>
                        <option value="aws_it-1">aws_it-1</option>
                        <option value="BHN">BHN</option>
                        <option value="Vela">Vela</option>
                        <option value="IRUTIL2-PRD">IRUTIL2-PRD</option>
                </select>
        <input type="submit" value="Submit" />
        </form>
        </p>

        <p>Notifcations by date
        <form method="post" action="notifications/notify_by_date.php">
                <select name="sMonth">
                        <option selected>Select Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                </select>
                <select name="sDay">
                        <option selected>Select Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                </select>
                </select>
                  <select name="sYear">
                        <option selected>Select Year</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                </select>

        <input type="submit" value="Submit" />
        </form>
        </p>
        </center>
        </section>
  </article>

  <footer>
        <table class="footer">
        <h3><center>Links</h3>
        <tr>
        </tr>
        <tr>

        <td><a href="http://aws-dev-mssql-1/Reports_MSSQLSERVER_DEV/browse/App%20Reporting" target="_blank">User Application Access Reporting</a></td>
        <td><a href="https://plesxi1.kemi.com" target="_blank">VMware Lexington ESXi Host</a></td>
        <td><a href="https://plesxi2.kemi.com" target="_blank">VMware Louisville ESXi Host</a></td>
        </tr>
        <tr>
        <td><a href="https://wlan.kemi.com" target="_blank">WLAN Controller</a></td>
        <td><a href="\\vela.kemi.com\systems$\synclogs\ArchiveLogs" target="_blank">Log Archive for Last Month</a><br /></td>
        <td><a href="http://systemslookup.s3-website.us-east-2.amazonaws.com/" target="_blank">JK Testing</a></td>
        </tr>
        </table>
  </footer>
</body>
