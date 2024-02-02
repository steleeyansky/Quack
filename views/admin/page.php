<div id="quackform">
    <h1><?php _e('Form Entries', QUACK_FORM_TEXTDOMAIN); ?></h1>

    <div class="quackform-entries-table-wrapper">
        <?php if (!empty($formEntries)) : ?>
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th><?php _e('Email', QUACK_FORM_TEXTDOMAIN); ?></th>
                        <th><?php _e('First Name', QUACK_FORM_TEXTDOMAIN); ?></th>
                        <th><?php _e('Last Name', QUACK_FORM_TEXTDOMAIN); ?></th>
                        <th><?php _e('Date of Birth', QUACK_FORM_TEXTDOMAIN); ?></th>
                        <th><?php _e('Phone Number', QUACK_FORM_TEXTDOMAIN); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($formEntries as $entry) : ?>
                       
                        <tr>
                            <td><?php echo esc_html($entry['email']); ?></td>
                            <td><?php echo esc_html($entry['first_name']); ?></td>
                            <td><?php echo esc_html($entry['last_name']); ?></td>
                            <td><?php echo esc_html($entry['date_of_birth']); ?></td>
                            <td><?php echo esc_html($entry['phone_number']); ?></td>
                            <!-- Add other columns if needed -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <h3><?php _e('No entries found', QUACK_FORM_TEXTDOMAIN); ?></h3>
        <?php endif; ?>
    </div><!-- /.quackform-entries-table-wrapper -->
</div><!-- /#quackform -->
