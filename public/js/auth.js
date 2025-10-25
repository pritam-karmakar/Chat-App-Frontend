
// $('.digit-group').find('input').each(function() {
// 	$(this).attr('maxlength', 1);
// 	$(this).on('keyup', function(e) {
// 		var parent = $($(this).parent());
		
// 		if(e.keyCode === 8 || e.keyCode === 37) {
// 			var prev = parent.find('input#' + $(this).data('previous'));
			
// 			if(prev.length) {
// 				$(prev).select();
// 			}
// 		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
// 			var next = parent.find('input#' + $(this).data('next'));
			
// 			if(next.length) {
// 				$(next).select();
// 			} else {
// 				if(parent.data('autosubmit')) {
// 					parent.submit();
// 				}
// 			}
// 		}
// 	});
// });


$('.digit-group').find('input').each(function() {
    $(this).attr('maxlength', 1);

    $(this).on('keydown', function(e) {
        // Allow: Backspace, Tab, Delete, Arrow keys
        if (
            e.keyCode === 8 ||  // backspace
            e.keyCode === 9 ||  // tab
            e.keyCode === 46 || // delete
            (e.keyCode >= 37 && e.keyCode <= 40) // arrow keys
        ) {
            return; // allow
        }

        // Allow only number keys (0–9) and numpad (96–105)
        if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            return; // allow numbers
        }

        // Otherwise, block the key
        e.preventDefault();
    });

    $(this).on('keyup', function(e) {
        var parent = $($(this).parent());

        if (e.keyCode === 8 || e.keyCode === 37) {
            // Move to previous input
            var prev = parent.find('input#' + $(this).data('previous'));
            if (prev.length) {
                $(prev).focus();
            }
        } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
            // Move to next input
            var next = parent.find('input#' + $(this).data('next'));
            if (next.length) {
                $(next).focus();
            } else if (parent.data('autosubmit')) {
                parent.submit();
            }
        }
    });
});
