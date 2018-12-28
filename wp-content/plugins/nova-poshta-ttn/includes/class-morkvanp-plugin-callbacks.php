<?php
/**
 * Registering callbacks for settings admin page
 *
 * @link        http://morkva.co.ua/
 * @since       1.0.0
 *
 * @package     morkvanp-plugin
 * @subpackage  morkvanp-plugin/includes
 */
/**
 * Registering callbacks for settings admin page
 *
 *
 * @package    morkvanp-plugin
 * @subpackage morkvanp-plugin/includes
 * @author     MORKVA <hello@morkva.co.ua>
 */
 class MNP_Plugin_Callbacks {
 	public function adminDashboard()
	{
		return require_once( "$this->plugin_path/templates/admin.php" );
	}

	public function adminInvoice()
	{
		return require_once( "$this->plugin_path/templates/invoice.php" );
	}

	public function adminSettings()
	{
		return require_once( "$this->plugin_path/templates/taxonomy.php" );
	}

	public function morkvanpOptionsGroup( $input )
	{
		return $input;
	}

	public function morkvanpAdminSection()
	{
		echo 'Введіть свій API ключ для початку щоб плагін міг працювати.';
	}

	public function morkvanpTextExample()
	{
		$value = esc_attr( get_option( 'text_example' ) );
		echo '<input type="text" class="regular-text" name="text_example" value="' . $value . '" placeholder="API ключ">';
	}

	public function morkvanpSelectCity()
	{
		$value1 = esc_attr( get_option( 'city' ) );
		echo '<input type="text" class="regular-text" name="city" list="cities" value="' . $value1 . '" placeholder="Київ">';
				echo '
			<datalist id="cities">
				<option>Київ</option>
				<option>Львів</option>
				<option>Івано-Франківськ</option>
				<option>Вінниця</option>
				<option>Дніпро</option>
				<option>Одеса</option>
				<option>Харків</option>
				<option>Херсон</option>
				<option>Донецьк</option>
				<option>Кривий Ріг</option>
				<option>Луцьк</option>
				<option>Житомир</option>
				<option>Чернігів</option>
				<option>Кам\'янське</option>
				<option>Чернівці</option>
				<option>Ужгород</option>
				<option>Суми</option>
			</datalist>
		';
	}

	public function morkvanpSelectRegion() {
		$region = esc_attr( get_option( 'region' ) );
		echo '<input type="text" class="regular-text" name="region" value="' . $region . '" placeholder="Київська">';
	}

	public function morkvanpActivate() {
		$activate = get_option( 'activate_plugin' );
		$checked = $activate;
		$current = 1;
		$echo = false;
		echo '<input type="checkbox" class="regular-text" name="activate_plugin" value="1" list="cities" ' . checked($checked, $current, $echo) . ' />';
	}

	public function morkvanpPhone() {
		$phone = esc_attr( get_option( 'phone' ) );
		echo '<input type="text" class="regular-text" name="phone" value="' . $phone . '" placeholder="380901234567">';
	}

	public function morkvanpNames() {
		$names = esc_attr( get_option( 'names' ) );
		echo '<input type="text" class="regular-text" name="names" value="' . $names . '" placeholder="Петронко Петро Петрович">';
	}

	public function morkvanpFlat() {
		$flat = esc_attr( get_option( 'flat' ) );
		echo '<input type="text" class="regular-text" name="flat" value="' . $flat . '" placeholder="номер">';
	}

	public function morkvanpWarehouseAddress()
	{
		$warehouse = esc_attr( get_option( 'warehouse' ) );
		echo '<input type="text" class="regular-text" name="warehouse" value="' . $warehouse . '" placeholder="Франка 14">';
	}
 }