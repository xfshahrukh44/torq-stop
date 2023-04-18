<?php

namespace App\Http\Controllers;

use App\ProductCategoryField;
use Illuminate\Http\Request;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Category\Models\Category;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Product\Models\Product;
use Webkul\Product\Repositories\ProductRepository;

class TempController extends Controller
{
    protected CategoryRepository $categoryRepository;
    protected ProductRepository $productRepository;

    public function __construct(CategoryRepository $categoryRepository, ProductRepository $productRepository) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index (Request $request)
    {
        ini_set('max_execution_time', '0');
        //rotors category
        $rotors_custom_fields_titles = [
            'Year',
            'Brake System',
            'Vehicle Type',
            'Application',
            'Bolt Hardware Included',
            'Rotor Type',
            'Rotor Weight (lb)',
            'Rotor Weight (kg)',
            'Overall Diameter (in)',
            'Overall Diameter (mm)',
            'Disc Thickness (in)',
            'Disc Thickness (mm)',
            'Minimum Thickness (in)',
            'Minimum Thickness (mm)',
            'Overall Depth (in)',
            'Overall Depth (mm)',
            'Pilot Diameter (in)',
            'Pilot Diameter (imm)',
            'Bolt Circle Diameter (in)',
            'Bolt Circle Diameter (mm)',
            'Bolt Hole Diameter',
            'Bolt Hole Count',
            'ABS',
            'Availability Status',
            'UPC Code',
            'Carton Weight (lb)',
            'Carton Length (in)',
            'Carton Width (in)',
            'Carton Height (in)',
            'Items per Case',
            'Minimum Order QTY',
            'PCS/ Pallet',
            'Country of Origin',
            'HTS Code',
            'VMRS Code',
            'Warranty',
        ];
        $rotors_custom_fields_names = [
            'year',
            'brake_system',
            'vehicle_type',
            'application',
            'bolt_hardware_included',
            'rotor_type',
            'rotor_weight_lb',
            'rotor_weight_kg',
            'overall_diameter_in',
            'overall_diameter_mm',
            'disk_thickness_in',
            'disk_thickness_mm',
            'minimum_thickness_in',
            'minimum_thickness_mm',
            'overall_depth_in',
            'overall_depth_mm',
            'pilot_diameter_in',
            'pilot_diameter_mm',
            'bolt_circle_diameter_in',
            'bolt_circle_diameter_mm',
            'bolt_hole_diameter',
            'bolt_hole_count',
            'abs',
            'availability_status',
            'upc_code',
            'carton_weight_lb',
            'carton_length_in',
            'carton_width_in',
            'carton_height_in',
            'items_per_case',
            'minimum_order_qty',
            'pcs_per_pallet',
            'country_of_origin',
            'hts_code',
            'vmrs_code',
            'warranty',
        ];
        $rotors_custom_fields_types = [
            'Text',
            'Text',
            'Selection',
            'Text',
            'Selection',
            'Selection',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Text',
            'Number',
            'Selection',
            'Selection',
            'Text',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Text',
            'Text',
            'Text',
            'Selection',
        ];
        $rotors_custom_fields_is_required = [
            'Yes',
            'Yes',
            'Yes',
            'No',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'No',
            'Yes',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
        ];
        $rotors_custom_fields_selection_options = [
            '',
            '',
            'Transit / Coach, Truck / Trailer, Truck, Trailer',
            '',
            'Yes, No',
            'Hat, U-Shaped, Flat',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            'No, Cast-In, Bolt-On',
            'Active, In Development',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '12 Months / Unlimited',
        ];
        $rotors_category_data = [
            "locale" => "all",
            "name" => "Rotors",
            "status" => "1",
            "position" => "1",
            "display_mode" => "products_and_description",
            "description" => "<p>Rotors</p>",
            "image" => [
                'image_1' => ''
            ],
            "category_icon_path" => [
                'image_1' => ''
            ],
            "attributes" => [],
            "meta_title" => "",
            "slug" => "rotors",
            "meta_description" => "",
            "meta_keywords" => "",
            "custom_fields_titles" => $rotors_custom_fields_titles,
            "custom_fields_names" => $rotors_custom_fields_names,
            "custom_fields_types" => $rotors_custom_fields_types,
            "custom_fields_is_required" => $rotors_custom_fields_is_required,
            "custom_fields_selection_options" => $rotors_custom_fields_selection_options,
        ];

        $rotors_category = $this->categoryRepository->create($rotors_category_data);
        //------------------------------------------------------------------------------------------------------------------------

        //calipers category
        $calipers_custom_fields_titles = [
            'Line',
            'Year',
            'Make',
            'Caliper Model',
            'Vehicle Type',
            'Application',
            'Pad Shape',
            'Brake Chamber Mounting Angle',
            'Bracket Mounting Type',
            'Position',
            'ADJUSTMENT DESIGN',
            'PAD RETAINER STYLE',
            '# OF BOLT HOLES IN BRACKET',
            'BOLT HOLE SIZE',
            'BOLT HOLE SPACING',
            'Caliper Color',
            'Caliper Finish',
            'Hardware Included',
            'Pads included',
            'Availability Status',
            'UPC Code',
            'Carton Weight (lb)',
            'Carton Length (in)',
            'Carton Width (in)',
            'Carton Height (in)',
            'Items per Case',
            'Minimum Order QTY',
            'PCS/ Pallet',
            'Country of Origin',
            'HTS Code',
            'VMRS Code',
            'Warranty'
        ];
        $calipers_custom_fields_names = [
            'line',
            'year',
            'make',
            'caliper_model',
            'vehicle_type',
            'application',
            'pad_shape',
            'brake_chamber_mounting_angle',
            'bracket_mounting_type',
            'position',
            'adjustment_design',
            'pad_retainer_style',
            'number_of_bolt_holes_in_bracket',
            'bolt_hole_size',
            'bolt_hole_spacing',
            'caliper_color',
            'caliper_finish',
            'hardware_included',
            'pads_included',
            'availability_status',
            'upc_code',
            'carton_weight_lb',
            'carton_length_in',
            'carton_width_in',
            'carton_height_in',
            'items_per_case',
            'minimum_order_qty',
            'pcs_per_pallet',
            'country_of_origin',
            'hts_code',
            'vmrs_code',
            'warranty',
        ];
        $calipers_custom_fields_types = [
            'Text',
            'Text',
            'Text',
            'Text',
            'Selection',
            'Text',
            'Text',
            'Text',
            'Selection',
            'Selection',
            'Selection',
            'Selection',
            'Number',
            'Text',
            'Text',
            'Text',
            'Text',
            'Selection',
            'Selection',
            'Selection',
            'Text',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Text',
            'Text',
            'Text',
            'Selection',
        ];
        $calipers_custom_fields_is_required = [
            'Yes',
            'Yes',
            'Yes',
            'No',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'No',
            'Yes',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
        ];
        $calipers_custom_fields_selection_options = [
            '',
            '',
            '',
            '',
            'Truck, Trailer, Truck / Vocational, Truck / Coach / Vocational, Coach, Truck / Trailer',
            '',
            '',
            '',
            'Axial, Vertical(Radial), Radial',
            'Right, Left',
            'Two Tappets, Pusher Plate',
            'Flat Bar  with Clevis, Rolled Bar, Flat Plate with Bolt',
            '',
            '',
            '',
            '',
            '',
            'Yes, No',
            'Yes, No',
            'Active, In Development',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '12 Months / Unlimited',
        ];
        $calipers_category_data = [
            "locale" => "all",
            "name" => "Calipers",
            "status" => "1",
            "position" => "1",
            "display_mode" => "products_and_description",
            "description" => "<p>Calipers</p>",
            "image" => [
                'image_1' => ''
            ],
            "category_icon_path" => [
                'image_1' => ''
            ],
            "attributes" => [],
            "meta_title" => "",
            "slug" => "calipers",
            "meta_description" => "",
            "meta_keywords" => "",
            "custom_fields_titles" => $calipers_custom_fields_titles,
            "custom_fields_names" => $calipers_custom_fields_names,
            "custom_fields_types" => $calipers_custom_fields_types,
            "custom_fields_is_required" => $calipers_custom_fields_is_required,
            "custom_fields_selection_options" => $calipers_custom_fields_selection_options,
        ];

        $calipers_category = $this->categoryRepository->create($calipers_category_data);
        //------------------------------------------------------------------------------------------------------------------------

        //shoes category
        $shoes_custom_fields_titles = [
            'Rank',
            'Year',
            'FMSI No',
            'New or Relined',
            'Hardware Included',
            'Brake Type',
            'Coating',
            'Friction Code',
            'Drum Diameter',
            'Shoe Width',
            '# of Webs',
            'Availability Status',
            'UPC Code',
            'Items per Case',
            'Minimum Order QTY',
            'Carton Weight (lb)',
            'Carton Length (in)',
            'Carton Width (in)',
            'Carton Height (in)',
            'Items Per Pallet',
            'Country of Origin',
            'HTS Code',
            'VMRS Code',
            'Warranty'
        ];
        $shoes_custom_fields_names = [
            'rank',
            'year',
            'fmsi_number',
            'new_or_relined',
            'hardware_included',
            'brake_type',
            'coating',
            'friction_code',
            'drum_diameter',
            'shoe_width',
            'number_of_webs',
            'availability_status',
            'upc_code',
            'items_per_case',
            'minimum_order_qty',
            'carton_weight_lb',
            'carton_length_in',
            'carton_width_in',
            'carton_height_in',
            'items_per_pallet',
            'country_of_origin',
            'hts_code',
            'vmrs_code',
            'warranty',
        ];
        $shoes_custom_fields_types = [
            'Number',
            'Text',
            'Text',
            'Selection',
            'Selection',
            'Text',
            'Text',
            'Number',
            'Number',
            'Number',
            'Number',
            'Selection',
            'Text',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Text',
            'Text',
            'Text',
            'Selection',
        ];
        $shoes_custom_fields_is_required = [
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'No',
            'Yes',
            'Yes',
            'No',
            'No',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
        ];
        $shoes_custom_fields_selection_options = [
            '',
            '',
            '',
            'New, Relined',
            'Yes, No',
            '',
            '',
            '',
            '',
            '',
            '',
            'Active, In Development',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '12 Months / Unlimited',
        ];
        $shoes_category_data = [
            "locale" => "all",
            "name" => "Shoes",
            "status" => "1",
            "position" => "1",
            "display_mode" => "products_and_description",
            "description" => "<p>Shoes</p>",
            "image" => [
                'image_1' => ''
            ],
            "category_icon_path" => [
                'image_1' => ''
            ],
            "attributes" => [],
            "meta_title" => "",
            "slug" => "shoes",
            "meta_description" => "",
            "meta_keywords" => "",
            "custom_fields_titles" => $shoes_custom_fields_titles,
            "custom_fields_names" => $shoes_custom_fields_names,
            "custom_fields_types" => $shoes_custom_fields_types,
            "custom_fields_is_required" => $shoes_custom_fields_is_required,
            "custom_fields_selection_options" => $shoes_custom_fields_selection_options,
        ];

        $shoes_category = $this->categoryRepository->create($shoes_category_data);
        //------------------------------------------------------------------------------------------------------------------------

        //chambers category
        $chambers_custom_fields_titles = [
            'Year',
            'Brake Type',
            '# OF DIAPHRAGMS',
            'PUSHROD TYPE',
            'Pushrod Thread Size',
            'PORT SHAPE',
            'STROKE (in)',
            'PORT THREAD',
            'FULL STROKE in',
            'FULL STROKE mm',
            'NOTES',
            'Availability Status',
            'UPC Code',
            'ItemWeight (lb)',
            'ItemLength (in)',
            'ItemWidth (in)',
            'ItemHeight (in)',
            'Items per Case',
            'Carton Weight (lb)',
            'Carton Length (in)',
            'Carton Width (in)',
            'Carton Height (in)',
            'Items Per Pallet',
            'Minimum Order QTY',
            'Country of Origin',
            'HTS Code',
            'VMRS Code',
            'Warranty'
        ];
        $chambers_custom_fields_names = [
            'year',
            'brake_type',
            'number_of_diaphragms',
            'pushrod_type',
            'pushrod_thread_size',
            'port_shape',
            'stroke_in',
            'port_thread',
            'fullstroke_in',
            'fullstroke_mm',
            'notes',
            'availability_status',
            'upc_code',
            'item_weight_lb',
            'item_length_in',
            'item_width_in',
            'item_height_in',
            'items_per_case',
            'carton_weight_lb',
            'carton_length_in',
            'carton_width_in',
            'carton_height_in',
            'items_per_pallet',
            'minimum_order_qty',
            'country_of_origin',
            'hts_code',
            'vmrs_code',
            'warranty',
        ];
        $chambers_custom_fields_types = [
            'Text',
            'Selection',
            'Number',
            'Selection',
            'Text',
            'Selection',
            'Number',
            'Number',
            'Number',
            'Number',
            'Textarea',
            'Selection',
            'Text',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Text',
            'Text',
            'Text',
            'Text',
        ];
        $chambers_custom_fields_is_required = [
            'Yes',
            'Yes',
            'Yes',
            'No',
            'No',
            'No',
            'Yes',
            'No',
            'No',
            'No',
            'No',
            'Yes',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
        ];
        $chambers_custom_fields_selection_options = [
            '',
            'Air Disc, S-Cam',
            '',
            ' , Rounded. no threads, Fully Threaded',
            '',
            ' , Round, Square',
            '',
            '',
            '',
            '',
            '',
            'Active, In Development',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];
        $chambers_category_data = [
            "locale" => "all",
            "name" => "Chambers",
            "status" => "1",
            "position" => "1",
            "display_mode" => "products_and_description",
            "description" => "<p>Chambers</p>",
            "image" => [
                'image_1' => ''
            ],
            "category_icon_path" => [
                'image_1' => ''
            ],
            "attributes" => [],
            "meta_title" => "",
            "slug" => "chambers",
            "meta_description" => "",
            "meta_keywords" => "",
            "custom_fields_titles" => $chambers_custom_fields_titles,
            "custom_fields_names" => $chambers_custom_fields_names,
            "custom_fields_types" => $chambers_custom_fields_types,
            "custom_fields_is_required" => $chambers_custom_fields_is_required,
            "custom_fields_selection_options" => $chambers_custom_fields_selection_options,
        ];

        $chambers_category = $this->categoryRepository->create($chambers_category_data);
        //------------------------------------------------------------------------------------------------------------------------

        //misc category
        $misc_custom_fields_titles = [
            'Year',
            'Caliper',
            'Availability Status',
            'UPC Code',
            'Carton Weight (lb)',
            'Carton Length (in)',
            'Carton Width (in)',
            'Carton Height (in)',
            'Items per Case',
            'Minimum Order QTY',
            'Items Per Pallet',
            'Country of Origin',
            'HTS Code',
            'VMRS Code',
            'Warranty'
        ];
        $misc_custom_fields_names = [
            'year',
            'caliper',
            'availability_status',
            'upc_code',
            'carton_weight_lb',
            'carton_length_in',
            'carton_width_in',
            'carton_height_in',
            'items_per_case',
            'minimum_order_qty',
            'items_per_pallet',
            'country_of_origin',
            'hts_code',
            'vmrs_code',
            'warranty',
        ];
        $misc_custom_fields_types = [
            'Text',
            'Text',
            'Selection',
            'Text',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Text',
            'Text',
            'Text',
            'Selection',
        ];
        $misc_custom_fields_is_required = [
            'Yes',
            'Yes',
            'Yes',
            'No',
            'No',
            'No',
            'No',
            'No',
            'No',
            'Yes',
            'No',
            'Yes',
            'No',
            'No',
            'Yes',
        ];
        $misc_custom_fields_selection_options = [
            '',
            '',
            'Active, In Development',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '12 Months / Unlimited',
        ];
        $misc_category_data = [
            "locale" => "all",
            "name" => "Misc",
            "status" => "1",
            "position" => "1",
            "display_mode" => "products_and_description",
            "description" => "<p>Misc</p>",
            "image" => [
                'image_1' => ''
            ],
            "category_icon_path" => [
                'image_1' => ''
            ],
            "attributes" => [],
            "meta_title" => "",
            "slug" => "misc",
            "meta_description" => "",
            "meta_keywords" => "",
            "custom_fields_titles" => $misc_custom_fields_titles,
            "custom_fields_names" => $misc_custom_fields_names,
            "custom_fields_types" => $misc_custom_fields_types,
            "custom_fields_is_required" => $misc_custom_fields_is_required,
            "custom_fields_selection_options" => $misc_custom_fields_selection_options,
        ];

        $misc_category = $this->categoryRepository->create($misc_category_data);
        //------------------------------------------------------------------------------------------------------------------------

        //pades category
        $pades_custom_fields_titles = [
            'Year',
            'MAKE',
            'MODEL',
            'FMSI Steel',
            'FULL FMSI Number',
            'WVA #',
            'GAWR',
            'Brake Pad Compound',
            'Copper-Free Code',
            'Installation Hardware Included',
            'Noise-reducing Shim Included',
            'Wear Sensor Type',
            'Noise-Reducing Chamfers',
            'Friction Slotted / # of Slots',
            'Anti-Rattle Clip Included',
            'Integrally Molded',
            'Rust Resistant Coating',
            'Availability Status',
            'UPC Code',
            'Carton Weight (lb)',
            'Carton Length (in)',
            'Carton Width (in)',
            'Carton Height (in)',
            'Items per Case',
            'Minimum Order QTY',
            'PCS/ Pallet',
            'Country of Origin',
            'HTS Code',
            'VMRS Code',
            'Warranty'
        ];
        $pades_custom_fields_names = [
            'year',
            'make',
            'model',
            'fmsi_steel',
            'full_fmsi_number',
            'wva_number',
            'gawr',
            'brake_pad_compound',
            'copper_free_code',
            'installation_hardware_included',
            'noise_reducing_shim_included',
            'wear_sensor_type',
            'noise_reducing_chambers',
            'friction_slotted_per_number_of_slots',
            'anti_rattle_clip_included',
            'integrally_molded',
            'rust_resistant_coating',
            'availability_status',
            'upc_code',
            'carton_weight_lb',
            'carton_length_in',
            'carton_width_in',
            'carton_height_in',
            'items_per_case',
            'minimum_order_qty',
            'pcs_per_pallet',
            'country_of_origin',
            'hts_code',
            'vmrs_code',
            'warranty'
        ];
        $pades_custom_fields_types = [
            'Text',
            'Text',
            'Text',
            'Text',
            'Text',
            'Text',
            'Text',
            'Text',
            'Text',
            'Selection',
            'Selection',
            'Selection',
            'Text',
            'Number',
            'Selection',
            'Selection',
            'Selection',
            'Selection',
            'Text',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Number',
            'Text',
            'Text',
            'Text',
            'Selection'
        ];
        $pades_custom_fields_is_required = [
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'No',
            'Yes',
            'No',
            'No',
            'No',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes',
            'Yes'
        ];
        $pades_custom_fields_selection_options = [
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            'Yes, No',
            'Yes, No',
            ' , N/A',
            '',
            '',
            'Yes, No',
            'Yes, No',
            'Yes, No',
            'Active, In Development',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '12 Months / Unlimited'
        ];
        $pades_category_data = [
            "locale" => "all",
            "name" => "Pades",
            "status" => "1",
            "position" => "1",
            "display_mode" => "products_and_description",
            "description" => "<p>Pades</p>",
            "image" => [
                'image_1' => ''
            ],
            "category_icon_path" => [
                'image_1' => ''
            ],
            "attributes" => [],
            "meta_title" => "",
            "slug" => "pades",
            "meta_description" => "",
            "meta_keywords" => "",
            "custom_fields_titles" => $pades_custom_fields_titles,
            "custom_fields_names" => $pades_custom_fields_names,
            "custom_fields_types" => $pades_custom_fields_types,
            "custom_fields_is_required" => $pades_custom_fields_is_required,
            "custom_fields_selection_options" => $pades_custom_fields_selection_options,
        ];

        $pades_category = $this->categoryRepository->create($pades_category_data);
        //------------------------------------------------------------------------------------------------------------------------

        //rotors products
        $file = asset('csv/ROTORS.csv');
        $csv= file_get_contents($file);
        $rotors_array = array_map("str_getcsv", explode("\n", $csv));
        $rotors_start_row = 1;
        $rotors_end_row = 26;
        $rotors_category_id = $rotors_category->id;
        for ($i = $rotors_start_row; $i < $rotors_end_row + 1; $i++) {
            $row_item = $rotors_array[$i];
            $name = $row_item[0];
            $description = $row_item[1];
            $price = $row_item[2];
            $sku = $this->generateRandomString();
            $initial_product_data = [
                'type' => 'simple',
                'attribute_family_id' => '1',
                'sku' => $sku,
            ];
            $initial_product = $this->productRepository->create($initial_product_data);

            $product_data = [
                "channel" => "default",
                "locale" => "en",
                "sku" => $sku,
                "product_number" => "",
                "name" => $name,
                "url_key" => $name,
                "tax_category_id" => "",
                "color" => "1",
                "size" => "6",
                "short_description" => $description,
                "description" => $description,
                "meta_title" => "",
                "meta_keywords" => "",
                "meta_description" => "",
                "price" => strval($price),
                "cost" => "",
                "special_price" => "",
                "special_price_from" => "",
                "special_price_to" => "",
                "length" => "",
                "width" => "",
                "height" => "",
                "weight" => "123",
                "inventories" => [],
                "categories" => [strval($rotors_category_id)],
                "channels" => ["1"],
                "custom_fields" => [
                    $rotors_category_id => [
                        'year' => $row_item[3],
                        'brake_system' => $row_item[4],
                        'vehicle_type' => $row_item[5],
                        'application' => $row_item[6],
                        'bolt_hardware_included' => $row_item[7],
                        'rotor_type' => $row_item[8],
                        'rotor_weight_lb' => $row_item[9],
                        'rotor_weight_kg' => $row_item[10],
                        'overall_diameter_in' => $row_item[11],
                        'overall_diameter_mm' => $row_item[12],
                        'disk_thickness_in' => $row_item[13],
                        'disk_thickness_mm' => $row_item[14],
                        'minimum_thickness_in' => $row_item[15],
                        'minimum_thickness_mm' => $row_item[16],
                        'overall_depth_in' => $row_item[17],
                        'overall_depth_mm' => $row_item[18],
                        'pilot_diameter_in' => $row_item[19],
                        'pilot_diameter_mm' => $row_item[20],
                        'bolt_circle_diameter_in' => $row_item[21],
                        'bolt_circle_diameter_mm' => $row_item[22],
                        'bolt_hole_diameter' => $row_item[23],
                        'bolt_hole_count' => $row_item[24],
                        'abs' => $row_item[25],
                        'availability_status' => $row_item[30],
                        'upc_code' => $row_item[31],
                        'carton_weight_lb' => $row_item[32],
                        'carton_length_in' => $row_item[33],
                        'carton_width_in' => $row_item[34],
                        'carton_height_in' => $row_item[35],
                        'items_per_case' => $row_item[36],
                        'minimum_order_qty' => $row_item[37],
                        'pcs_per_pallet' => $row_item[38],
                        'country_of_origin' => $row_item[39],
                        'hts_code' => $row_item[40],
                        'vmrs_code' => $row_item[41],
                        'warranty' => $row_item[42],
                    ]
                ]
            ];
            $product = $this->productRepository->update($product_data, $initial_product->id);
        }
        //------------------------------------------------------------------------------------------------------------------------

        //calipers products
        $file = asset('csv/CALIPERS.csv');
        $csv= file_get_contents($file);
        $calipers_array = array_map("str_getcsv", explode("\n", $csv));
        $calipers_new_array = [];
        for ($i = 1; $i < 24; $i+=2) {
            $calipers_new_array []= array_merge($calipers_array[$i],$calipers_array[$i + 1]);
        }
        for ($i = 25; $i < 27; $i++) {
            $calipers_new_array []= $calipers_array[$i];
        }
        for ($i = 27; $i < 34; $i+=2) {
            $calipers_new_array []= array_merge($calipers_array[$i],$calipers_array[$i + 1]);
        }
        for ($i = 35; $i < 49; $i++) {
            $calipers_new_array []= $calipers_array[$i];
        }
        for ($i = 55; $i < 66; $i++) {
            $calipers_new_array []= $calipers_array[$i];
        }
        foreach ($calipers_new_array as $key => $item) {
            if(count($item) == 39) {
                unset($calipers_new_array[$key][17]);
                $calipers_new_array[$key] = array_values($calipers_new_array[$key]);
            }
        }
        $calipers_array = $calipers_new_array;
        $calipers_start_row = 0;
        $calipers_end_row = 41;
        $calipers_category_id = $calipers_category->id;
        for ($i = $calipers_start_row; $i < $calipers_end_row + 1; $i++) {
            $row_item = $calipers_array[$i];
            $name = $row_item[1];
            $description = $row_item[2];
            $price = $row_item[3];
            $sku = $this->generateRandomString();
            $initial_product_data = [
                'type' => 'simple',
                'attribute_family_id' => '1',
                'sku' => $sku,
            ];
            $initial_product = $this->productRepository->create($initial_product_data);

            $product_data = [
                "channel" => "default",
                "locale" => "en",
                "sku" => $sku,
                "product_number" => "",
                "name" => $name,
                "url_key" => $name,
                "tax_category_id" => "",
                "color" => "1",
                "size" => "6",
                "short_description" => $description,
                "description" => $description,
                "meta_title" => "",
                "meta_keywords" => "",
                "meta_description" => "",
                "price" => strval($price),
                "cost" => "",
                "special_price" => "",
                "special_price_from" => "",
                "special_price_to" => "",
                "length" => "",
                "width" => "",
                "height" => "",
                "weight" => "123",
                "inventories" => [],
                "categories" => [strval($calipers_category_id)],
                "channels" => ["1"],
                "custom_fields" => [
                    $calipers_category_id => [
                        'line' => $row_item[0],
                        'year' => $row_item[4],
                        'make' => $row_item[5],
                        'caliper_model' => $row_item[6],
                        'vehicle_type' => $row_item[7],
                        'application' => $row_item[8],
                        'pad_shape' => $row_item[9],
                        'brake_chamber_mounting_angle' => $row_item[10],
                        'bracket_mounting_type' => $row_item[11],
                        'position' => $row_item[12],
                        'adjustment_design' => $row_item[13],
                        'pad_retainer_style' => $row_item[14],
                        'number_of_bolt_holes_in_bracket' => $row_item[15],
                        'bolt_hole_size' => $row_item[16],
                        'bolt_hole_spacing' => $row_item[17],
                        'caliper_color' => $row_item[18],
                        'caliper_finish' => $row_item[19],
                        'hardware_included' => $row_item[20],
                        'pads_included' => $row_item[21],
                        'availability_status' => $row_item[25],
                        'upc_code' => $row_item[26],
                        'carton_weight_lb' => $row_item[27],
                        'carton_length_in' => $row_item[28],
                        'carton_width_in' => $row_item[29],
                        'carton_height_in' => $row_item[30],
                        'items_per_case' => $row_item[31],
                        'minimum_order_qty' => $row_item[32],
                        'pcs_per_pallet' => $row_item[33],
                        'country_of_origin' => $row_item[34],
                        'hts_code' => $row_item[35],
                        'vmrs_code' => $row_item[36],
                        'warranty' => $row_item[37],
                    ]
                ]
            ];
            $product = $this->productRepository->update($product_data, $initial_product->id);
        }
        //------------------------------------------------------------------------------------------------------------------------

        //shoes products
        $file = asset('csv/SHOES.csv');
        $csv= file_get_contents($file);
        $shoes_array = array_map("str_getcsv", explode("\n", $csv));
        $shoes_start_row = 1;
        $shoes_end_row = 28;
        $shoes_category_id = $shoes_category->id;
        for ($i = $shoes_start_row; $i < $shoes_end_row + 1; $i++) {
            $row_item = $shoes_array[$i];
            $name = $row_item[1];
            $description = $row_item[2];
            $price = $row_item[3];
            $sku = $this->generateRandomString();
            $initial_product_data = [
                'type' => 'simple',
                'attribute_family_id' => '1',
                'sku' => $sku,
            ];
            $initial_product = $this->productRepository->create($initial_product_data);

            $product_data = [
                "channel" => "default",
                "locale" => "en",
                "sku" => $sku,
                "product_number" => "",
                "name" => $name,
                "url_key" => $name,
                "tax_category_id" => "",
                "color" => "1",
                "size" => "6",
                "short_description" => $description,
                "description" => $description,
                "meta_title" => "",
                "meta_keywords" => "",
                "meta_description" => "",
                "price" => strval($price),
                "cost" => "",
                "special_price" => "",
                "special_price_from" => "",
                "special_price_to" => "",
                "length" => "",
                "width" => "",
                "height" => "",
                "weight" => "123",
                "inventories" => [],
                "categories" => [strval($shoes_category_id)],
                "channels" => ["1"],
                "custom_fields" => [
                    $shoes_category_id => [
                        'rank' => $row_item[0],
                        'year' => $row_item[4],
                        'fmsi_number' => $row_item[5],
                        'new_or_relined' => $row_item[6],
                        'hardware_included' => $row_item[7],
                        'brake_type' => $row_item[9],
                        'coating' => $row_item[10],
                        'friction_code' => $row_item[11],
                        'drum_diameter' => $row_item[12],
                        'shoe_width' => $row_item[13],
                        'number_of_webs' => $row_item[14],
                        'availability_status' => $row_item[19],
                        'upc_code' => $row_item[20],
                        'items_per_case' => $row_item[21],
                        'minimum_order_qty' => $row_item[22],
                        'carton_weight_lb' => $row_item[23],
                        'carton_length_in' => $row_item[24],
                        'carton_width_in' => $row_item[25],
                        'carton_height_in' => $row_item[26],
                        'items_per_pallet' => $row_item[27],
                        'country_of_origin' => $row_item[28],
                        'hts_code' => $row_item[29],
                        'vmrs_code' => $row_item[30],
                        'warranty' => $row_item[31],
                    ]
                ]
            ];
            $product = $this->productRepository->update($product_data, $initial_product->id);
        }
        //------------------------------------------------------------------------------------------------------------------------

        //chambers products
        $file = asset('csv/CHAMBERS.csv');
        $csv= file_get_contents($file);
        $chambers_array = array_map("str_getcsv", explode("\n", $csv));
        $chambers_start_row = 1;
        $chambers_end_row = 28;
        $chambers_category_id = $chambers_category->id;
        for ($i = $chambers_start_row; $i < $chambers_end_row + 1; $i++) {
            $row_item = $chambers_array[$i];
            $name = $row_item[0];
            $description = $row_item[1];
            $price = $row_item[2];
            $sku = $this->generateRandomString();
            $initial_product_data = [
                'type' => 'simple',
                'attribute_family_id' => '1',
                'sku' => $sku,
            ];
            $initial_product = $this->productRepository->create($initial_product_data);

            $product_data = [
                "channel" => "default",
                "locale" => "en",
                "sku" => $sku,
                "product_number" => "",
                "name" => $name,
                "url_key" => $name,
                "tax_category_id" => "",
                "color" => "1",
                "size" => "6",
                "short_description" => $description,
                "description" => $description,
                "meta_title" => "",
                "meta_keywords" => "",
                "meta_description" => "",
                "price" => strval($price),
                "cost" => "",
                "special_price" => "",
                "special_price_from" => "",
                "special_price_to" => "",
                "length" => "",
                "width" => "",
                "height" => "",
                "weight" => "123",
                "inventories" => [],
                "categories" => [strval($chambers_category_id)],
                "channels" => ["1"],
                "custom_fields" => [
                    $chambers_category_id => [
                        'year' => $row_item[3],
                        'brake_type' => $row_item[4],
                        'number_of_diaphragms' => $row_item[5],
                        'pushrod_type' => $row_item[6],
                        'pushrod_thread_size' => $row_item[7],
                        'port_shape' => $row_item[8],
                        'stroke_in' => $row_item[9],
                        'port_thread' => $row_item[10],
                        'fullstroke_in' => $row_item[11],
                        'fullstroke_mm' => $row_item[12],
                        'notes' => $row_item[13],
                        'availability_status' => $row_item[15],
                        'upc_code' => $row_item[16],
                        'item_weight_lb' => $row_item[17],
                        'item_length_in' => $row_item[18],
                        'item_width_in' => $row_item[19],
                        'item_height_in' => $row_item[20],
                        'items_per_case' => $row_item[21],
                        'carton_weight_lb' => $row_item[22],
                        'carton_length_in' => $row_item[23],
                        'carton_width_in' => $row_item[24],
                        'carton_height_in' => $row_item[25],
                        'items_per_pallet' => $row_item[26],
                        'minimum_order_qty' => $row_item[27],
                        'country_of_origin' => $row_item[28],
                        'hts_code' => $row_item[29],
                        'vmrs_code' => $row_item[30],
                        'warranty' => $row_item[31],
                    ]
                ]
            ];
            $product = $this->productRepository->update($product_data, $initial_product->id);
        }
        //------------------------------------------------------------------------------------------------------------------------

        //misc products
        $file = asset('csv/MISC.csv');
        $csv= file_get_contents($file);
        $misc_array = array_map("str_getcsv", explode("\n", $csv));
        $misc_start_row = 1;
        $misc_end_row = 13;
        $misc_category_id = $misc_category->id;
        for ($i = $misc_start_row; $i < $misc_end_row + 1; $i++) {
            $row_item = $misc_array[$i];
            $name = $row_item[0];
            $description = $row_item[1];
            $price = $row_item[2];
            $sku = $this->generateRandomString();
            $initial_product_data = [
                'type' => 'simple',
                'attribute_family_id' => '1',
                'sku' => $sku,
            ];
            $initial_product = $this->productRepository->create($initial_product_data);

            $product_data = [
                "channel" => "default",
                "locale" => "en",
                "sku" => $sku,
                "product_number" => "",
                "name" => $name,
                "url_key" => $name,
                "tax_category_id" => "",
                "color" => "1",
                "size" => "6",
                "short_description" => $description,
                "description" => $description,
                "meta_title" => "",
                "meta_keywords" => "",
                "meta_description" => "",
                "price" => strval($price),
                "cost" => "",
                "special_price" => "",
                "special_price_from" => "",
                "special_price_to" => "",
                "length" => "",
                "width" => "",
                "height" => "",
                "weight" => "123",
                "inventories" => [],
                "categories" => [strval($misc_category_id)],
                "channels" => ["1"],
                "custom_fields" => [
                    $misc_category_id => [
                        'year' => $row_item[3],
                        'caliper' => $row_item[4],
                        'availability_status' => $row_item[6],
                        'upc_code' => $row_item[7],
                        'carton_weight_lb' => $row_item[8],
                        'carton_length_in' => $row_item[9],
                        'carton_width_in' => $row_item[10],
                        'carton_height_in' => $row_item[11],
                        'items_per_case' => $row_item[12],
                        'minimum_order_qty' => $row_item[13],
                        'items_per_pallet' => $row_item[14],
                        'country_of_origin' => $row_item[15],
                        'hts_code' => $row_item[16],
                        'vmrs_code' => $row_item[17],
                        'warranty' => $row_item[18],
                    ]
                ]
            ];
            $product = $this->productRepository->update($product_data, $initial_product->id);
        }
        //------------------------------------------------------------------------------------------------------------------------

        //pades products
        $file = asset('csv/PADES.csv');
        $csv= file_get_contents($file);
        $pades_array = array_map("str_getcsv", explode("\n", $csv));
        $pades_start_row = 1;
        $pades_end_row = 34;
        $pades_category_id = $pades_category->id;
        for ($i = $pades_start_row; $i < $pades_end_row + 1; $i++) {
            $row_item = $pades_array[$i];
            $name = $row_item[0];
            $description = $row_item[1];
            $price = $row_item[2];
            $sku = $this->generateRandomString();
            $initial_product_data = [
                'type' => 'simple',
                'attribute_family_id' => '1',
                'sku' => $sku,
            ];
            $initial_product = $this->productRepository->create($initial_product_data);

            $product_data = [
                "channel" => "default",
                "locale" => "en",
                "sku" => $sku,
                "product_number" => "",
                "name" => $name,
                "url_key" => $name,
                "tax_category_id" => "",
                "color" => "1",
                "size" => "6",
                "short_description" => $description,
                "description" => $description,
                "meta_title" => "",
                "meta_keywords" => "",
                "meta_description" => "",
                "price" => strval($price),
                "cost" => "",
                "special_price" => "",
                "special_price_from" => "",
                "special_price_to" => "",
                "length" => "",
                "width" => "",
                "height" => "",
                "weight" => "123",
                "inventories" => [],
                "categories" => [strval($pades_category_id)],
                "channels" => ["1"],
                "custom_fields" => [
                    $pades_category_id => [
                        'year' => $row_item[3],
                        'make' => $row_item[4],
                        'caliper_model' => $row_item[5],
                        'fmsi_steel' => $row_item[6],
                        'full_fmsi_number' => $row_item[7],
                        'wva_number' => $row_item[8],
                        'gawr' => $row_item[9],
                        'brake_pad_compound' => $row_item[10],
                        'copper_free_code' => $row_item[11],
                        'installation_hardware_included' => $row_item[14],
                        'noise_reducing_shim_included' => $row_item[15],
                        'wear_sensor_type' => $row_item[16],
                        'noise_reducing_chambers' => $row_item[17],
                        'friction_slotted_per_number_of_slots' => $row_item[18],
                        'anti_rattle_clip_included' => $row_item[19],
                        'integrally_molded' => $row_item[20],
                        'rust_resistant_coating' => $row_item[21],
                        'availability_status' => $row_item[22],
                        'upc_code' => $row_item[23],
                        'carton_weight_lb' => $row_item[24],
                        'carton_length_in' => $row_item[25],
                        'carton_width_in' => $row_item[26],
                        'carton_height_in' => $row_item[27],
                        'items_per_case' => $row_item[28],
                        'minimum_order_qty' => $row_item[29],
                        'pcs_per_pallet' => $row_item[30],
                        'country_of_origin' => $row_item[31],
                        'hts_code' => $row_item[32],
                        'vmrs_code' => $row_item[33],
                        'warranty' => $row_item[34]
                    ]
                ]
            ];
            $product = $this->productRepository->update($product_data, $initial_product->id);
        }
        //------------------------------------------------------------------------------------------------------------------------

        dd('done');
    }

