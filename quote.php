<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta name="HandheldFriendly" content="true">
  <title>Codecraft</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="css/theme.min.css?v3">
      <link rel="stylesheet" href="main.css">

</head>


<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
// Update the path to match your directory structure

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = !empty($_POST["inputName"]) ? $_POST["inputName"] : "";
  $email = !empty($_POST["email"]) ? $_POST["email"] : "";
  $product = !empty($_POST["product"]) ? $_POST["product"] : "";
  $message = !empty($_POST["message"]) ? $_POST["message"] : "";
  $WebApp = !empty($_POST["webAppType"]) ? $_POST["webAppType"] : "";
  $Website = !empty($_POST["WebsiteType"]) ? $_POST["WebsiteType"] : "";
  $framework = !empty($_POST["frameworkCMS"]) ? $_POST["frameworkCMS"] : "";
    

$mail = new PHPMailer(true);

    // Set up SMTP
     // $mail->SMTPDebug = 2;                                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.hostinger.com;';                   
    $mail->SMTPAuth   = true;                            
    $mail->Username   = 'info@codecraft.mv';                
    $mail->Password   = 'Carbs@661026';                       
    $mail->SMTPSecure = 'ssl';                             
    $mail->Port       = 465; 
 
    $mail->setFrom('info@codecraft.mv', 'Codecraft');          
    $mail->addAddress('shawwaaf@gmail.com', 'Shawwaf');
      
    $mail->isHTML(true);                                 
    $mail->Subject = 'Codecraft Quote Request';
    $mail->Body    = 'Company/Name: ' . $name . '<br>Product: ' . $product . '<br>Type: ' . $WebApp . $Website . '<br>Framework: ' . $framework . '<br>Details: ' . $message . '<br>Reply to: ' . $email;
    $mail->AltBody =  'Company/Name: ' . $name . '<br>Product: ' . $product . '<br>Type: ' . $WebApp . $Website . '<br>Framework: ' . $framework . '<br>Details: ' . $message . '<br>Reply to: ' . $email;

    if ($mail->send()) {
        header("Location: msg-sent");
        exit(); 
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}


?>


<body class="d-flex h-100 w-100 bg-black text-white" data-bs-spy="scroll" data-bs-target="#navScroll">

  <div class="h-100 container-fluid">
    <div class="h-100 row d-flex align-items-stretch">

      <div class="col-12 col-md-7 col-lg-6 col-xl-5 d-flex align-items-start flex-column px-vw-5">

        <header class="mb-5 py-vh-2 col-12">
      <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="index">

        
