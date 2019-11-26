
   <?php

/* @var $this yii\web\View */

$this->title = 'Skill';
?>
<div class="site-skill">
   <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skill">
      <div class="w-100">
        <h2 class="mb-5">Skill</h2>
           
        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <canvas id="Chart" width="910" height="910" 
  style="FONT-WEIGHT: 500;FONT-WEIGHT: 500;display: block;width:500px;height:300px;"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
 
    <script>
    
        var ctx = document.getElementById("Chart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
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
        </script> 
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div><br>
        <ul class="fa-ul mb-0">
          <li>

          <?php foreach ($skillModel as $key => $skill) { ?>
            <div class="subheading mb-3"><?= $skill->name ?></div><br>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill->score ?>" 
                             aria-valuemin="50" aria-valuemax="50" style="width:<?= $skill->score ?>%;background: #bd5d38;"><?= $skill->score ?>%
              </div>
            </div>
          <?php } ?>
           
        </ul>
  
</div>
  </section>