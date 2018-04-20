<?php 
$this->load->view('parts/top');
$this->load->view('parts/navigation');

 ?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>/assets/components/index.html#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->

<?php 

$this->load->view('parts/bottom');

 ?>

<?php 
print_r($_SESSION);
 ?>