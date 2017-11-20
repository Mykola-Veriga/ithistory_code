<?php
$terms = array(
	57 => 'Analog Computer',
	58 => 'Ballistic Computer',
	59 => 'Business Computer',
	60 => 'Calculator',
	61 => 'Computer Case',
	62 => 'CPUs',
	63 => 'Data Collection',
	64 => 'Desktop Computer',
	65 => 'Electro-Mechanical Computer',
	66 => 'Electronic Digital Computer',
	67 => 'Handheld Computer',
	68 => 'Home Computer',
	69 => 'Laptop',
	70 => 'Mainframe',
	72 => 'Microcomputer',
	73 => 'Microcontroller',
	74 => 'Microprocessor',
	75 => 'Mid Range Computer',
	76 => 'Monitors',
	77 => 'Motherboard',
	80 => 'Networking and Telecommunications',
	82 => 'Office Equipment',
	83 => 'Other',
	84 => 'PDA',
	85 => 'Peripherals',
	86 => 'Personal Computer',
	87 => 'Portable Computer',
	88 => 'Power Supply Unit (PSU)',
	89 => 'Printer',
	90 => 'Professional Computer',
	91 => 'Projector',
	92 => 'Relay Computer',
	93 => 'Scanner',
	94 => 'Server',
	96 => 'Smartphone',
	97 => 'Sound Card',
	98 => 'Storage',
	99 => 'Super Computer',
	100 => 'Tablet',
	101 => 'Tabulating Equipment',
	102 => 'Terminal',
	103 => 'Video Card',
	104 => 'Video Game',
	105 => 'Workstation',
	);

$new_name_terms = array(
	'Computer - Analog',
	'Computer - Ballistic',
	'Computer - Business',
	'Calculator',
	'Component - Computer Case',
	'CPU',
	'Peripheral - Data Collection',
	'Computer - Desktop',
	'Computer - ElectroMechanical',
	'Computer - Electronic Digital',
	'Handheld - Computer',
	'Computer - Home',
	'Computer - Laptop',
	'Computer - Mainframe',
	'Computer - MicroComputer',
	'Component - Microcontroller',
	'CPU - Microprocessor',
	'Computer - Mid Range',
	'Display - Monitor ',
	'Component - Motherboard',
	'Networking and Telecom',
	'Office Equipment',
	'-OTHER-',
	'Handheld - PDA',
	'Peripheral',
	'Computer - Personal',
	'Computer - Portable',
	'Component - Power Supply',
	'Peripheral - Printer',
	'Computer - Professional',
	'Display - Projector',
	'Computer - Relay',
	'Peripheral - Scanner',
	'Computer - Server',
	'Handheld - Smartphone',
	'Component - Card - Sound',
	'Peripheral - Storage',
	'Computer - SuperComputer',
	'Handheld - Tablet',
	'Computer - Tabulating',
	'Terminal',
	'Component - Card - Video',
	'Video Game',
	'Computer - Workstation',
	);
$new_terms = array_combine($terms, $new_name_terms);

foreach ($new_terms as $old_name => $new_name) {
	$term = taxonomy_get_term_by_name($name, 'software_type');
	$keys_terms[$term->tid] = $term->name;
}
dpm($new_terms);