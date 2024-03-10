
<!-- footer script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script src="./assets/js/custom.js"></script>
<script src="{{ asset("js/webSiteJs.js") }}"></script>
<!-- Initialize Swiper -->
 <script>

$("#contactUsForm").on("submit", function() {
        var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        full_number = Number(full_number);
        //$("#phone_number").val(full_number);
        typeof(full_number);
        $("#country_code_id").val("+" + phone_number.getSelectedCountryData().dialCode);
        var form = new FormData(this);

        $("#submitButton").attr("disable", true);
        $.ajax({
            type: 'post',
            url: '{{ route('saveContactUsDetails') }}',
            data: form,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.status) {
                    successMessage(response.message, true);
                } else {
                    errorMessage(response.message ?? "Something went wrong.");
                    $("#submitButton").attr("disable", false);
                    refreshCapthca('captcha_img_id', 'captcha');
                }
            },
            failure: function(response) {
                errorMessage(response.message ?? "Something went wrong.");
                $("#submitButton").attr("disable", false);
                refreshCapthca('captcha_img_id', 'captcha');
            },
            error: function(response) {
                errorMessage(response.message ?? "Something went wrong.");
                $("#submitButton").attr("disable", false);
                refreshCapthca('captcha_img_id', 'captcha');
            }
        });
    });
    var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
        separateDialCode: true,
        preferredCountries: ["in"],
        hiddenInput: "full",
        utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });
 </script>