    public function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function updateCategories (Request $request)
    {
        ini_set('max_execution_time', '0');

        //rotors category
        $rotors_result = $this->updateCategory('rotor',
            [
                'Part Terminology',
                'Part Terminology ID',
                'Brand ID',
                'Sub Brand ID',
                'Part Group',
                'GL Code',
                'EAN',
                'GTIN',
            ],
            [
                'part_terminology',
                'part_terminology_id',
                'brand_id',
                'sub_brand_id',
                'part_group',
                'gl_code',
                'ean',
                'gtin',
            ],
            [
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
            ],
            [
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
            ],
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
            ]
        );
        dump('$rotors_result: ' . $rotors_result);

        //pads category
        $pads_result = $this->updateCategory('pad',
            [
                'Part Terminology',
                'Part Terminology ID',
                'Brand ID',
                'Sub Brand ID',
                'Part Group',
                'GL Code',
                'EAN',
                'GTIN',
            ],
            [
                'part_terminology',
                'part_terminology_id',
                'brand_id',
                'sub_brand_id',
                'part_group',
                'gl_code',
                'ean',
                'gtin',
            ],
            [
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
            ],
            [
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
            ],
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
            ]
        );
        dump('$pads_result: ' . $pads_result);

        //calipers category
        $calipers_result = $this->updateCategory('caliper',
            [
                'Vendor PIN',
                'Part Terminology',
                'Part Terminology ID',
                'Brand ID',
                'Sub Brand ID',
                'Part Group',
                'GL Code',
                'XREF No',
                'EAN',
                'GTIN',
            ],
            [
                'vendor_pin',
                'part_terminology',
                'part_terminology_id',
                'brand_id',
                'sub_brand_id',
                'part_group',
                'gl_code',
                'xref_no',
                'ean',
                'gtin',
            ],
            [
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
            ],
            [
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
            ],
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
            ]
        );
        dump('$calipers_result: ' . $calipers_result);

        //shoes category
        $shoes_result = $this->updateCategory('shoe',
            [
                'Part Terminology',
                'Part Terminology ID',
                'Brand ID',
                'Sub Brand ID',
                'Part Group',
                'GL Code',
                'GAWR Code',
                'EAN',
                'GTIN',
            ],
            [
                'part_terminology',
                'part_terminology_id',
                'brand_id',
                'sub_brand_id',
                'part_group',
                'gl_code',
                'gawr_code',
                'ean',
                'gtin',
            ],
            [
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
            ],
            [
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
            ],
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
            ]
        );
        dump('$shoes_result: ' . $shoes_result);

        //chambers category
        $chambers_result = $this->updateCategory('chamber',
            [
                'Part Terminology',
                'Part Terminology ID',
                'Brand ID',
                'Sub Brand ID',
                'Part Group',
                'GL Code',
                'EAN',
                'GTIN',
            ],
            [
                'part_terminology',
                'part_terminology_id',
                'brand_id',
                'sub_brand_id',
                'part_group',
                'gl_code',
                'ean',
                'gtin',
            ],
            [
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
            ],
            [
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
            ],
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
            ]
        );
        dump('$chambers_result: ' . $chambers_result);

        //miscs category
        $miscs_result = $this->updateCategory('misc',
            [
                'Part Terminology',
                'Part Terminology ID',
                'Brand ID',
                'Sub Brand ID',
                'Part Group',
                'GL Code',
                'EAN',
                'GTIN',
            ],
            [
                'part_terminology',
                'part_terminology_id',
                'brand_id',
                'sub_brand_id',
                'part_group',
                'gl_code',
                'ean',
                'gtin',
            ],
            [
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
                'Text',
            ],
            [
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
                'Yes',
            ],
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
            ]
        );
        dump('$miscs_result: ' . $miscs_result);

        dd('Done');
    }

    public function updateCategory ($cat_slug, $custom_fields_titles, $custom_fields_names, $custom_fields_types, $custom_fields_is_required, $custom_fields_selection_options)
    {
        $category = Category::whereHas('cat_flat', function ($q) use ($cat_slug) {
            return $q->where('name', 'LIKE', '%'.$cat_slug.'%');
        })->where('custom_fields', '!=', '[]')->first();

        if (!$category) {
            return false;
        }

        $custom_fields = json_decode($category->custom_fields);

        foreach ($custom_fields_titles as $key => $custom_fields_title) {
            $custom_fields []= [
                'title' => $custom_fields_title,
                'name' => $custom_fields_names[$key],
                'type' => $custom_fields_types[$key],
                'selection_options' => $custom_fields_selection_options[$key],
                'is_required' => $custom_fields_is_required[$key],
            ];
        }
        $category->custom_fields = json_encode($custom_fields);
        $category->save();

        return true;
    }

    public function updateProducts (Request $request)
    {
        ini_set('max_execution_time', '0');

//        $file = asset('csv/miscs2.csv');
//        $csv= file_get_contents($file);
//        $rotors_array = array_map("str_getcsv", explode("\n", $csv));
//        dd($rotors_array);

        //rotors products
        dump("R O T O R S");
        $rotors_result = $this->updateCategoryProducts('csv/rotors2.csv', 2, 25, 'rotor', 0, [
            'part_terminology' => 3,
            'part_terminology_id' => 4,
            'brand_id' => 5,
            'sub_brand_id' => 6,
            'part_group' => 7,
            'gl_code' => 8,
            'brake_system' => 9,
            'vehicle_type' => 10,
            'application' => 11,
            'bolt_hardware_included' => 12,
            'rotor_type' => 13,
            'rotor_weight_lb' => 14,
            'rotor_weight_kg' => 15,
            'overall_diameter_in' => 16,
            'overall_diameter_mm' => 17,
            'disk_thickness_in' => 18,
            'disk_thickness_mm' => 19,
            'minimum_thickness_in' => 20,
            'minimum_thickness_mm' => 21,
            'overall_depth_in' => 22,
            'overall_depth_mm' => 23,
            'pilot_diameter_in' => 24,
            'pilot_diameter_mm' => 25,
            'bolt_circle_diameter_in' => 26,
            'bolt_circle_diameter_mm' => 27,
            'bolt_hole_diameter' => 28,
            'bolt_hole_count' => 29,
            'abs' => 30,
            'availability_status' => 35,
            'upc_code' => 36,
            'ean' => 37,
            'gtin' => 38,
            'carton_weight_lb' => 39,
            'carton_length_in' => 40,
            'carton_width_in' => 41,
            'carton_height_in' => 42,
            'items_per_case' => 43,
            'minimum_order_qty' => 44,
            'pcs_per_pallet' => 45,
            'country_of_origin' => 46,
            'hts_code' => 47,
            'vmrs_code' => 48,
            'warranty' => 49,
        ]);
        dump('R O T O R S result: ' . $rotors_result);
        //------------------------------------------------------------------------------------------------------------------------

        //pads products
        dump("P A D S");
        $pads_result = $this->updateCategoryProducts('csv/pads2.csv', 1, 34, 'pad', 0, [
            'part_terminology' => 2,
            'part_terminology_id' => 3,
            'brand_id' => 4,
            'sub_brand_id' => 5,
            'part_group' => 6,
            'gl_code' => 7,
            'make' => 8,
            'model' => 9,
            'fmsi_steel' => 10,
            'full_fmsi_number' => 11,
            'wva_number' => 12,
            'gawr' => 13,
            'brake_pad_compound' => 14,
            'copper_free_code' => 15,
            'installation_hardware_included' => 18,
            'noise_reducing_shim_included' => 19,
            'wear_sensor_type' => 20,
            'noise_reducing_chambers' => 21,
            'friction_slotted_per_number_of_slots' => 22,
            'anti_rattle_clip_included' => 23,
            'integrally_molded' => 24,
            'rust_resistant_coating' => 25,
            'availability_status' => 26,
            'upc_code' => 27,
            'ean' => 28,
            'gtin' => 29,
            'carton_weight_lb' => 30,
            'carton_length_in' => 31,
            'carton_width_in' => 32,
            'carton_height_in' => 33,
            'items_per_case' => 34,
            'minimum_order_qty' => 35,
            'pcs_per_pallet' => 36,
            'country_of_origin' => 37,
            'hts_code' => 38,
            'vmrs_code' => 39,
            'warranty' => 40
        ]);
        dump('P A D S result: ' . $pads_result);
        //------------------------------------------------------------------------------------------------------------------------

        //calipers products
        dump("C A L I P E R S");
        $calipers_result = $this->updateCategoryProducts('csv/calipers2.csv', 1, 44, 'caliper', 1, [
            'vendor_pin' => 2,
            'part_terminology' => 4,
            'part_terminology_id' => 5,
            'brand_id' => 6,
            'sub_brand_id' => 7,
            'part_group' => 8,
            'gl_code' => 9,
            'make' => 10,
            'caliper_model' => 11,
            'xref_no' => 12,
            'vehicle_type' => 13,
            'application' => 14,
            'pad_shape' => 15,
            'brake_chamber_mounting_angle' => 16,
            'bracket_mounting_type' => 17,
            'position' => 18,
            'adjustment_design' => 19,
            'pad_retainer_style' => 20,
            'number_of_bolt_holes_in_bracket' => 21,
            'bolt_hole_size' => 22,
            'bolt_hole_spacing' => 23,
            'caliper_color' => 24,
            'caliper_finish' => 25,
            'hardware_included' => 26,
            'pads_included' => 27,
            'availability_status' => 34,
            'upc_code' => 35,
            'ean' => 36,
            'gtin' => 37,
            'carton_weight_lb' => 38,
            'carton_length_in' => 39,
            'carton_width_in' => 40,
            'carton_height_in' => 41,
            'items_per_case' => 42,
            'minimum_order_qty' => 43,
            'pcs_per_pallet' => 44,
            'country_of_origin' => 45,
            'hts_code' => 46,
            'vmrs_code' => 47,
            'warranty' => 48,
        ]);
        dump('C A L I P E R S result: ' . $calipers_result);
        //------------------------------------------------------------------------------------------------------------------------

        //shoes products
        dump("S H O E S");
        $shoes_result = $this->updateCategoryProducts('csv/shoes2.csv', 1, 28, 'shoe', 1, [
            'fmsi_number' => 2,
            'part_terminology' => 4,
            'part_terminology_id' => 5,
            'brand_id' => 6,
            'sub_brand_id' => 7,
            'part_group' => 8,
            'gl_code' => 9,
            'gawr_code' => 10,
            'new_or_relined' => 11,
            'hardware_included' => 12,
            'brake_type' => 14,
            'coating' => 15,
            'friction_code' => 16,
            'drum_diameter' => 17,
            'shoe_width' => 18,
            'number_of_webs' => 19,
            'availability_status' => 22,
            'upc_code' => 23,
            'ean' => 24,
            'gtin' => 25,
            'carton_weight_lb' => 26,
            'carton_length_in' => 27,
            'carton_width_in' => 28,
            'carton_height_in' => 29,
            'items_per_case' => 30,
            'minimum_order_qty' => 31,
            'items_per_pallet' => 32,
            'country_of_origin' => 33,
            'hts_code' => 34,
            'vmrs_code' => 35,
            'warranty' => 36,
        ]);
        dump('S H O E S result: ' . $shoes_result);
        //------------------------------------------------------------------------------------------------------------------------

        //chambers products
        dump("C H A M B E R S");
        $chambers_result = $this->updateCategoryProducts('csv/chambers2.csv', 1, 27, 'chamber', 0, [
            'brake_type' => 1,
            'part_terminology' => 3,
            'part_terminology_id' => 4,
            'brand_id' => 5,
            'sub_brand_id' => 6,
            'part_group' => 7,
            'gl_code' => 8,
            'number_of_diaphragms' => 9,
            'pushrod_type' => 10,
            'pushrod_thread_size' => 11,
            'port_shape' => 12,
            'stroke_in' => 13,
            'notes' => 14,
            'availability_status' => 16,
            'upc_code' => 17,
            'ean' => 18,
            'gtin' => 19,
            'item_weight_lb' => 20,
            'item_length_in' => 21,
            'item_width_in' => 22,
            'item_height_in' => 23,
            'items_per_case' => 24,
            'carton_weight_lb' => 25,
            'carton_length_in' => 26,
            'carton_width_in' => 27,
            'carton_height_in' => 28,
            'items_per_pallet' => 29,
            'minimum_order_qty' => 30,
            'country_of_origin' => 31,
            'hts_code' => 32,
            'vmrs_code' => 33,
            'warranty' => 34,
        ]);
        dump('C H A M B E R S result: ' . $chambers_result);
        //------------------------------------------------------------------------------------------------------------------------

        //miscs products
        dump("M I S C");
        $miscs_result = $this->updateCategoryProducts('csv/miscs2.csv', 1, 13, 'misc', 0, [
            'caliper' => 1,
            'part_terminology' => 3,
            'part_terminology_id' => 4,
            'brand_id' => 5,
            'sub_brand_id' => 6,
            'part_group' => 7,
            'gl_code' => 8,
            'availability_status' => 11,
            'upc_code' => 12,
            'ean' => 13,
            'gtin' => 14,
            'carton_weight_lb' => 15,
            'carton_length_in' => 16,
            'carton_width_in' => 17,
            'carton_height_in' => 18,
            'items_per_case' => 19,
            'minimum_order_qty' => 20,
            'items_per_pallet' => 21,
            'country_of_origin' => 22,
            'hts_code' => 23,
            'vmrs_code' => 24,
            'warranty' => 25,
        ]);
        dump('M I S C result: ' . $miscs_result);
        //------------------------------------------------------------------------------------------------------------------------

        dd('Done!');
    }

    public function updateCategoryProducts ($csv_path, $start, $end, $cat_slug, $product_name_index, $update_key_values)
    {
        $file = asset($csv_path);
        $csv= file_get_contents($file);
        $array = array_map("str_getcsv", explode("\n", $csv));
        $category = Category::whereHas('cat_flat', function ($q) use ($cat_slug) {
            return $q->where('name', 'LIKE', '%'.$cat_slug.'%');
        })->where('custom_fields', '!=', '[]')->first();

        if (!$category) {
            return false;
        }

        for ($i = $start; $i < $end + 1; $i++) {
            $row_item = $array[$i];
            $product_name = $row_item[$product_name_index];

            $product = Product::whereHas('product_flats', function ($q) use ($product_name) {
                return $q->where('name', $product_name);
            })->first();

            if (!$product) {
                dump('Product not found. Skipping.');
                continue;
            }

            foreach ($update_key_values as $field_name => $row_item_index) {
                if (array_key_exists($row_item_index, $row_item)) {
                    $field_value = $row_item[$row_item_index];
                    ProductCategoryField::firstOrCreate([
                        'product_id' => $product->id,
                        'category_id' => $category->id,
                        'field_name' => $field_name
                    ], [
                        'field_value' => $field_value
                    ]);
                } else {
                    dump('error');
                    // Handle the case where the key does not exist in the $row_item array
                }

            }
        }

        return true;
    }
}
