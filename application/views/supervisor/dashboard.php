
 <section class="content">
     <div class="login" data-login="<?= $this->session->flashdata('pesan') ?>">
         <?php if ($this->session->flashdata('pesan')) { ?>

         <?php } ?>
         <div class="row clearfix">
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <div class="card">
                     <div class="header">
                         <div class="row clearfix">
                             <div class="col-xs-12 col-sm-6">
                                 <h4>SELAMAT DATANG DI CUSTOMER CARE SYSTEM</h4>
                             </div>
                             <div class="col-xs-12 col-sm-6 align-right">
                                 <div class="switch panel-switch-btn">
                                     <!-- <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label> -->

                                 </div>
                             </div>

                         </div>
                         <hr>
                         <h5><b>DATA PELAPORAN</b></h5>
                        <br>
                         <?php
                               $totalp = $this->db->query("SELECT count(id) as totalp FROM pelaporan where status_ccs = 'ADDED'");

                            foreach ($totalp->result() as $total) {
                            ?>

                         <div class="row clearfix">
                             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <div class="info-box bg-blue hover-expand-effect">
                                     <div class="icon">
                                         <a href="<?php echo base_url('supervisor/added') ?>">
                                             <i class="material-icons">playlist_add_check</i>
                                         </a>
                                     </div>
                                     <div class="content">
                                         <div class="text">NEW TIKET</div>
                                         <div class="number"><?php echo $total->totalp ?></div>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>

                             <?php
                                    $totalp = $this->db->query("SELECT count(id) as totalp FROM pelaporan where status_ccs = 'HANDLE'");

                                foreach ($totalp->result() as $total) {
                                ?>
                             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <div class="info-box bg-cyan hover-expand-effect">
                                 <div class="icon">
                                         <a href="<?php echo base_url('supervisor/onprogress') ?>">
                                             <i class="material-icons">assignment_turned_in</i>
                                         </a>
                                     </div>
                                     <div class="content">
                                         <div class="text">HANDLE</div>
                                         <div class="number"><?php echo $total->totalp ?></div>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>

                             <?php
                                   $totalp = $this->db->query("SELECT count(id) as totalp FROM pelaporan where status_ccs = 'CLOSE'");

                                foreach ($totalp->result() as $total) {
                                ?>
                             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <div class="info-box bg-orange hover-expand-effect">
                                     <div class="icon">
                                         <a href="<?php echo base_url('supervisor/close') ?>">
                                             <i class="material-icons">report</i>
                                         </a>
                                     </div>
                                     <div class="content">
                                         <div class="text">CLOSE</div>
                                         <div class="number"><?php echo $total->totalp ?></div>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>

                             <?php
                                    $totalp = $this->db->query("SELECT count(id) as totalp FROM pelaporan where status_ccs = 'FINISH'");

                                foreach ($totalp->result() as $total) {
                                ?>
                             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                 <div class="info-box bg-light-green hover-expand-effect">
                                     <div class="icon">
                                         <a href="<?php echo base_url('supervisor/finish') ?>">
                                             <i class="material-icons">done_all</i>
                                         </a>
                                     </div>
                                     <div class="content">
                                         <div class="text">FINISH</div>
                                         <div class="number"><?php echo $total->totalp ?></div>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>

                           
                           
                         </div>
                     </div>

                 </div>
             </div>
         </div>
         <!-- DIAGRAM -->
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BAR CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <canvas id="bar_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
 </section>

 <!-- <script>
$(function () {
    new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
    
});

function getChartJs(type) {
    var config = null;

    if (type === 'bar') {
        config = {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "High",
                    data: [<?= $pelaporan['priority']?>],
                    backgroundColor: 'rgba(0, 188, 212, 0.8)'
                }, {
                        label: "My Second dataset",
                        data: [28, 48, 40, 19, 86, 27, 90],
                        backgroundColor: 'rgba(233, 30, 99, 0.8)'
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
 
return config;
}
 </script> -->

<script>
    // PRIORITY
    const priority = document.getElementById('bar_chart');

    <?php foreach ($datapelaporan as $dp) : ?>
        $nama = ['<?= $value['priority']; ?>']

        var chart_rumah_kabupaten = new Chart(priority, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June",],
                datasets: [{
                    label: 'Priority High',
                    data: [<?= $dp['priority']; ?>],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    borderWidth: 1
                
                    
                }],
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    <?php endforeach; ?>
</script>
 