<svg
   width="10.321911mm"
   height="10.321907mm"
   viewBox="0 0 35.321911 35.321907"
   version="1.1"
   id="svg5"
   xml:space="preserve"
   inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)"
   sodipodi:docname="CCMVlogo empt.svg"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:svg="http://www.w3.org/2000/svg"><sodipodi:namedview
     id="namedview7"
     pagecolor="#505050"
     bordercolor="#eeeeee"
     borderopacity="1"
     inkscape:showpageshadow="0"
     inkscape:pageopacity="0"
     inkscape:pagecheckerboard="0"
     inkscape:deskcolor="#505050"
     inkscape:document-units="mm"
     showgrid="false"
     inkscape:lockguides="true"
     showguides="true"
     inkscape:zoom="1.4912879"
     inkscape:cx="179.37516"
     inkscape:cy="427.14757"
     inkscape:window-width="1920"
     inkscape:window-height="1017"
     inkscape:window-x="1912"
     inkscape:window-y="18"
     inkscape:window-maximized="1"
     inkscape:current-layer="fa57ff14-6b64-46e1-8470-a2e4e28b56e1"><sodipodi:guide
       position="42.779959,206.79827"
       orientation="0,-1"
       id="guide674"
       inkscape:locked="true" /></sodipodi:namedview><defs
     id="defs2"><linearGradient
       data-v-fde0c5aa=""
       gradientTransform="rotate(25)"
       id="4179d2fd-71e7-48e7-a17b-e71f1bcad19b"
       x1="0"
       y1="0"
       x2="1"
       y2="0"><stop
         data-v-fde0c5aa=""
         offset="0%"
         stop-color="#288642"
         stop-opacity="1"
         id="stop265" /><stop
         data-v-fde0c5aa=""
         offset="100%"
         stop-color="#27FDFD"
         stop-opacity="1"
         id="stop267" /></linearGradient><linearGradient
       inkscape:collect="always"
       xlink:href="#4179d2fd-71e7-48e7-a17b-e71f1bcad19b"
       id="linearGradient400"
       x1="0"
       y1="0"
       x2="32"
       y2="0"
       gradientUnits="userSpaceOnUse" /><linearGradient
       inkscape:collect="always"
       xlink:href="#4179d2fd-71e7-48e7-a17b-e71f1bcad19b"
       id="linearGradient815"
       gradientUnits="userSpaceOnUse"
       x1="0"
       y1="0"
       x2="32"
       y2="0"
       gradientTransform="translate(3.6054852,36.808001)" /><linearGradient
       inkscape:collect="always"
       xlink:href="#4179d2fd-71e7-48e7-a17b-e71f1bcad19b"
       id="linearGradient817"
       gradientUnits="userSpaceOnUse"
       gradientTransform="matrix(0.29612144,0,0,0.29612144,11.217653,11.204107)"
       x1="0"
       y1="0"
       x2="32"
       y2="0" /><linearGradient
       inkscape:collect="always"
       xlink:href="#4179d2fd-71e7-48e7-a17b-e71f1bcad19b"
       id="linearGradient819"
       gradientUnits="userSpaceOnUse"
       gradientTransform="matrix(1.1035288,0,0,1.1035288,-1.7526146,-1.7628432)"
       x1="9.9619999"
       y1="9.9619999"
       x2="22.038"
       y2="9.9619999" /><linearGradient
       inkscape:collect="always"
       xlink:href="#4179d2fd-71e7-48e7-a17b-e71f1bcad19b"
       id="linearGradient821"
       gradientUnits="userSpaceOnUse"
       x1="0"
       y1="0"
       x2="32"
       y2="0" /></defs><g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(-45.677754,-112.56485)"><g
       data-v-fde0c5aa=""
       id="fa57ff14-6b64-46e1-8470-a2e4e28b56e1"
       stroke="none"
       fill="url(#4179d2fd-71e7-48e7-a17b-e71f1bcad19b)"
       transform="matrix(1.1038097,0,0,1.1038097,41.697984,71.935821)"
       style="fill:url(#linearGradient400)"><path
         d="M 35.605485,36.808001 H 3.6054852 v 32 H 35.605485 l -5.054,-5.172 H 8.6594852 v -21.656 H 30.552485 Z"
         id="path272-9"
         style="fill:url(#linearGradient815)"
         sodipodi:nodetypes="ccccccccc"
         inkscape:export-filename="logosmallCC.svg"
         inkscape:export-xdpi="7.1910038"
         inkscape:export-ydpi="7.1910038" /><g
         id="g782-4"
         style="fill:url(#linearGradient821)"
         transform="translate(3.6623132,36.91802)"><path
           d="m 19.07257,19.444871 0.917681,0.938999 m 0.703287,-9.179763 h -9.475885 v 9.475885 h 9.475885 l -1.496597,-1.53154 h -6.48269 v -6.412805 h 6.482987 z"
           id="path272-3-4"
           style="fill:url(#linearGradient817);stroke-width:0.296122"
           sodipodi:nodetypes="ccccccccccc" /><path
           d="M 21.463425,10.334041 V 21.453197 H 10.344268 V 10.334041 H 21.463425 M 22.566954,9.2305112 H 9.2407394 V 22.556726 H 22.566954 Z"
           id="path274-5"
           style="fill:url(#linearGradient819);stroke-width:1.10353" /></g></g></g></svg>

