<?php


function modify_acf_layouts($acf_field_group) {

    $new_layout = [
         // Flexi Image & Text
         "layout_tac_flexi_block__imagetext" => [
            "key" => "layout_tac_flexi__imagetext",
            "name" => "flexiimagetext",
            "label" => "Flexi Image/Text",
            "display" => "block",
            "sub_fields" => [
                [
                    "key" => "field_tac_flexi_1__imagetext",
                    "label" => "Layout Settings",
                    "name" => "",
                    "type" => "tab",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "placement" => "left",
                    "endpoint" => 0,
                ],
                [
                    "key" => "field_tac_flexi_2__imagetext",
                    "label" => "Section Title",
                    "name" => "section_title",
                    "type" => "text",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "default_value" => "",
                    "maxlength" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                ],
                [
                    "key" => "field_tac_flexi_3__imagetext",
                    "label" => "Section Active",
                    "name" => "section_active",
                    "type" => "true_false",
                    "instructions" =>
                        "Switch this section on or off.",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "message" => "",
                    "default_value" => 1,
                    "ui" => 1,
                    "ui_on_text" => "",
                    "ui_off_text" => "",
                ],
                [
                    "key" => "field_tac_flexi_4__imagetext",
                    "label" => "Background",
                    "name" => "background",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "choices" => $background_selection,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "light",
                    "layout" => "vertical",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_tac_flexi_5__imagetext",
                    "label" => "Show Border",
                    "name" => "show_border",
                    "type" => "button_group",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => [
                        "none" => "No Borders",
                        "top" => "Show Top",
                        "bottom" => "Show Bottom",
                        "both" => "Show Both",
                    ],
                    "allow_null" => 0,
                    "default_value" => "none",
                    "layout" => "horizontal",
                    "return_format" => "value",
                ],

                /// BEGIN BLOCK FIELDS ///

                [
                    "key" => "field_flexi_imagetext_1",
                    "label" => "Image",
                    "name" => "",
                    "type" => "tab",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "placement" => "left",
                    "endpoint" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_2",
                    "label" => "Image Position",
                    "name" => "image_position",
                    "type" => "button_group",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "choices" => [
                        "left" => "Left",
                        "right" => "Right",
                    ],
                    "allow_null" => 0,
                    "default_value" => "left",
                    "layout" => "horizontal",
                    "return_format" => "value",
                ],

                [
                    "key" => "field_flexi_imagetext_3",
                    "label" => "Image",
                    "name" => "image",
                    "type" => "image_aspect_ratio_crop",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "crop_type" => "aspect_ratio",
                    "aspect_ratio_width" => "",
                    "aspect_ratio_height" => "",
                    "return_format" => "id",
                    "preview_size" => "medium",
                    "library" => "all",
                    "min_width" => "",
                    "min_height" => "",
                    "min_size" => "",
                    "max_width" => "",
                    "max_height" => "",
                    "max_size" => "",
                    "mime_types" => "",
                ],
                [
                    "key" => "field_flexi_imagetext_4",
                    "label" => "Text",
                    "name" => "",
                    "type" => "tab",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => "",
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "placement" => "left",
                    "endpoint" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_4-1",
                    "label" => "Text Alignment",
                    "name" => "alignment_vertical",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "choices" => $vertical_alignment,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_5",
                    "label" => "Heading Type",
                    "name" => "heading_type",
                    "type" => "radio",
                    "instructions" =>
                        "Select the H tag to use for this heading",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => [
                        1 => "H1",
                        2 => "H2",
                    ],
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => 2,
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_6",
                    "label" => "Heading Size",
                    "name" => "heading_size",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "choices" => $text_sizes,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "large",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_7",
                    "label" => "Heading Weight",
                    "name" => "heading_weight",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => [
                        "regular" => "Regular",
                        "bold" => "Bold",
                    ],
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "regular",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_8",
                    "label" => "Heading Colour",
                    "name" => "heading_color",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "choices" => $color_selection,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_9",
                    "label" => "Heading",
                    "name" => "heading",
                    "type" => "text",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "default_value" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                    "maxlength" => "",
                ],
                [
                    "key" => "field_flexi_imagetext_10",
                    "label" => "Sub Heading Type",
                    "name" => "sub_heading_type",
                    "type" => "radio",
                    "instructions" =>
                        "Select the H tag to use for this heading",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => [
                        2 => "H2",
                        3 => "H3",
                    ],
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => 2,
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_11",
                    "label" => "Sub Heading Size",
                    "name" => "sub_heading_size",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => $text_sizes,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "medium",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_12",
                    "label" => "Sub Heading Weight",
                    "name" => "sub_heading_weight",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => [
                        "regular" => "Regular",
                        "bold" => "Bold",
                    ],
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "regular",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_13",
                    "label" => "Sub Heading Colour",
                    "name" => "sub_heading_color",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "choices" => $color_selection,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexiimagetext_14",
                    "label" => "Sub Heading",
                    "name" => "sub_heading",
                    "type" => "text",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "default_value" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                    "maxlength" => "",
                ],
                [
                    "key" => "field_flexi_imagetext_15",
                    "label" => "Text Size",
                    "name" => "text_size",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => $text_sizes,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "small",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_16",
                    "label" => "Text",
                    "name" => "text",
                    "type" => "wysiwyg",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "default_value" => "",
                    "tabs" => "visual",
                    "toolbar" => "basic",
                    "media_upload" => 0,
                    "delay" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_17",
                    "label" => "Button",
                    "name" => "",
                    "type" => "tab",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "placement" => "left",
                    "endpoint" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_18",
                    "label" => "Button Active",
                    "name" => "button_active",
                    "type" => "true_false",
                    "instructions" =>
                        "Set if you want to show the button on or off.",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "message" => "",
                    "default_value" => 0,
                    "ui" => 1,
                    "ui_on_text" => "",
                    "ui_off_text" => "",
                ],
                [
                    "key" => "field_flexi_imagetext_19",
                    "label" => "Button Link",
                    "name" => "button_link",
                    "type" => "link",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field_6389d9daaaee4",
                                "operator" => "!=",
                                "value" => "1",
                            ],
                        ],
                    ],
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "return_format" => "array",
                ],
                [
                    "key" => "field_flexi_imagetext_20",
                    "label" => "Button Style",
                    "name" => "button_style",
                    "type" => "radio",
                    "instructions" =>
                        "Choose a style for the button",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => $button_styles,
                    "default_value" => "underline",
                    "return_format" => "value",
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "layout" => "horizontal",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_21",
                    "label" => "Button Shape",
                    "name" => "button_shape",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => [
                        "square" => "Square",
                        "rounded" => "Rounded",
                    ],
                    "default_value" => "square",
                    "return_format" => "value",
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "layout" => "horizontal",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_flexi_imagetext_22",
                    "label" => "Button Colour",
                    "name" => "button_color",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "choices" => $color_selection,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "secondary",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],

                /// END BLOCK FIELDS ///

                [
                    "key" => "field_tac_flexi_100__imagetext",
                    "label" => "Spacing",
                    "name" => "",
                    "type" => "tab",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "placement" => "left",
                    "endpoint" => 0,
                ],
                [
                    "key" => "field_tac_flexi_101__imagetext",
                    "label" => "Layout Padding Top",
                    "name" => "layout_padding_top",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "choices" => $spacing_options,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "none",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_tac_flexi_102__imagetext",
                    "label" => "Layout Padding Bottom",
                    "name" => "layout_padding_bottom",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 0,
                    "aria-label" => "",
                    "choices" => $spacing_options,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "none",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_tac_flexi_103__imagetext",
                    "label" => "Layout Padding Left",
                    "name" => "layout_padding_left",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => $spacing_options,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "none",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_tac_flexi_104__imagetext",
                    "label" => "Layout Padding Right",
                    "name" => "layout_padding_right",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "50",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => $spacing_options,
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "default_value" => "none",
                    "layout" => "horizontal",
                    "return_format" => "value",
                    "save_other_choice" => 0,
                ],
                [
                    "key" => "field_tac_flexi_105__imagetext",
                    "label" => "Animation",
                    "name" => "",
                    "type" => "tab",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "placement" => "top",
                    "endpoint" => 0,
                ],
                [
                    "key" => "field_tac_flexi_106__imagetext",
                    "label" => "Animation Active",
                    "name" => "animation_active",
                    "type" => "true_false",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "message" => "",
                    "default_value" => 1,
                    "ui_on_text" => "",
                    "ui_off_text" => "",
                    "ui" => 1,
                ],
                [
                    "key" => "field_tac_flexi_107__imagetext",
                    "label" => "Animation Type",
                    "name" => "animation_type",
                    "type" => "select",
                    "instructions" =>
                        "Select the on scroll animation type",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => $animation_options,
                    "default_value" => "fade",
                    "return_format" => "value",
                    "multiple" => 0,
                    "allow_null" => 0,
                    "ui" => 1,
                    "ajax" => 0,
                    "placeholder" => "",
                ],
                [
                    "key" => "field_tac_flexi_108__imagetext",
                    "label" => "Animation Cycle",
                    "name" => "animation_cycle",
                    "type" => "radio",
                    "instructions" => "",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => [
                        "width" => "",
                        "class" => "",
                        "id" => "",
                    ],
                    "admin_only" => 1,
                    "aria-label" => "",
                    "choices" => [
                        "true" => "Once",
                        "false" => "Repeat",
                    ],
                    "default_value" => "false",
                    "return_format" => "value",
                    "allow_null" => 0,
                    "other_choice" => 0,
                    "save_other_choice" => 0,
                    "layout" => "vertical",
                ],
            ],
            "min" => "",
            "max" => "",
        ],
    ];

    // Ensure the "layouts" key exists and is an array
    if (!isset($acf_field_group['fields'][0]['layouts']) || !is_array($acf_field_group['fields'][0]['layouts'])) {
        $acf_field_group['fields'][0]['layouts'] = [];
    }

    // Merge the new layout into the existing layouts
    $acf_field_group['fields'][0]['layouts'] = array_merge($acf_field_group['fields'][0]['layouts'], $new_layout);
    return $acf_field_group;
    
}


add_filter('modify_acf_field_groups', 'modify_acf_layouts', 20, 1);

