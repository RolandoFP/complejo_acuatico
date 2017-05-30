  <?php include('head.php') ?>
  <body>
    <?php include('nav.php') ?>
    <div class="container" style="min-height: 76.5vh;">

      <div class="container">
        <div class="card-panel">
          <div class="center-align">
            <h3>Reporte General</h3>
          </div>

          <div class="row">
            <div class="col s8 col-center divider"></div>
          </div>

          <div class="row">
            <div class="col m4 s12">
              <canvas id="chart_forma_pago" width="400" height="300"></canvas>
            </div>
            <div class="col m4 s12">
              <canvas id="chart_seccion_parcial" width="400" height="300"></canvas>
            </div>
            <div class="col m4 s12">
              <canvas id="chart_seccion_total" width="400" height="300"></canvas>
            </div>
          </div>

          <div class="input-field center-align">
            <a id="enlace_reporte" target="_blank" href="reporte.php" class="waves-effect waves-light btn-large"><i class="material-icons left">print</i>Ver / Imprimir Reporte</a>
          </div>
        </div>

      </div>
    </div>

    <?php include('footer.php') ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/Chart.bundle.js"></script>

    <script>
      var ctx = document.getElementById("chart_forma_pago");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Encuesta de servicio"],
          datasets: [{
            label: 'Excelente',
            data: [48],
            backgroundColor: [
            'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
            'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
          },
          {
            label: 'Bueno',
            data: [60],
            backgroundColor: [
            'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
            'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
          },
          {
            label: 'Regular',
            data: [4],
            backgroundColor: [
            'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
            'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
          },
          {
            label: 'Malo',
            data: [10],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)'
            ],
            borderWidth: 1
          }
          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });

      var cty = document.getElementById("chart_seccion_parcial");

      var data = {
        labels: [
        "Producto vendido",
        "Merma",
        "Stock"
        ],
        datasets: [
        {
          data: [45, 18, 37],
          backgroundColor: [
          "#84D0D0",
          "#FAAF56",
          "#B2B3B7"
          ],
          hoverBackgroundColor: [
          "#0199A4",
          "#FDB916",
          "#4C4D4F"
          ]
        }]
      };

      var myDoughnutChart = new Chart(cty, {
        type: 'doughnut',
        data: data,
        options: {
          animation:{
            animateScale:true
          }
        }
      });

      var ctz = document.getElementById("chart_seccion_total");

      var data = {
        labels: ["Estado financiero"],
        datasets: [
        {
          label: "Ingresos",
          backgroundColor: [
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1,
          data: [7800],
        } ,   

        {
          label: "Egresos ",
          backgroundColor: [
          'rgba(105, 105, 105, 0.2)'
          ],
          borderColor: [
          'rgba(105, 105, 105, 1)'
          ],
          borderWidth: 1,
          data: [1029],
        }
        ]
      };

      var myChart = new Chart(ctz, {
        type: 'bar',
        data: data,
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    </script>

    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav({
       edge: 'right', // Choose the horizontal origin
       closeOnClick: true
     });
        $('.modal-trigger').leanModal();
        $('select').material_select();
      $(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion
    });

      function change_password(id, nombre) {
        $("#cp_nombre").html(nombre);
        $('#id').val(id);
        $("#change_password").openModal();
      }
    </script>
  </body>
  </html>