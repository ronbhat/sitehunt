(function () {
    "use strict";
    var REG_FORM;
    var LOGIN_FORM;

    function init() {
        // Initialize variables
        REG_FORM = $('#reg-form');
        LOGIN_FORM = $('#login-form');

        // Bind events
        bindEvents();
    }

    function bindEvents() {
        REG_FORM.submit(registerUser);
        LOGIN_FORM.submit(loginUser);
    }

    /**
     * Function to login the user
     */
    function loginUser(e) {
        e.preventDefault();
        var $this = $(this);
        var formData = $this.serialize();
        console.log(formData);
    }

    /**
     * Function to register the user
     */
    function registerUser(e) {
        e.preventDefault();
        var $this = $(this);
        var formData = $this.serialize();
        console.log("Form Data: ", formData);
        $.ajax({
            url: 'services/reg_process.php',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                if (res.result) {
                    alert('Registered successfully!!');
                    window.location = "bindex.php";
                } else {
                    alert('Some server error occurred!!');
                    console.error(res.msg);
                }
            },
            error: function (err) {
                console.log(err);
                alert('Some network error occurred!!');
            }
        });
    }

    $(document).ready(init);
})();