<form id="quackform-form" action="" method="post" novalidate>
    <div class="form-field">
        <label for="quackform-email">
            <?php _e('Email:', QUACK_FORM_TEXTDOMAIN); ?>
        </label>

        <input type="email" class="form-input" name="email" required>

        <span class="error-message" style="display:none;"></span>
    </div>
    <div class="form-field">
        <label for="quackform-first-name">
            <?php _e('First Name:', QUACK_FORM_TEXTDOMAIN); ?>
        </label>

        <input type="text" class="form-input" name="first_name" required>

        <span class="error-message" style="display:none;"></span>
    </div>
    <div class="form-field">
        <label for="quackform-last-name">
            <?php _e('Last Name:', QUACK_FORM_TEXTDOMAIN); ?>
        </label>

        <input type="text" class="form-input" id="quackform-last-name" name="last_name" required>

        <span class="error-message" style="display:none;"></span>
    </div>
    <div class="form-field">
        <label for="quackform-date-of-birth">
            <?php _e('Date of Birth:', QUACK_FORM_TEXTDOMAIN); ?>
        </label>

        <input type="date" class="form-input" id="quackform-date-of-birth" name="date_of_birth" required>

        <span class="error-message" style="display:none;"></span>
    </div>
    <div class="form-field">
        <label for="quackform-phone-number">
            <?php _e('Phone Number:', QUACK_FORM_TEXTDOMAIN); ?>
        </label>

        <input type="tel" class="form-input" id="quackform-phone-number" name="phone_number" required>

        <span class="error-message" style="display:none;"></span>
    </div>

    <div class="form-field">
        <input type="submit" class="form-input" value="Submit">
    </div>
</form>