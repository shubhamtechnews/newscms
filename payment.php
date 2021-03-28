<?php
    include "admin/config.php";
    $api_key = "rzp_live_YsheTwbnXL40bM";
?>


<form action="<?php echo $hostname.'/success.php' ?>" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key= "<?php echo $api_key ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="300" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'order'.rand(10,100) ?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="News World 24"
    data-description="Startup for news website"
    data-image="https://images.unsplash.com/photo-1572949645841-094f3a9c4c94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
    data-prefill.name="Roopam Pandey"
    data-prefill.email="roopampandey18@gmail.com"
    data-theme.color="#ad1eff"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style>
    .razorpay-payment-button{
        display: none;
    }
</style>
<script>
    window.onload = function(){
        document.querySelector('.razorpay-payment-button').click();
    }
</script>