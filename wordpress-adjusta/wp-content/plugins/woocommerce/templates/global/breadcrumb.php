<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {

	echo $wrap_before;

	foreach ( $breadcrumb as $key => $crumb ) {

		echo $before;

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		} else {
			echo esc_html( $crumb[0] );
		}

		echo $after;

		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			echo $delimiter;
		}

	}

	echo $wrap_after;

}


<strong>Ball Jointed A-Justa-Foot™ (Mild Steel) 20 Series variations table:</strong>
<table>
   <thead>
      <tr>
         <td>Part No.</td>
         <td>A<br/><small>Base diameter</small></td>
         <td>B<br/><small>Thread height</small></td>
		 <td>C<br/><small>Thread size</small></td>
         <td>D<br/><small>Total height</small></td>
         <td>Rating</td>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>20/40/M8/60</td>
         <td>40</td>
         <td>60</td>
         <td>M8</td>
         <td>113</td>
         <td>350kg</td>
      </tr>
      <tr>
         <td>20/40/M8/35</td>
         <td>40</td>
         <td>35</td>
         <td>M8</td>
         <td>88</td>
         <td>350kg</td>
      </tr>
      <tr>
         <td>20/40/M10/60</td>
         <td>40</td>
         <td>60</td>
         <td>M10</td>
		 <td>118</td>
         <td>500kg</td>
      </tr>
      <tr>
         <td>20/40/M10/35</td>
         <td>40</td>
         <td>35</td>
         <td>M10</td>
		 <td>88</td>
         <td>500kg</td>
      </tr>
      <tr>
         <td>20/60/M12/65</td>
         <td>60</td>
         <td>65</td>
         <td>M12</td>
         <td>141</td>
         <td>800kg</td>
      </tr>
      <tr>
         <td>20/60/M16/65</td>
         <td>60</td>
         <td>65</td>
         <td>M16</td>
         <td>141</td>
         <td>1000kg</td>
      </tr>
      <tr>
         <td>20/90/M12/65</td>
         <td>90</td>
         <td>65</td>
         <td>M12</td>
         <td>141</td>
         <td>800kg</td>
      </tr>
      <tr>
         <td>20/90/M16/65</td>
         <td>90</td>
         <td>65</td>
         <td>M16</td>
         <td>141</td>
         <td>1000kg</td>
      </tr>
      <tr>
         <td>20/60/M16/150</td>
         <td>60</td>
         <td>150</td>
         <td>M16</td>
         <td>226</td>
         <td>1000kg</td>
      </tr>
      <tr>
         <td>20/90/M16/150</td>
         <td>90</td>
         <td>150</td>
         <td>M16</td>
         <td>226</td>
         <td>1000kg</td>
      </tr>
      <tr>
         <td>20/60/M20/100</td>
         <td>60</td>
         <td>100</td>
         <td>M20</td>
         <td>176</td>
         <td>1000kg</td>
      </tr>
      <tr>
         <td>20/60/M20/165</td>
         <td>60</td>
         <td>165</td>
         <td>M20</td>
         <td>241</td>
         <td>1000kg</td>
      </tr>
      <tr>
         <td>20/90/M20/100</td>
         <td>90</td>
         <td>100</td>
         <td>M20</td>
         <td>176</td>
         <td>1000kg</td>
      </tr>
      <tr>
         <td>20/90/M20/165</td>
         <td>90</td>
         <td>165</td>
         <td>M20</td>
         <td>241</td>
         <td>1000kg</td>
      </tr>
   </tbody>
</table>