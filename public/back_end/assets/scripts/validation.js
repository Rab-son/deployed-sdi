	// Basic Form
	$( "#send_inquiry" ).validate( {
	    rules: {
	        subject: "required",
	        message: "required",
	        subject: {
	            required: true,
	            minlength: 5
	        },
	        message: {
	            required: true,
	            minlength: 5
	        },
	    },
	    messages: {
	        subject: "Please enter your subject",
	        message: "Please enter a message",
	        subject: {
	            required: "Please enter your subject",
	            minlength: "Your subject must consist of at least 5 characters"
	        },
	        message: {
	            required: "Please enter a message",
	            minlength: "Your message must be at least 5 characters long"
	        },
	    },
	    errorElement: "em",

	    errorPlacement: function ( error, element ) {
	        // Add the `invalid-feedback` class to the error element
	        error.addClass( "invalid-feedback" );
	        if ( element.prop( "type" ) === "checkbox" ) {
	            error.insertAfter(element.next( "label" ));
	        } else {
	            error.insertAfter(element.next(".pmd-textfield-focused"));
	        }
	    },
	    highlight: function ( element, errorClass, validClass ) {
	        $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
	    },
	    unhighlight: function (element, errorClass, validClass) {
	        $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
	    }
	} );