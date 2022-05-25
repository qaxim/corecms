<div class="hero df aic jcc h100">
<div class="container">
<div class="row">
<div class="col-2 x-none"></div>
<div class="col-8 x-w100">
<h2 class="box_heading">
<a class="brand df jcc aic" href="<?=root?>" style="gap:10px">
<img src="<?=root?>assets/img/icon.png" alt="" style="max-width:32px">
<p><strong><?=appname?></strong></p>
</a>
</h2>
<form onSubmit="loading();" autocomplete="off" class="box w100" method="post" action="<?=root?>signup">

<div class="row signup">

    <div class="col-6" style="padding-right: 0.3rem;">
        <label class="filled w100">
        <input required type="text" name="first_name" placeholder=" " value="<?php if ($dev == 1){ echo "Qasim"; } ?>">
        <span>First Name</span>
        </label>
    </div>

    <div class="col-6" style="padding-left: 0.3rem;">
        <label class="filled w100">
        <input required type="text" name="last_name" placeholder=" " value="<?php if ($dev == 1){ echo "Hussain"; } ?>">
        <span>Last Name</span>
        </label>
    </div>

</div>

<label class="filled w100">
    <input required type="email" name="email" placeholder=" " value="<?php if ($dev == 1){ echo "info@khudcar.com"; } ?>">
    <span>Email Address</span>
</label>

<label class="w100">

<span style="font-size: 12px; color: #5a6778; position: absolute; padding: 10px 15px; z-index: 1;height: 1px;">Phone Number</span>
<input required id="phone" name="mobile" type="number" class="w100">
<!-- <input required data-inputmask="'mask': '99999999999'"  type="text" name="mobile" placeholder=" " value="<?php if ($dev == 1){ echo "03311442244"; } ?>">  -->
</label>

<label class="filled w100 mb-1">
    <input required type="password" name="password" placeholder=" " value="<?php if ($dev == 1){ echo "03311442244"; } ?>">
    <span>Password</span>
</label>

<label class="filled w100" style="display:none">
    <input type="text" name="nic" placeholder=" " value="<?php if ($dev == 1){ echo "123456789"; } ?>">
    <span>NIC Number</span>
</label>

<!-- <label class="filled w100">
<select  required id="city" name="city" class="location" style="padding-left:10px">

<?php if(isset($search_location)){echo $search_location;}?>

<?php
if (isset($locations)){
sort ( $locations );
foreach ($locations as $l){ ?>
<option value="<?=strtolower($l->id)?>"> <?=$l->city_name?></option>
<?php }} ?>
<select>
<dev class="placeholder">City From</dev>
<span></span>
</label> -->

<div class="g-recaptcha" data-sitekey="6LdX3JoUAAAAAFCG5tm0MFJaCF3LKxUN4pVusJIF" data-callback="correctCaptcha"></div>

<button id="button" class="btn btn-success w100 h50" type="submit" disabled="disabled">Signup</button>

<p class="mt-1 mb-0">By signing up I agree to all the <a target="_blank" href="<?=root?>terms-of-use"><strong>Terms and Conditions</strong></a></p>
<progress id="loading" class="linear mt-1"></progress>

</form>
</div>
</div>
<p class="tc fs1">Already have account? <a href="<?=root?>login"><strong>Login</strong></a></p>

</div>

</div>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
if (location.pathname.substring(1) == 'contact/success'){ $(".alert-success").removeClass("d-none"); };
var correctCaptcha = function(response) { // alert(response);
$('#button').prop('disabled', false); };

var RecaptchaOptions = {
    theme : 'clean',
    custom_theme_widget: 'recaptcha_widget'
 };

</script>

<!-- <script src="<?=root?>assets/js/jquery.inputmask.bundle.js"></script>
<script>$(":input").inputmask();</script> -->

<style>
    header,footer,.pages_links{display:none}
    body{background:var(--theme-bg)}
    form p { color: #000 !important; font-size: 1rem !important; }

    .g-recaptcha{0
    margin-top:-10px;
    transform:scale(0.90);
    -webkit-transform:scale(0.90);
    transform-origin:0 0;
    -webkit-transform-origin:0 0;
    }

</style>

<script src="<?=root?>public/assets/js/tellinput.js"></script>

  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      formatOnDisplay: false,

      geoIpLookup: function(callback) {
        $.get("https://ipwhois.app/json/", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country_code) ? resp.country_code : "";
          callback(countryCode);
        //   console.log(countryCode);
        });
      },
      hiddenInput: "no",
      initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    //   placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      // utilsScript: "build/js/utils.js",
    });
  </script>

<script>
    <?php
    $url = explode('/', $_GET['url']);
    if (end($url) == "failed") { ?>

    vt.error("Please enter correct signup details",{
    title:"Mobile or Email Already Exists",
    position: "top-center",
    callback: function (){ //
    } })

    <?php } ?>
</script>