<?php 
include('../config.php');
include('../session.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php include '../Headercssin.php'?>
    <title>பணியாளர்களின் கவனத்திற்கு</title>
</head>

<body>
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->
    <!-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script> -->

    <div class="dashboard-main-wrapper">

        <?php include '../headerin.php'?>
        <?php include '../Sidebarin.php'?>
        <div class="dashboard-wrapper">
       
                <div class="row">
                    <div class="col-lg-9">


                    <div class="pdf-data" style="margin: 30px">
                            <h5 class="card-header text-green">தொழிலாளர் பற்றிய விபரம்</h5>
                            <div class="card-body">




                                <div id="pdfExport" >
                                <style type="text/css">

table.doc-table {
border-collapse: collapse;
margin: 20px 0;
}

table.doc-table td, table.doc-table th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}</style>
     <h2>பணியாளர்களின் கவனத்திற்கு</h2>






<p>என்னுடைய வேலைத்திறனை நிர்வாகஸ்தர்கள் ஒப்புக் கொண்டால் மட்டுமே நிரந்தரமாக்க வேண்டியதில்லை எனவும் உறுதி கூறுகின்றேன் (சட்டப்படி நிரந்தரமாக்கக்கூடிய கால அளவிற்குள்)</p>

<p>தாங்கள் எனக்கு அளிக்கப்பட்ட வேலைக்கு நிர்வாகத்தின் முழுதிருப்திக்கேற்ப பணிபுரிவேன் என உறுதி கூறுகிறேன்.</p>

<p>மேலே நிர்வாகத்தால் கூறப்பட்ட அனைத்து விதிமுறைகளுக்கும் கட்டுப்பட்டு நடப்பேன் என உறுதி கூறுகிறேன்.</p>

<p>என்னால் நிர்வாகத்திற்கு கொடுக்கப்பட்ட விபரங்கள் யாவும் உண்மையென கூறுகிறேன்.</p>

<p>நிர்வாகத்தின் விதிகளுக்கும், சட்டதிட்டங்களுக்கும் கட்டுப்பட்டு நடப்பேன் என உறுதி கூறுகிறேன்.</p>

<p>நிர்வாகத்திற்கு கேடு விளைவிக்கும் பொருட்டு எவ்வித செயலும் செய்யமாட்டேன் என உறுதி அளிக்கிறேன்.</p>

<p>நான் நிர்வாகத்தின் எந்தவிதமான வற்புறுத்தலுக்கோ, அச்சறுத்தலுக்கோ, அபராதத்திற்கோ கட்டாயத்திற்கோ உட்படுத்தப்படாமல் எனது விருப்பத்தில் வேலை செய்ய ஒப்புக்கொள்கிறேன்.</p>

<p>மேலே கூறிய விவரங்கள் அனைத்தும் இருவராலும் மணப்பூர்வமாக ஒப்புக்கொள்ளப்பட்டவை.</p>



                                                                                                                                               

<p style="text-align:left;">
தொழிலாளர்                                                                   
<span style="float:right;">பணியாளர்</span></p>


                                </div>





                                <a id="data_to_image_btn" style="margin-top:30px" class="btn btn-info btn-nda-down"><i class="fa fa-download"></i>
                                Download</a>
                                    <!-- <a id="pdfExporttest" onclick="demoFromHTML();" class="btn btn-info btn-nda-down"><i
                                        class="fa fa-download"></i>
                                    Download</a> -->

                                <style>
                                .btn-nda-down {
                                    position: absolute;
                                    top: 5px;
                                    right: 15px;
                                }

                                h4 {
                                    font-size: 1.3rem;
                                    font-weight: bold;
                                    color: #3AC47D
                                }
                                </style>




                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <?php include '../footer.php'?>
    </div>



    </div>

  <?php include '../footerjs.php'?>  
     <!-- <script src="../Scripts/jspdf.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>  -->
<script src ="../Scripts/html2canvas/html2canvas.min.js"></script>
    <script src="../Scripts/cloudflare/html2canvas.min.js"></script>
    <script src="../Scripts/cloudflare/debug.js"></script>
    
    
 
     <script>

<?php include '../footerjs.php'?>
    <script src="../Scripts/jspdf.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script> -->
    <script src="../assets/libs/js/html2canvas.min.js"></script>
    <script>
    $(function() {
        $("#data_to_image_btn").click(function() {

            var HTML_Width = $("#pdfExport").width();
            var HTML_Height = $("#pdfExport").height();
            var data = document.getElementById('pdfExport');
            html2canvas(data,{ allowTaint: true, scale :3,useCORS : true }).then(canvas => {
             

                var contentWidth = canvas.width;
      var contentHeight = canvas.height;
      //One page pdf shows the canvas height generated by html pages.
      var pageHeight = contentWidth / 592.28 * 841.89;
      //html page height without pdf generation
      var leftHeight = contentHeight;
      //Page offset
      var position = 2;
      //a4 paper size [595.28, 841.89], html page generated canvas in pdf picture width
      var imgWidth = 595.28;
      var imgHeight = 592.28/contentWidth * contentHeight;
      var pageData = canvas.toDataURL('image/jpeg', 1.0);
      var pdf = new jsPDF('', 'pt', 'a4');
      //There are two heights to distinguish, one is the actual height of the html page, and the page height of the generated pdf (841.89)
      //When the content does not exceed the range of pdf page display, there is no need to paginate
      if (leftHeight < pageHeight) {
      pdf.addImage(pageData, 'JPEG', 2, 2, imgWidth, imgHeight );
      } else {
          while(leftHeight > 0) {
              pdf.addImage(pageData, 'jpg', 2, position, imgWidth, imgHeight)
              leftHeight -= pageHeight;
              position -= 841.89;
              //Avoid adding blank pages
              if(leftHeight > 0) {
                pdf.addPage();
              }
          }
      }
     // pdf.save('content.pdf');


      window.open(pdf.output('bloburl', {
                    filename: 'new-file.pdf'
                }), '_blank');
            });

        });
    });



    function demoFromHTML() {
        var data = document.getElementById('pdfExport');
        html2canvas(data, {
            onrendered: function(canvasObj) {
                var contentWidth = canvas.width;
      var contentHeight = canvas.height;
      //One page pdf shows the canvas height generated by html pages.
      var pageHeight = contentWidth / 592.28 * 841.89;
      //html page height without pdf generation
      var leftHeight = contentHeight;
      //Page offset
      var position = 0;
      //a4 paper size [595.28, 841.89], html page generated canvas in pdf picture width
      var imgWidth = 595.28;
      var imgHeight = 592.28/contentWidth * contentHeight;
      var pageData = canvas.toDataURL('image/jpeg', 1.0);
      var pdf = new jsPDF('', 'pt', 'a4');
      //There are two heights to distinguish, one is the actual height of the html page, and the page height of the generated pdf (841.89)
      //When the content does not exceed the range of pdf page display, there is no need to paginate
      if (leftHeight < pageHeight) {
      pdf.addImage(pageData, 'JPEG', 0, 0, imgWidth, imgHeight );
      } else {
          while(leftHeight > 0) {
              pdf.addImage(pageData, 'JPEG', 0, position, imgWidth, imgHeight)
              leftHeight -= pageHeight;
              position -= 841.89;
              //Avoid adding blank pages
              if(leftHeight > 0) {
                pdf.addPage();
              }
          }
      }
      pdf.save('content.pdf');
            }
        });
    }
    </script>





    <!-- //<script src="../Scripts/Controller/NDAtamilController.js"></script> -->

</body>

</html>
