<span class="ms-md-1 me-md-5" style="font-family:Dagger;">Codecraft</span>
      </a>

        </header>
        <main class="mb-auto col-12">
          <h1>Request for Quote</h1>

          <form class="row" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="col-12">
              <div class="mb-3">
                <label for="inputName" class="form-label">Company/Individual Name</label>
                <input type="text" class="form-control form-control-lg text-white bg-gray-800 border-dark" id="inputName"
                  name="inputName" required>
              </div>
              <div class="mb-3">  
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control form-control-lg text-white bg-gray-800 border-dark" id="email" name="email"
                aria-describedby="emailHelp" required>

                </div>
              <div class="mb-3">
                <label for="product" class="form-label">Product</label>
                <select id="product" name="product" aria-label="Default select example"
                  class="form-control form-control-lg text-white bg-gray-800 border-dark" required>
                  <option selected disabled>Select</option>
                  <option value="1"  <?php if ($_GET['product'] === '1') echo 'selected'; ?>>Website</option>
                  <option value="2"  <?php if ($_GET['product'] === '2') echo 'selected'; ?>>Web Application</option>
                  <option value="3"  <?php if ($_GET['product'] === '3') echo 'selected'; ?>>Logo Design</option>
                  <option value="4"  <?php if ($_GET['product'] === '4') echo 'selected'; ?>>Mobile App (Android)</option>
                </select>
              </div>
          
              <div class="mb-3 hidden" id="WebsiteType">
                <label for="WebsiteType" class="form-label">Website Type</label>
                <select id="websiteTypeSelect" name="WebsiteType" aria-label="Default select example"
                  class="form-control form-control-lg text-white bg-gray-800 border-dark">
                  <option selected disabled>Select</option>
                  <option value="1">E-commerce store</option>
                  <option value="2">Company website</option>
                  <option value="3">Government/Political Organization</option>
                  <option value="4">Personal/Blog</option>
                  <option value="5">Other</option>
                </select>
              </div>
          
              <div class="mb-3 hidden" id="webAppType">
                <label for="webAppType" class="form-label">Web App Type</label>
                <select id="webAppTypeSelect" name="webAppType" aria-label="Default select example"
                  class="form-control form-control-lg text-white bg-gray-800 border-dark">
                  <option selected disabled>Select</option>
                  <option value="1">HR/Employee Management System</option>
                  <option value="2">Letter/Case Management System</option>
                  <option value="3">Project Monitoring Dashboard</option>
                  <option value="4">Product/Inventory Management</option>
                  <option value="5">Other</option>
                </select>
              </div>
          
              <div class="mb-3 hidden" id="BMLPay">
                <label class="form-label">BML Payment Gateway Integrated</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="BMLPay" id="BMLPay1" checked>
                  <label class="form-check-label" for="BMLPay1">No</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="BMLPay" id="BMLPay2">
                  <label class="form-check-label" for="BMLPay2">Yes</label>
                </div>
              </div>
          
              <div class="mb-3 hidden" id="frameworkCMS">
                <label for="frameworkCMS" class="form-label">Framework/CMS</label>
                <select id="frameworkCMSSelect" name="frameworkCMS" aria-label="Default select example"
                  class="form-control form-control-lg text-white bg-gray-800 border-dark">
                  <option selected disabled>Select</option>
                  <option value="1" id="WPOption">Wordpress (low cost)</option>
                  <option value="2">Laravel</option>
                  <option value="3">Vanilla (Plain)</option>
                  <option value="4" disabled>React JS (coming soon)</option>
                </select>
              </div>
          
              <div class="mb-3">
                <label for="message" class="form-label" required>Details</label>
                <textarea rows="3" class="form-control form-control-lg text-white bg-gray-800 border-dark" id="message"
                  name="message"></textarea>
              </div>
              <div class="g-recaptcha" data-sitekey="6LdEDt4nAAAAACFEgiA1Te800q8TGpoSll0lfYOJ" data-callback="onSubmit" data-size="invisible"></div>
              <input type="submit" value="Submit" class="btn btn-white btn-xl mb-4">
            </div>
          </form>

        </main>
      </div>

      <div class="col-12 col-md-5 col-lg-6 col-xl-7 gradient"></div>

    </div>

  </div>
  <script>
document.addEventListener("DOMContentLoaded", function () {
    const productSelect = document.getElementById("product");
    const websiteType = document.getElementById("WebsiteType");
    const webAppType = document.getElementById("webAppType");
    const bmlPay = document.getElementById("BMLPay");
    const frameworkCMS = document.getElementById("frameworkCMS");
    const WPOption = document.getElementById("WPOption");

    // Function to get query parameters from URL
    function getQueryParam(parameter) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(parameter);
    }

    // Set selected option based on "product" query parameter
    const selectedProduct = getQueryParam("product");
    if (selectedProduct === "1") {
        productSelect.value = "1"; // Set the dropdown option value to match "Website"
        websiteType.classList.remove("hidden");
        bmlPay.classList.remove("hidden");
        frameworkCMS.classList.remove("hidden");
    } else if (selectedProduct === "2") {
        productSelect.value = "2"; // Set the dropdown option value to match "Web Application"
        webAppType.classList.remove("hidden");
        frameworkCMS.classList.remove("hidden");
    }

    // Add event listener to handle further changes
    productSelect.addEventListener("change", function () {
        const selectedOption = productSelect.options[productSelect.selectedIndex].value;

        // Reset visibility for all fields
        websiteType.classList.add("hidden");
        webAppType.classList.add("hidden");
        bmlPay.classList.add("hidden");
        frameworkCMS.classList.add("hidden");

        if (selectedOption === "2") { // Web Application selected
            WPOption.disabled = true;
        } else {
            WPOption.disabled = false;
        }
        if (selectedOption === "1") { // Website selected
            websiteType.classList.remove("hidden");
            bmlPay.classList.remove("hidden");
            frameworkCMS.classList.remove("hidden");
        } else if (selectedOption === "2") { // Web Application selected
            webAppType.classList.remove("hidden");
            frameworkCMS.classList.remove("hidden");
        }
        // Add similar conditions for other options
    });
});
    </script>
</body>

</html>