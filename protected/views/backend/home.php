<div class="content-padder content-background">
  <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large"> 
                    <h2 class="uk-margin-remove-bottom"><span class="ion-speedometer"></span> Dashboard</h2>
                    
               
            <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-4@m uk-child-width-1-4@xl">
                        <div>
                            <div class="uk-card uk-card-default uk-card-body card_grey uk-padding-medium">
                                 <span class="uk-margin-small-right" uk-icon="question"></span>
                                <span class="statistics-text">Knowledge Base</span><br />
                                <span class="statistics-number">
                                   <?php echo$all_knowledge; ?>
                                    <span class="uk-label uk-label-success">
                                        <span class="ion-arrow-up-c"></span>
                                    </span>
                                     <span class="statistics-text">Total Faqs</span><br/>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body card_green uk-padding-medium">
                                <span class="statistics-text">Website Traffic</span><br />
                                <span class="statistics-number">
                                    123.238
                                    <span class="uk-label uk-label-danger">
                                        <span class="ion-arrow-down-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                        <div class="uk-card uk-card-default uk-card-body card_date uk-padding-medium">
                               <span class="uk-margin-small-right" uk-icon="mail"></span>
                                 <span class="statistics-text">All Tickets</span><br />
                                <span class="statistics-number">
                                 <?php echo$all_tickets; ?>
                                    <span class="uk-label uk-label-success">
                                       <span class="ion-arrow-up-c"></span>
                                    </span>
                                      <span class="statistics-text">Total Tickets</span><br/>
                                </span>
                            </div>
                        </div>
                        <div>
                        <div class="uk-card uk-card-default uk-card-body card_pink uk-padding-medium">
                            <span class="uk-margin-small-right" uk-icon="album"></span>
                                 <span class="statistics-text">Open Tickets</span><br />
                                <span class="statistics-number">
                                     <?php echo$open_tickets; ?>
                                    <span class="uk-label uk-label-success">
                                        <span class="ion-arrow-up-c"></span>
                                    </span>
                                    <span class="statistics-text">All Open Tickets</span><br/>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body card_yellow uk-padding-medium">
                                <span class="uk-margin-small-right" uk-icon="close"></span>
                                <span class="statistics-text">Close Tickets</span><br />
                                <span class="statistics-number">
                   <?php echo$close_tickets;?>  
   <span class="statistics-text">All Closed Tickets</span><br/>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>                     
                </div></br>
                <div id="piechart"></div>
            </div>
        </div>
     </div>
 </div>
  



<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
   ['Total Tickets',<?php echo$all_tickets; ?>],
  ['Open Tickets',<?php echo$open_tickets; ?>],
  ['Close Tickets',<?php echo$close_tickets;?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'All Tickets', 'width':395, 'height':350};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
