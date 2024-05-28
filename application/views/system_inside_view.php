
<style>

.pd-2{
    padding: 2rem!important;
    
}
.gd{
    background: #fff;
    /* border: 3px solid gray; */
    /* border-radius: 5px; */
    -webkit-box-shadow: 0 12px 34px rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 12px 34px rgba(0, 0, 0, 0.12);
    box-shadow: 0 12px 34px rgba(0, 0, 0, 0.12);
}

</style>

<section class="home-section">
    <div class="text">Dashboard</div>
    <div class="container text-center">

        <div class="row pd-2 ">
            <div class="col col-lg-6 gd p-4">
                <!-- <div>
                    <canvas id="myChart"></canvas>
                </div> -->
                sdfsdffffffffffffffffffffffffffffffffffffffffffffff
 
            </div>
            <div class="col">
            Column
            </div>
            <div class="col">
            Column
            </div>
        </div>
        
    </div>
    
      
</section>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>