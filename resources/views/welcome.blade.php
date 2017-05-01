<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shoes Converter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            table, th, td {
                color: red;
                border: 1px solid black;
                border-collapse: collapse;
                margin: 20px auto;
            }
            table {
              width: 80%;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="position-ref">
            <div class="content">
                <div class="title m-b-md">
                    Men Shoes Measurement Converter
                </div>
                <div>
                    <label>Your foot size in EU (between 35-46): </label><input id="userinput" type="text" maxlength="2" >
                    <button onclick="myFunction()">Submit</button>
                    <button onclick="showAll()">Show All</button>
                    <label style="color:red" id="error"></label>
                    <br>
                      <table id="table" style="display:none;table-layout:fixed">
                      <tr>
                        <th>EU</th>
                        <th>US</th>
                        <th>UK</th>
                        <th>CENTIMETERS</th>
                      </tr>
                      <tr>
                        <td id="EU"></td>
                        <td id="US"></td>
                        <td id="UK"></td>
                        <td id="CEN"></td>
                      </tr>
                    </table>
                </div>
            </div>
        </div>
        <script>
        var EU=[35,36,37,38,39,40,41,42,43,44,45,46];
        var US=[3.5,4.5,5,6,7,7.5,8,8.5,9,10,11,12];
        var UK=[3,4,4.5,5.5,6.5,7,7.5,7,8.5,9.5,10.5,11.5];
        var CEN=[22.8,23.5,23.8,24.5,25.1,25.4,25.7,26,26.3,27,27.6,28.3];
          function myFunction(){
            var input = +document.getElementById('userinput').value;
            if(input > 46 || input < 35){
              document.getElementById('error').innerHTML = "Your size is out of range";
            } else {
              document.getElementById('error').innerHTML = "";
              showTable(input);
            }
          }
          function showAll(){
            document.write('<table>');
            document.write('<tr><th>EU</th>');
            document.write('<th>US</th>');
            document.write('<th>UK</th>');
            document.write('<th>CENTIMETERS</th></tr>');
            for(var i=0 ; i < EU.length ; i++){
              document.write('<tr><td>' + EU[i] + '</td>');
              document.write('<td>' + US[i] + '</td>');
              document.write('<td>' + UK[i] + '</td>');
              document.write('<td>' + CEN[i] + '</td></tr>');
            }
            document.write('</table>');
            document.write('<button onclick="window.location.reload();">Back</button>')
          }
          function showTable(input){
            document.getElementById('table').style.display = "";
            var index = EU.indexOf(input);
            document.getElementById("EU").innerHTML = EU[index];
            document.getElementById("US").innerHTML = US[index];
            document.getElementById("UK").innerHTML = UK[index];
            document.getElementById("CEN").innerHTML = CEN[index];
          }
        </script>
    </body>
</html>
