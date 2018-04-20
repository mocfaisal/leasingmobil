<?php 

/**
* 
*/
class Report extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

function index(){
$this->cicilan();
}

function save($type){
	 require_once('./assets/html2pdf/html2pdf.class.php');

    // get the HTML
     ob_start();
     $data['data']=$this->$type();
     $this->load->view('view-tes',$data);
    $content = ob_get_clean();
    $script = "$('#data-pelanggan').DataTable();";
    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array(0, 0, 0, 0));

        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->pdf->IncludeJS($script);
        // convert
        $html2pdf->writeHTML($content);

         // send the PDF
        $html2pdf->Output('tes'.date('d-m-y H:i:s').'.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

}

function cicilan(){
$data['view']=$this->load->view('data/pelanggan3');
$this->load->view('view-laporan',$data);
}




}

 ?>