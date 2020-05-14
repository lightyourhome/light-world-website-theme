<?php

if ( ! function_exists('tfs_get_product_spec_tool_tip') ) :

    /**
    * Returns the tooltip data based on the specification on single product pages
    *
    * @string $spec - the product attribute as a key in the $tool_tips array
    */
    function tfs_get_product_spec_tool_tip( $spec ) {
  
      $tool_tips = array(
  
        /**********************************************
         ******************  FANS  *******************
         *********************************************/
  
        'attribute_pa_air-flow-efficiency'          =>  'The amount of air the fan moves per watt, rated in cubic feet. The higher the airflow efficiency, the more efficient the fan is in terms of power consumption.',
        'attribute_pa_blade-pitch'                  =>  'The angle at the fan\'s blades are set when attached to the fan. The steeper the blade pitch, the more air the fan moves.',
        'attribute_pa_blade-span'                   =>  'The span (length) of the fan\'s individual blades in inches',
        'attribute_pa_blade-sweep'                  =>  'The diameter of the fan when the blades are attached to it in inches',
        'attribute_pa_cfm-cubic-feet-per-minute'    =>  'The amount of air the fan circulates, measured in Cubic Feet Per Minute (CFM)',
        'attribute_pa_fan-airflow'                  =>  'Airflow is measured in Cubic Feet Per Minute (CFM) - a U.S Government-mandated standard. The higher the airflow number, the more air the fan is ciculating.',
        'attribute_pa_fan-airflow-efficiency'       =>  'Airflow is measured in Cubic Feet Per Minute (CFM) - a U.S Government-mandated standard. The higher the airflow number, the more air the fan is ciculating.',
        'attribute_pa_fan-bulb-base'                =>  'The type of light bulbs or lamp the fan uses according to its socket(s)',
        'attribute_pa_fan-control-included'         =>  'Whether or not a control is included with the fan by its manufacturer',
        'attribute_pa_fan-light-kit-included'       =>  'Whether or not a light kit is included with the fan by its manufacturer',
        'attribute_pa_fan-power-usage-watts'        =>  'The amount of power in watts the fan consumes while running as delineated by its manufacturer',
        'attribute_pa_fan-rpm'                      =>  'The amount of revolutions per minute while the fan is on. The higher the RPM, the more airflow the fan has.',
        'attribute_pa_fan-speeds'                   =>  'The speed settings of the fan',
        'attribute_pa_light-kit-included'           =>  'Whether or not a light kit (light that attaches to the fan) is included with the fan by its manufacturer.',
        'attribute_pa_motor-size'                   =>  'The size of the motor included with the fan by its manufacturer',
        'attribute_pa_primary-control-system'       =>  'The primary system that controls the fan included by its manufacturer',
        'attribute_pa_remote-included'              =>  'Whether or not a remote that controls the fan is included by the manufacturer',
        'attribute_pa_reverse-motion-capable'       =>  'Whether or not the fan is capable of spinning both clockwise and counterclockwise',
        'attribute_pa_reversible-blades'            =>  'Whether or not the fans blades have reversible finishes',
        'attribute_pa_wall-control-included'        =>  'Whether or not a wall control is included with the fan by its manufacturer',
        'attribute_pa_motor-type'                   =>  'The type of motor used to power the fan. This can be either AC (Alternating Current) or DC (Direct Current)',
  
        /*********************************************
         ************* GENERAL SPECS *****************
         ********************************************/
  
        'weight'                                    =>  'The total weight of the fixture (does not include packaging)',
        'dimensions'                                =>  'The dimensions of the fixture. Length x Width x Height',
        'attribute_pa_adjustable-height'            => "The range of adjustable height of the fixture",
        'attribute_pa_back-plate-dimensions'        =>  'The dimensions of the fixture\'s back plate (inches)',
        'attribute_pa_back-plate-dimensions-inches' =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_back-plate-width-inches'      =>  'The width of the fixture\'s back plate in inches',
        'attribute_pa_back-plate-height-inches'     =>  'The height of the fixture\'s back plate in inches',
        'attribute_pa_backplate-dimensions'         =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_backplate-dimensions-inches'  =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_backplate-height'             =>  'The height of the fixture\'s back plate in inches',
        'attribute_pa_backplate-size'               =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_backplate-width'              =>  'The width of the fixture\'s back plate in inches',
        'attribute_pa_base-backplate'               =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_base-backplate-dimensions'    =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_base-backplate-size'          =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_base-dimensions'              =>  'The dimensions of the fixture\'s back plate in inches',
        'attribute_pa_blade-finish'                 =>  'The finish of the currently selected fan\'s blades (based on the selected finish)',
        'attribute_pa_bulb-included'                =>  'The light bulb(s) included with the fixture by its manufacturer',
        'attribute_pa_bulb-type'                    =>  'The type of the light bulb(s) the fixture uses according to it\'s socket(s)',
        'attribute_pa_bulb-type-alternate'          =>  'The other light bulb type required by the fixture',
        'attribute_pa_bulb-type-primary'            =>  'The primary light bulb type required by the fixture',
        'attribute_pa_bulbs-included'               =>  'Whether or not bulbs are included by the fixture\'s manufacturer. If so, the type included',
        'attribute_pa_canopy-backplate-size'        =>  'The dimensions of the fixture\'s canopy/back plate in inches',
        'attribute_pa_canopy-diameter'              =>  'The diameter of the fixture\'s canopy in inches',
        'attribute_pa_canopy-dimensions'            =>  'The dimensions of the fixture\'s canopy in inches',
        'attribute_pa_canopy-height'                =>  'The height of the fixture\'s canopy in inches',
        'attribute_pa_canopy-size'                  =>  'The dimensions of the fixture\'s canopy in inches',
        'attribute_pa_canopy-width'                 =>  'The width of the fixture\'s canopy in inches',
        'attribute_pa_chain-finish'                 =>  'The finish of the fixture\'s chain',
        'attribute_pa_chain-length'                 =>  'The length of the chain included with the fixture by its manufacturer',
        'attribute_pa_connection-type'              =>  'The type of power connection of the fixture',
        'attribute_pa_control-included'             =>  'Whether or not a control is included with the fan by its manufacturer',
        'attribute_pa_cord-length'                  =>  'The length of the fixture\'s wiring or power cord',
        'attribute_pa_delivered-lumens'                =>  'The total amount of visible light from the fixture. The higher the lumens, the brighter the light will be.',
        'attribute_pa_depth'                        =>  'The length of which the fixture extends from the surface it is attached to in inches',
        'attribute_pa_diameter'                     =>  'The diameter of the fixture (the width from one side to the other) in inches',
        'attribute_pa_dimmable'                     =>  'Whether or not the bulbs included with the fixture by its manufacturer (if applicable) are dimmable',
        'attribute_pa_down-rod-diameter'            =>  'The diameter of the fixture\'s downrod in inches. The down rod hangs the fixture from its canopy',
        'attribute_pa_down-rod-dimensions'          =>  'The dimensions of the fixture\'s downrod in inches. The down rod hangs the fixture from its canopy',
        'attribute_pa_electrical-requirements	'     =>  'The electrical requirements of the fixture',
        'attribute_pa_extension'                    =>  'The length of which the fixture extends from the surface it is attached to in inches',
        'attribute_pa_extension-inches'             =>  'The length of which the fixture extends from the surface it is attached to in inches',
        'attribute_pa_finish'                       =>  'The color finish of the fixture',
        'attribute_pa_fixture-extends'              =>  'The length of which the fixture extends from the surface it is attached to in inches',
        'attribute_pa_flush-mount'                  =>  'Whether or not the fixture is a flush mount or can be converted to one',
        'attribute_pa_glass'                        =>  'The type of or finish of the glass, diffuser, or shade included with the fixture',
        'attribute_pa_glass-description'            =>  'The details of the glass, diffuser or shade included with the fixture',
        'attribute_pa_glass-shade'                  =>  'The type of or finish of the glass, diffuser, or shade included with the fixture',
        'attribute_pa_glass-shade-color'            =>  'The finish or color of the glass, diffuser or shade included with the fixture',
        'attribute_pa_glass-shade-dimension'        =>  'The dimensions of the glass, diffuser or shade included with the fixture in inches',
        'attribute_pa_glass-shade-dimensions'       =>  'The dimensions of the glass, diffuser or shade included with the fixture in inches',
        'attribute_pa_glass-shade-height'           =>  'The height of the glass, diffuser or shade included with the fixture in inches',
        'attribute_pa_glass-shade-material'         =>  'The material glass, diffuser or shade included with the fixture is derived from',
        'attribute_pa_glass-shade-width-bottom'     =>  'The width of the bottom of the glass, diffuser or shade included with the fixture in inches',
        'attribute_pa_glass-shade-width-top'        =>  'The width of the top of the glass, diffuser or shade included with the fixture in inches',
        'attribute_pa_install-direction'            =>  'The direction the fixture can be mounted in - up, down or reversible (both)',
        'attribute_pa_install-glass-up-or-down'     =>  'Whether or not the glass, diffuser(s) or shade(s) can be installed up and down',
        'attribute_pa_integrated-led'               =>  'Whether or not fixture contains an integrated LED Module for its light source',
        'attribute_pa_kelvin-temperature'           =>  'The color temperature of the fixture\'s integrated LED. The higher the Kelvin temperature, the whiter the light will be.',
        'attribute_pa_led-color-temperature'        =>  'The color temperature of the fixture\'s integrated LED rated in Kelvins. The higher the Kelvin temperature, the whiter the light will be.',
        'attribute_pa_led-kelvins'                  =>  'The color temperature of the fixture\'s integrated LED rated in Kelvins. The higher the Kelvin temperature, the whiter the light will be.',
        'attribute_pa_led-lumens'                   =>  'The total amount of visible light from the fixture\'s integrated LED. The higher the lumens, the brighter the light will be.',
        'attribute_pa_led-watts'                    =>  'The wattage of the fixture\'s integrated LED and the amount of power it consumes. An Integrated LED or LED Light Bulb with 10 watts of power is equivalent to a 60W incandescent light bulb.',
        'attribute_pa_light-source'                 =>  'The type of lamp the fixture uses',
        'attribute_pa_low-ceiling-adaptable'       =>  'Whether or not the fixture can be used with low ceilings (lower than 8 feet)',
        'attribute_pa_lumens'                       =>  'The total amount of visible light from the fixture\'s integrated LED. The higher the lumens, the brighter the light will be.',
        'attribute_pa_material'                     =>  'The material(s) the fixture is made from',
        'attribute_pa_materials'                    =>  'The material(s) the fixture is made from',
        'attribute_pa_max-wattage'                  =>  'The maximum wattage light bulb or lamp the fixture can safely handle per socket as delineated by the fixture\'s manufacturer',
        'attribute_pa_max-watts'                    =>  'The maximum wattage light bulb or lamp the fixture can safely handle per socket as delineated by the fixture\'s manufacturer',
        'attribute_pa_maximum-wattage'              =>  'The maximum wattage light bulb or lamp the fixture can safely handle per socket as delineated by the fixture\'s manufacturer',
        'attribute_pa_maximum-wattage-alternate'    =>  'The maximum wattage light bulb or lamp the fixture\'s alternate sockets can safely handle as delineated by the fixture\'s manufacturer',
        'attribute_pa_maximum-wattage-primary'      =>  'The maximum wattage light bulb or lamp the fixture\'s primary sockets can safely handle as delineated by the fixture\'s manufacturer',
        'attribute_pa_mount-up-or-down'             =>  'Whether or not the fixture can be mounted both up or down',
        'attribute_pa_mount-vertical-or-horizontal' =>  'Whether or not the fixture can be mounted both vertically or horizontally',
        'attribute_pa_mountable-up-or-down'         =>  'Whether or not the fixture can be mounted both up or down',
        'attribute_pa_mounting-procedure'           =>  'The mounting kit included with the fixture by its manufacturer',
        'attribute_pa_number-of-blades'             =>  'The number of blades the fan uses',
        'attribute_pa_number-of-bulbs'              =>  'The number of light bulbs or lamps the fixture uses based on the number of sockets it has',
        'attribute_pa_number-of-bulbs-alternate'    =>  'The number of alternate light bulbs or lamps the fixture\'s uses based on the number of alternate sockets it has. This specification only applies to products that have two different types of sockets.',
        'attribute_pa_number-of-bulbs-and-type'     =>  'The number of light bulbs or lamps the fixture uses and the type based on its sockets',
        'attribute_pa_number-of-bulbs-primary'      =>  'The number of number light bulbs or lamps the fixture\'s uses based on the number of primary sockets it has',
        'attribute_pa_overall-height'               =>  'The overall height of the fixture', 
        'attribute_pa_safety-rated'                 =>  'The electrical safety rating of the fixture. This determines where the fixture can be mounted safely. Dry is for dry locations only, Damp is for locations such as a bathroom, and Wet is safe for outdoor use.',
        'attribute_pa_safety-rating'                =>  'The electrical safety rating of the fixture. This determines where the fixture can be mounted safely. Dry is for dry locations only, Damp is for locations such as a bathroom, and Wet is safe for outdoor use.',
        'attribute_pa_shade'                        =>  'The type of or finish of the glass, diffuser, or shade included with the fixture', 
        'attribute_pa_shade-diameter'               =>  'The diameter of the glass, diffuser, or shade included with the fixture in inches',
        'attribute_pa_shade-dimensions'             =>  'The dimensions of the glass, diffuser, or shade included with the fixture in inches',
        'attribute_pa_shade-glass'                  =>  'The type of or finish of the glass, diffuser, or shade included with the fixture',
        'attribute_pa_shade-glass-description'      =>  'The type of or finish of the glass, diffuser, or shade included with the fixture',
        'attribute_pa_shade-height'                 =>  'The height of the glass, diffuser, or shade included with the fixture in inches',
        'attribute_pa_shade-material'               =>  'The material the glass, diffuser, or shade included with the fixture is derived from',
        'attribute_pa_size'                         =>  'The dimensions of the fixture in inches',
        'attribute_pa_slope-ceiling-kit'            =>  'Whether or not a sloped ceiling mounting kit is included witht he fixture by its manufacturer',
        'attribute_pa_slope-ceiling-kit-included'   =>  'Whether or not a sloped ceiling mounting kit is included witht he fixture by its manufacturer',
        'attribute_pa_sloped-ceiling-compatible	'   =>  'Whether or not the canopy included with the fixture is compatible with a sloped ceiling',
        'attribute_pa_socket-type'                  =>  'The type of sockets the fixture has',
        'attribute_pa_style'                        =>  'The design style of the fixture',
        'attribute_pa_suitable-for-damp-locations'  =>  'Whether or not it is safe to the mount the fixture in damp locations according to its electrical components',
        'attribute_pa_suitable-for-dry-locations'   =>  'Whether or not it is safe to the mount the fixture in dry locations according to its electrical components',
        'attribute_pa_suitable-for-wet-locations'   =>  'Whether or not it is safe to the mount the fixture in wet locations according to its electrical components',
        'attribute_pa_switch'                       =>  'The type of switch included with the fixture',
        'attribute_pa_switch-type'                  =>  'The type of switch included with the fixture',
        'attribute_pa_voltage'                      =>  'The power voltage of the fixture',
        'attribute_pa_wattage'                      =>  'The maximum wattage light bulb or lamp the fixture can safely handle per socket as delineated by the fixture\'s manufacturer',
        'attribute_pa_wire-color'                   =>  'The color of the power cord or wire included with the fixture by its manufacturer',
        'attribute_pa_wire-cord-length'             =>  'The length of the wiring or power cord included with the fixture by its manufacturer',
        'attribute_pa_wire-length'                  =>  'The length of the wiring or power cord included with the fixture by its manufacturer'
  
      );
  
      if ( array_key_exists( $spec, $tool_tips  ) ) {
  
        return $tool_tips[$spec];
  
      } else {
  
        return false;
  
      }
  
    }
  
  endif;