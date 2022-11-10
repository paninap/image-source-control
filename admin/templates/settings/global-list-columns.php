<?php
/**
 * Render the Included Columns option for the Global List
 *
 * @var string|bool $included_columns value of the "global_list_included_columns" option.
 * @var array $included_columns_options information about the available options.
 */
?>
<p class="description"><?php esc_html_e( 'Choose which data to include in the Global list.', 'image-source-control-isc' ); ?></p>
<div>
	<?php
	foreach ( $included_columns_options as $key => $_options ) :
		$is_pro = ! empty( $_options['is_pro'] );
		?>
		<label>
			<input type="checkbox" name="isc_options[global_list_included_columns][]" value="<?php echo esc_attr( $key ); ?>"
				<?php checked( $included_columns === array() || in_array( $key, $included_columns, true ) ); ?>
				<?php echo $is_pro ? 'disabled="disabled" class="is-pro"' : ''; ?>
			/>
			<?php if ( $is_pro ) : echo ISC_Admin::get_pro_link( 'global-list-' . sanitize_title( $_options['label'] ) ); endif; ?>
			<?php echo isset( $_options['label'] ) ? esc_html( $_options['label'] ) : ''; ?>
		</label><br/>
	<?php endforeach; ?>
</div>
