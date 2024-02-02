(function ($) {
    $(document).ready(function () {
        $('#quackform-form').on('submit', function (e) {
            e.preventDefault();
            var isFormValid = true;

            $(this).find('.form-input[required]').each(function () {
                var $field = $(this);
                var fieldName = $field.attr('name').replace(/_/g, ' ');
                fieldName = fieldName.charAt(0).toUpperCase() + fieldName.slice(1);
                var fieldValue = $field.val().trim();

                if (!fieldValue) {
                    showError($field, 'The ' + fieldName + ' is mandatory in order to submit the form.');
                    isFormValid = false;
                } else if (!isValidField($field)) {
                    showError($field, 'The ' + fieldName + ' is not valid.');
                    isFormValid = false;
                } else {

                    hideError($field);
                }
            });

            if (isFormValid) {
                this.submit();
            }
        });


        $('.form-input').on('input', function () {
            hideError($(this));
        });

        function showError($element, message) {
            $element.siblings('.error-message').text(message).show();
        }

        function hideError($element) {
            $element.siblings('.error-message').hide();
        }

        function isValidField($field) {
            var fieldType = $field.attr('type');
            switch (fieldType) {
                case 'email':
                    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($field.val());
                case 'tel':
                    return /^\+?\d{10,15}$/.test($field.val()); //
                case 'text':
                    return /^[a-zA-Z\s]+$/.test($field.val());
                default:
                    return true;
            }
        }
    });
})(jQuery);
